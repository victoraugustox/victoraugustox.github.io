
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<title></title>
<head>

<body>
	<?php

	require '';

	$from = new sendGrid\Email(null, " ");
	$subject = "Confirmar email";
	$to = new sendGrid/Email (null, " ");
	$content = new sendGrid\Content ( "text/html","olá, <br><br>Link para confirmar");
	$mail = new sendGrid\Mail ($from, $subject, $to, $Content);

	//Necessário inserir a chave
	$apiKey = 'SENDGRID_API_KEY';
	$SG = new \sendGrid($apiKey);


	$response = $sg->cliente->mail()->send()->post($mail);
	echo $response->statusCode();
	echo $response->headers();
	echo $response->body();
	?>
</body>
</head>
</html>