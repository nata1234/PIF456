<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 1</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Android
		<select name="hp">
			<option value="Samsung">Samsung
			<option value="Nokia">Nokia
			<option value="Sony">Sony
			<option value="Blackberry">Blackberry
			<option value="Lenovo"Selected>Lenovo
			
		</select> <br />
		
		<input type="submit" value="OK" />
		</form>
		
		<?php
			if (isset($_POST['hp'])) {
				echo $_POST['hp'];
			}
		?>
		
	</body>
</html>