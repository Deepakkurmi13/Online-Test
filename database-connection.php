<?php

$conn="";

// $conn = mysqli_connect("localhost","root","","onlinetest");

 $conn = mysqli_connect("remotemysql.com","NMsujgUwNd","dkrgDFgdkB","NMsujgUwNd");
  
if($conn)
{
	echo "";
}
else
{
     Die("connection failed");	
}


?>





