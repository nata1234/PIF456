<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Studi Kasus 1</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table>
<tr>
<td>What time is it :</td>
<td></td>
<td><input type="number" name="jam" /></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="submit" value="check" /></td>
</tr>
</table>
<hr size="3" color="blue" width="255" align="left"/>
</form>

<h1>
<?php if(isset($_POST['submit'])){
  function greeting() {
    $date = $_POST['jam'];
    if ($date>=0 and $date<10) {
      echo "Good Morning";
    } else if ($date>=10 and $date<15) {
      echo "Good Afternoon";
    } else if ($date>=15 and $date<19) {
      echo "Good Evening";
    } else if ($date>=19 and $date<24) {
      echo "Good Night";
    }else echo "Jam Anda Rusak";
    echo "<br /><br />";
  }
  ?>
<?php greeting(); ?>
<?php


	?>


<?php } ?>
</h3>
<hr size="3" color="blue" width="255" align="left"/>
</body>
</html>
