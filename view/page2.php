<?php
$uname = $_REQUEST['name'];
$umessage = $_REQUEST['message'];
$query = "INSERT INTO `chatroom`(`name`,`message`) VALUES ('$uname','$umessage')";
$conn = new PDO('mysql:host=localhost;dbname=chat', 'admin', '123456');
$conn->exec($query);
header('location: page.php');
