<?php
session_start();
?>
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
body
{
   background-color:white;
   height:100%;
   width:100%; 
}
.card
{
	height:auto;
}
#tata
{
 background-color:white;  
 height:95px;
 width:100%; 
-webkit-box-shadow: 0px 2px 8px 1px rgba(111,112,110,0.51);
-moz-box-shadow: 0px 2px 8px 1px rgba(111,112,110,0.51);
 box-shadow: 0px 2px 8px 1px rgba(111,112,110,0.51);
}
.data1
{
	font-size:30px;
	color:#595959;
	margin-top:70px;
}
.data2
{
	color:#949494;
	margin-top:30px;
}
.btn1
{
	height:30px;
	width:100px;
	margin-top:10px;
	font-size:15px;
	box-shadow:0px 0px 3px 1px gray;
	color:white;
	background-color:#595959;
	border-radius:15px;
	border:none;
	outline:none;
	margin-left:-215px;
}
.btn1:hover
{
    	background-color:#757575;	
}
.btn1:focus
{
	border:none;
	outline:none;
}	
.img1
{
	margin-left:25px;
	margin-top:-20px;
	filter: saturate(800%);
	background-color:#949494;
	color:red;
	filter: sepia(80%);
}	
#data
{
	height:500px;
}
#ccc
{
   height:auto;
   width:72%; 
   -webkit-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
  -moz-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
   box-shadow: 0px 3px 6px 3px rgba(179,179,179,1);
 
}
.mmm ,.kkk
{
  height:30px;
  width:39%;  
  font-size:13px;
  margin-top:10px;
  padding:12px;
  box-shadow:0px 0px 1px 1px gray;
  border:1px solid #f5f5f5;
  outline:none;
  color:gray;
}
.ooo
{
   height:30px;
   width:19%; 
   font-size:15px;
   margin-top:10px;
   color:white;
   background-color:#595959;
   text-align:center;
  box-shadow:1px 1px 3px gray;
   margin-left:3px;
   border:none;
   border-radius:3px; 
}
.ooo:hover
{
  background-color:#757575;
}
#form-data
{
	width:100%;
}
#aaa
{
	margin-left:25%;
	margin-top:15px;
	
	
}
#eee
{
	margin-right:70%;
	margin-top:0px;
}

#ccc a
{
	font-size:12px;
	margin-left:230px;
	
}
#bbb
{
	height:30px;
	width:100%;
}
#vvv
{
    text-align:center;
	font-size:15px;
	color:white;
    background-color:#595959;
    height:29px;
	border:none;
	box-shadow:0px 0px 3px 1px gray;
	border-radius:3px;
	margin-top:1px;
	
	
}
#vvv a 
{
	text-decoration:none;
	color:white;
}
#vvv:hover
{
	background-color:#757575;
}

#rrr
{ 
    border-radius: 0px 115px 0px 200px;
   -moz-border-radius: 0px 115px 0px 200px;
   -webkit-border-radius: 0px 115px 0px 200px;
   border: 3px solid #ffffff;
  
}
#sss
{
	height:50px;
	width:50%;
	margin-right:250px;
}


 .earth 
{
	position:relative;
	top:10px;
	bottom:0;
	left:15px;
	right:0;
	height:120px;
	width:120px;
	margin:auto;
	background-image:url(images/earth3.jpg);
	border-radius:50%;
	background-size:cover;
	box-shadow:-20px -20px 50px 2px #000 inset, 0 0 20px 2px #eee;
	animation:spin 10s linear alternate infinite;
	}
   
   @keyframes spin
   {
	  100%{background-position:100%;} 
   }
   
 #fff
 {
	height:auto;
	width:100%;
	margin-top:5px;
	border-top:1px groove #fff;
    -webkit-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
    -moz-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
    box-shadow: 0px 1px 0px 3px rgba(179,179,179,1);
 }

.css{
	float:left;
	margin-left:44%;
	margin-top:-190px;
}
.icon{
	margin-left:84%;
	margin-top:-180px;
}

.menu
{
    height:50px;	
	width:100%;
	margin-top:10px;
	
}
.menu ul {
    list-style-type: none;
    margin-left:23%;
  	margin-top:-115px;
	width:60%;
	float:left;
	}
.menu li {
  float: left;
  padding:20px;
  margin-top:-15px;
  height:auto;
   
}
.dropbtn {

  color:#5c4b4b;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  
}

.dropdown {
  position: relative;
  display: inline-block;
   height:90px;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index:2;
  height:auto;
}
.dropdown-content a {
  float: none;
  color:white;
  padding: 12px 16px;
  background-color:#5c4b4b;
  text-decoration: none;
  display: block;
  border-radius: 37px 29px 144px 29px;
-moz-border-radius: 37px 29px 144px 29px;
-webkit-border-radius: 37px 29px 144px 29px;
 border: 0px dotted #ffffff;
 height:auto;
 }

.dropdown-content a:hover 
{
   background-color:black;
}

.dropdown:hover .dropdown-content {
  display: block;
 
}

.dropdown:hover .dropbtn {
  background-color:#5c4b4b;
  color:white;
  border-radius: 37px 29px 144px 29px;
-moz-border-radius: 37px 29px 144px 29px;
-webkit-border-radius: 37px 29px 144px 29px;
border: 0px dotted #ffffff;
}

#link
{
	color:Dodgerblue;
}
#link:hover
{
	color:red;
}
#message-error
{
	background-color:#fadfdf;
	width:350px;
	height:140px;
	font-size:16px;
	margin-top:10px;
	margin-left:22px;
}
#message-error li
{
   
    margin-left:5px;
       
}
.king{
    font-family:Yu Gothic UI Semibold;
	width:38%;
     height:50px;
	 position:absolute;
	 left:830px;
	 top:45px;
	 margin-top:-2px;
	 
}
.L-btn
{
	margin-left:100px;
	margin-top:-12px;
	background-color:#eee;
	border:none;
	box-shadow:0.9px 0.9px 4px gray;
	height:30px;
	width:94px;
	border-radius:4px;
	
}
.L-btn a
{
	color:#6b3213;
	font-size:14px;
	height:auto;
	text-align:center;
	text-decoration:none;
}
.L-btn:hover
{
	background-color:gray;
}
#listbtn
{
	cursor:pointer;
	margin-top:-12px;
	margin-left:12px;
}
.list-down
{
	position:relative;
	display:inline-block;
}
.list-content
{
	position:absolute;
	min-width:165px;
	background-color:white;
	box-shadow:1px 1px 7px gray;
	z-index:40;
	display:none;
	min-height:160px;
	margin-top:25px;
	box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
	border-radius:5px 5px 5px 5px;
	border-radius:15px;
	  
}
.list-content a
{
  background-color:white;
  color:gray;
  display:block;
  text-decoration:none;
  margin-left:10px;
  margin-top:15px;
  padding:4px;  
  border-bottom:1px solid #eee;
  text-indent:15px;
  margin-bottom:20px;
  
}
.list-content a:hover
{
	background-color:#eee;
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
.dropdown .pack .has:hover
{
	color:white;
	text-decoration:none;
	font-size:16px;
}

.dropdown .pack .has i
{
   color:white;
   font-size:17px;
   cursor:pointer; 
}
#mak3
{
	color:red;
	font-size:15px;
}
#day
{
	
	font-size:12px;
	color:#8f6b6b;
}
#mak4
{
   
	left:540px;
	top:7px;
	color:red;
}

#clock
{
	font-size:12px;
	color:#8f6b6b;
	
}
#mak
{
	font-size:12px;
	text-decoration:underline;
	margin-top:10px;
	color:#8f6b6b;
}



.carousel{
  margin-top: 50px;
}
.carousel-inner{
 height: 100px;
 width:100%;
 margin-left:130px;
}
.carousel-caption{
  color: black;
  top: 50%;
}
.call1
{
	height:auto;
	background-color:white;
	width:auto;	
	box-shadow:0px 0px 4px;	
}
.call2
{
	height:auto;
    background-color:white;
	width:100%;
    box-shadow:0px 0px 4px;	
}
.call3
{
	height:auto;
	background-color:white;
	width:100%;
    box-shadow:0px 0px 4px;	
}
#data3
{
	margin-top:20px;
	width:100%;
	height:auto;
}
.service
{
	font-size:30px;
    text-decoration:underline;
	font-weight:bold;
	letter-spacing:2px;
	color:gray;
}
#data3 img
{
	height:200px;
}
</style>
</head>
<body id="body">

<!--message-error show --->
<div id="dialog" style="display:none;" title="Message">
<div id="message-error">
<pre>
<li id="error1" style="display:none">Username field is required.</li>
<li id="error2" style="display:none">Password field is required.</li>
<li id="error3" style="display:none"> Sorry, unrecognized username or password.
<a href="http://localhost/onlinetestwebsitefiles/forgotpassword" style="text-decoration:underline;" id="link">Have you forgotten your password?</a></li>
</pre>
</div>
</div>

<!--top part  -->
<div id="tata">
<!----session html  ---->
<?php
if(isset($_SESSION['username']))
{   		
?>	
<div class="king">
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
if($_SESSION['username'] == 'deepakkurmi_60')
{
	echo "<table><tr>
<td><p id='userprofile'><a href='account'><img src='".$img."'/></a></p></td>
<td><p style='float:left;font-family:Arial;font-size:15px;margin-left:15px;letter-spacing:1px;'>Hello</p></td>
<td><p><i class='fa fa-flag' aria-hidden='true' style='margin-left:5px;'></i></p></td>
<td><p style='float:left;margin-left:10px;color:#330a0a;letter-spacing:1px;'>".$_SESSION['username']."</p></td>
<td>
<div class='list-down'>
<i class='fa fa-caret-down' aria-hidden='true' id='listbtn'></i>
<div class='list-content'>
<a href='account'>Account</a>
<a  href='edit-profile'>Edit Profile</a>
<a  href='createform'>Create Form</a>
<a  href='upload_notes'>upload_notes</a>
</div>
</div>
</td>
<td><button type='button' class='L-btn'><a href='logout'>Logout</a></button></td>
</tr></table>";
}
else
{	
echo "<table><tr>
<td><p id='userprofile'><a href='account'><img src='".$img."'/></a></p></td>
<td><p style='float:left;font-family:Arial;font-size:15px;margin-left:15px;letter-spacing:1px;'>Hello</p></td>
<td><p><i class='fa fa-flag' aria-hidden='true' style='margin-left:5px;'></i></p></td>
<td><p style='float:left;margin-left:10px;color:#330a0a;letter-spacing:1px;'>".$_SESSION['username']."</p></td>
<td>
<div class='list-down'>
<i class='fa fa-caret-down' aria-hidden='true' id='listbtn'></i>
<div class='list-content'>
<a href='account'>Account</a>
<a  href='edit-profile'>Edit Profile</a>
<a  href='notes'>Notes</a>
</div>
</div>
</td>
<td><button type='button' class='L-btn'><a href='logout'>Logout</a></button></td>
</tr></table>";
}
?>
</div>
<?php
}
?>
<!----session html end  ---->
<div id="eee">
<a href="LMS"><div class="earth"></div></a>
</div>
<p style="margin-top:100px;margin-left:-65px;font-size:40px;font-family:fantasy;color:#5c4b4b" id="lll"></p>
<div class="css">
<?php
if(!isset($_SESSION['username']))
{   		
?>	
<!--form start --->
<form class="form-inline" enctype="maltipart/form-data" onsubmit="return false" id="form-data">
<input type="text" name="username" placeholder="Username"  class="mmm" id="username">&nbsp
<input type="password" name="password" placeholder="Password" autocomplete="off" class="kkk" id="password">&nbsp
<input type="submit" name="submit"  value="Login" class="ooo" id="submit">
</form>
<?php
}
?>
</div>
<div id="fpassword">

<?php
if(!isset($_SESSION['username']))
{   		
?>
<a  href="forgotpassword" id="linkforgot" style="font-size:10px;margin-left:62.65%;margin-top:-145px;float:left;text-decoration:underline;">Forgot password</a>
<?php
}   		
?>
</div>
<div class="icon">

<?php
if(!isset($_SESSION['username']))
{   		
?>  
<button type="button" id="vvv"><a href="resister">New User</a></button>
<?php
}   		
?>
</div>
</div>



<!-----menu start-------->
<div class="menu">
<ul>
<li>
<div class="dropdown">
  <span class="pack"><a href="LMS" class="has"><i class="fas fa-caret-right" style="color:#5c4b4b;">Home</i></a></span>
</div>
</li>
<?php
if(isset($_SESSION['username']))
{	
?>
<li>
<div class="dropdown">
  <span class="dropbtn"><i class="fas fa-caret-right">Online Test</i></span>
  <div class="dropdown-content">
     <a href="quiz">Quiz test</a> 
  </div>
</div>
</li>
<?php
}
else if(!isset($_SESSION['username']))
{
?>	
  <li>
<div class="dropdown">
  <span class="dropbtn"><i class="fas fa-caret-right">Online Test</i></span>
  <div class="dropdown-content">
     <a href="" id="deepak">Quiz test</a> 
  </div>
</div>
</li>
<?php
  echo "<script>
        $('#deepak').click(function(){
          alert('Please resister First If your resister Already then Login and enter in Quiz test');
		});
        </script>";
}
?>
<li>
<div class="dropdown">
  <span class="dropbtn"><i class="fas fa-caret-right">Student Servives</i></span>
  <div class="dropdown-content">
    <a href="Rank">Your Rank</a>
  </div>
</div>
</li>


<li>
<div class="dropdown">
  <span class="dropbtn"><i class="fas fa-caret-right">About</i></span>
  <div class="dropdown-content">
    <a href="about">About Us</a>
	<a href="test-information">test information</a>
	<a href="tutorial">Tutorial</a>
  </div>
</div>
</li>

<li>
<div class="dropdown">
  <span class="dropbtn"><i class="fas fa-caret-right">More</i></span>
  <div class="dropdown-content">
    <a href="" id="problem">Problems</a>
  </div>
</div>
</li>
</ul>
</div>


<!--center page  start--->

<center>
<div  id="ccc">
<div class="container" id="data">
<div class="row">
<div class="col-sm-6" class="name">
<image src="images/images.png" alt="loading" height="370px" width="550px" class="img1"/>
</div>
<div class="col-sm-6" class="name1">
<p class="data1"><b>Learning Management System</b></p>
<p class="data2"><pre style="color:gray;"><pre>welcome to learing management system this 
is best plateform of the quiz test and<br> you can improve your knowladge</pre></p>
<a href="about"><button  class="btn1" type="button" value="Read more">Read More</button></a>
</div>
</div>
</div>


<div class="container-fluid" id="data3">
<p class="service">Service</p>
<div class="row mt-5 ml-2">
<div class="col-auto ">
  <div class="card my-3 mb-5" style="width:280px">
    <img class="card-img-top" src="images/study.jpg" alt="Card image" style="width:100%">
	<div class="card-body">
      <h4 class="card-title">online Test</h4>
      <p class="card-text">A test maker for teachers is a simple online quiz maker that teachers use to create online tests to assess </p>
      <a href="" class="btn btn-primary ml-1">See Profile</a>
    </div>  
  </div>
  </div>
  
   <div class="col-auto">
   <div class="card mt-3" style="width:280px">
    <img class="card-img-top" src="images/work.png" alt="Card image" style="width:100%">
	<div class="card-body">
      <h4 class="card-title">Time management</h4>
      <p class="card-text">time system is manage by the teacher and its depend by teacher then teacher will increase or decrease time.</p>
      <a href="" class="btn btn-primary ml-1">See Profile</a>
    </div>  
  </div>
  </div>
  
  <div class="col-auto">
   <div class="card mt-3" style="width:280px">
    <img class="card-img-top" src="images/LMS.jpg" alt="Card image" style="width:100%">
	<div class="card-body">
      <h4 class="card-title">Ranking</h4>
      <p class="card-text">this is compitition platform throught the online test and your can see your ranking.</p>
      <a href="" class="btn btn-primary ml-1">See Profile</a>
    </div>  
  </div>
  </div>
 </div>
</div>

</div>
</center>
<!---end center page------>


<!---footer---->
<center>
<div id="fff" style="overflow-x:hidden;">
 <footer class="bg-dark text-light text-center text-md-left"> 
	<div class="container">
		<div class="row pt-4">
			<div class="col-sm-6 col-md-3 pb-4" style="margin-left:px;">
				<h4 class="mb-4">
					Services
				</h4>
				<ul class="list-unstyled">
					<li>
						<a href="problem" class="text-light">problem</a>
					</li>
					<li>
						<a href="test-information" class="text-light">test-information</a>
					</li>
					<li>
						<a href="#" class="text-light"></a>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3 pb-4" style="margin-left:-100px;">
				<h4 class="mb-4">
					About
				</h4>
				<ul class="list-unstyled">
					<li>
						<a href="rank" class="text-light">rank</a>
					</li>
					<li>
						<a href="quiz" class="text-light">quiz-test</a>
					</li>
					<li>
						<a href="account" class="text-light">profile</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3 pb-4" style="margin-left:-100px;">
				<h4 class="mb-4">
					contact				
				</h4>
				<ul class="list-unstyled">
					<li>
						<a class="text-light">Email- deepakkurmi874@gmail.com<br>deepakkurmi2021@gmail</a>
					</li>
					<li>
						<a  class="text-light">900-727-2299</a>
					</li>
				</ul>
			</div>
						
			<div class="col-md-6 pb-4" style="position:relative;margin-left:650px;margin-top:-230px;" >
				<h4 class="mb-4">
				   <p  style="left:350px;position:relative;top:70px;color:white;" id="day"></p>
				     <p  style="left:350px;position:relative;top:60px;color:white;" id="clock"></p>
				</h4>
				<h4 class="mb-4">
					learing management system
					<p></p>
				</h4>
				<p>learing management system is best quiz sysemt of india.this is best way and easy to take test.</p>
				<p>in this platform you can improve your knowladge and practice </p>
			</div>
		</div>
		<div class="col d-flex justify-content-center mb-4">
			<a href="#" class="d-block px-3"><img src="https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-facebook-m.png" alt="Facebook" /></a><a href="#" class="d-block px-3"><img src="https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-twitter-m.png" alt="Twitter" /></a><a href="#" class="d-block px-3"><img src="https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-instagram-m.png" alt="Instagram" /></a><a href="#" class="d-block px-3"><img src="https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-linkedin-m.png" alt="Linkedin" /></a>
		</div>
		<p class="text-center text-secondary border-top border-secondary py-4">
			copyright © 2020 <br>
			Made by deepak kurmi
		</p>
	</div>
</footer>

 </div>
</center>
<!----footer end ---->


<?php
    $vkey="";
	$email="";
if(isset($_GET['vkey']) &&  isset($_GET['email']))
{
	$username="";
	$vkey = $_GET['vkey'];
	$email = $_GET['email'];
}	
?>
<!---jquery start  ---->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){

	
    $("#submit").click(function(){
	    var username = $("#username").val();
		var password = $("#password").val(); 
		
		if(username == "" && password == "" )
		{ 
	        $('#dialog #error3').hide();
	        $('#dialog #error1, #error2').show(); 
            $('#dialog').dialog("open");
		    $("#username,#password").css("border","1px solid red");
			$("#username,#password").on({
			     focus :function(){
					$(this).css("border","1px solid gray");	
				 }
			 });
			
		}
	   if( username != "" && password == "")
		{
            $('#dialog #error1').hide();		   
		   $('#dialog #error2, #error3').show();
		   $('#dialog').dialog("open");
		   $("#password").css("border","1px solid red");
			$("#password").on({
			     focus :function(){
					$(this).css("border","1px solid gray");	
				 }
			 });
		}
		if( username == "" && password != "")
		{ 
	        $('#dialog #error1').show();
			$('#dialog #error2,#error3').hide();
		   $('#dialog').dialog("open");
		   $("#username").css("border","1px solid red");
			$("#username").on({
			     focus :function(){
					$(this).css("border","1px solid gray");	
				 }
			 });
		}
		else
		{   
	        if( username != "" && password != ""  )
			{	
		      $.ajax({ 
		        url:"login.php",
			    type:"POST",
			    data:$("#form-data").serialize(),
			    success:function(data){
					if(data == 1)
					{
						$("#form-data").trigger("reset");
						window.location.href = "LMS";
						
					}
					else if(data == 2){
				       window.location.reload();
					}
					else
					{    
				        $("#password,#username").css("border","1px solid red");
			            $("#password,#username").on({
			            focus :function(){
					    $(this).css("border","1px solid gray");	
                        }
			            });
						$('#dialog').dialog("open");
                        $('#dialog').html(data);	
					}
				
				},
		      });
		    }
   
        }
   });		

$("#problem").click(function(){
		alert("This feature in working mode");
    });
  
   $("#dialog").dialog({	
			  draggable:false,
			  resizable:false,
			  closeOnEscape:false,
			  modal:true,
			  autoOpen:false,
			  width:430,
			  height:230,
		    });

$(document).ready(function(){ 
    
	$("#listbtn").click(function(){
		$(".list-content").toggle();
    });
   
});

});
</script>
<script>
$(document).ready(function(){ 
    var val = "<?php echo $vkey ?>";
	var email = "<?php echo $email ?>";

if(val !== "" && email !== "")
{
    $.ajax({
	    url :'verifyemail.php',
        type: 'POST',
        data:{vkey :val,
			  email  :email},
        success : function(data){
		    alert(data);
		    window.location.href= "LMS";
		},		  
	});
}
	   
});
</script>

<script>
function currentTime() {
  var date = new Date(); 
  var today = new Date();
   var day = today.getDay();
  var days = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  var a = "AM";
  a = (hour >= 12) ? "PM" : "AM"; 
  hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); 
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);
  document.getElementById("day").innerText =("Today is : " + days[day] + "  ");
  document.getElementById("clock").innerText =("Time Now is : " + hour +  " : " + min + " : " + sec + " " + a + "  ");
   var t = setTimeout(currentTime, 1000); 
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime();

</script>
</body>
</html>