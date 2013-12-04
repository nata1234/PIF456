<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 2</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Kesukaan
			<input type="checkbox" name="minuman[]" value="Jus"
			/>Jus
			
			<input type="checkbox" name="minuman[]" value="Teh"
			/>Teh
			
			<input type="checkbox" name="minuman[]" value="Kopi"Checked
			/>Kopi
			
			<input type="checkbox" name="minuman[]" value="Bir"
			/>Bir <br />
			
			<input type="submit" value="OK" />
		</form>
		
		<?php
		//Ekstraksi Nilai
		if (isset($_POST['minuman'])){
			foreach ($_POST['minuman'] as $key => $val){
				echo $key . ' -> ' .$val . '<br />';
			}
		}
		?>

	</body>
</html>