<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
	<meta name="color-scheme" content="dark light">
	<title>Clever Dashboard | Made by Ahmad Awan</title>
	<link rel="shortcut icon" href="./assets/img/logos/clever-primary.svg" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/utilities.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/npm/bootstrap-icons-1.7.2/font/bootstrap-icons.css">
</head>

<body>

	<?php
	require "./config.php";

	if (isset($_POST['signit'])) {
		$user = $_POST['username'];
		$pass = $_POST['pascode'];

		$check = mysqli_query($conn, "SELECT * FROM users WHERE userName ='$user' AND userPassword ='$pass' AND isActive='Yes'");

		if (mysqli_num_rows($check)) {
			while ($row = mysqli_fetch_assoc($check)) {
				$_SESSION['logit'] = $row['Id'];
			}
		}/*else{
			unset($_SESSION['logit']);
			session_destroy();		
		}*/
	}

	if (!isset($_SESSION['logit'])) {
		include "./login.php";
	} else {
		include "./dashboard.php";
	}

	?>

	<script src="./assets/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<script src="./assets/js//myscript.js"></script>
</body>

</html>