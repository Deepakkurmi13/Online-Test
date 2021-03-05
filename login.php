<?php
session_start();

$username = $_POST['username'];	
$password = $_POST['password'];	
 $password = md5($password);	
include("database-connection.php");
$query  = "SELECT * FROM student_table WHERE username='$username' AND password='$password'"; 
$sql    = mysqli_query($conn, $query);
$result = mysqli_num_rows($sql);
$data = mysqli_fetch_assoc($sql);
$admin_username = "deepakkurmi_60"; 
if($result == 1 && $data['username'] != $admin_username )
{  
    $username = mysqli_real_escape_string($conn ,$username);
    $password = mysqli_real_escape_string($conn ,$password);
    $query    = "SELECT * FROM student_table WHERE username='$username' AND password='$password'"; 
	$sql      = mysqli_query($conn ,$query);
    $result = mysqli_num_rows($sql);
    if($result == 1)
    {   
		$row = mysqli_fetch_assoc($sql);
		$verifed = $row['verifed'];
		$email = $row['email'];
        $date = $row['createdata'];
		$id = $row['id'];
        $date = strtotime($date);
        $date = date('M d Y',$date); 		
        if($verifed == 1)   
		{		  
		
		   
		    $string = "user".$id;	
		     $query6 =  "CREATE TABLE ".$string."(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            title LONGTEXT(3000) NOT NULL,
            starttime DATETIME(6) NOT NULL,
			answer VARCHAR(100) NOT NULL,
			no_attempt INT(10) NOT NULL,
			rightanswer INT(10) NOT NULL,
			wronganswer INT(10) NOT NULL,
			endtime DATETIME(6) NOT NULL,
			contest_no VARCHAR(100) NOT NULL
           )";
			
		  $run = mysqli_query($conn ,$query6);
		
		
		
		  $_SESSION['id'] =$row['id'];  
		  $_SESSION['username'] =$row['username'];
		  $_SESSION['name'] =$row['name'];
		  $_SESSION['email'] =$row['email'];
		  $_SESSION['gender'] =$row['gender'];
		  $_SESSION['city'] =$row['city'];
		  $_SESSION['collagename'] =$row['collagename'];
		  $_SESSION['branch'] =$row['branch'];
		  $_SESSION['image'] =$row['image'];
		  
		  echo 2;
		  
		}
		else{
			echo "This account has not Yet been Verified.An Email was send to {$email} on {$date}";
		}
	}else{
	 echo "The username And Password You Entered is Incorrect";	
	}		

}
else
{
 if($result == 1)
 { 
      $username = mysqli_real_escape_string($conn ,$username);
    $password = mysqli_real_escape_string($conn ,$password);
    $query    = "SELECT * FROM student_table WHERE username='$username' AND password='$password'"; 
	$sql      = mysqli_query($conn ,$query);
    $result = mysqli_num_rows($sql);
    if($result == 1)
    {   
		$row = mysqli_fetch_assoc($sql);   
		$verifed = $row['verifed'];
		$email = $row['email'];
		
        $date = $row['createdata'];
        $date = strtotime($date);
        $date = date('M d Y',$date); 		
        if($verifed == 1)   
		{	    
	
		  $_SESSION['id'] =$row['id'];  
		  $_SESSION['username'] =$row['username'];
		  $_SESSION['name'] =$row['name'];
		  $_SESSION['email'] =$row['email'];
		  $_SESSION['gender'] =$row['gender'];
		  $_SESSION['city'] =$row['city'];
		  $_SESSION['collagename'] =$row['collagename'];
		  $_SESSION['branch'] =$row['branch'];
	      $_SESSION['image'] =$row['image'];
		
            echo 1;	
	
		}	
	}
 }else
 {
	  echo "The username And Password You Entered is Incorrect";	
 }

}


?>