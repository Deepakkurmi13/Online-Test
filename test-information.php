<?php
session_start();
?>
<html lang="en">
<head>
<title>online-Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css.css"/>
<style>



#forgotbody
{
   height:auto;
   width:70%;
   margin-left:210px;  
   margin-top:0px;
  -webkit-box-shadow: 0px 1px 8px 1px rgba(125,125,125,1);
  -moz-box-shadow: 0px 1px 8px 1px rgba(125,125,125,1);
   box-shadow: 0px 2px 6px 1px rgba(125,125,125,1);
}

</style>
</head>
<body>
<?php
include("nevbar.php");
?>
<div id="forgotbody">
<div class="container">
<div class="row">
<div class="col-sm-12">
<table>
<tr><td><p style="margin-left:75px;font-size:25px;color:#8f6b6b;text-decoration:underline;">Test-Information--</p><br></td></tr>
<tr><td><image src="images/info.jpg" height="200" width="400" style="margin-bottom:100px;"/></td>
<td><p style="margin-left:15px;font-size:15px;color:gray;">
A free test maker for teachers is a simple online quiz maker that 
teachers use to create online tests to assess their students. Teachers
and academic institutes use free online test makers to enhance e-learning, 
distance learning, and group studies.Online test makers are a simple to use, 
yet robust tool to use. Distribute tests to students online, get the results instantly,
and have the tool grade the test—view results of all the students in a single informative dashboard.
</p><br></td></tr>
</table>
</div>
</div>
</div>

</div>

<?php
include("footer.php");
?>





<?php
include("ajax.php");
?>
</body>
</html>