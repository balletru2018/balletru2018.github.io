header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$subject = urldecode($subject);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$subject = trim($subject);
$message = trim($message);

if (mail("balletru.2018@gmail.com", "Сообщение с сайта", "Имя:".$name.". Электронный адрес: ".$email". Тема: ".$subject". Сообщение: ".$message ,"From: balletru.2018@gmail.com \r\n"))
 {     echo "Сообщение отправлено"; 
} else { 
    echo "При отправке сообщения возникла ошибка";
}?>
