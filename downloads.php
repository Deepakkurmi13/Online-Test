
<?php

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    include("database-connection.php");
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
   
     $path  = $file["files"];
     $size = $file["size"];

     header("Content-Type: application/octet-stream"); 
     header("Content-Disposition: attachment; filename=".urlencode($path));    
    
     flush();
  
     $fp = fopen($file, "r"); 
     while (!feof($fp)) { 
         echo fread($fp, 65536); 
         flush();
     }  
       
     fclose($fp); 
}

?>