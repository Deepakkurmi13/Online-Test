<?php
session_start();
include("database-connection.php");
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
<link rel="stylesheet" href="css.css"/>
<style>
body
{
   background-color:white;
   height:100%;
   width:100%; 
   overflow-x:hidden;
}
#forgotbody
{
   height:auto;
   width:70%;
   margin-left:210px;  
   margin-top:0px;
  -webkit-box-shadow: 0px 1px 8px 1px rgba(125,125,125,1);
  -moz-box-shadow: 0px 1px 8px 1px rgba(125,125,125,1);
   box-shadow: 0px 2px 6px 1px rgba(125,125,125,1);
}
.pagination {

    display: inline-block;
    margin-top:40px;
    margin-left:200px;
    width:100%;
	margin-bottom:100px;
	font-size:12px;
	height:12px;
}
.pagination .first
{
  color:white;
  float:left;
  background-color:#5e5950;
  padding: 8px 16px;
  text-decoration: none;
  border: 1px solid #ddd;
  margin: 0 4px;
  display: inline-block;
}
.pagination .first:hover:not(.active) {background-color:#5e5950;}

.first::hover
{
	background-color:black;
}
.pagination  .last
{
  color:white;
  float: left;
  background-color:#5e5950;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
  display: inline-block;
}
.last::hover
{
	background-color:black;
}

.pagination .last:hover:not(.active) {background-color:#5e5950;}



.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
  display: inline-block;

}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


#per
{
	position:relative;
	height:auto;
	width:90%;
	top:-10px;
	left:48px;
	border:1px solid #d4d4d4;
	background-color:#fafafa;
	font-size:14px;
	border-bottom:2.5px solid black;
	
}
#per td
{
	width:auto;
	height:auto;
}
#per thead 
{
	background-color:#5e5950;
}
.table-hover tr .w1
{position:relative;text-indent:45px;color:white;text-decoration:underline;}

.table-hover tr .w2
{position:relative;text-indent:80px;color:white;text-decoration:underline;}

.table-hover tr .w3
{position:relative;text-indent:10px;color:white;text-decoration:underline;}

.table-hover tr .c1
{position:relative;text-indent:45px;}

.table-hover tr .c2
{position:relative;text-indent:80px;}

.table-hover tr .c3
{position:relative;text-indent:20px;}


#data
{
	position:relative;
	display:block;
	height:20px;
	width:25px;
	background-color:#941c1c;
	top:15px;
	left:83px;
	
}
#number
{
  position:relative;
  color:white;
  left:-77px;
  font-size:13px;
  top:1px;
}
#star
{
  position:relative;
  color:white;
  left:-67px;
  top:-11px;
  font-size:9px;
}
.username
{
    position:relative;
	left:38px;
	top:-5px;
	color:#45509c;
	cursor:pointer;
}
.username:hover
{
	text-decoration:underline;
}
#id
{
	position:relative;
	top:15px;
	color:#545454;
}
#rating
{
	position:relative;
	top:15px;
	color:#545454;
}
#fullpage
{
	height:auto;
}

#line0
{
	margin-left:50px;
	margin-top:-30px;
	font-size:11px;
}
#data1
{
	height:50px;
	width:95%;
	border:1px solid #d4d4d4;
	margin-left:50px;
	margin-top:-10px;
	
	
}
#search
{
	margin-left:40px;
	margin-top:7px;
	width:270px;
	border:1px solid #d4d4d4;
	height:35px;
	background-color:#fafafa;
	text-indent:38px;
}
#search:focus
{
	
	outline:2px solid #c0fcfc;
	box-shadow:0px 0px 2px 2px #c0fcfc;
	transition: outline .6s,border .6s;
	border:1px solid #c0fcfc;
}
#list
{
	position:relative;
    left:40px;
	width:120px;
	border:1px solid #d4d4d4;
    background-color:#fafafa;
	height:35px;
	color:black;
	text-indent:30px;
}
#list:focus
{
	outline:2px solid #c0fcfc;
	box-shadow:0px 0px 2px 2px #c0fcfc;
	transition: outline .6s,border .6s;
	border:1px solid #c0fcfc;
}
option
{
	color:black;
}
#click
{
	color:gray;
	position:relative;
	left:75px;
	font-size:20px;
	
}

</style>
</head>
<body>
<?php
include("nevbar.php");
?>


<div id="forgotbody">

</div>


<?php
include("footer.php");
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){ 

function loadtable(page)
{
	$.ajax({
		url:"loadpage",
        type:"POST",
        data:{page_no:page},
        success: function(data)
        {
		   $("#forgotbody").html(data);
			
		}		
	  	
		
	});
}
loadtable();
 
    $(document).on("click",".pagination a",function(e){
	    e.preventDefault();
		var page_id = $(this).attr("id");
		loadtable(page_id);
		
	 
    });
	
});


function myFunction() 
{
var x = document.getElementById("list").value;
if( x != '')
{ 
  $.ajax({
		url:"loadpage",
        type:"POST",
        data:{number:x},
        success: function(data)
        {	
		    $("#forgotbody").html(data);
		}		
	   
});

}
else
{
	window.location.reload();
}

}
</script>


<script>
//live search

  
function  search(){
	
    var data = $("#search").val();
	//alert(data);
	$.ajax({
		url:"loadpage",
        type:"POST",
        data:{text:data},
        success: function(data)
        {	
		    $("#forgotbody").html(data);
			
		}		
	   
    });
}	

</script>


<?php
include("ajax.php");
?>
</body>
</html>
<?php

?>