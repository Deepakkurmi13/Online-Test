<?php
session_start();
?>
<?php
if(isset($_SESSION['username']))
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
#forgotbody
{
   height:650px;
   width:72%;
   margin-left:183px;  
   margin-top:-10px;
   -webkit-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
  -moz-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
   box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
}
.cover1
{
  height:100%;
  width:27%;
  float:left;
  margin-top:-90px;
  box-shadow:5px 0px 5px -5px gray;
  background-color:#fafff2;
}
.cover2
{
  height:100%;
  width:72.5%;
  float:right;
   margin-top:-96px;
}
.image1
{
	height:120px;
	width:120px;
	margin-top:72px;
	margin-left:70px;
}
.img10
{
	height:120px;
	width:120px;
	border-radius:50%;
	background-size:cover;
	border:1px solid gray;
	background-color:gray;
	
}
.profilename
{
	text-decoration:underline;
	color:blue;
	font-size:16px;
	margin-top:-10px;
	cursor:pointer;
	text-align:center;
	
}
.profilename:hover
{
 text-decoration:none;	
}
.info
{
	height:300px;
	width:200px;
	margin-top:52px;
	margin-left:33px;
}
.info p
{
	text-align:center;
	font-size:18px;
	font-family:Eras Bold ITC;
	cursor:pointer;
	color:barkblack;
	text-decoration:underline;
	
}
.info p:hover
{
	text-indent:5px;
	text-decoration:none;
	
}
.personal1
{
   height:100%;
   width:100%;
   margin-top:-40px;
   background-color:;
}
 input[type="file"]
{
 margin-left:30px;
 margin-top:-10px;
 width:200px;
 height:30px;
}
 input[type="text"]
 {
	 margin-left:30px;
	 margin-top:10px;
     width:250px;
	 height:30px;
	 outline:none;
	 border-radius:8px;
	 border:1px solid gray;
	 text-indent:10px;
}
 input[type="text"]:focus
 {
	 border-left:5px solid Dodgerblue;
	 outline:none;
 }
input[type="submit"]
{
	height:30px;
	width:100px;
	margin-left:30px;
	margin-top:20px;
	background-color:#71a3fa;
	outline:none;
	border:none;
	box-shadow:1px 1px 2px gray;
	font-size:16px;
}
input[type="submit"]:hover
{
	background-color:Dodgerblue;
}
input[type="radio"]
{
  
}
fieldset
{
	height:500px;
	width:500px;
	background-color:#faf7fa;
	margin-left:100px;
	border:1px solid #cccccc;
	margin-top:40px;
}
.gender
{
    margin-left:30px;
	margin-top:15px;
}
#paper
{
	position:relative;
    top:50px;
	letter-spacing:0.8px;
    font-size:25px;
	margin-left:40px;
	color:gray;
}
.dialog4
{
	background-color:#fff2f2;
	font-size:15px;
	text-align:center;
	
}
#userprofile img
{
	height:40px;
	width:40px;
	background-color:#eee;
	border-radius:50%;
	background-size:cover;
	border:1px solid gray;
	cursor:pointer;	
	box-shadow:-2px 1px 1px gray;
}
</style>
</head>
<body>
<?php
include("nevbar.php");
?>
<!----start ---->
<div id="forgotbody">


<!--block1----->
<div class="cover1">
<p class="image1">
<?php
$img = '';
if($_SESSION['image'] == "")
{
  $img = "images/userprofile.jpg";
}
else
{
	$img = $_SESSION['image'];
}
?>
<image src="<?php echo $img; ?>" class="img10"/></p>
<?php
if(isset($_SESSION['username']))
{
echo "<p class='profilename'><a href='account'>".$_SESSION['username']."</a></p>";
}	
?>
<hr style="width:50%;background-color:#eee;"></hr>
<div class="info">
<p  id="block-one">Personal</p>
</div>
</div>

<!--block2----->
<div class="cover2">
<div class="personal1">
<p id="paper">Personal Information</p>
<hr style="margin-top:60px;"></hr>
<fieldset>
   <p style="color:gray;font-size:15px;margin-left:30px;margin-top:40px;text-decoration:underline;">Upload picture of yourself -</p>
   <p class="form">
   <form method="post" class="update-data" enctype="multipart/form-data" onsubmit="reture false">
   <br>
   <input type="file" name="updatefile" required><br>
   <p style="color:gray;margin-top:20px;margin-left:30px;font-size:13px;">Upload files of type jpeg, jpg, gif, png only.Max size allowed is 1MB</p>
   <label style="margin-left:30px;text-decoration:underline;color:gray;margin-top:13px;">Name - </label><br>
   <input type="text" name="name" autocomplete="off" required value="<?php echo $_SESSION['name']?>" placeholder="Enter Name" id="updatename"><br>
    <label style="margin-left:30px;text-decoration:underline;color:gray;margin-top:35px;">Gender -</label><br>
   <div class="gender">
  <?php 
if($_SESSION['gender'] == 'male') 
{
   ?>
  
  <input type="radio" name="gender" value="male" required checked> male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
  <?php 
   }
   else if($_SESSION['gender'] == 'female')
   {   
    
  ?>
  <p>
   <input type="radio" name="gender" value="male" required > male
  <input type="radio" name="gender" value="female" checked> Female
  <input type="radio" name="gender" value="other"> Other
  </p>
  <?php
   }
   else{
	   
  ?>
  <input type="radio" name="gender" value="male" required > male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other" checked> Other
   <?php
   }
  ?>
  </div>
  <br>
  <input type="submit" value="save" name="save" id="save">
  
  </form>
</p>
</fieldset>
</div>
</div>




</div>
<?php
include("footer.php");
?>


<!----php start -->
<?php
if(isset($_POST['save']))
{
 if(isset($_FILES['updatefile']))
    {
	 $name = $_POST['name'];
	 $str = "s-".$_SESSION['id'].".jpg";
	 $gender = $_POST['gender']; 
	 $file_name = $_FILES['updatefile']['name'];
	 $file_size= $_FILES['updatefile']['size'];
	 $file_tmp = $_FILES['updatefile']['tmp_name'];
	 $file_type= $_FILES['updatefile']['type'];
	 $folder = "update-images/". $str;
	 
     $flag = 0;
		    if($file_size > 1048567) 
		    {
               $flag = 1;            
			    echo "<script>
				alert('Sorry, your file is too large.');				
				</script>";
		    }			
		    else
		    {
					 
				
		        if( $file_type == "image/jpg" ||  $file_type == "image/png" ||  $file_type == "image/jpeg")
	            {
				    move_uploaded_file($file_tmp ,$folder);
					$email = $_SESSION['email'];  
		            include("database-connection.php");
			        $query = "UPDATE student_table SET image='$folder',name='$name',gender='$gender' WHERE email='$email'";
			        $sql = mysqli_query($conn ,$query);
	                if($sql == true)
			        {
			            $_SESSION['name'] = $name;
					    $_SESSION['gender'] = $gender;
						if($_SESSION['image'] == "")
						{
						    $_SESSION['image'] = $folder;
						}
						echo "<script>
		                alert('person information succefully updated.');
					    window.location.href='LMS';
				        </script>";
						 
		              
					}				
                   
					
                }
                else
		        {
			       echo "<script>
		            alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
				    </script>";
		        }			  
		
		
		
		
	        }
	    
    }
    else
	{

		echo "<script>
		            alert('Sorry! something want wrong.');
				    </script>";
	}
    

}
?>



<!---start javascript ------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){ 

$(".dialog4").dialog({	
			  draggable:false,
			  resizable:false,
			  closeOnEscape:false,
			  modal:true,
			  autoOpen:false,
			  width:430,
			  height:230
			  
		    });



});
</script>



<?php
include("ajax.php");
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

