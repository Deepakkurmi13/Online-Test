<?php

$to = "deepakkurmi874@gmail.com"; 
$subject = " Learning Management System";
$message  =  "successfully resistered";
$headers  = "From : deepakkurmi934@gmail  \r\n";
$headers .= "MIME-version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

$mail = mail($to ,$subject ,$message ,$headers);     
 
if($mail ){
 echo "ok";
}else{
   echo "error";
}

?>