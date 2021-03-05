<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Weather</title>
    <style>
    .message_box img {
        height: 4rem;
    }

    .message_box {
        background: red;

    }
    </style>
</head>

<body>
    <?php	
session_start();
$username = $_POST['username'];
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];
$gender   = $_POST['gender'];
$city     = $_POST['city'];
$branch   = $_POST['branch'];
$collage  = $_POST['collage'];

include("database-connection.php");
$sql1 = "SELECT * FROM student_table WHERE username='$username'"; 
$sql3 = "SELECT * FROM student_table WHERE email='$email'";
 $sql1 = mysqli_query($conn ,$sql1);
 $sql3 = mysqli_query($conn ,$sql3);
 $rw1 = mysqli_fetch_assoc($sql1);
$rw3 = mysqli_fetch_assoc($sql3);
 
 if(isset($rw1['username'])==false  && isset($rw1['email'])==false )
 {	 

 if(preg_match("/^[a-z0-9_]{4,15}$/" ,$username) &&
    preg_match("/^[A-Z][a-z\s]{3,15}$/" ,$name) &&
	preg_match("/[a-z0-9._%+-]+@[a-z.]+\.[com]{3}$/",$email) &&
	preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}/",$password) &&
	preg_match( "/^[C-S]{2,3}$/" ,$branch) )
    {
	   
	  //sanitize form data 
      $username = mysqli_real_escape_string($conn ,$username);
      $name = mysqli_real_escape_string($conn ,$name);
      $email = mysqli_real_escape_string($conn ,$email);
      $password = mysqli_real_escape_string($conn ,$password);
      $gender= mysqli_real_escape_string($conn ,$gender);
      $city= mysqli_real_escape_string($conn ,$city);
      $branch= mysqli_real_escape_string($conn ,$branch);
       $collage= mysqli_real_escape_string($conn ,$collage);	

       //generate vkey	
       $vkey = substr(md5(mt_rand()),0,15);

       $password = md5($password);
	  $sql = "INSERT INTO student_table(username, name, email, password, gender, city, branch, collagename ,vkey) VALUES('{$username}','{$name}','{$email}','{$password}','{$gender}','{$city}','{$branch}','{$collage}','{$vkey}')";
        
         		
        $run = mysqli_query($conn,$sql);
		//send email for user
		 $to      = "{$_POST['email']}, deepakkurmi2021@gmail.com"; 
		 $subject = "Email verification for Learning Management System";
		 $message  = "<center>
            <table style='height:30%;width:45%;callpadding:10px;border:1px solid gray;margin-top:5%;background-color:#fff3ed;box-shadow:2px 2px 7px gray;'>";
         $message .= "<tr style='background-color:Dodgerblue;height:px;'><td><p style='margin-left:160px;margin-top:10px;text-decoration:underline;color:red;'>Successfully resistered<p></td></tr>
            <tr><td><p style='margin-left:10px;margin-top:15px;word-spacing:2px;'>Thanks {$name} resistration for Learning management system i hope you understand the process of resistration.</p></td></tr>
            <tr><td><p style='margin-left:10px;margin-top:-20px;word-spacing:1px;'>please click the verify button and login to learing management system without verify email your resistration will not successfull.<p></td></tr>
            <tr style='background-color:#eee;'><td><a href='http://localhost/onlinetestwebsitefiles/LMS?vkey=$vkey&email=$email'><button style='margin-left:180px;margin-top:10px;color:white;background-color:Dodgerblue;'>Verify Email</button></a></td></tr>
            </table>
            </center>	
 ";
        // $message .= "
		  //    ";
		 $headers  = "From : Learning management system  \r\n";
		 $headers .= "MIME-version: 1.0" . "\r\n";
		 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
         $mail = mail($to ,$subject ,$message ,$headers);
         
		 //send email for admin
		
		  $to      = "deepakkurmi2021@gmail.com"; 
		 $subject = " Learning Management System";
		 $message  =  "{$username} successfully resistered";
		 $headers  = "From : deepakkurmi934@gmail   \r\n";
		 $headers .= "MIME-version: 1.0" . "\r\n";
		 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		 
         $mail = mail($to ,$subject ,$message ,$headers);
       


	   $result ="";
        if($run){
          $result ='			
                <center>
                <table style="-webkit-box-shadow: 0px 0px 9px -1px rgba(209,145,115,1);
                              -moz-box-shadow: 0px 0px 9px -1px rgba(209,145,115,1);
                              box-shadow: 0px 0px 9px -1px rgba(209,145,115,1);
		                      height:60%;width:65%;margin-top:100px;background-color:#b6cfcb">';
				   $result .=" <tr><td><img src='images/box.jpg' style='height:90px; border-radius: 50%;width:140px;opacity:0.5;margin-top:-10px;margin-left:390px;'></td></tr>";
                   $result .=" <tr><td><p style='margin-top:60px;margin-left:180px;color:white;'>Thanks {$name} For Rasistration Please Chack Your Email {$email} </p></td></tr>";
                   $result .="<tr><td><p style='margin-top:5px;margin-left:190px;color:white;'><span style='font-size:20px;color:red;'>Note</span>: Without Email Verification Your Resistration is Not Successfull..</p></td></tr>					
                              <tr><td><img src='images/right.jpg' style='height:90px;width:140px;margin-top:20px;margin-left:380px;color:red;'></td></tr>				
				              </table></center>"; 
		
		    echo $result;
		

		 
		}
		
    }  
} 
	  else
    {
        echo 7;
 
    }
?>       

</body>

</html>