<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer-6.6.0/src/Exception.php';
	require 'PHPMailer-6.6.0/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'PHPMailer-6.6.0/language/');
	$mail->IsHTML(true);

	// ot kogo

	$mail->setFrom('admin@YOUR_DOMAIN', 'TestHead'); //тут нужно ввести домен(проще всего webmail`овский)

	// komy

	$mail->addAddress('jukartem@gmail.com');

	// subj

	$mail->Subject = 'Привет! Это тема'

	// mail body

	$body = '<h1>Просто письмо</h1>'

	if (trim(!empty($_POST['email']))) {
		$body.='<p><strong>Email:</strong> '.$_POST['email']'</p>';
	}


	$mail->Body = $body;

	if (!$mail->send()) {
		$message = 'ОШИБКА!';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);