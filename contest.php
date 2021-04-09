<?php
session_start();
?>

<?php
if(isset($_SESSION['username']) && isset($_GET['id']))
{
	include("database-connection.php");
	    $userid = $_SESSION["id"];
        $tname ="user".$userid;
	    $id = $_GET['id'];	
        $query20 = "SELECT * FROM $tname WHERE contest_no=$id";
        $sql55 = mysqli_query($conn ,$query20);
        $result2 = mysqli_num_rows($sql55);
				
        if($result2 == 1)
        {	
    ?>    
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script> 
		    $(document).ready(function(){ 
		    alert("Already responsed");
			window.location.href="quiz";
			});
		</script>
    <?php		
		}
         else
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
body
{
	
}
#box1
{
	height:150px;
    width:50%;
	margin-top:10px;
	border-radius:10px;
	box-shadow:-0px -0px -0px 1px #eee;
}
.image1
{
	margin-left:-20px;
	box-shadow:-0px -0px -0px 1px #eee;
	border-radius:10px;
}
#box2
{
	height:auto;
    width:50%;
	margin-top:15px;
	border-radius:10px;
	box-shadow:0px 0px 4px gray;
	border-top:10px solid #22205e;
    resize: none;
    overflow: hidden;
    font-size:16px;
}
.para1
{
	position:relative;
	font-size:30px;
	color:black;
	top:30px;
	left:15px;
}
.para2
{
	position:relative;
	font-size:15px;
	color:black;
	left:15px;
	top:15px;
}
#box4
{
	height:auto;
    width:50%;
	margin-top:15px;
	border-radius:10px;
	box-shadow:0px 0px 5px gray;
    resize: none;
    overflow: hidden;
    font-size:16px;
}
.para3
{
	font-size:17px;
	color:black;
	margin-left:28px;
	margin-top:10px;
}
#para4
{
	margin-left:20px;
	height:18px;
	width:18px;
	margin-top:2px;	
}
#roll
{
	
    margin-top:-20px;
    display: block;
    margin-left:45px;
}
#para5
{
	margin-left:20px;
	margin-top:10px;
	margin:5px;
}
#roll2
{
	position:relative;
	top:31px;
	margin-left:10px;
}
#button
{
	margin-left:350px;
	margin-top:40px;
	border-radius:3px;
	border:none;
	background-color:#22205e;
	color:white;
	font-size:18px;
	width:100px;
	height:35px;
	box-shadow:1px 1px 4px gray;
}
#button:hover
{
	background-color:#724f75;
}
#para6
{
	margin-left:350px;
	margin-top:3px;
	border:none;
	outline:none;
	background-color:white;
	color:white;
	font-size:18px;
	width:100px;
	height:35px;
	box-shadow:1px 1px 4px gray;
}
#box5
{
	height:auto;
    width:50%;
	margin-top:15px;
	border-radius:10px;
	box-shadow:0px 0px 4px gray;
	border-top:10px solid #22205e;
    resize: none;
    overflow: hidden;
    font-size:16px;
}
.para6
{
	font-size:20px;
	color:green;
	margin-top:20px;
	margin-left:15px;
}
.para7
{
	font-size:20px;
	color:red;
	margin-left:15px;
	margin-top:20px;
}
.para8
{
	font-size:20px;
	color:gray;
	margin-left:15px;
	margin-top:20px;
}
#move
{
	margin-left:130px;
}
#line
{
	
	border-left:2px solid gray;
	height:25px;
	width:2px;
	margin-left:15px;
	margin-top:25px;
}
#icon
{
	position:relative;
	top:-2px;
	font-size:20px;
	color:gray;
}
.para15
{
	position:relative;
	font-size:12px;
	color:gray;
	left:450px;
	top:20px;
	text-decoration:underline;
}
.para16
{
	position:relative;
	font-size:12px;
	color:gray;
	left:450px;
	top:10px;
	text-decoration:underline;
}
#icon1
{
    position:relative;
	top:1px;
	font-size:20px;
	left:-31px;	
}
#mark 
{
  position:relative;
  top:-20px;
  display: block;
  left:15px;
}
#button
{
	margin-left:590px;
	margin-top:40px;
	border-radius:3px;
	border:none;
	background-color:#22205e;
	color:white;
	font-size:18px;
	width:150px;
	height:35px;
	box-shadow:1px 1px 4px gray;
}
#button:hover
{
	background-color:#724f75;
}
#timeout
{
	position:relative;
	font-size:20px;
	left:470px;
	top:-35px;
	color:white;
}
#time
{
	position:relative;
	font-size:20px;
	left:465px;
	top:-35px;
	text-decoration:underline;
	color:white;
}
/*#button-show*/
{
	height:40px;
	width:150px;
	margin-top:155px;
	margin-left:595px;
	font-size:18px;
    background-color:#22205e;
	color:white;
	box-shadow:1px 1px 3px 1px gray;
	border-radius:10px;
	text-align:center;
	border:none;
}
/*#button-show:hover*/
{
    background-color:#5f5cb0;
}
/*#button-show:focus*/
{
    border:2px solid #22205e;
	outline:none;	
}     
</style>
</head>
<body oncopy="return false" onpaste="return false" oncut="return false" id="body" onload="timeout()">
<?php

$query = "SELECT * FROM form_data WHERE id='{$id}'";
$run = mysqli_query($conn ,$query );
$result = mysqli_num_rows($run);
if($result == 1)
{
	date_default_timezone_set("Asia/kolkata");
	$row = mysqli_fetch_assoc($run);
	$answer = $row['answer'];
	$starttime = $row['starttime'];
	$endtime = $row['endtime'];
	
	$date40 = strtotime($starttime);
    $date41 = date('Y-m-d H:i:s',$date40);
	$date42 = strtotime($endtime);
    $date43 = date('Y-m-d H:i:s',$date42);
	$date44 = date("Y-m-d H:i:s");
	
	$date12 = strtotime($starttime);
    $date13 = date('M d Y H:i',$date12);
	$date14 = strtotime($endtime);
    $date15 = date('M d Y  H:i',$date14);
	$formtitle = $row['formtitle'];
	$formdescription = $row['formdescription'];
	$questions = $row['questions'];
	$options= $row['options'];
	$id8 = $row['id'];
    $data = json_decode($answer);
	$date16 = strtotime($starttime);
    $date17 = date('H:i:s',$date12);
	$date18 = strtotime($endtime);
    $date19 = date('H:i:s',$date14);
    $val = count($data); 
 
	
     $currenttime = date("Y-m-d H:i:s");
	 $currenttime = strtotime($currenttime);
    $date20 = strtotime($endtime);
	$date21 = date('Y-m-d H:i:s',$date20);
	$date26 = strtotime($date21);
    $result1 = intval(($date26 -$currenttime));
	
	
	
	$starttime = strtotime($starttime);
    $endtime = strtotime($endtime);
	$date10 = date('H:i',$endtime);
    $hours = intval(($endtime - $starttime)/3600);
    $mins = (int)(($endtime - $starttime)/ 60);
    $result = $hours*60+$mins;
	
	if($date44 >= $date43 || $date44 < $date41)
	{
		?>
		 <script> 
    	    $(document).ready(function(){ 
		   alert("Sorry Test is not started!!");
			window.location.href="quiz";
			});
		</script>
		<?php
	}
    else
	{
?>
 <!--form start ---->			
<form  id="form-data1" action="result?id=<?php echo $id;?>" method="post">
<!--first div--->
<div class="container-fluid" id="box1">
<image src="images/form6.jpg" height="100%" width="105.700%" class="image1"/>
<div ><span id="time">Timeout :</span><span id="timeout"></span></div>
</div>

<!--second div--->			
<div class="container-fluid" id="box2">
<table>
<tr><td><p class="para1"><?php echo $formtitle; ?></p></td></tr>
<tr><td><p class="para2"><?php echo $formdescription ; ?></p></td></tr>
</table>
</div>

 <?php
 //this a form line
   
    $data77 = json_decode($questions);
	$data88 = json_decode($options);
    $n=count($data77);
	$i=1;
    $temp=0;
    $q=1;
       
    ?>
	
	<!--this is show button------>
 
	<?php
    while($n>0)
    {
		$temp=count($data88[$i-1]);
        if($temp>0)
        {
	?>
	        <div class="container-fluid" id="box4">
	        <table>
	        <tr>
	            <td><h6 id="roll2"><?php echo $q;?>.</h6><p class="para3"><?php echo $data77[$i-1];?></p></td>
	        </tr>
		
	   
	<?php
	        for($j=0;$j<$temp;$j++)
	        {
		  
	?>
		  
		        <tr>
	            <td>
				   <p id="para5"><input type="radio" id="para4" value="<?php echo ($j+1)?>"  name="<?php echo 'values'.$q;?>"/><span id="roll"><?php echo $data88[$i-1][$j];?></span></p>
			    </td>
	            </tr>
		  
    <?php
		 
	        }
			?>
			 <tr>
	        <td>
			<p id="para5"><input type="radio" style="display:none" checked="checked" id="para4" value="5" name="<?php echo 'values'.$q;?>" /><span id="roll"></span></p>
			</td>
	        </tr>
			<?php
		        $q++;
	?>
	     
	        </table>
			</div>
	   
    <?php
	    }
	
	    $n--;
	    $i++;
	
	}
      
?>
<button type="submit" id="button">submit</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var startime="<?php echo $date17;?>";
var endtime="<?php echo $result;?>";
var currenttime="<?php echo $result1;?>";
var timeleft =currenttime;
function timeout()
{
	var hours = Math.floor(timeleft/3600);
	var minute= Math.floor((timeleft-(hours*60*60))/60);
	var second = timeleft%60;
	var sec=checktime(second);
	var hrs=checktime(hours);
	var mit=checktime(minute);
	if(timeleft<=0)
	{
		clearTimeout(tm);
		$("#form-data1").submit();
	}
	else
	{
		document.getElementById("timeout").innerHTML=hrs+":"+mit+":"+sec;
	
	}
	timeleft--;
	var tm = setTimeout(function(){timeout()},1000);
}
function checktime(sec1)
{
	if(sec1<10)
	{
		sec1="0"+sec1;
	}
    return sec1;
}
</script>
</body>
</html>
<?php
}
}
}
}
else
{
    header("location: LMS");
}
?>