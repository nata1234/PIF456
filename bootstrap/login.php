<?php
session_start();

$username = 'ketikahatimulaiberbicara';
$password = 'ketikahatimulaiberbicara';

if (isset($_POST['username'])) {
	if (($_POST['username'] == $username) && ($_POST['password'] == $password)) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];

		$user = $_SESSION['username'];
		$pass = $_SESSION['password'];

		header ("Location: index2.php");

		echo " <a href='logout.php'>  Logout  </a></fieldset>";
	}
	else {
		echo " Username atau pasword salah <br /> ";
		echo " <a href='login.php'> << Kembali </a>";
	}
}
else {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
			<title>Bootstrap</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Bootstrap -->
			<link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
			<link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
		</head>
		<body>
			<nav class="navbar navbar-default" role="navigation">

			<div class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="http://localhost/bootstrap/index.php">Home</a></li>
					<li class="active"><a href="http://localhost/bootstrap/login.php">Login</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
			<div id="form">
				<table align="center" cellpadding="5">
					<tr> <h1 align="center"> LOGIN </h1> </tr>
					<tr> <hr style="border:double" align="center" width="300"/> </tr>
					<form action="login.php" method="post" ">
						<tr> <td> Username </td> <td> : </td> <td> <input type="text" name="username"></td></tr>
						<tr> <td> Password </td> <td> : </td> <td> <input type="password" name="password"></td></tr>
						<tr> <td colspan=3 align="right"> <input type="submit" name="Submit" value="Login"></td></tr>
					</form>
				</table>
			</div>
		</body>
	</html>
	<?php
}
?>