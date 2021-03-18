<?php
session_start();
?>
<?php
if($_SESSION['username'])
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
.form_data_pdf{
    display:flex;
    justify-content:center;
    
}
.data_table{
    border:1px solid lightgray;
    height:auto;
    width:200%;
}
</style>
</head>
<body>
<?php
include("nevbar.php");
?>
<?php
include("database-connection.php");

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
echo $count;
$files = mysqli_fetch_assoc($result);
 
?>


<div class="container my-5 form_data_pdf">
<div class="row">
<table class="table table-hover data_table">
    <thead class="thead-dark">
      <tr>
      <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
      </tr>
    </thead>
    <tbody>
    <?php
     for($i=0; $i < $count; $i++){ 
    ?>
      <tr>
      <td><?php echo $files['files']; ?></td>
      <td><?php echo floor($files['size'] / 1000)."KB"; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $files['id'] ?>">Download</a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</div>






<?php
include("footer.php");
include("ajax.php");
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