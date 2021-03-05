<?php
session_start();
?>
<?php
if(isset($_SESSION['username']))
{
	header("Location:LMS");
}
?>
<?php
if(isset($_GET['error']))
{
  $error = $_GET['error'];  
}	
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
   height:500px;
   width:72%;
   margin-left:183px;  
   margin-top:-15px;
   -webkit-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
  -moz-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
   box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
   background-color:#fff7f7;

}

#forgotform
{

	height:100%;
	padding:30px;
	margin-left:280px;
	
}
fieldset
{
height:330px;
width:390px;
box-shadow:0px 0px 1px gray;
 background-color:white;
}
#forgotemail
{
 	margin-top:15px;
    margin-left:95px;
	border-radius:5px;
	border:1px solid #a8a8a8;
	height:32px;
	width:210px;
	outline:none;
	text-indent:7px;
	border-radius:8px;
}
#forgotemail:focus
{
	border-left:5px solid Dodgerblue;
	
}
#forgot
{
    margin-top:50px;
    margin-left:130px;
	border-radius:5px;
    border:none;
	box-shadow:1px 1px 3px gray;
	background-color:#abc8ff;
	height:29px;
	width:150px;
	outline:none;
}
#forgot:hover,#forgot:focus
{
	background-color:Dodgerblue;
	
}
#img1
{
	height:125px;
	width:155px;
	text-align:center;
	margin-top:px;
	margin-left:112px;
	background:none;
	border:none;
	
}
#messageforgot
{
    display:none;
	text-align:center;
	height:20px;
	width:50%;
	margin-left:260px;
}
#messageforgot p
{
background-color:#330000;
height:auto;
font-size:17px;
color:red;
font-family:Bahnschrift SemiBold;
margin-top:50px;
}
#dialog1
{
	background-color:#fff2f2;
	font-size:15px;
	text-align:center;
}
</style>
</head>
<body>
<?php
include("nevbar.php");
?>

<!--dialog1---->

<div id="dialog1" title="Message" style="display:none">

</div>







<div  id="forgotbody">
<div id="messageforgot"><p>----Loading---</p></div>
<!--forgot password form --->
<form id="forgotform" enctype="maltipart/form-data" onsubmit="return false">
<fieldset>
<image src="images/forgot.jpg" id="img1"/>
<hr style="width:60%;background:#0f17ab;margin-top:-2px;"></hr>
<input type="email" name="email" autocomplete="off" placeholder="Enter Your Email" id="forgotemail"><br>
<input type="submit" name="forgot" value="submit" id="forgot">
</fieldset>
</form>
</div>
<?php
include("footer.php");
?>

<!---start javascript ------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
$(document).ready(function(){ 

var error = "<?php echo $error ?>";
if(error == 1)
{
 alert("Timeout!! The time period of this Forgot Password was 5 minutes Please Try Again");
 window.location.href="forgotpassword";
}

});

</script>

<script>
$(document).ready(function(){ 
   $("#forgot").click(function(){
	  var email = $("#forgotemail").val();
        if(email == "")
        {
		   	$("#dialog1").dialog("open");
		    $("#dialog1").html("Enter Email If You Want to Forgot Password");

		}			
		else{
			$("#messageforgot").show();
			setTimeout(function(){
			$("#messageforgot").fadeOut();
			},2000);
			   
			$.ajax({
			    url:"emailforgotpassword.php",			 
			    type:"POST",
				data:{email :email},
				
				success : function(data){
				    if(data == 3)
					{
				        $("#dialog1").dialog("open");
		                $("#dialog1").html("Email is not correct");
			            
					}
					else if(data == 2)
                    {
						$("#dialog1").dialog("open");
		                $("#dialog1").html("something Want wrong");
			         
					} 
                     else
					 {
						
						if(data == 1)
                        {
						     $("#dialog1").dialog("open");
							$("#dialog1").html("Please check your email You have only 5 minutes");	
                             $("#forgotform").trigger("reset");							
						}							
					 }						 
					
				},	
			});	
			
		}		   
   });  
 

 $("#dialog1").dialog({	
			  draggable:false,
			  resizable:false,
			  closeOnEscape:false,
			  modal:true,
			  autoOpen:false,
			  width:350,
			  height:200,
			  buttons: {
                  OK: function() {$(this).dialog("close");}
               }
			  
		    });





}); 
</script>
<?php
include("ajax.php");
?>
</body>

</html>











