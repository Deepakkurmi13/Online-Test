<?php
session_start();
?>
<?php
error_reporting(0);
if($_SESSION['username'] == "deepakkurmi_60")
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
  
<style>
body{
   margin:0;
   padding:0;
   height:100%;
   width:100%;
   background-color:; 
   margin-bottom:500px;   
}
#body
{
	height:180px;
    width:56%;
	margin-top:35px;
	border-radius:10px;
	box-shadow:-0px -0px -0px 1px #eee;
}
.image
{
	margin-left:-20px;
	box-shadow:-0px -0px -0px 1px #eee;
	border-radius:10px;
}
#body1
{
	height:160px;
    width:56%;
	margin-top:20px;
	border-radius:10px;
	box-shadow:0px 0px 6px gray;
	border-top:10px solid #22205e;
    resize: none;
    overflow: hidden;
    font-size:16px;
}
#cop1
{
    margin-left:10px;
    margin-top:20px;
    border:none;
    width:680px;
    height:70px;
    outline:none;
	font-size:32px;    	
}
#cop1:hover
{
	border-bottom:1px solid #d9d9d9;
	
}
#cop1:focus
{
	border-bottom:2px solid #22205e;
	
}
#cop2
{
    margin-left:10px;
    margin-top:10px;
	border:none;
	width:680px;
    outline:none;
    resize:none;
	overflow:hidden;
    font-size:16px;
	height:30px;
}
#cop2:hover
{
	border-bottom:1px solid #d9d9d9;
	
}
#cop2:focus
{
	border-bottom:2px solid #22205e;
}
.class1
{
    width:56%;
	margin-top:17px;
	border-radius:10px;
	box-shadow:0px 0px 6px gray;
	border-top:10px solid #22205e;
    resize: none;
    overflow: hidden;
    font-size:16px;
    height:auto;
}
#cop3
{
    margin-left:10px;
    margin-top:25px;
    border:none;
    width:400px;
    height:auto;
    outline:none;
	font-size:16px;
    background-color:#fafafa;
	text-indent:12px;
	resize:;
	overflow:hidden;
}
#cop3:hover
{
	background-color:#f0ebf0;
	border-bottom:1px solid #d9d9d9;
}
#cop3:focus
{
	border-bottom:2px solid #22205e;
	
}
#cop4
{
    margin-left:-370px;
    margin-top:6px;
    border:none;
    width:640px;
    height:45px;
    outline:none;
	font-size:16px;
	text-indent:5px;
}
#cop4:hover
{
	border-bottom:1px solid #d9d9d9;
}
#cop4:focus
{
	border-bottom:2px solid #22205e;
	
}
#icon
{
	color:gray;
	font-size:20px;
	margin-left:20px;
	margin-top:10px;
	
}
#cop5
{
    margin-left:;
    margin-top:5px;
    border:none;
    width:100px;
    height:45px;
    outline:none;
	font-size:16px;
	text-indent:5px;
	background-color:white;
	color:Dodgerblue;
	outline:none;
    resize:none;
	overflow:hidden;
}
#cop5:hover
{
	border-bottom:1px solid #d9d9d9;
}
#cop5:focus
{
	border-bottom:2px solid #22205e;
	
}
#icon1
{
	color:gray;
	font-size:20px;
	margin-left:20px;
	margin-top:10px;

}
.cop6
{
	position:absolute;
    left:590px;
    top:5px;
    border:none;
    width:40px;
    height:40px;
    outline:none;
	color:Dodgerblue;
	border-radius:50%;
	background-size:cover;
	background-color:white;
	margin-top:-60px;
	
}
.cop6:hover
{
	background-color:#d4d4d4;
	outline:none;
}
.cop6:focus
{
	background-color:#d4d4d4;
	outline:none;
}
#icon2
{
	color:gray;
	font-size:25px;
	height:30px;
	width:30px;
}
#add-button
{
    height:30px;
	width:2%;
	box-shadow:0px 0px 6px gray;
    position:absolute;
	top:160px;
    left:80%;
	border-radius:50%;
	border:none;
}
#add-button:focus
{
	outline:none;
}
#icon3
{
	font-size:25px;
	margin-left:-4px;
	border-radius:50%;
	taransition:outline 1s;
}
#form-logo
{
	height:90px;
    width:100%;
	box-shadow:2px 2px 4px gray;
    font-size:16px;
	background-color:#7f4d8c;
}
#document
{
	font-size:60px;
	margin-top:20px;
	margin-left:20px;
	color:white;
}
#lms
{
	font-size:30px;
	margin-top:35px;
	margin-left:30px;
	color:white;
}
.danger
{
	border:none;
	outline:none;
	height:25px;
	width:8%;
	background-color:white;
	color:#ff2929;
	border-radius:50%;
	margin-left:16px;
	
}
.danger:focus
{
	outline:none;
	
	
}
.danger:hover
{
	background-color:#c9c9c9;
	border-radius:50%;
	border:1px solid gray;

}
.icon6
{
	background-color:gray;
}
.table9
{
	resize:none;
	overflow:hidden;
}
#hr
{
	margin-top:20px;
}
#add-button{
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

#add-button .tooltiptext {
  visibility: hidden;
  width: 100px;
  font-size:12px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0px;
  position: absolute;
  z-index:3;
   top: -5px;
  left: 105%;
  margin-left: 10px;
}

#add-button:hover .tooltiptext {
  visibility: visible;
}

.cop6{
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.cop6 .tooltiptext {
  visibility: hidden;
  width: 100px;
  font-size:12px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0px;
  position: absolute;
  z-index:3;
   top: -5px;
  left: 105%;
  margin-left: 10px;
}

.cop6:hover .tooltiptext {
  visibility: visible;
}

#body8
{
	height:170px;
    width:56%;
	margin-top:30px;
	border-radius:10px;
	box-shadow:0px 0px 6px gray;
	border-top:10px solid #22205e;
    resize: none;
    overflow: hidden;
    font-size:16px;
}
.start
{
    margin-left:20px;;
    margin-top:6px;
    border:none;
    width:300px;
    height:30px;
    outline:none;
	font-size:16px;
	border-bottom:1px solid #d9d9d9;
	color:gray;
}
.start:focus
{
	border-bottom:2px solid #22205e;
	
}

.end
{
    margin-left:25px;
    margin-top:6px;
    border:none;
    width:300px;
    height:30px;
    outline:none;
	font-size:16px;
	border-bottom:1px solid #d9d9d9;
	color:gray;
}
.end:focus
{
	border-bottom:2px solid #22205e;
}

.p1{color:gray;}
.p2{color:gray;}
.p3{color:gray;}
#icon12{margin-left:-17px;}
#table11
{
	margin-top:30px;
}
#body20 
{
   
	margin-top:20px;
	border-radius:10px;
    font-size:18px;	
	margin-left:310px;
	margin-top:50px;
	box-shadow:1px 1px 2px gray;
	background-color:#22205e;
	color:white;
}
#body20:hover 
{
		outline:none;
}
#body20:focus
{
	
	outline:none;
}
#kick
{
    position:relative;
    left:10px;
    border:none;
    width:100px;
    outline:none;
}
#answer
{

    border:none;
    width:150px;
    height:40px;
    outline:none;
	font-size:16px;
    background-color:#fafafa;
	text-indent:12px;
	 resize: none;
    overflow: hidden;

}
#answer:hover
{
	background-color:#f0ebf0;
	border-bottom:1px solid #d9d9d9;
}
#answer:focus
{
	border-bottom:2px solid #22205e;
}
</style>
</head>
<body>
<div class="container-fluid" id="form-logo">
<table>
<tr>
<td><p id="document"><i class="fa fa-file-text-o" aria-hidden="true" ></i></p></td>
<td><p id="lms">LMS Form</p></i></td>
</tr>
</table>
</div>


<form  id="form-data1" onsubmit="return false">

<!--first div--->
<div class="container-fluid" id="body">
<image src="images/form6.jpg" height="100%" width="105.700%" class="image"/>
</div>


<!--time and date picker div--->
<div class="container-fluid" id="body8">
<table id="table11">
<tr><td><span class="p1">Start Time :</span>  <input type="datetime-local" class="start" name="start" id="starttime" required /></td></tr>
<tr><td><span  class="p2"> End Time   :</span>  <input type="datetime-local" class="end" name="end"  id="endtime" required /></td></tr>
</table>
</div>

<!--add button--->
<div class="container-fluid" id="body3">
<button type="button" id="add-button"><i class="fa fa-plus-circle" aria-hidden="true" id="icon3">
<span class="tooltiptext">Add Question</span>
</button></i>
</div>


<!--secode div--->
<div class="container-fluid" id="body1">
<table id="tap">
<tr><td><input type="text" name="form-title" placeholder="Form title" id="cop1" required /></td></tr>
<tr><td><textarea  name="form-description" placeholder="Form description" id="cop2" rows="1" required></textarea></td></tr>
</table>
</div>

<!--thired div--->
<div id="table10">
<div class="container-fluid class1" id="div1">
<table class="d1">
<tr><td><textarea name="part1" placeholder="Question" id="cop3" required></textarea></td></tr>
<tr><td><i class="fa fa-circle-o" aria-hidden="true" id="icon"></i></td><td><input type="text" name="div1option1" placeholder="option1" id="cop4" required /></td></tr>
</table>
<p><i class="fa fa-circle-o" aria-hidden="true" id="icon1"></i></td><td><button type="button" name="p2" id="cop5" onclick="add(1)">Add"other"</button></p>
<hr style="width:95%;background-color:#eee;resize:none;overflow:hidden;" id="hr"></hr>
<td><p id="kick"><input type="number" id="answer" name="answer1" placeholder="Enter Answer" class="temp1" oninput="myfunction(1)"  min="1" max="4" required /></p>
<p><button  type="button" class="cop6" hidden ><i class="fa fa-trash-o" aria-hidden="true" id="icon2"></i><span class="tooltiptext">Delete</span></button></p>
</div>
</div>

<div class="container-fluid">
<button type="submit" name="submit" id="body20" onclick="return result()">Create Form</button>
</div>

</form>
<!---jquery start  ---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
 function result()
 {
	 return confirm("Are you confirm you want to create Quiz Test");
	
 }

</script>

<script>
function deleteRow(arr, row) {
//   arr = arr.slice(0);
 //  arr.splice(row - 1, 1);
 for (var i = 0; i < arr.length; i++) {
  if (arr[i][0] == ("div"+row+"option1")) 
  {
   // arr.splice(i, 1);
   arr[i]=[];
  }
}

   return arr;
}

 var ind = [1,1];
	var a = [[],["div1option1"]];
	
	
$(document).ready(function(){
    var j = 1;
	$("#add-button").click(function(){
		j++;
		var str = "div"+j+"option1";
		 ind.push(1);
	    a.push([str]);
		$("#table10").append('<div class="container-fluid class1" id="div'+j+'"><table class="d'+j+'"><tr><td><textarea name="part'+j+'" placeholder="Question" id="cop3"></textarea></td></tr><tr><td><i class="fa fa-circle-o" aria-hidden="true" id="icon"></i></td><td><input type="text" name="div'+j+'option1" placeholder="option1" id="cop4"/></td></tr></table><p><i class="fa fa-circle-o" aria-hidden="true" id="icon1"></i></td><td><button type="button" name="p2" id="cop5" onclick="add('+j+')">Add"other"</button></p><hr style="width:95%;background-color:#eee;resize:none;overflow:hidden;" id="hr"></hr><p id="kick"><input type="number" class="temp'+j+'" id="answer" name="answer'+j+'" placeholder="Enter Answer" oninput="myfunction('+j+')" min="1" max="4" required  /></p><p><button id="'+j+'" type="button" class="cop6"><i class="fa fa-trash-o" aria-hidden="true" id="icon2"></i><span class="tooltiptext">Delete</span></button></p></div>');
    });
	
	$(document).on("click",".cop6",function(){
	   var button = $(this).attr("id");
	   $("#div"+button+"").remove();
	   a == deleteRow(a ,button);
	   
	});
	
});

   
	
   function add(n)
    {
	  var temp=a[n].length;
	 if(temp <= 3)
	 {
	  ind[n]++;
	  var w = "div"+n+"option"+ind[n];
	  a[n].push(w);
	  $(".d"+n+"").append('<tr id="div'+n+'row'+ind[n]+'"><td><i class="fa fa-circle-o" aria-hidden="true" id="icon"></i></td><td><input type="text"   name="'+w+'" placeholder="option'+ind[n]+'" id="cop4"/><button class="danger" id="'+ind[n]+'" onclick="del('+ind[n]+','+n+')" ><i class="fa fa-times" aria-hidden="true" class="icon6"></i></button></td></tr>');
	 }
	 else
	 {
		alert("Option should not more than four"); 
	 }
	}
	 
	 
	 function del(p,b)
	 {
		 	
		
		
		var button_id = p;
        $('#div'+b+'row'+button_id+'').remove();
	    var w = 'div'+b+'option'+button_id;
		const index = a[b].indexOf(w);
        if (index > -1) {
        a[b].splice(index, 1);
        }
       myfunction(b);
     }
     
	 function myfunction(h)
	 {
		
		 var check= a[h].length;
		 var value= $(".temp"+h).val();
		
		 if(value > check)
		 {
			 
			 $(".temp"+h).val(check);
			
		 }		 
	 }
	 
	 
	 
	 
$(document).ready(function(){
	 
	$("#cop2").on("input",function()
	{
	    $(this).css("height","auto").css("height",this.scrollHeight+(this.offsetHeight - this.clientHeight));	 
		 
	 
	});
    $("#body1").on("input",function()
	{
	    $(this).css("height","auto").css("height",this.scrollHeight+(this.offsetHeight - this.clientHeight));	 
		 
	 
	});
 
     $("#cop3").on("input",function()
	{
	    $(this).css("height","auto").css("height",this.scrollHeight+(this.offsetHeight - this.clientHeight));	 
		 
	 
	});
	
	
	
	
});
</script>
 
 <script>

$("#body20").click(function(event){
event.preventDefault();
     var starttime =$("#starttime").val(); 
	 var title =$("#cop1").val();  	
	 var regexp = /^[a-zA-Z]{1,30}$/;
	
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
                + day + "T"
                + hour+ ":"  
                + minute+ ":" 
                + second;
				
				
    if(datetime > starttime && starttime != "")
	{
		alert("Time should be greater than current time ");
	}
	/*else if(!$("#cop1").val() == "" && !regexp.test($("#cop1").val()))
	{
		 if(regexp.test($("#cop1").val()))
		    {
			    
		    }
		    else
		    {
			  if(!regexp.test($("#cop1").val()))
				{
				   if(!$("#cop1").val() == "")
					{
				        alert('You can enter form-title only 30charactor.');
		            }
		        }
			}
	}*/
    else
	{
	$.ajax({
        url:"deepak",
        type:"POST",
        data:{'array':JSON.stringify(a)},
    });	
	
	$.ajax({
		url:"linkform",
        type:"POST",
        data:$("#form-data1").serialize(),		  
        success :function(data){
		    if(data == 1)
		    {  
		        var start = $("#starttime").val();
                var end   = $("#endtime").val();
                var formtitle= $("#cop1").val();
                var formdescription= $("#cop2").val();
                var a =a;
                if(start == '' || end == '' || formtitle == '' || formdescription == '' || a == '')
                {
                    alert("All field required");
                }
	            else
				{
					alert("Please select 30minites extra of starttime");
	        
		        }	
			}
	        else
	        {
			    alert("create form successfull");
				console.log(data);
		        $("#form-data1").trigger("reset");	
		        window.location.href="quiz";
	        }
  	            	
	    },
			
	});
	}
});	
/*$("#cop1").blur(function(){ 

            var title =$("#cop1").val();  	
		    var regexp = /^[a-zA-Z]{1,30}$/;
	        if(regexp.test($("#cop1").val()))
		    {
			    
		    }
		    else
		    {
			  if(!regexp.test($("#cop1").val()))
				{
					if(!$("#cop1").val() == "")
					{
				        alert('You can enter form-title only 30charactor.');
		            }
				}
			}
		}); 
*/


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