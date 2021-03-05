<html>
<body>
<form action="" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>


<?php

if(isset($_POST['fname']))
{
$myfile = fopen("formpage/newfile.php", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
}
else
{
	echo "false";
}
?>