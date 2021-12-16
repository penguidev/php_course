<?php 
session_start();

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$pdo = new PDO("mysql:host=localhost;dbname=php_course;", "root", "root");

$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$task =$statement->fetch(PDO::FETCH_ASSOC);

// var_dump($task);die;
if(!empty($task)) {
    $e_err_msg = "Зис имэйл ис олреди экзистс, плиз трай эгейн";
    $_SESSION['e_err_msg'] = $e_err_msg;

    header('Location: /task_11.php');
    exit;
}

$sql = "INSERT INTO `users`(`email`,`password`) VALUES('$email','$password')";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email, 'password'=>$password]); 

header("Location: /task_11.php");
