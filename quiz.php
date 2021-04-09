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
   height:auto;
   width:62%;
   margin-left:250px;  
   margin-top:-9px;
   -webkit-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
  -moz-box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
   box-shadow: -3px 2px 22px -3px rgba(179,179,179,1);
}

#get1
{
  position:relative;
  height:auto;
  width:98%;
  border-radius:10px;
  border:1px solid #d6d6d6;  
  left:8px;
  top:0px;
}
#ten1
{
	 background-color:#969370;
	 height:auto;
	 width:100%;
	 margin-top:-15px; border-radius:10px;
}
#ten2
{
	position:relative;
	top:30px;
	left:30px;
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
{position:relative;text-indent:30px;color:white;text-decoration:underline;}

.table-hover tr .w2
{position:relative;text-indent:40px;color:white;text-decoration:underline;}

.table-hover tr .w3
{position:relative;text-indent:50px;color:white;text-decoration:underline;}

.table-hover tr .c1
{position:relative;text-indent:30px;}

.table-hover tr .c2
{position:relative;text-indent:10px;}

.table-hover tr .c3
{position:relative;text-indent:20px;}

#ten3
{
	
	margin-top:60px;
	margin-left:30px;
	height:auto;
	width:auto;
}
#per1
{
	height:auto;
	width:auto;
	margin-top:-5px;
	border:1px solid #d4d4d4;
	background-color:#fafafa;
	font-size:14px;
	
}
#per1 td
{
	width:auto;
	height:auto;
}
#per1 thead 
{
	background-color:#525252;
}
.table-hover tr .w4
{position:relative;text-indent:30px;color:white;text-decoration:underline;}

.table-hover tr .w5
{position:relative;text-indent:40px;color:white;text-decoration:underline;}

.table-hover tr .w6
{position:relative;text-indent:50px;color:white;text-decoration:underline;}

.table-hover tr .c4
{position:relative;text-indent:30px;}

.table-hover tr .c5
{position:relative;text-indent:10px;}

.table-hover tr .c6
{position:relative;text-indent:20px;}

#color
{
	color:#3e69bd;
}

.c1
{
	color:#3e69bd;
}

</style>
</head>
<body>
<?php
include("nevbar.php");
?>

<div id="forgotbody">
<footer id="get1">

<div  class="container-fluid" id="ten1">
<p style="margin-top:15px;font-size:25px;color:white;letter-spacing:0.5px;">Quiz-Test</p>
<hr style="width:60%;margin-left:-10px;margin-top:-5px;background-color:gray;"></hr>
<p style="top:5px;left:250px;position:relative;color:#0f000f;font-size:21px;">This is the Place to show off your skills</p>
<p style="top:5px;left:250px;position:relative;color:#470000;font-size:16px;"> Try Your hand At one of the Competition.<br>This is a Best way to Take a Quiz test and<br> Solve a Problem with great Logic</p>
<image src="images/kurmi.jpg" height="150px" width="150px" style="margin-left:70px;margin-top:-130px"></image>
</div>


<div class="container-fluid" id="ten2" class="table-responsive">
<p style="font-size:18px;font-family:Elephant;color:#575757;">Present Contests</p>
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
       include("database-connection.php");
       $query = "SELECT * FROM form_data ORDER BY starttime ASC";
       $run = mysqli_query($conn , $query);
	   $arrayp = array();
	   $arrayf = array();
	  date_default_timezone_set("Asia/kolkata");
        while($row = mysqli_fetch_assoc($run))
	 	{
			
	        if($row['starttime'] <= date("Y-m-d H:i:sa") && $row['endtime'] > date("Y-m-d H:i:sa") )	
	        {
				array_push($arrayp,$row['endtime']);
				$starttime = $row['starttime'];
				$endtime = $row['endtime'];
				
					            $date4 = strtotime($starttime);
                $date5 = date('M d Y H:i',$date4);
				$date6 = strtotime($endtime);
                $date7 = date('M d Y H:i',$date6);
	
	?>        
			
			<tr>
            <td  class="c1"><a id="color"  href="contest?id=<?php echo $row['id'];?>"><?php echo $row['formtitle'] ?></a></td>
            <td  class="c2"><?php echo $date5 ?></td>
            <td  class="c3"><?php echo $date7?></td>
            </tr>
			
			<?php
			}
		}
       	
	  ?>
	 

    </tbody>
  </table>
</div>



<div class="container-fluid" id="ten3" class="table-responsive">
<p style="font-size:18px;font-family:Elephant;color:#575757;">Future Contests</p>
 <table class="table table-hover" id="per1">
    <thead>
      <tr>
        <th class="w4" >Test_Name</th>
        <th  class="w5">Start</th>
        <th  class="w6">End</th>
      </tr>
    </thead>
	

    <tbody>
     <?php
       include("database-connection.php");
       $query = "SELECT * FROM form_data ORDER BY starttime ASC";
       $run = mysqli_query($conn , $query);
	    date_default_timezone_set("Asia/kolkata");
        while($row = mysqli_fetch_assoc($run))
		{
			if($row['starttime'] > date("Y-m-d H:i:sa"))	
	        {
				array_push($arrayf,$row['starttime']);
				$starttime = $row['starttime'];
				$endtime = $row['endtime'];
	            $date4 = strtotime($starttime);
                $date5 = date('M d Y H:i',$date4);
				$date6 = strtotime($endtime);
                $date7 = date('M d Y H:i',$date6);
				
	?>
			
			<tr>
            <td  class="c1"><?php echo $row['formtitle'] ?></td>
            <td  class="c2"><?php echo $date5 ?></td>
            <td  class="c3"><?php echo $date7 ?></td>
            </tr>
			
			<?php
		    }
		}	
	  ?>
	 
    </tbody>
  </table>
</div>
</footer>
</div>
<?php
include("footer.php");
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
						window.location.href = "admin";
						$("#form-data").trigger("reset");
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


   $("#dialog").dialog({	
			  draggable:false,
			  resizable:false,
			  closeOnEscape:false,
			  modal:true,
			  autoOpen:false,
			  width:430,
			  height:230
			  
		    });

$(document).ready(function(){ 
    
	$("#listbtn").click(function(){
		$(".list-content").toggle();
    });
   
});

});
</script>

<script>
function currentTime() {
   var Array  = '<?php echo json_encode($arrayp); ?>';
   var Array1 = '<?php echo json_encode($arrayf); ?>';
   var obj = JSON.parse(Array );
   var obj1 = JSON.parse(Array1);
   obj.sort();
   obj1.sort();
    var now     = new Date(); 
        var year    = now.getFullYear();
        var month   = now.getMonth()+1; 
        var day     = now.getDate();
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        var second  = now.getSeconds(); 
        if(month.toString().length == 1) {
             month = '0'+month;
        }
        if(day.toString().length == 1) {
             day = '0'+day;
        }   
        if(hour.toString().length == 1) {
             hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
             minute = '0'+minute;
        }
        if(second.toString().length == 1) {
             second = '0'+second;
        }   	 
        var datetime = 
                 year + "-" 
                + month  + "-" 
                + day + " "
                + hour+ ":"  
                + minute+ ":" 
                + second;
    if(( obj1.length > 0 && datetime >= obj1[0]) || ( obj.length > 0 && datetime >= obj[0]))
    {
        window.location.reload();
	}
    
 	
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
<?php
}
else
{
	header("location: LMS");
}
	
?>