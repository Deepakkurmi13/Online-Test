<?php

include("database-connection.php");
$email = $_POST['email'];

$sql = "SELECT * FROM student_table WHERE email='$email'"; 

$run = mysqli_query($conn ,$sql);
$result = mysqli_fetch_assoc($run);
   
   if($result){ 
      echo 0;
   }
   else{
   
     echo 1;
   
   }


?>