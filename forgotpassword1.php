<?php
session_start();
?>
<?php
if(isset($_SESSION['username']))
{
	header("Location:LMS");
}
?>
<!--forget password data-->
<?php
if(isset($_GET['tokan']) &&  isset($_GET['email']))
{
    $tokan = $_GET['tokan'];
	$email = $_GET['email'];
	include("database-connection.php");
	$query = "SELECT * FROM student_table WHERE email='$email' AND tokan='$tokan' AND timeexpire>NOW()";
	$sql = mysqli_query($conn ,$query);
    $result = mysqli_num_rows($sql);
    if($result == 1)
   {
      	
   } 
   else{
	     header("Location:forgotpassword?error=1");
		 
   }

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
   height:600px;
   width:72%;
   margin-left:183px;  
   margin-top:-15px;
   -webkit-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
  -moz-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
   box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
   background-color:#fff7f7;

}

fieldset
{
height:370px;
width:390px;
box-shadow:0px 0px 1px gray;
 background-color:white;

}
#changeform
{
   height:100%;
	padding:30px;
	margin-left:280px;	
}
#img2
{
	height:125px;
	width:155px;
	text-align:center;
	margin-top:px;
	margin-left:112px;
	background:none;
	border:none;
}
#createpassword
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
#createpassword:focus
{
	border-left:5px solid Dodgerblue;
}
#confirmpassword
{
	margin-top:25px;
    margin-left:95px;
	border-radius:5px;
	border:1px solid #a8a8a8;
	height:32px;
	width:210px;
	outline:none;
	text-indent:7px;
	border-radius:8px;
}
#confirmpassword:focus
{
	border-left:5px solid Dodgerblue;
}
#changepassword
{
	
    margin-top:24px;
    margin-left:130px;
	border-radius:5px;
    border:none;
	box-shadow:1px 1px 3px gray;
	background-color:#abc8ff;
	height:29px;
	width:150px;
	text-align:center;
}
#changepassword:hover
{
	background-color:Dodgerblue;;
}
#openeye
{
	font-size:15px;
	margin-left:-25px;
}
#closedeye
{
	font-size:15px;
    margin-left:-20px;
}
#messageforgot3
{
    display:none;
	text-align:center;
	height:20px;
	width:50%;
	margin-left:260px;
}
#messageforgot3 p
{
background-color:#330000;
height:auto;
font-size:17px;
color:red;
font-family:Bahnschrift SemiBold;
margin-top:50px;
}

#messageforgot1 
{
height:150px;
width:40%;
display:none;

margin-left:310px;
}
#messageforgot2
{
	margin-left:0px;
	text-align:center;
	background-color:#f0f0f0;
	
}
#dialog2
{
	background-color:#fff2f2;
	font-size:15px;
	text-align:center;
}
#dialog3
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
<div  id="forgotbody">
<div id="messageforgot3"><p></p></div>
<div id="messageforgot1">
<p id="messageforgot2">
- Must be between 8 to 14 <br>characters long<br> 
- one uppercase letter [A - Z] <br>
- one lowercase letter [a - z] <br>
- must use one digit[0 - 9]
<p>
</div>
<!--change password form --->
<form id="changeform" enctype="maltipart/form-data" onsubmit="return false">
<fieldset>
<image src="images/changepassword.png" id="img2"/>
<p style="font-size:15px;color:green;margin-left:88px;margin-top:-3px;">Create a New, Strong Password</p>
<hr style="width:60%;background:#0f17ab;margin-top:-15px;"></hr>
<input type="text" name="createpassword" autocomplete="off" placeholder="Create Password" id="createpassword" >
   <i class="fa fa-check" aria-hidden="true" style="margin-left:-30px;display:none;color:green;" id="right1"></i>
<br>
<input type="password" name="confirmpassword" autocomplete="off" placeholder="Confirm Password" id="confirmpassword">
 <i id="openeye" class="fa fa-eye fa-2x" style="margin-left:-25px;"></i>
<i id="closedeye" class="fa fa-eye-slash fa-2x"></i>
<i class="fa fa-check" aria-hidden="true" style="margin-left:-44px;display:none;color:green;" id="right2"></i>
<br>
<input type="submit" name="submit" value="Changepassword" id="changepassword">
</fieldset>
</form>

<!--dialog2---->
<div id="dialog2" title="Message" style="display:none">
</div>

<div id="dialog3" title="Message" style="display:none">
- Must be between 8 to 14 <br>characters long<br> 
- one uppercase letter [A - Z] <br>
- one lowercase letter [a - z] <br>
- must use one digit[0 - 9]
</div>

</div>
<?php
if(isset($_GET['email']))
{
	$email = $_GET['email'];
}	
?>
<?php 
include("footer.php");
?>


<!---start javascript ------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){	
 $("#openeye").click(function(){
		$("#openeyye").hide();
		$("#closedeye").show();
		$("#confirmpassword").attr("type","text");
	});
	
	$("#closedeye").click(function(){
		$("#openeye").show();
		$("#closedeye").hide();
		$("#confirmpassword").attr("type","password");
	});

var email = "<?php echo $email ?>";
   


    $("#changepassword").click(function(){
	    var  password1 = $("#createpassword").val();
        var  password2 = $("#confirmpassword").val();
		
		if( password1 == "" || password2 == "")
		{
		    if( password1 == "" )
            {
			 	$("#dialog2").dialog("open")
				$("#dialog2").html("Password field is required");
				$("#createpassword").css("border","1px solid red");
			    $("#createpassword").focus(function(){
				   $("#createpassword").css("border","1px solid #a8a8a8");
				});		
			}
            if( password2 == "" )
            {
			    $("#dialog2").dialog("open")
				$("#dialog2").html("Password field is required");
				$("#confirmpassword").css("border","1px solid red");
			    $("#confirmpassword").focus(function(){
				   $("#confirmpassword").css("border","1px solid #a8a8a8");
				});		
			}			
		}
        else
        { 
	            $.ajax({
			    url:"updatepassword.php",
                type:"POST",			  
			    data:{ password1:password1,
			           password2:password2,
					     email  :email},	
			    success:function(data){
					if(data == 1)
					{
                    	alert("Your password has been changed");
						window.location.href="LMS";
					}
			         else
					 {  $("#dialog2").dialog("open");
				       $("#dialog2").html(data);
					   $("#changeform").trigger("reset");	
					 }
				},				  
				
		    });			
		}			
        		   
	  
    });







//password check validation


$("#createpassword").blur(function(){
	  $("#createpassword").css("border","1px solid #a8a8a8");
	  $("#right1").hide();
    if(!$("#createpassword").val() == "")
    {  
	  var regexp = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}/;
	    if(regexp.test($("#createpassword").val()))
		{
		    $('#createpassword').css("border","1px solid green");
		     $("#right1").show();	
			
	    }
		else{
		  $('#createpassword').css("border","1px solid lightgray");
		   $("#right1").hide();
		    if(!$("#createpassword").val() == "")
			{ 
                $("#right1").hide();	
		        $("#createpassword").css("border","1px solid red");
		        $("#dialog3").dialog("open");
                $("#createpassword").focus(function(){
			    $("#createpassword").css("border","1px solid #a8a8a8");
				});	
                			
		    }
        }
	
	}    
  });


$("#confirmpassword").blur(function(){
	  $("#confirmpassword").css("border","1px solid #a8a8a8");
	  $("#right2").hide();
    if(!$("#confirmpassword").val() == "")
    {  
	  var regexp = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}/;
	    if(regexp.test($("#confirmpassword").val()))
		{
		    $('#confirmpassword').css("border","1px solid green");
		     $("#right2").show();	
			
	    }
		else{
		  $('#confirmpassword').css("border","1px solid lightgray");
		   $("#right2").hide();
		    if(!$("#confirmpassword").val() == "")
			{ 
                $("#right2").hide();	
		        $('#confirmpassword').css("border","1px solid red");
		        $("#dialog3").dialog("open");
				$("#confirmpassword").focus(function(){
	                 $("#confirmpassword").css("border","1px solid #a8a8a8");
				});	
                			
		    }
        }
	
	}    
  });

 $("#dialog2").dialog({	
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


 $("#dialog3").dialog({	
			  draggable:false,
			  resizable:false,
			  closeOnEscape:false,
			  modal:true,
			  autoOpen:false,
			  width:350,
			  height:200
			});


});
</script>
<?php 
include("ajax.php");
?>
</div>
</body>
</html>











