<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
	use Queueable, SerializesModels;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	private $inputs;

	public function __construct($inputs)
	{
		//
		$this->inputs = $inputs;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		// $this->text('emails.mail_text')->view('emails.mail') でマルチパート形式でメール送信
		return $this->text('emails.mail_text')->view('emails.mail')->with(['inputs' => $this->inputs])
			->subject('お問い合わせを受け付けました');
	}
}
