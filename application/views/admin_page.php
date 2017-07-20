<?php
	$session_data = $this->session->userdata('logged_in');
?>
<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/css/AdminLTE.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/css/ionicons.min.css">
	</head>
	<body>
		<b id="logout"><a href="logout">Logout</a></b>
	</body>
</html>