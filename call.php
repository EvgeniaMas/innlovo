<?php

{
   // $mail="zayavka.biga@ya.ru";
    $mail="repvol2015@gmail.com";
  // e-mail куда уйдет письмо

  $title="Заявка с сайта Инноловские пруды"; // заголовок(тема) письма

  $name = $_POST["name"];  
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  

  $mess="<b>Новая заявка - </b><br> "
  . "<b> Имя</b> <br>" .$name. "   <br> <b>телефон</b><br>" .$phone . "   <br> <b>Почта</b>" .$email  .   "<br> желает купить участок по адресу: <br> "
   .$address ;


  $headers="MIME-Version: 1.0\r\n";

  $headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка

  $headers.="From: admin@".$_SERVER["SERVER_NAME"]; // откуда письмо (необязательнакя строка)

  mail($mail, $title, $mess, $headers); // отправляем


print"1";

}

?>