<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tabel Matriks Fleksibel</title>
</head>
<script language="JavaScript" type="text/javascript">
    function getmax() {
      var R = parseInt(document.getElementById('JumlahRow').value);
      var C = parseInt(document.getElementById('JumlahColum').value);
      var X = parseInt(document.getElementById('JumlahCell').value);
      var cellmax = document.getElementById('maxcells');
      var total = 'N/A';
      total = R * C;
      cellmax.value = new String(total);
      if (X > total){
        alert('Cell Terlalu Besar, Nilai Maksimum Cells = ' + total);
        document.getElementById('CellsTotal').value = new String();
      }
    }
</script>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h3 align="center" class="style1">Generate Matriks Sel</h3>
<table align="center" border="0">
<tr>
<td width="90">baris</td>
<td><b>= </b>
<input name="JumlahRow" type="text" id="JumlahRow" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td>kolom</td>
<td><b>= </b>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td>Cell maksimal</td>
<td><b>= </b>
<input name="maxcells" type="text" id="maxcells" disabled="disabled" style="text-align:center"></td>
</tr>
<tr>
<td>Cell total </td>
<td><b>= </b>
<input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onFocus="this.select();"></td>
</tr>
<tr>
<td></td>
<td align="right"><input type="submit" name="Generate" value="Generate">
<input type="reset" name="Reset" value="Reset"></td>
</tr>
</table>

<?php
      $rows = 1;
      $columns = 1;
      $cells = 1;
      if(isset($_POST['Generate'])):
        $rows = (int) $_POST["JumlahRow"]; 
        $columns = (int) $_POST["JumlahColum"];
        $cells = (int) $_POST["JumlahCell"]; ?>

<br /><br />
<?php
          $width = $columns * 75;
          echo "<table align=center width=".$width." border=1>";
          $rw = 0;
          $cel = 1;
          while ($rw < $rows && $cel <= $cells){
            echo "<tr>";
            $cl = 0;
            while ($cl < $columns){
              if ($cel <= $cells){
                echo "<td><div align=center>".$cel."</div></td>";
                $cel++;
              }
              $cl++;
            }
            echo "</tr>";
            $rw++;
          }
          echo "</table>";
          endif;
        ?>
</form>
</body>
</html>
