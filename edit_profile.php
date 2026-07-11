<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body class="page-profile">
	<?php include('navbar.php'); ?>


	<div id="masthead">
		<div class="container">
			<div class="row profile-card">

				<div class="col-md-2 photo-col">
					<img class="pp" src="<?php echo $image; ?>" height="140" width="140">
					<br>
					<button class="btn btn-success">Cambiar Foto de Perfil</button>
				</div>

				<div class="col-md-10">
					<?php
						$query = $conn->query("select * from members where member_id = '$session_id'");
						$row = $query->fetch();
						$id = $row['member_id'];
					?>

					<form method="post" action="save_edit.php">
						<input type="hidden" name="member_id" value="<?php echo $id; ?>">

						<div class="form-grid">

							<div class="form-group-custom">
								<label>Usuario</label>
								<input type="text" name="username" value="<?php echo $row['username']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Género</label>
								<select name="gender">
									<option><?php echo $row['gender']; ?></option>
									<option>Hombre</option>
									<option>Mujer</option>
								</select>
							</div>

							<div class="form-group-custom">
								<label>Nombre</label>
								<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Apellido</label>
								<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Fecha de Nacimiento</label>
								<input name="birthdate" type="date" value="<?php echo $row['birthdate']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Dirección</label>
								<input name="address" type="text" value="<?php echo $row['address']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Estado</label>
								<input name="status" type="text" value="<?php echo $row['status']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Móvil</label>
								<input name="mobile" type="text" value="<?php echo $row['mobile']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Trabajo</label>
								<input name="work" type="text" value="<?php echo $row['work']; ?>">
							</div>

							<div class="form-group-custom">
								<label>Religión</label>
								<input name="religion" type="text" value="<?php echo $row['religion']; ?>">
							</div>

						</div>

						<div class="save-wrap">
							<button name="save" class="btn edit">Guardar</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>
</body>
</html>
