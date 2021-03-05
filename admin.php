<?php
session_start();
?>
<?php
if($_SESSION['username'] == "deepakkurmi_60")
{	
?>
<html lang="en">
<head>
<title>online-Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.4">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css.css"/>
<style>
</style>
</head>
<body>
<?php
include("nevbar.php");
?>



<!--center of page--->
<center>
<div  id="ccc">
<div class="container" id="data">
<div class="row">
<div class="col-sm-6" class="name">
<image src="images/save.png" height="370px" width="550px" class="img1"/>
</div>
<div class="col-sm-6" class="name1">
<p class="data1"><b>Learning Management System</b></p>
<p class="data2"><pre style="color:gray;"><pre>welcome to learing management system this 
is best plateform of the quiz test and<br> you can improve your knowladge</pre></p>
<button  class="btn1" type="button" value="Read more">Read More</button>
</div>
</div>
</div>
</div>
</center>




<?php
include("footer.php");
?>

<?php
include("ajax.php");
?>
</body>
</html>

</body>
</html>
<?php
}
?>