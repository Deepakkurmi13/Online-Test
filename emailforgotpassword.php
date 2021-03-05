<?php
include("database-connection.php");
$email  = $_POST['email'];
$query  = "SELECT * FROM student_table WHERE email='$email'";
$sql    = mysqli_query($conn ,$query);
$result = mysqli_num_rows($sql);
if($result == 1)
 {
   $row = mysqli_fetch_assoc($sql);
   $name =$row['name'];
   $email = $row['email'];
   $tokan = "qwertyuiopasdfghjklzxcvbnm0123456789";
   $tokan = str_shuffle($tokan);
   $tokan = substr($tokan,0,10);
   $data = "UPDATE  student_table SET timeexpire =DATE_ADD(NOW(),INTERVAL 6 MINUTE),tokan ='{$tokan}' WHERE email='{$email}'";
   $run = mysqli_query($conn ,$data);
   $result1 = mysqli_num_rows($sql);
   if($result1 == 1){
	  
	  //send email for password forgot
		 $to      = "{$_POST['email']}"; 
		 $subject = "Password Forgot for Learning Management System";
		 $message  = "<center>
            <table style='height:30%;width:45%;callpadding:10px;border:1px solid gray;margin-top:5%;background-color:#fff3ed;box-shadow:2px 2px 7px gray;'>";
         $message .= "<tr style='background-color:Dodgerblue;height:px;'><td><p style='margin-left:160px;margin-top:10px;text-decoration:underline;color:red;'>Forgot Password<p></td></tr>
            <tr><td><p style='margin-left:10px;margin-top:15px;word-spacing:2px;'>hello {$name} You have only 5minites for Forgot Password</p></td></tr>
            <tr><td><p style='margin-left:10px;margin-top:-20px;word-spacing:1px;'>please click the change password button and You make strong password For Learing Management System</p></td></tr>
            <tr style='background-color:#eee;'><td><a href='http://localhost/onlinetestwebsitefiles/forgotpassword1?tokan=$tokan&email=$email'><button style='margin-left:150px;margin-top:10px;color:white;background-color:Dodgerblue;'>Change Password</button></a></td></tr>
            </table>
            </center>			  
		      ";
		 $headers  = "From : Learning management system  \r\n";
		 $headers .= "MIME-version: 1.0" . "\r\n";
		 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		 
         $mail = mail($to ,$subject ,$message ,$headers);
	      
		  echo 1;
	
    }
	else
	{
	  echo 2;	
	}
 }
 else
 {
	 echo 3;
 }
	 


?>