<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$type = $_POST['type-of-service'];
$clock = $_POST['clock'];
$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$adress = htmlspecialchars($adress);
$type = htmlspecialchars($type);
$clock = htmlspecialchars($clock);
$fio = urldecode($fio);
$phone = urldecode($phone);
$adress = urldecode($adress);
$type = urldecode($type);
$clock = urldecode ($clock);
$fio = trim($fio);
$phone = trim($phone);
$adress = trim($adress);
$type = trim($type);
$clock = trim ($clock);
/*echo $username;
echo "<br/>";
echo $tel;
echo "<br/>";
echo $adress;
echo "<br/>";
echo $check;
echo "<br/>";
*/
mail("via.1@inbox.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$phone.". Адрес: ".$adress.".Наименвание услуги:".$type.".В какое время перезвонить:".$clock ,"From: store@sushi-ocean.kz \r\n");
if (mail("via.1@inbox.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$phone.". Адрес: ".$adress.".Наименвание услуги:".$type.".В какое время перезвонить:".$clock ,"From: store@sushi-ocean.kz \r\n"))
 { 
    //echo "Спасибо за Ваш заказ, наш менеджер свяжется с Вами для уточнения деталей заказа";
	readfile('zvonok.html');
} else { 
    echo "При оформлении заказа возникла ошибка, повторите действие еще раз или свяжитесь с нашим менеджером"; 
}
?>
</body>
</html>