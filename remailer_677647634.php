<?php
	$sitename = "«Имя сайта»";
    include("./mail_class.php");
    $mail = new Mail();
    $mail -> to = "steffnomidi@gmail.com"; 
    //сюда подставляется реальный адрес
    $mail -> subject = "Письмо с сайта " . $sitename;
    $mail -> msg = "
Имя: " . $_POST['name'] . "
Телефон:" . $_POST['phone'] . "
E-mail:" . $_POST['email'] . "
Цена квартиры: " . $_POST['price'] . "

Письмо отправлено из формы, заполненной на сайте " . $sitename . "
";

    $mail -> rigorous_email_check = 0;
    if($mail->send()){
        echo "Success :)";
    }else{
        echo "Fail :(";
    }
    //echo "<br>";
    //echo $mail -> msg;
?>