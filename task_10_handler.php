<?php 
if (!isset($_SESSION)) { session_start(); }


$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=php_course;", "root", "root");

$sql = "SELECT * FROM form_data WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=>$text]);
$task =$statement->fetch(PDO::FETCH_ASSOC);

// var_dump($task);die;
if(!empty($task)) {
    $message = "This text is already exists";
    $_SESSION['message'] = $message;

    header('Location: /task_10.php');
    exit;
}

$sql = "INSERT INTO form_data(text) VALUES(:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=>$text]); 

header("Location: /task_10.php");