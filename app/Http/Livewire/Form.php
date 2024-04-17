<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class Form extends Component
{
	// public $message;

	public $yourName;
	public $yourEmail;
	public $yourTel;
	public $titleSelect;
	public $yourMessage;

	// バリデーションルールの定義
	protected $rules = [
		'yourName' => ['required', 'string', 'regex:/[^ 　]+/', 'max:20'],
		'yourEmail' => ['required', 'string', 'regex:/[^ 　]+/', 'email', 'max:255'],
		'yourTel' => ['required', 'regex:/^0[0-9]{1,4}-?[0-9]{1,6}(-?[0-9]{1,5})?$/', 'min:10', 'max:13'],
		'titleSelect' => ['required'],
		'yourMessage' => ['required', 'string', 'regex:/[^ 　]+/', 'max:1000']
	];

	// modal
	public $showModal = false;

	public function closeModal()
	{
		$this->showModal = false;
	}

	public function confirm()
	{
		$this->validate();
		$this->showModal = true;
	}

	// リアルタイムバリデーションにする場合
	// public function updated($propertyName)
	// {
	// 	$this->validateOnly($propertyName);
	// }

	// フォームの送信
	public function submitForm()
	{
		// フォームの内容をバリデートする
		$inputs = $this->validate();

		// 全角半角スペースが先頭か末尾にはいってたらトリムする関数
		function mbtrim($str)
		{
			return preg_replace("/(^\s+)|(\s+$)/u", "", $str);
		}

		// トリム後の格納先の配列を宣言
		$output_array = [];

		// $inputs 配列を繰り返しトリムし、$output_array配列へ格納
		foreach ($inputs as $key => $trimval) {
			$trimmed_str = mbtrim($trimval);
			$output_array[$key] = $trimmed_str;
		}

		// 管理者あて送信メール
		$admin = config('mail.admin');
		Mail::to($admin)->send(new SendMail($output_array));

		// ユーザーあて送信メール
		$email = $inputs['yourEmail'];
		Mail::to($email)->send(new SendMail($output_array));

		// 送信されたらフォームがリセットされる
		$this->reset();
		$this->showModal = false;

		// isLocale()メソッドにより現在の言語設定を判定してフラッシュメッセージを表示する。
		if (App::isLocale('en')) {
			session()->flash('success_message', 'Thank you for your inquiry.');
		} else if (App::isLocale('ko')) {
			session()->flash('success_message', '문의해 주셔서 감사합니다.');
		} else if (App::isLocale('zh-Hanz')) {
			session()->flash('success_message', '感谢您的查询。');
		} else if (App::isLocale('zh-Hant')) {
			session()->flash('success_message', '感謝您的查詢。');
		} else {
			session()->flash('success_message', 'お問い合わせありがとうございました。');
		}
	}

	public function render()
	{
		return view('livewire.form');
	}
}
