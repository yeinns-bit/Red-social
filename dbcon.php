<?php
$conn = new PDO('mysql:host=localhost;dbname=socialdb;charset=utf8mb4', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>