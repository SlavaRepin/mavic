<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['message'];

	$to = "revv80@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Вопрос от клиента";

	
	$msg="
    Имя: $name /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<!-- <p>Привет, форма отправлена</p> -->
