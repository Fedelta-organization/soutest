<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>お問い合わせを受け付けました</title>
</head>

<body>
	<p>お問い合わせ内容は次のとおりです。</p>
	ーーーー
	<p>お名前：{{$inputs['yourName']}}</p>
	<p>件名：{{$inputs['titleSelect']}}</p>
	<p>お問い合わせ内容：{!!nl2br(htmlspecialchars($inputs['yourMessage']))!!}</p>
	<p>メールアドレス：{{$inputs['yourEmail']}}</p>
	ーーーー
	<p>担当者よりご連絡いたしますので、今しばらくお待ちください。</p>
</body>

</html>
