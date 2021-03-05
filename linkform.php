
<?php
session_start();
?>
<?php
include("database-connection.php");
    $start      = $_POST['start'];
    $end        = $_POST['end'];
    $formtitle  = $_POST['form-title'];
    $formdescription = $_POST['form-description'];  
	$temail = $_SESSION['email'];
    $starttime = strtotime($start);
    $endtime = strtotime($end);
    $hours = intval(($endtime - $starttime)/3600);
    $mins = (int)(($endtime - $starttime)/ 60);
    $result = $hours*60+$mins;
    if($result >= 30)
    {

          $query = "INSERT INTO form_data(temail,starttime ,endtime ,formtitle,formdescription,questions,options,answer) VALUES('{$temail}','{$start}','{$end}','{$formtitle}','{$formdescription}','','','')"; 
          $sql = mysqli_query($conn ,$query);
		
 
		$query = "select * from form_data where temail='{$temail}'"; 
        $sql1 = mysqli_query($conn ,$query);
        $t_id=0;
        while($data1 = mysqli_fetch_assoc($sql1))
        {
            $t_id = $data1['id'];
    }
 
        $highest_id = $t_id;
        $contest = "formpage/contest".($highest_id);
    

    $string = '<?php
	session_start();
	
	if(isset($_SESSION["username"]))
    {
		include("database-connection.php");
        $userid = $_SESSION["id"];
        $tname ="user".$userid;
        $query20 = "SELECT * FROM $tname WHERE contest_no='.$highest_id.'";
        $sql55 = mysqli_query($conn ,$query20);
        $result2 = mysqli_num_rows($sql55);
				
        if($result2 == 1)
        {	
    ?>    
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script> 
		    $(document).ready(function(){ 
		    alert("Already responsed");
			window.location.href="http://localhost/onlinetestwebsitefiles/quiz";
			});
		</script>
    <?php		
		}
         else
		 {		 
?>
';


$string = $string. 
'
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
<style>
<style>
body
{
	margin-bottom:100px;
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
	font-size:30px;
	color:black;
	margin-top:20px;
	margin-left:15px;
}
.para2
{
	font-size:15px;
	color:black;
	margin-left:15px;
	margin-top:-10px;
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
	margin-left:18px;
	margin-top:10px;
}
#para4
{
	position:relative;
	left:15px;
	height:18px;
	width:18px;
}
#roll
{
	margin-top:-20px;
    display:block;
    margin-left:40px;
}
#para5
{
	margin-left:3px;
}
#roll2
{
	position:relative;
	top:31px;
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
</style>
</head>
<body oncopy="return false" onpaste="return false" oncut="return false">

';
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
<style>
body
{
	margin-bottom:100px;
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
	font-size:30px;
	color:black;
	margin-top:20px;
	margin-left:15px;
}
.para2
{
	font-size:15px;
	color:black;
	margin-left:15px;
	margin-top:-10px;
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
	margin-left:18px;
	margin-top:10px;
}
#para4
{
	position:relative;
	left:15px;
	height:18px;
	width:18px;
}
#roll
{
	margin-top:-20px;
    display:block;
    margin-left:40px;
}
#para5
{
	margin-left:3px;
}
#roll2
{
	position:relative;
	top:31px;
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
</style>
</head>
<body oncopy="return false" onpaste="return false" oncut="return false" id="body">
<?php
   
          $a = $_SESSION['a'];
          $data = json_decode($a, TRUE);
          $n=count($data);
 
          $i=1;
          $temp=0;
          $q=1;
          $answer=array();
 
 
 $string = $string. 
'
<form  id="form-data1" action="http://localhost/onlinetestwebsitefiles/result?id='.($highest_id).'" method="post">

<!--first div--->
<div class="container-fluid" id="box1">
<image src="form6.jpg" height="100%" width="105.700%" class="image1"/>
</div>

<!--second div--->			
<div class="container-fluid" id="box2">
<table>
<tr><td><p class="para1">'.$formtitle.'</p></td></tr>
<tr><td><p class="para2">'.$formdescription.'</p></td></tr>
</table>
</div>
';





 ?>
 <!--form start ---->			
<form  id="form-data1" action="" method="post">
<!--first div--->
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
 <?php
 
 $question = array();
 
 $option = array();
 
 
 while($n>1)
 {
	$temp=count($data[$i]);
	if($temp>0)
	{
   	   $var2="answer".$i;
	   $ans=$_POST[$var2];
	   
       array_push($answer,$ans);
	   
	   
	   $var="part".$i;
	   $var=$_POST[$var];
	   
	   array_push($question ,$var);
	   
	   
	   $string =$string.
	   '
	   <div class="container-fluid" id="box4">
	   <table>
	   <tr>
	      <td><h6 id="roll2">'.$q.'.</h6><p class="para3">'.$var.'</p></td>
	   </tr>
	   ';
	   ?>
	   <div class="container-fluid" id="box4">
	   <table>
	   <tr>
	      <td><h6 id="roll2"><?php echo $q;?>.</h6><p class="para3"><?php echo $var; ?></p></td>
	   </tr>
	   
	   <?php
	    $arr1 = array();
	   for($j=0;$j<$temp;$j++)
	    {
		  $var1 = $_POST[$data[$i][$j]];
		  array_push($arr1,$var1 );
		  $string = $string.
		  '
		   <tr>
	        <td>
			<p id="para5"><input type="radio" id="para4" value="'.($j+1).'" name="values'.$q.'" /><span id="roll">'.$var1.'</span></p>
			</td>
	      </tr>
		 
		  ';
		  
		  ?>
		  
		  <tr>
	        <td>
			<p id="para5"><input type="radio" id="para4" name="<?php echo 'values'.$q;?>" /><span id="roll"><?php echo $var1; ?></span></p>
			</td>
	      </tr>
		  
		  <?php
		 
	    }
		 array_push($option ,$arr1);
		  $string = $string.
		  '
		   <tr>
	        <td>
			<p id="para5"><input type="radio" style="display:none" checked="checked" id="para4" value="5" name="values'.$q.'" /><span id="roll"></span></p>
			</td>
	      </tr>
		 
		  ';
		
		 $q++;
	   ?>
	   </table></div>
	   
	   <?php
	}
	$string=$string.
'
 </table></div>
';

	$n--;
	$i++;
 }
 $data8 = json_encode($question, TRUE);
 //echo  $data8;
 $data1 = json_encode($option,TRUE);
 // echo  $data1;
$real_answer=json_encode($answer);

$data = json_encode($data);
$query2 = "update form_data set questions='$data8',options='$data1',answer='$real_answer' where id='$highest_id'"; 
$sql2 = mysqli_query($conn ,$query2);
 // echo  $query2;
?>
<input type="radio" id="para4" name="<?php echo 'values'.$q;?>" />

<button type="submit" id="button">submit</button>
</form>
<?php
$string =$string.
'

		<button type="submit" id="button">submit</button>
        </form>
		  </body>
          </html>
    <?php
	}
	}
    else
	{
		header("location:http://localhost/onlinetestwebsitefiles/LMS");
	}
	
	
	?>
';


/*$myfile = fopen("formpage/contest".($highest_id).".php", "w") or die("Unable to open file!");
fwrite($myfile, $string);
fclose($myfile);*/

?>
</body>
</html>
<?php






unset($_SESSION['a']);
}
else
{
	echo 1;
}	
?>