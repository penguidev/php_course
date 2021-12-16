<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=php_course;", "root", "root");

$_SESSION['text'] = $text;

$sql = "INSERT INTO `form_data_2`(`text`) VALUES('$text')";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: /task_12.php");


/////////////////////////////
$sth = $dbh->prepare("SELECT text FROM form_data_2");
$sth->execute();

$result = $sth->fetchAll();
print_r($result);
