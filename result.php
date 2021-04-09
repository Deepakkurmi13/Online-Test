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
	margin-bottom:200px;
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
	display:block;
	width:86%;
	
}
#para4
{
	margin-left:25px;
	height:18px;
	width:18px;
	margin-top:2px;
	padding:-3px;
}
#roll
{
	margin-left:10px;
	margin-top:0px;
}
#para5
{
	margin-left:10px;
	margin-top:px;
}
#icon1
{
	position:relative;
    top:px;
	font-size:20px;
	left:-31px;	
}
#icon
{
	margin-left:15px;
    margin-top:px;
	font-size:20px;
	color:gray;
}
#mark 
{
  margin-top:-22px;
  margin-left:50px;
  width:80%;
 display:block;

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
#answer1
{   
    margin-left:12px;
	margin-top:5px;
	font-size:17px;
	color:green;
	background-color:#f5f5f5;
    font-family:Bahnschrift;
	text-decoration:underline;
}
#answer1:hover
{
	background-color:;
}
#answer2
{
	margin-left:85px;
	margin-top:-20px;
	font-size:16px;
	width:70%;
    display:block;
	font-family:Bahnschrift;
}
#answer2:hover
{
	background-color:;
}
#home
{
	position:relative;
	font-size:30px;
	top:20px;
	left:200px;	
	color:black;
	text-decoration:underline;
}
#homeicon
{
	font-size:25px;
	color:red;
	
}
</style>
</head>
<body oncopy="return false" onpaste="return false" oncut="return false" id="body">
<?php


$userdata = $_SESSION['username'];
$query11 = "SELECT * FROM student_table WHERE username='{$userdata}'";
$run = mysqli_query($conn ,$query11);
$result2 = mysqli_fetch_assoc($run);
$userid = $result2['id'];

$userans=array();
$right=0;
$wrong=0;
$no_attempt=0;
$query = "SELECT * FROM form_data WHERE id='{$id}'";
$run = mysqli_query($conn ,$query );
$result = mysqli_num_rows($run);
if($result == 1)
{
	$row = mysqli_fetch_assoc($run);
	$answer = $row['answer'];
	$starttime = $row['starttime'];
	$endtime = $row['endtime'];
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
    $val = count($data);

    for ($i=1; $i<=$val; $i++)
    {
	    $v="values".$i;
	    $ans=$_POST[$v];
	    $ans = number_format($ans);
        array_push($userans,$ans);
	
	    if($data[$i-1] == $userans[$i-1])
        {
		  $right++;
        }
		elseif($userans[$i-1] == 5)
		{
			$no_attempt++;
		}
		else
		{
			$wrong++;
		}
    }
	
	
	
    $useranswer3 = json_encode($userans);
  
	$tname ="user".$userid;
    
    $query99 = "INSERT INTO ".$tname."(title,starttime,answer,no_attempt,rightanswer,wronganswer,endtime,contest_no) VALUES('{$formtitle}','{$starttime}','{$useranswer3 }','{$no_attempt}','{$right}','{$wrong}','{$endtime}','{$id8}')";   

	$run22 = mysqli_query($conn ,$query99);
   

	$username = $_SESSION['username'];

	$resultData = "INSERT INTO results(title,starttime,answer,no_attempt,rightanswer,wronganswer,endtime,contest_no,username,testid) VALUES('{$formtitle}','{$starttime}','{$useranswer3 }','{$no_attempt}','{$right}','{$wrong}','{$endtime}','{$id8}','{$username}','{$id}')";

	$run100 = mysqli_query($conn ,$resultData);
	
	
	$query0 = "SELECT rightanswer FROM $tname";
	$run0 = mysqli_query($conn , $query0);
	$sum =0;
	while($fetch0 = mysqli_fetch_assoc($run0))
	{
		$sum1 = $fetch0['rightanswer'];
		$sum = $sum + $sum1;
    }
	 
	$query90 = "SELECT rating,star FROM student_table WHERE  id='{$userid}'";
    $run2 = mysqli_query($conn ,$query90);
    $result4 = mysqli_num_rows($run2);
    $fetch = mysqli_fetch_assoc($run2);
    $starup = $fetch['star'];
    if($result4 == 1)
    {
        $rating = "UPDATE student_table SET rating='$sum' WHERE  id='{$userid}'";
	    $run5 = mysqli_query($conn ,$rating);
	}

     
	if($sum)
    {

	    if($sum >= 0  && $starup == 0)
	    {
		    $rating1 = "UPDATE student_table SET star='1' WHERE  id='{$userid}'";
	        $run1 = mysqli_query($conn ,$rating1);
		} 
		
		if($sum >= 300 && $starup == 1)
		{
		    $rating2 = "UPDATE student_table SET star='2' WHERE  id='{$userid}'";
	        $run2 = mysqli_query($conn ,$rating2);
		}
		if($sum >= 600 && $starup == 2)
		{
		    $rating3 = "UPDATE student_table SET star='3' WHERE  id='{$userid}'";
	        $run3 = mysqli_query($conn ,$rating3);
        }
		if($sum >= 1000  && $starup == 3)
		{
		    $rating4 = "UPDATE student_table SET star='4' WHERE  id='{$userid}'";
	        $run4 = mysqli_query($conn ,$rating4);

		}
		if($sum >=2000 && $starup == 4)
		{
		    $rating5 = "UPDATE student_table SET star='5' WHERE  id='{$userid}'";
	        $run5 = mysqli_query($conn ,$rating5);
		}
		if($sum >=3000 && $starup == 5)
		{
		    $rating6 = "UPDATE student_table SET star='6' WHERE  id='{$userid}'";
	        $run6 = mysqli_query($conn ,$rating6);
        }
		if($sum >=5000 && $starup == 6)
		{
		    
	        $rating7 = "UPDATE student_table SET star='7' WHERE  id='{$userid}'";
	        $run7 = mysqli_query($conn ,$rating7);
		}
	
}

?>
	
	
 <!--form start ---->			
<form  id="form-data1"  method="post">
<!--first div--->

<a href="LMS" id="home"><i id="homeicon" class="fa fa-home"></i>Home</a>


<div class="container-fluid" id="box1">
<image src="images/form6.jpg" height="100%" width="105.700%" class="image1"/>
</div>


<!--second div--->			
<div class="container-fluid" id="box2">
<table>
<tr><td><p class="para1"><?php echo $formtitle; ?></p></td></tr>
<tr><td><p class="para2"><?php echo $formdescription ; ?></p></td></tr>
</table>
</div>

<div class="container-fluid" id="box5">
<table id="move">
<tr><td><p class="para6">Right :<?php echo $right;?></p></td>
<td><p id="line"></p></td>
<td><p class="para7">Wrong :<?php echo $wrong;?></p></td>
<td><p id="line"></p></td>
<td><p class="para8">No_Attempt :<?php echo $no_attempt;?></p></td></tr>
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
			<ul id="list">
	   
	<?php
	        for($j=0;$j<$temp;$j++)
	        {
		  
	?>
		  
		        <tr>
	            <td>
				    
			        <p id="para5"><i class="fa fa-circle-o" aria-hidden="true" id="icon"></i><span id="roll">
					<?php 
                    if($data[$i-1] == $j+1 && $userans[$i-1] == $j+1)
					{
					    echo "<i class='fa fa-circle-o' aria-hidden='true' style='color:green;' id='icon1'></i><font id='mark'>".$data88[$i-1][$j]."</font>"; 
					}
			        else
					{
					
						if($userans[$i-1] == $j+1)
						{
							echo "<i class='fa fa-circle-o' aria-hidden='true' style='color:red;' id='icon1'></i><font id='mark'>".$data88[$i-1][$j]."</font>"; 
							
                        }
					
							else
							{
								 echo "<font id='mark'>".$data88[$i-1][$j]."</font>"; 
							}
						
					
					
					}
					?></span></p>
					
			    </td>
	            </tr>
		  
    <?php
		 
	        }
			
			?>
			<tr><td><hr style="background-color:gray;width:700px;margin-top:5px;margin-left:-12px;"></hr></td></tr>
			<tr style="width:auto;height:auto;margin-top:-20px;"><td><span id="answer"><span id="answer1">Answer-</span><font id="answer2"><?php echo $data88[$i-1][$data[$i-1]-1];?></font></span></td></tr>
			<?php
		        $q++;
	?>
	        </ul>
	        </table>
			</div>
	   
    <?php
	    }
	
	    $n--;
	    $i++;
	
	}

	        
 }
?>
</body>
</html>
<?php
}
}
else
{
    header("location: LMS");
}
?>