<?php
/* https://api.telegram.org/bot1430206287:AAGHi-PVElHdLIBhzNhAlv0nkivxnvH8jnM/getUpdates*/
$tel_nomer=$_POST['number']
$token = "1430206287:AAGHi-PVElHdLIBhzNhAlv0nkivxnvH8jnM";
$chat_id = "49394018";
$arr= array(
	'Vakansiya ID: ' => '156',
	'Фирма: ' => 'Raqamli Texnologiyalar Markazi',
	'Нужен: ' => 'Андроид разработчик',
	'Telefon №: ' => $tel_nomer,
);

foreach($arr as $key => $value){
	$txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if($sendToTelegram){
	header('Location: vakansiya.html');
} else {
	echo "Error";
}
?>