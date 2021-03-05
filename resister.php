<?php
session_start();
?>
<?php
if(isset($_SESSION['username']))
{	
   header("location: LMS");
}
else
{
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#body{ 
    height:950px;
	width:70%;
	margin-top:200px;
   -webkit-box-shadow: 0px 4px 5px 3px rgba(125,125,125,0.7);
   -moz-box-shadow: 0px 4px 5px 3px rgba(125,125,125,0.7);
    box-shadow: 0px 4px 5px 3px rgba(125,125,125,0.7);
	}
.earth{
	position:relative;
	top:-73px;
	bottom:0;
	left:8px;
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
@keyframes spin{
	  100%{background-position:100%;} 
    }
#www{
  height:100px;
  width:100%;
  background-color:#eee;
   }
#zzz{
	width:40%;
	float:left;
}
#rrr{
	width:40%;
	float:right;
	margin-right:40px;
	height:800px;
    }
.verticalline{
	border-left:1px solid lightgray;
	height:600px;
	float:left;
	margin-left:105px;
	width:20px;
    }
#zzz td{
	padding:10px;
    }
#zzz input[type=text],input[type=password],input[type=email]{
     height:35px;
     width:260px;
     text-indent:7px;
     margin-left:170px;
     border:1px solid lightgray; 
	 outline:none;
	 border-radius:10px
	 }
#zzz input[type=text]:focus,input[type=password]:focus,input[type=email]:focus{
	border-left:4px solid DodgerBlue;
	background-color:none;
     }

 #zzz input[type=radio]{
	 margin:4px;
	 }

#ccc{
	height:35px;
     width:260px;
     text-indent:7px;
     margin-left:170px;
     border:1px solid lightgray; 
	 outline:none;
	 border-radius:10px;
    }
#ccc:focus{
	border-left:4px solid DodgerBlue;
	background-color:none;
    }
.city{
	 height:35px;
     width:260px;
     text-indent:7px;
     margin-left:170px;
     border:1px solid lightgray; 
	 outline:none;
	 border-radius:10px;
	}
.city:focus{
	border-left:4px solid DodgerBlue;
	background-color:none;
    }
#tab{
    margin-left:175px;
    }
#item1,#item2{
	display:none;
	margin-left:-173px;
    }
#item1 input{
   margin:10px;
    }
.collage{
	 height:35px;
     width:260px;
     text-indent:7px;
     margin-left:170px;
     border:1px solid lightgray; 
	 outline:none;
	 border-radius:10px;
     margin-top:10px;
    }
.collage:focus{
	border-left:4px solid DodgerBlue;
	background-color:none;
    }
#submit{
	margin-left:170px;
	height:40px;
	width:260px;
	color:white;
	background-color:Dodgerblue;
	border:none;
    }
#submit:hover{
	box-shadow:3px 3px 9px gray;
    }
#fff li{
	font-size:12px;
	margin-right:50px;
	}
#fff{
	margin-right:100px;
	margin-top:20px;
    }
#aa,#bb,#cc,#dd,#ee,#ff,#gg,#hh,#ii,#jj,#kk,#ll,#mm{
	display:none;
    }
#open ,#closed{
	margin-left:400px;
	margin-top:-25px;
	font-size:15px;
	}
 .color
 {
	 color:red;
 }
#msg-box {
	   border-radius: 0px 0px 53px 53px;
      -moz-border-radius: 0px 0px 53px 53px;
      -webkit-border-radius: 0px 0px 53px 53px;
       border: 1px dotted #3d0606;
      -webkit-box-shadow: 0px 3px 4px 0px rgba(38,25,19,1);
      -moz-box-shadow: 0px 3px 4px 0px rgba(38,25,19,1);
      box-shadow: 0px 3px 4px 0px rgba(38,25,19,1);
	  position:absolute;
	  top:0px;
	  width:100%;
	 height:80px;
	 background-color:#eee;
	 display:none;
  }
#msg-box p{
	text-align:center;
	margin-top:30px;
	color:red;
	font-size:18px;
	letter-spacing:1px;
	word-spacing:1px;
	font-family:ALGERIAN;
}
</style>
</head>
<body id="box">
<div id="msg-box">
<p>All field required</p>
</div>
<center>
<div id="body">
<div id="www">
     <p class="earth"></p>
     <p style="margin-top:-55px;margin-left:18px;font-size:23px;font-family:ALGERIAN;color:black;">New User</p>
  </div> 
  <div style="margin-top:50px;">
     <pre style="color:black;">Create Your Learning Management System Account
    It will not take long.</pre>
     <hr style="width:50%;background-color:lightgray;"/>
  </div>
<div style="background-color:;height:700px;width:100%;margin-top:70px;">
  <div id="zzz">
   <table>
   <form id="form-data" enctype="maltipart/form-data" onsubmit="return false">
    <tr>
     <td><input type="text" name="username" placeholder="Username" autocomplete="off" id="deepak">
	     <i class="fa fa-check" aria-hidden="true" style="margin-left:400px;margin-top:-25px;display:none;color:green;" id="icon1"></i>
	 </td>
    </tr>
    <tr>
     <td><input type="text" name="name" placeholder="Name" autocomplete="off" id="b">
	     <i class="fa fa-check" aria-hidden="true" style="margin-left:400px;margin-top:-25px;display:none;color:green;" id="icon2"></i>
	 </td>
    </tr>
    <tr>
     <td><input type="email" name="email" placeholder="Email" autocomplete="off" id="c">
	     <i class="fa fa-check" aria-hidden="true" style="margin-left:400px;margin-top:-25px;display:none;color:green;" id="icon3"></i>
	 </td>
    </tr>
    <tr>
      <td><div><input type="password" name="password" placeholder="Password" autocomplete="off" id="d">
	  <i class="fa fa-check" aria-hidden="true" style="margin-left:380px;margin-top:-25px;display:none;color:green;" id="icon4"></i>
        <i id="open" class="fa fa-eye fa-2x"></i>
        <i id="closed" class="fa fa-eye-slash fa-2x"></i>
	      </div>
      </td>
    </tr>
    <tr>
      <td>
       <div style="margin-left:175px;">
        <input type="radio"  name="gender" value="male" class="e">
        <label for="male" style="color:gray;">Male</label>
        <input type="radio" name="gender" value="female" class="e" >
        <label for="female" style="color:gray;">Female</label>
        <input type="radio" name="gender" value="other" class="e" >
        <label for="female" style="color:gray;">other</label>
       </div>
      </td>
    </tr>
    <tr>
     <td>
         <input id="autocomplete"  class="f" name="city" placeholder="Enter your address" onFocus="geolocate()" type="text" />
    </select>
     </td>
     </tr>
     <tr><td><input type="text" name="branch" placeholder="Branch" autocomplete="off" id="h">
	 <i class="fa fa-check" aria-hidden="true" style="margin-left:400px;margin-top:-25px;display:none;color:green;" id="icon5"></i>
	 </td>
    </tr> 
     <tr>
    <td><select class="collage" name="collage" id="i">
        <option  value="" selected  hidden>Select Your collage</option>
        <option value="(SGI)">Sagar Institute Of Research And Technology (SGI), Bhopal</option>
        <option value="( MANIT)">Maulana Azad National Institute Of Technology ( MANIT) , Bhopal</option>
        <option value="( TITR)">Trinity Institute Of Technology & Research ( TITR) , Bhopal</option>
        <option value="( VIT)">Vedica Institute Of Technology ( VIT) , Bhopal</option>
		<option value="( BANSAL COLLEGE)">Bansal Institute Of Research And Technology ( BANSAL COLLEGE) , Bhopal</option>
		<option value="( JLU)">Jagran Lakecity University ( JLU) , Bhopal</option>
		<option value="( IAE BHOPAL)">IAE Bhopal ( IAE BHOPAL) , Bhopal</option> 
		<option value="( SPA)">School Of Planning And Architecture ( SPA) , Bhopal</option>
		<option value="VGI">VNS Group Of Institutions , Bhopal</option>
		<option value="( NITTTR BHOPAL)">National Institute Of Technical Teachers Training And Research ( NITTTR BHOPAL) , Bhopal</option>
		<option value="( BCAP)">BAGULAMUKHI COLLEGE OF ARCHITECTURE & PLANNING ( BCAP) , Bhopal</option>
		<option value="( BCE)">Bansal College Of Engineering ( BCE) , Bhopal</option> 
		<option value="( LNCT)">Lakshmi Narain College Of Technology ( LNCT) , Bhopal</option> 
        <option value="( GGI BHOPAL)">Girdhar Shiksha Evam Samaj Kalyan Samiti Group ( GGI BHOPAL) , Bhopal</option>
     	<option value="( RDIST)">Rukmani Devi Institute Of Science & Technology ( RDIST) , Bhopal</option>
        <option value="( ASCE ) ">All Saints College Of Engineering ( ASCE ) , Bhopal</option> 
        <option value="( CCT)">Crescent College Of Technology ( CCT) , Bhopal</option>
     	<option value="( SAMCET)">SAM College Of Engineering & Technology ( SAMCET) , Bhopal</option>  		
        <option value="( SVCST)">Swami Vivekanand College Of Science & Technology ( SVCST) , Bhopal</option> 
        <option value="( SIST)">Shree Institute Of Science And Technology ( SIST) , Bhopal</option>
     	<option value="( RGPM BHOPAL)">Rajeev Gandhi Proudyogiki Mahavidyalaya ( RGPM BHOPAL) , Bhopal</option>  		
        </select>
       </div> 
	</td>
    </tr>
    <tr><td><input type="submit" name="submit" value="Ragister" id="submit" ></td>
    </tr>
 </form> 
 </table>
</div>

<div class="verticalline"></div>
<center>
<div id="rrr">
<div style="background-color:#f7f7f7;" id="aa">
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="margin-right:230px;font-size:12px;color:gray;">
Username Example:<br>
deepak123 or deepak_123</p>
<hr  style="margin-right:150px;background-color:#eee;height:-1px;width:60%;margin-top:-9px;"/>
<ul id="fff">
<li>Must start with a lowercase letter 
    from (a-z)</li>
<li>Must be between 4 to 15 characters 
    long</li>
<li>Must end with a letter (a-z) or 
    number (0-9)</li>
<li>Must not contain a sequence of two or more 
    underscores (_)</li>
<li>Can contain lowercase letters from (a-z), 
    digits or one underscores</li>
</ul>
<hr  style="margin-right:150px;background-color:#eee;height:-1px;width:60%;margin-top:-9px;"/>
<pre style="margin-right:105px;font-size:12px;">
 Note: Choose wisely your username,for
 you will not be able to change it later.</pre>
</div>

<div style="background-color:#f7f7f7;" id="bb">
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="font-size:12px;margin-right:170px;margin-top:13px;">Name:</p>
<hr  style="margin-right:130px;background-color:#eee;height:-1px;width:60%;margin-top:-10px;">
<p style="font-size:12px;margin-right:160px;margin-top:10px;">What would you like to be called?</p>
<p style="font-size:12px;margin-right:160px;margin-top:10px;">
<ul   style="font-size:12px;margin-right:90px;">
<li>Must use one uppercase letter (A-Z)
    in beginning</li>
<li>Must be between 4 to 14 characters 
    long</li>
</ul>
</p>
</div>


<div style="background-color:#f7f7f7;" id="cc" >
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="font-size:12px;margin-right:170px;margin-top:13px;">Email:</P>
<hr  style="margin-right:130px;background-color:#eee;height:-1px;width:60%;margin-top:-10px;">
<p style="font-size:12px;margin-right:160px;margin-top:10px;">
<ul   style="font-size:12px;margin-right:50px;">
<li>Please Fill Email correct and careful. </li>
<li>use @gmail.com</li>
<li>use lowercase letter [a - z] and special charactors 
    like- <p style="font-size:25px;">. , _ , -</p> </</li>
</ul>
</p>
</div>

<div style="background-color:#f7f7f7;" id="dd">
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="font-size:12px;margin-right:170px;margin-top:13px;">Password:</P>
<hr  style="margin-right:130px;background-color:#eee;height:-1px;width:60%;margin-top:-10px;">
<p style="font-size:12px;margin-right:160px;margin-top:10px;">
<ul style="font-size:12px;margin-right:170px;">
<li>Must be between 8 to 14 characters 
    long</li>
<li>one uppercase letter [A - Z]</li>
<li>one lowercase letter [a - z]</li>
<li>must use one digit [0 - 9]</li>
</ul></p>
</div>

<div style="background-color:#f7f7f7;"  id="ee">
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="font-size:12px;margin-right:170px;margin-top:13px;">Gender:</P>
<hr  style="margin-right:130px;background-color:#eee;height:-1px;width:60%;margin-top:-10px;">
<p style="font-size:12px;margin-right:160px;margin-top:10px;">
<ul style="font-size:12px;margin-right:170px;">
<li>Just trying to know you a bit more.</li>
<li>This will help us in giving you the 
    right merchandise.</li>
</ul></p>
</div>


<div style="background-color:#f7f7f7;" id="ff"> 
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="font-size:12px;margin-right:170px;margin-top:13px;">City:</P>
<hr  style="margin-right:130px;background-color:#eee;height:-1px;width:60%;margin-top:-10px;">
<p style="font-size:12px;margin-right:160px;margin-top:10px;">E.g. Mumbai,dehli exc.</P>
</div>

<div  style="background-color:#f7f7f7;" id="hh"> 
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="font-size:12px;margin-right:170px;margin-top:13px;">Your Branch:</P>
<hr  style="margin-right:130px;background-color:#eee;height:-1px;width:60%;margin-top:-10px;">
<p style="font-size:12px;margin-right:160px;margin-top:10px;">E.g-CSE,ME,CE exc.</P>
</div>

<div  style="background-color:#f7f7f7;margin-top:50px;" id="ii"> 
<hr  style="margin-right:180px;background-color:DodgerBlue;height:-1px;width:70%;">
<p style="font-size:12px;margin-right:170px;margin-top:13px;">collagename</P>
<hr  style="margin-right:130px;background-color:#eee;height:-1px;width:60%;margin-top:-10px;">
<p style="font-size:12px;margin-right:160px;margin-top:10px;">E.g-SIRT-E</P>
</div>

</div>
</center>
</div>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFqZK-UIXS_xpNYXis6ctW95zcaMybdsI&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
  
<script>
//msg for pattern
$(document).ready(function(){
  $(".button1").on({
    focus: function(){
      $("#item1").show();
	  $("#item2").hide();}
    });  
    
  $(".button2").on({
	focus: function(){
      $("#item1").hide();
	  $("#item2").show();}
    });
 
  $("#deepak").click(function(){
    $("#aa").show();
	 $("#aa").css("margin-top","20px");
	});

   $("#deepak").on({
     blur: function(){
      $("#aa").hide();}
   });
  
   $("#b").on({
	focus: function(){
    $("#bb").show();
	 $("#bb").css("margin-top","70px");
	},
	blur: function(){
    $("#bb").hide();}
   });
	
	$("#c").on({
	focus: function(){
    $("#cc").show();
	 $("#cc").css("margin-top","127px");
	},
	blur: function(){
    $("#cc").hide();}
	});
	
	$("#d").on({
	focus: function(){
    $("#dd").show();
	 $("#dd").css("margin-top","180px");
	},
	blur: function(){
    $("#dd").hide();}
	});
	
	$(".e,.e,.e").on({
	focus: function(){
    $("#ee").show();
	 $("#ee").css("margin-top","237px");
	},
	blur: function(){
    $("#ee").hide();}
	});
	
	 $(".f").on({
	focus: function(){
    $("#ff").show();
	 $("#ff").css("margin-top","280px");
	},
	 blur: function(){
    $("#ff").hide();}
	});
	
	 $("#h").on({
	focus: function(){
    $("#hh").show();
	 $("#hh").css("margin-top","335px");
	},
	blur: function(){
    $("#hh").hide();}
	});
	
    $("#i").on({
    focus: function(){
     $("#ii").show();
	  $("#ii").css("margin-top","400px");
	},
	 blur: function(){
     $("#ii").hide();}
	});

    $("#open").click(function(){
		$("#open").hide();
		$("#closed").show();
		$("#d").attr("type","text");
	});
	
	$("#closed").click(function(){
		$("#open").show();
		$("#closed").hide();
		$("#d").attr("type","password");
	});
});	
	
//form validation for field 	
$(document).ready(function(){
	$("#submit").click(function(){
		 var username = $("#deepak").val(); 
		 var name     = $("#b").val();
		 var email    = $("#c").val();   
		 var password = $("#d").val();
		 var city     = $("#f").val();
		 var branch   = $("#h").val();
		 var collage  = $("#i").val();

        if(username == ""||name == "" || email == "" || password == "" || !$('input:radio[name=gender]').is(':checked') ||city == "" || branch == "" ||collage == ""){
			if(username == ""){
			 $("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			 $("#deepak").css("border","1px solid red");
			 $("#deepak").on({
		        focus: function(){
				$("#deepak").css("border","1px solid lightgray");}
			 });
			}
		   
			if(name == ""){
			 $("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			 $("#b").css("border","1px solid red");
			 $("#b").on({
		        focus: function(){
				$("#b").css("border","1px solid lightgray");}
			 });
			}
			if(email == ""){
			 $("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			  $("#c").css("border","1px solid red");
			 $("#c").on({
		        focus: function(){
				 $("#c").css("border","1px solid lightgray");}
			 });
			}
			if(password == ""){
			$("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			 $("#d").css("border","1px solid red");
			 $("#d").on({
		        focus: function(){
				$("#d").css("border","1px solid lightgray");}
			 });
			}
            if(!$('input:radio[name=gender]').is(':checked')){
			 $("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			 }
			
			if(city == ""){
			 $("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			   $(".f").css("border","1px solid red");
			   $(".f").on({
		        focus: function(){
				$(".f").css("border","1px solid lightgray");}
			 });
			}
			
			if(branch == ""){
			 $("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			 $("#h").css("border","1px solid red");
			 $("#h").on({
		        focus: function(){
				$("#h").css("border","1px solid lightgray");}
			 });
			}
			if(collage == ""){
				$("#msg-box").slideDown(1000);
			 window.scrollTo(0, 0);
			 setTimeout(function(){
				  $("#msg-box").fadeOut();
			 },4000);
		     $("#msg-box p").html("* All field is required.");
			 $("#i").css("border","1px solid red");
			 $("#i").on({
		        focus: function(){
				$("#i").css("border","1px solid lightgray");}
			 });
			} 
	    }
         
		else{
		       $("#msg-box").slideDown(1000);
			        window.scrollTo(0, 0);
				    $("#msg-box p").html("please wait for responce only few secondes");
			        setTimeout(function(){
				    $("#msg-box").fadeOut();
			        },20000);
		     $.ajax({
			  url : 'insert-student-data.php',
			  type: "POST",
			  data: $("#form-data").serialize(),
			  beforesend: function(e){
			      $("#msg-box").slideDown(1000);
			      window.scrollTo(0, 0);
				  $("#msg-box p").html("Loading responce...");
			      setTimeout(function(){
				  $("#msg-box").fadeOut();
			     },4000);
		         $("#msg-box p").html("* All field is required.");
			    },
			success: function(data){
				
            if(data == 1 || data == 2 || data == 3 || data == 4  || data == 5)
			{
			  if(data == 1){
				
				 $("#msg-box").slideDown(1000);
			     window.scrollTo(0, 0);
				 $("#msg-box p").html("*username want wrong");
			     setTimeout(function(){
				   $("#msg-box").fadeOut();
			     },4000);
				}
				
				if(data == 2){
				
				 $("#msg-box").slideDown(1000);
			     window.scrollTo(0, 0);
				 $("#msg-box p").html("*name want wrong");
			     setTimeout(function(){
				   $("#msg-box").fadeOut();
			     },4000);
				}
				if(data == 3){
				
				 $("#msg-box").slideDown(1000);
			     window.scrollTo(0, 0);
				 $("#msg-box p").html("*email want wrong");
			     setTimeout(function(){
				   $("#msg-box").fadeOut();
			     },4000);
				}
				if(data == 4){
				
				 $("#msg-box").slideDown(1000);
			     window.scrollTo(0, 0);
				 $("#msg-box p").html("*password want wrong");
			     setTimeout(function(){
				   $("#msg-box").fadeOut();
			     },4000);
				}
				if(data == 5){
				 
				 $("#msg-box").slideDown(1000);
			     window.scrollTo(0, 0);
				 $("#msg-box p").html("*branch want wrong");
			     setTimeout(function(){
				   $("#msg-box").fadeOut();
			     },4000);
				}
				
			}
			
			else if(data == 7){
				    $("#msg-box").slideDown(1000);
			        window.scrollTo(0, 0);
				    $("#msg-box p").html("something went wrong.");
			        setTimeout(function(){
				    $("#msg-box").fadeOut();
			        },4000);
				}
		        
				else{
                        $("#box").html(data);
					}
			
			
			},
			 });
		       		
		
		}

		
	});	 
});		 
		  
// patten or fitter 
$(document).ready(function(){	 
$("#deepak").blur(function(){
	  $("#deepak").css("border","1px solid lightgray");
	  $("#icon1").hide();
    if(!$("#deepak").val() == "")
    {  
	  var regexp = /^[a-z0-9_]{4,15}$/;
	    if(regexp.test($("#deepak").val()))
		{
		    $('#deepak').css("border","1px solid green");
		    $("#one").hide();
	    }
		else{
		  $('#deepak').css("border","1px solid lightgray");
		   
            if(!$("#deepak").val() == "")
			{ 
             $("#icon1").hide();		
		     $('#deepak').css("border","1px solid red");
		     $("#msg-box").slideDown(1000);
			    window.scrollTo(0, 0);
				 $("#msg-box p").html("* Follow specification");
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		   }
        }
	
	}    
  });



$("#b").blur(function(){
	  $("#b").css("border","1px solid lightgray");
	  $("#icon2").hide();
    if(!$("#b").val() == "")
    {  
	  var regexp = /^[A-Z][a-z\s]{0,15}$/;
	    if(regexp.test($("#b").val()))
		{
		    $('#b').css("border","1px solid green");
		    $("#two").hide();
	    }
		else{
		  $('#b').css("border","1px solid lightgray");
		    if(!$("#b").val() == "")
			{ 
             $("#icon2").hide();		
		    $('#b').css("border","1px solid red");
		    $("#msg-box").slideDown(1000);
			    window.scrollTo(0, 0);
				 $("#msg-box p").html("* Follow specification");
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		   }
        }
	
	}    
  });


$("#c").blur(function(){
	  $("#c").css("border","1px solid lightgray");
	  $("#icon3").hide();
    if(!$("#c").val() == "")
    {  
	  var regexp = /[a-z0-9._%+-]+@[a-z.]+\.[com]{3}$/;
	    if(regexp.test($("#c").val()))
		{
		    $('#c').css("border","1px solid green");
			
	    }
		else{
		  $('#c').css("border","1px solid lightgray");
		  $("#icon3").hide();
            if(!$("#c").val() == "")
			{ 		
		        $('#c').css("border","1px solid red");
			    $("#icon3").hide();
		        $("#msg-box").slideDown(1000);
			    window.scrollTo(0, 0);
				 $("#msg-box p").html("* Follow specification");
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		   }
        }
	
	}    
  });


  
  
 $("#c").blur(function(){
	$("#icon3").hide();
	 $("#c").css("border","1px solid lightgray");
	if(!$("#c").val() == ""){
	    $.ajax({
		    url:"filteremail.php",
			type:"POST",
		    data: {email: $("#c").val()},
			success: function(data)
			{
			  if(data == 0)
			  {
				$("#c").css("border","1px solid green");
              }
			else{
			    $("#icon3").hide(); 
			    $("#c").css("border","1px solid red");
				$("#icon3").hide(); 
				$("#msg-box").slideDown(1000);
				 $("#msg-box p").html("fack email");
			    window.scrollTo(0, 0);
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		            
	        }        			
			    
			},
		
  		});	 
 
    } 
  });
  

$("#d").blur(function(){
	  $("#d").css("border","1px solid lightgray");
	  $("#icon4").hide();
    if(!$("#d").val() == "")
    {  
	  var regexp = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}/;
	    if(regexp.test($("#d").val()))
		{
		    $('#d').css("border","1px solid green");
		     $("#icon4").show();	
			$("#four").hide();
	    }
		else{
		  $('#d').css("border","1px solid lightgray");
		    if(!$("#d").val() == "")
			{ 
             $("#icon4").hide();		
		    $('#d').css("border","1px solid red");
		     $("#msg-box").slideDown(1000);
			    window.scrollTo(0, 0);
				$("#msg-box p").html("* Follow specification");
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		   }
        }
	
	}    
  });



$("#h").blur(function(){
	  $("#h").css("border","1px solid lightgray");
	  $("#icon5").hide();
    if(!$("#h").val() == "")
    {  
	  var regexp = /^[C-S]{2,3}$/;
	    if(regexp.test($("#h").val()))
		{
		    $('#h').css("border","1px solid green");
		     $("#icon5").show();	
	    }
		else{
		  $('#h').css("border","1px solid lightgray");
		    if(!$("#h").val() == "")
			{ 
             $("#icon5").hide();		
		    $('#h').css("border","1px solid red");
		     $("#msg-box").slideDown(1000);
			    window.scrollTo(0, 0);
				$("#msg-box p").html("* Follow specification");
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		   }
        }
	
	}    
  });
//already exitest 	
  $("#deepak").blur(function(){
	if(!$("#deepak").val() == ""){
	    $.ajax({
		    url:"checkusername.php",
			type:"POST",
		    data: {username: $("#deepak").val()},
			success: function(data)
			{
			  if(data == 0)
			  {
			    $("#icon1").hide();
				$("#deepak").css("border","1px solid red");
				$("#msg-box").slideDown(1000);
			    window.scrollTo(0, 0);
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		        $("#msg-box p").html("sorry already exitest");
                }
				else{
					var regexp = /^[a-z0-9_]{4,15}$/;
	                if(regexp.test($("#deepak").val()))
		            {
					  $("#icon1").show();
                   	}				
			    }
			},
		
  		});	 
 
    } 
  });
	
$("#b").blur(function(){
	if(!$("#b").val() == ""){
	    $.ajax({
		    url:"checkname.php",
			type:"POST",
		    data: {name: $("#b").val()},
			success: function(data)
			{
			  if(data == 0)
			  {
			    $("#icon2").hide();
				$("#b").css("border","1px solid red");
				$("#msg-box").slideDown(1000);
			    window.scrollTo(0, 0);
			    setTimeout(function(){
				$("#msg-box").fadeOut();
			    },3000);
		        $("#msg-box p").html("sorry already exitest");
                }
				else{
					var regexp = /^[A-Z][a-z\s]{0,15}$/;
	                if(regexp.test($("#b").val()))
		            {
					  $("#icon2").show();
                   	}				
			    }
			},
		});	 
 
    }
  }); 
 
  
$("#c").blur(function(){
	$("#c").css("border","1px solid lightgray");
	 $("#icon3").hide();
	if(!$("#c").val() == ""){
		$.ajax({
		    url:"checkemail.php",
			type:"POST",
		    data: {email: $("#c").val()},
			success: function(data)
			{
	            if(data == 0){
				    $("#c").css("border","1px solid lightgray");
					$("#icon3").hide();
					if(!$("#c").val() == ""){
					$("#icon3").hide();
					$("#c").css("border","1px solid red");
				    $("#msg-box").slideDown(1000);
			        window.scrollTo(0, 0);
			        setTimeout(function(){
				    $("#msg-box").fadeOut();
			        },3000);
		            $("#msg-box p").html("sorry already exitest");
					}
			    
				
				}else{
					$("#c").css("border","1px solid lightgray");
					$("#icon3").hide();
					if(!$("#c").val() == ""){
						
					$.ajax({
		             url:"filteremail.php",
			         type:"POST",
		             data: {email: $("#c").val()},
			        success: function(data)
			        {
	                   var regexp = /[a-z0-9._%+-]+@[a-z.]+\.[com]{3}$/;
	                   if(regexp.test($("#c").val()))
		                {
		                   $("#c").css("border","1px solid green");
					        $("#icon3").show();
				        }
					    else
						{
							$("#c").css("border","1px solid red");
				        }
					 
					 
					 },
				  
					
				  
				 });		
			    }
			 }
			},
		
  		});	 
 
    } 
});





});
</script>

<script>
      let placeSearch;
      let autocomplete;
      const componentForm = {
        street_number: "short_name",
        route: "long_name",
        locality: "long_name",
        administrative_area_level_1: "short_name",
        country: "long_name",
        postal_code: "short_name",
      };

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
          document.getElementById("autocomplete"),
          { types: ["geocode"] }
        );
     
        autocomplete.setFields(["address_component"]);
    
        autocomplete.addListener("place_changed", fillInAddress);
      }

      function fillInAddress() {
       
        const place = autocomplete.getPlace();

        for (const component in componentForm) {
          document.getElementById(component).value = "";
          document.getElementById(component).disabled = false;
        }

  
        for (const component of place.address_components) {
          const addressType = component.types[0];

          if (componentForm[addressType]) {
            const val = component[componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }
	  
	  
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition((position) => {
            const geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
            };
            const circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy,
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
</body>
</html>
<?php
}
?>