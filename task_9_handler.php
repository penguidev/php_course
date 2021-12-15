<?php 

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=php_course;", "root", "root");
$sql = "INSERT INTO form_data(text) VALUES(:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=>$text]); 

header("Location: /task_9.php");