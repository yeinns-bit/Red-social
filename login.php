<?php
session_start();
include('dbcon.php');
$username = $_POST['username'];
$password = md5($_POST['password']);

$stmt = $conn->prepare("SELECT * FROM members WHERE username = :username AND password = :password");
$stmt->execute(['username' => $username, 'password' => $password]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row){
    $_SESSION['id'] = $row['member_id'];
    header('Location: home.php');
    exit;
}else{
    header('Location: index.php');
    exit;
}
?>
