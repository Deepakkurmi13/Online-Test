<?php
session_start();
?>
<?php
if($_SESSION['username'] == "deepakkurmi_60")
{	

?>
<html lang="en">
<head>
<title>online-Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.4">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css.css"/>
<style>
.form_data_notes{
  display:flex;
  justify-content:center;
  margin-bottom:50px;

}
.form_data_notes form {
  width: 100%;
  padding: 30px;
  border: 1px solid #555;
}
.form_data_notes input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
}
.form_data_notes button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
</style>
</head>
<body>


<?php
include("nevbar.php");
?>

<div class="container my-5 form_data_notes">
      <div class="row">
        <form action="" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>


<?php
include("footer.php");
include("ajax.php");

include("database-connection.php");


if (isset($_POST['save'])) 
{
   
    $filename = $_FILES['myfile']['name'];
    $destination = 'pdf/'. $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file_temp = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

  if($filename == ""){
        echo "<script>
        alert('please select pdf');
      </script>";
  }  
  else{
     
    if (!in_array($extension, ['zip', 'pdf', 'docx']))
    {
      echo "<script>
              alert('You file extension must be .zip, .pdf or .docx');
            </script>";
    } 
    elseif ($_FILES['myfile']['size'] > 1000000) 
    { 
      echo "<script>
              alert('File too large!');
            </script>";
    } 
    else 
    {
        
        if (move_uploaded_file($file_temp, $destination)) 
        {
            $sql = "INSERT INTO  files(files, size,username,download) VALUES('{$filename}', '{$size}','{$_SESSION['username']}',0)";
            if (mysqli_query($conn, $sql)) {

                    echo "<script>
                      alert('File uploaded successfully');
                    </script>";
              
            }
        } else {
          echo "<script>
                  alert('Failed to upload file.');
                </script>";
           
        }
    }
  }
}
?>

</body>
</html>
<?php
}
else
{
	header("location: LMS");
}
?>