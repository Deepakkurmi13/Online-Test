<?php
session_start();
?>
<?php
if($_SESSION['username'] == "deepakkurmi_60" && isset($_GET["id"]))
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
body
{
   background-color:white;
   height:100%;
   width:100%; 
   
}
.forgotbody
{
   height:auto;
   width:65%;
   margin-top:20px;
  -webkit-box-shadow: 0px 1px 8px 1px rgba(125,125,125,1);
  -moz-box-shadow: 0px 1px 8px 1px rgba(125,125,125,1);
   box-shadow: 0px 2px 6px 1px rgba(125,125,125,1);
}

table{
height:auto;
width:200px;
}
</style>
</head>
<body>

<?php
include("nevbar.php");
include("database-connection.php");



$id= $_GET["id"];

$queryTest = "SELECT * FROM  results a,  student_table b WHERE a.testid=$id AND b.username=a.username";

$run = mysqli_query($conn ,$queryTest); 

?>

<div class="container forgotbody">
       
  <table class="table  table-hover">
  <!-- <h2>Test Results</h2> -->
    <thead>
      <tr>
        <th>#</th>
        <th>Student</th>
        <th>score</th>
      </tr>
    </thead>
    <tbody>
    
<?php

$i =1;

    while($row = mysqli_fetch_assoc($run)){
    
?>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $row["name"]?></td>
<td><?php echo $row["rightanswer"] ?></td>
</tr>

<?php
}
 ?>
      
    </tbody>
  </table>
</div>


<?php
include("footer.php");
include("ajax.php");

include("database-connection.php");

?>

</body>
</html>
<?php
}
else
{
	header("location: LMS");
}
?>