<html>
	<?php
		if (isset($this->session->userdata['logged_in'])) {
		header("location: http://localhost/login/index.php/user_authentication/user_login_process");
		}
	?>
	<head>
		<title>Registro</title>
		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Registro</h2>
					<hr/>
					<?php
						echo "<div class='error_msg'>";
						echo validation_errors();
						echo "</div>";
						echo form_open('user_authentication/new_user_registration', 'class="form-horizontal"');
						$user = array(
							'type' => 'text',
							'class' => 'form-control',
							'name' => 'username',
							'placeholder' => 'Nombre de usuario'
						);
						echo form_input($user);
						echo '<br>';
						echo "<div class='error_msg'>";
						if (isset($message_display)) {
							echo $message_display;
						}
						echo "</div>";
						$data = array(
							'type' => 'email',
							'class' => 'form-control',
							'name' => 'email_value',
							'placeholder' => 'Correo electronico'
						);
						echo form_input($data);
						echo '<br>';
						$password = array(
							'type' => 'password',
							'class' => 'form-control',
							'name' => 'password',
							'placeholder' => 'Contraseña'
						);
						echo form_password($password);
						echo"<br/>";
						echo form_submit('submit', 'Crear cuenta', 'class="btn btn-primary"');
						echo form_close();
					?>
					<a href="<?php echo base_url() ?> ">Para iniciar sesión, click aqui</a>
				</div>
			</div>
		</div>
	</body>
</html>