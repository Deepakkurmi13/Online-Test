<?php

$username = $_POST['name'];

include("database-connection.php");

$sql = "SELECT * FROM student_table WHERE name='$name'"; 

$run = mysqli_query($conn ,$sql);
$result = mysqli_fetch_assoc($run);
   
   if($result){ 
      echo 0;
   }
   else{
     echo 1;
   
   }


?>