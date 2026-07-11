<?php include('index_header.php'); ?>
<body class="page-auth">
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = md5($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

$stmt = $conn->prepare("INSERT INTO members (username,password,firstname,lastname,gender,image) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$username, $password, $firstname, $lastname, $gender, 'images/No_Photo_Available.jpg']);
?>
<script>
	alert('Registro satisfactorio, ingresa con tus credenciales');
	window.location = 'index.php';
</script>
</body>
</html>