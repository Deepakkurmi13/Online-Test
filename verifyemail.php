<?php
session_start();
$vkey =$_POST['vkey'];
$email =$_POST['email'];
if($vkey)
{	
    include("database-connection.php");
    $query = "SELECT vkey,email,verifed  FROM student_table WHERE vkey='$vkey' AND email='$email' AND verifed ='0' LIMIT 1";
    $sql = mysqli_query($conn ,$query);
	$result = mysqli_num_rows($sql);
	$row = mysqli_fetch_assoc($sql);
    if($result == 1)
    {	
      $update  = mysqli_query($conn ,"UPDATE student_table SET verifed ='1' WHERE vkey='$vkey' AND email='$email' LIMIT 1");
	  if($update)
	    {
		   $query4 = "SELECT * FROM student_table WHERE email='{$email}'";
		   $sql4 = mysqli_query($conn ,$query4);
		   $data = mysqli_fetch_assoc($sql4);
		   $string = "user".$data['id'];
		      
            $sql = "CREATE TABLE ".$string."(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title LONGTEXT NOT NULL ,
            starttime DATETIME(6)  NOT NULL,
			answer VARCHAR(100)  NOT NULL,
			no_attempt INT(10) NOT NULL,
			rightanswer INT(10)  NOT NULL ,
			wronganswer INT(10)  NOT NULL,
			endtime DATETIME(6)  NOT NULL ,
			contest_no VARCHAR(100)  NOT NULL
            )";

            $data = mysqli_query($conn, $sql);
           	
            echo "Your Email {$email} is Verifed. Now you can login Your Account"; 
         		 
	    }
		  else
		  {
              echo "Sorry Your Email {$email} is Not Verifed."; 	 
	       }

    }
    else{
		echo "This Account is Invalid 0R Already Verifed";
    }
}
else
{
	echo "Something Went Wrong";
}
?>