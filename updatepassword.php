<?php
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email     = $_POST['email'];
if($password1 == $password2)
{ 
    if(preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}/",$password1)&& preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}/",$password2))
	{ 
		include("database-connection.php");
		$password1 = md5($password1);
	    $query = "SELECT * FROM student_table WHERE email='$email'";
		$sql = mysqli_query($conn ,$query);
        $run = mysqli_num_rows($sql);
        if($run == 1)
        {
			$query1 = "UPDATE student_table SET password ='$password1' WHERE email='$email'";
		    $sql1 = mysqli_query($conn ,$query1);
			echo 1;
			
		}			
	    else
		{
			echo "something Went wrong";
		}
	
	}
    else
    {
	    echo "Please follow pattern";	
	}		
}else
{
	echo "Password not match try again";
}	


?>