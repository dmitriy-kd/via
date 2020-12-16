<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
	error_reporting(0);
	$email = $_POST['email'];
	$token = "554378956:AAGwTR7gsJosSQlUFt6-d2VwjUmAhAqPyNA";
	$chat_id = "-328731441";
	
	$arr = array (
		'Подписка на рассылку: ' => $email
	);
	foreach($arr as $key => $value) {
		$txt .= "<b>".$key."</b>".$value."%0A";
	};
	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
	&parse_mode=html&text={$txt}","r");
	if ($sendToTelegram) {
		//echo "Заявка принята, ожидайте!";
		readfile('zvonok.html');
		return true;
	} else {
		echo "Произошла ошибка, попробуйте еще раз, или перезвоните по одному из номеров в разделе Контакты";
	}
	
?>
</body>
</html>