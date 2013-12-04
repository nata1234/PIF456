<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>Matriks</title>
	</head>
		<body>
		<h3>Tabel PHP</h3>
		<table>
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
<tr>
<td>Baris</td>
<td>: <input type="text" size="15" name="baris"></td>
</tr>
<tr>
<td>Kolom</td>
<td>: <input type="text" size="15" name="kolom"></td>
</tr>
<tr>
<td></td>
<td align="top"><input type="submit" name="submit" value=" Buat "></td>
</tr>
</form>
</table>
			<br />
<?php if(isset($_GET['submit'])){
        $baris = $_GET["baris"];  
        $kolom = $_GET["kolom"];  

        function generate($baris, $kolom){  
          $cell = 0;  

          echo "<table border='2' cellpadding='10'>";  

          for($i = 0; $i < $baris; $i++){  
            echo "<tr>";  
              for($j = 0; $j < $kolom; $j++){  
                ++$cell;  
                echo "<td>$cell</td>";  
              }  
            echo "</tr>";  
          }  

          echo "</table>";  
	}  

        if(isset($baris) AND isset($kolom)){  
            generate($baris, $kolom);  
        }  
       }
      ?>
</body>
</html>
