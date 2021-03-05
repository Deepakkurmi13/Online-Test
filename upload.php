
<html lang="en">
<head>
<title>online-Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>


<body>

<form id="uploadForm"  method="post"  enctype="multipart/form-data">
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<input type="submit" value="Submit" name="submit" class="btnSubmit" />
</form>

<?php

if(isset($_POST['submit']))
{
 $file_name = $_FILES['updatefile']['name'];
	 $file_size= $_FILES['updatefile']['size'];
	 $file_tmp = $_FILES['updatefile']['tmp_name'];
	 $file_type= $_FILES['updatefile']['type'];
	 echo $file_name; 
	  
}
?>
<script>

$(document).ready(function(){

    $(".btnSubmit").click(function(){

        var fd = new FormData();
		 var fd = JSON.stringify(fd);
      
           $.ajax({
              url: 'getimage',
               type: 'POST',
				data: fd,
				contentType: false,
				processData: false,
				dataType: "json",
              success: function(response){
                 alert(response);
              },
           });
    });
});
</script>

</body>
</html>