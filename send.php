<?php

if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["message"]) ) { 

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];

	// Запись в тектовый файл
	$file = "contact.csv";
	$contact = $name. "," .$phone. "," .$message. "," . "\n";

	file_put_contents($file, $contact, FILE_APPEND);

	// Формируем заголовки письма
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html;charset=utf-8 \r\n";
	$headers .= "From: Serhii Kalyna <serhii_kalyna@ukr.net>\r\n";
	$headers .= "Reply-To: serhii_kalyna@ukr.net\r\n";

	// Составляем текст письма админу
	$letter = "<p>Hello admin, a new application</p>
	<p>Name: $name</p>
	<p>Phone: $phone</p>
	<p>Message: $message</p>";

	// Отсылаем письмо админу
	mail( "serhii_kalyna@ukr.net", "A new application", $letter, $headers);

	// Добавление информации в базу данных
	include("db_connect.php");
	mysql_query("INSERT INTO users(name,phone,message)VALUES('".$name."','".$phone."','".$message."')",$connect);

}

?>