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

table{
    width:200px;
    height:auto;
    align-items:center;
}
.resulttable{
    display:flex;
    justify-content: center;
    align-items:center;
    width:500px;
   margin-left:450px;
   margin-top:20px;
}

</style>
</head>
<body>

<?php
include("nevbar.php");
include("database-connection.php");

$queryTest = "SELECT formtitle,id FROM form_data";

$run = mysqli_query($conn ,$queryTest); 
?>

<div class="text-center">
<h4>RESULTS</h4>
</div>

<div class="resulttable">
<table class="table table-sm table-bordered table-hover mb-5"> 
  <!-- <h2>Test Results</h2> -->
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th>Test Tittle</th>
      </tr>
    </thead>
    <tbody>


<?php
$i =1;
while($row = mysqli_fetch_assoc($run)){    
?>

<tr>
<td><?php echo $i++;?></td>
<td><a href="testresult?id=<?php echo $row['id'];?>"><?php echo $row["formtitle"]?></a></td>
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