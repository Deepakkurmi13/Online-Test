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
