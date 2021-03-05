<?php
session_start();
?>
<?php
if(isset($_SESSION['username']))
{	

$username = $_SESSION['username'];
include("database-connection.php");
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
	position:relative;
   height:auto;
   width:72%;
   left:183px;  
   top:-83px;
   -webkit-box-shadow: -1px 1px 7px -1px rgba(179,179,179,1);
  -moz-box-shadow: -2px 2px 15px -3px rgba(179,179,179,1);
   box-shadow: -3px 2px 2 overflow:auto;
   margin-bottom:-82px;
   overflow:auto;
}
.cover1
{
  height:auto;
  width:65%;
  box-shadow:5px 0px 5px -5px gray;
  background-color:#fafafa;
  float:left;

}
.cover2
{
  height:auto;
  margin-left:0px;
  width:32%;
  float:right; 
  margin-top:-30px;  
}
.image1
{
	position:relative;
	height:120px;
	width:600px;
	top:60px;
}
.img1
{
	height:80px;
	width:80px;
	margin-left:20px;
	margin-top:-28px;
	border-radius:50%;
	background-size:cover;
	border:1px solid gray;
	background-color:gray;
	
}
.lamp
{
	float:left;
	margin-left:110px;
	margin-top:-50px;
	font-size:20px;
	color:black;
}
.base1
{
	margin-left:30px;
	font-size:17px;
	color:black;
	font-family:Bodoni MT;
	cursor:pointer;
	margin-top:35px;
	
	
}
.base6
{
	margin-left:200px;
	color:gray;
	margin-top:-39px;
	font-size:14px;
}
.base2
{
	margin-left:30px;
	font-size:17px;
	color:black;
	font-family:Bodoni MT;
	cursor:pointer;
	margin-top:20px;
}
.base7
{
	margin-left:200px;
	color:gray;
	margin-top:-39px;
	font-size:14px;
}
.base3
{
	margin-left:30px;
	font-size:17px;
	color:black;
	font-family:Bodoni MT;
	cursor:pointer;
	margin-top:20px;
}
.base8
{
	margin-left:200px;
	color:gray;
	margin-top:-39px;
	font-size:14px;
}
.base4
{
	margin-left:30px;
	font-size:17px;
	color:black;
	font-family:Bodoni MT;
	cursor:pointer;
	margin-top:20px;
}
.base9
{
	margin-left:200px;
	color:gray;
	margin-top:-39px;
	font-size:14px;
}
.base5
{
	margin-left:30px;
	font-size:17px;
	color:black;
	font-family:Bodoni MT;
	cursor:pointer;
	margin-top:20px;
}
.base10
{
	margin-left:200px;
	color:gray;
	margin-top:-39px;
	font-size:14px;
}
.fieldset1
{
	height:500px;
	background-color:;
	width:90%;
	margin-top:50px;
	border:1px solid #eee;
}
#ten2
{
	position:relative;
	top:-9px;
	left:0px;
	height:auto;
	width:auto;
}
#per
{
	height:auto;
	width:auto;
	margin-top:-5px;
	border:1px solid #d4d4d4;
	background-color:#fafafa;
	font-size:14px;
	
}
#per td
{
	width:auto;
	height:auto;
}
#per thead 
{
	background-color:#525252;
}
.table-hover tr .w1
{position:relative;text-indent:20px;color:white;text-decoration:underline;}

.table-hover tr .w2
{position:relative;text-indent:40px;color:white;text-decoration:underline;}

.table-hover tr .w3
{position:relative;text-indent:50px;color:white;text-decoration:underline;}

.table-hover tr .c1
{position:relative;text-indent:17px;}

.table-hover tr .c2
{position:relative;text-indent:5px;}

.table-hover tr .c3
{position:relative;text-indent:20px;}

#color
{
	color:#3e69bd;
}
#number
{
	margin-left:137px;
	margin-top:60px;
	font-size:35px;
	color:#4d4948;
}
#rating
{
	color:#37426e;
	margin-left:101px;
	margin-top:20px;
	letter-spacing:1px;
	font-size:16px;
	text-decoration:underline;
	font-family:Yu Gothic UI Semibold;
	cursor:pointer;
}
#rating:hover
{
    text-decoration:none;	
}
#margin
{
}

#star1,#star2,#star3,#star4,#star5,#star6,#star7
{
	font-size:11px;
	color:white;
	margin-left:8px;
	margin-top:5px;
	
}
#back1,#back2,#back3,#back4,#back5,#back6,#back7
{
	background-color:#575457;
	height:25px;
	float:left;
}
#line1
{
	width:80%;
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
<?php $img = '';
if($_SESSION['image'] == "")
{ $img = "images/userprofile.jpg";}
else
{$img = $_SESSION['image'];}
?><image src="<?php echo $img; ?>" class="img1"/>
<p class="lamp">
<?php echo $_SESSION['name'];?>
</p>
</p>
<hr style="background-color:#949494;margin-top:-16px;width:95%;"></hr>
<p class="base1">username :</p><p class="base6"><?php echo $_SESSION['username'];?></p>
<hr style="background-color:#fafafa;width:95%;margin-top:-10px;"></hr>
<p class="base2">Branch  :</p><p class="base7"><?php echo $_SESSION['branch'];?></p>
<hr style="background-color:#fafafa;width:95%;margin-top:-10px;"></hr>
<p class="base3">Collage Name :</p><p class="base8"><?php echo $_SESSION['collagename'];?></p>
<hr style="background-color:#fafafa;width:95%;margin-top:-10px;"></hr>
<p class="base4">City & State :</p><p class="base9"><?php echo $_SESSION['city'];?></p>
<hr style="background-color:#fafafa;width:95%;margin-top:-10px;"></hr>
<p class="base5">Gender :</p><p class="base10"><?php echo $_SESSION['gender'];?></p>
<hr style="background-color:black;width:95%;margin-top:10px;"></hr>

<div class="problem">
<p style="color:gray;font-size:30px;margin-left:20px;margin-top:15px;">Attempt Test</p>


<p class="container-fluid" id="ten2" class="table-responsive">
 <table class="table table-hover" id="per">
    <thead>
      <tr>
        <th class="w1" >Test_Name</th>
        <th  class="w2">Start</th>
        <th  class="w3">End</th>
      </tr>
    </thead>
    <tbody>
    <?php

$string = "user".$_SESSION['id'];
$query="SELECT * FROM $string ORDER BY starttime DESC";
$run = mysqli_query($conn , $query);
$sum =0;
while($result = mysqli_fetch_assoc($run))
{
  $title =$result['title'];
  $starttime =$result['starttime'];
  $date1 = strtotime($starttime);
  $date2 = date('M d Y H:i',$date1);
  $endtime =$result['endtime'];
  $date3 = strtotime($endtime);
  $date4 = date('M d Y H:i',$date3);
  $contest =$result['contest_no'];
  $link = "show-result?id=".$contest;
?>

<tr>
<td class="c1"><a id="color" href="<?php echo $link;?>"><?php echo $title;?></a></td>
<td class="c2"><?php echo $date2;?></td> 
<td class="c3"><?php echo $date4 ;?></td>
</tr>
<?php
}

$userid = $_SESSION['id'];
$query51 = "SELECT rating,star FROM student_table WHERE id='$userid'";
$run3 = mysqli_query($conn , $query51);
$result0 = mysqli_num_rows($run3);
if($result0 == 1)
{
	$data1 = mysqli_fetch_assoc($run3);
	$sum = $data1['rating'];
	$starup = $data1['star'];
}

?>
</tbody>
</table>
</p>
</div>
</div>

<!--block2----->
<div class="cover2">
<fieldset class="fieldset1">
<p id="number"><?php echo $sum;?></p>
<table id="margin">
  
	       <tr id="back1"><td ><i  id="star1" class="far fa-star"></i></td></tr>
			
	       <tr id="back2"> <td ><i  id="star2" class="far fa-star"></i></td></tr>
		
	       <tr id="back3"><td><i id="star3" class="far fa-star"></i></td></tr>
		
	       <tr id="back4"><td><i  id="star4" class="far fa-star"></i></td></tr>
		
	       <tr id="back5"> <td><i  id="star5" class="far fa-star"></i></td></tr>
		   
		    <tr id="back6"> <td><i  id="star6" class="far fa-star"></i></td></tr>
			
			 <tr id="back7"> <td><i  id="star7" class="far fa-star"></i></td></tr>
		
</table>
<p id="rating">LMS Rating</p>
<hr id="line1"></hr>
</fieldset>
</div>
</div>
<?php
include("footer.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){ 
var sum ="<?php echo $sum; ?>";
var starup ="<?php echo $starup; ?>";
if(sum)
{
	$("#star1,#star2,#star3,#star4,#star5,#star6,#star7").hide();
	    if(sum >=0  && starup == 0)
	    {
		    $("#star1").show();
		    $("#back1").css("margin-left","131px");
	
		} 
	    if(sum >= 1 && starup == 0)
	    {
		    $("#star1").show();
		    $("#back1").css("margin-left","139px");
	
		} 
		if(sum >=1 && starup == 1)
		{
			$("#star1").show();
		    $("#back1").css("margin-left","129px");
		}
		if(sum >= 300 && starup == 1)
		{
		   $("#star1,#star2").show();
		   $("#back1").css("margin-left","120px");
		
		}
		if(sum >=300 && starup == 2)
		{
		   $("#star1,#star2").show();
		   $("#back1").css("margin-left","120px");
	
		}
		if(sum >= 600 && starup == 3)
		{
		    $("#star1,#star2,#star3").show();
		    $("#back1").css("margin-left","111px");

		}
		if(sum >= 1000  && starup == 4)
		{
		    $("#star1,#star2,#star3,#star4").show();
		    $("#back1").css("margin-left","98px");

		}
		if(sum >=2000 && starup == 5)
		{
		    $("#star1,#star2,#star3,#star4,#star5").show();
		    $("#back1").css("margin-left","85px");
		}
		if(sum >=3000 && starup == 6)
		{
		    $("#star1,#star2,#star3,#star4,#star5,#star6").show();
		    $("#back1").css("margin-left","78px");

		}
		if(sum >=5000 && starup == 7)
		{
		    $("#star1,#star2,#star3,#star4,#star5,#star6,#star7").show();
		    $("#back1").css("margin-left","62px");
	
		}
	
}


if(sum)
{
  if(sum >=1)
  {
    $("#number").css("margin-left","135px");  
  }
  if(sum >=10)
  {
    $("#number").css("margin-left","125px");  
  }
  if(sum >= 100)
  {
    $("#number").css("margin-left","115px");  
  }
   if(sum >= 100 && starup == 2)
  {
    $("#number").css("margin-left","118px");  
  }
   if(sum >= 100 && starup == 3)
  {
    $("#number").css("margin-left","120px");  
  }
  if(sum >= 1000)
  {
    $("#number").css("margin-left","105px");  
  }
  if(sum >= 2000)
  {
    $("#number").css("margin-left","105px");  
  }
  if(sum >= 3000)
  {
    $("#number").css("margin-left","108px");  
  }
  if(sum >= 5000)
  {
    $("#number").css("margin-left","106px");  
  }
}

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