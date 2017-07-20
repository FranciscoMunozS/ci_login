<html>
	<?php
		if (isset($this->session->userdata['logged_in'])) {
			header("location: http://localhost/login/index.php/user_authentication/user_login_process");
		}
	?>
	<head>
	<title>Iniciar sesión</title>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
	</head>
	<body>
		<?php
			if (isset($logout_message)) {
				echo "<div class='alert alert-danger role='alert'>";
				echo $logout_message;
				echo "</div>";
			}
		?>
		<?php
			if (isset($message_display)) {
				echo "<div class='alert alert-danger' role='alert'>";
				echo $message_display;
				echo "</div>";
			}
		?>
		<div class="container">
			<div id="form">
				<h2 class="form-signin-heading">Inicio de sesión</h2>
				<?php echo form_open('user_authentication/user_login_process'); ?>
				<?php
					echo "<div class='error_msg'>";
					if (isset($error_message)) {
						echo $error_message;
					}
					echo validation_errors();
					echo "</div>";
				?>
				<input type="text" class="form-control" name="username" id="name" placeholder="Nombre de usuario"/>
				<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña"/>
				<input type="submit" class="btn btn-lg btn-primary btn-block" value=" Iniciar sesión " name="submit"/>
				<br>
				<!--<a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">Click aqui para registrarse</a>-->
				<?php echo form_close(); ?>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
			  setTimeout(function(){
			    $('.alert').fadeOut("slow", function(){
			      $(this).remove();
			    })
			  }, 3000);
			});
		</script>
	</body>
</html>