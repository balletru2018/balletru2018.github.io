header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");

server {
    listen       80;
    server_name  localhost;

    location / {
        root   html;
        index  mail.html mail.htm;
    }

    error_page  404     /404.html;
    error_page  403     /403.html;

    error_page  405     =200 $uri;

    # ...
}

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
