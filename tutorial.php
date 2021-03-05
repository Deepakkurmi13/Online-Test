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
<link rel="stylesheet" href="css.css"/>
<style>
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
.dt-content-left{
  width:50%;
  float:left;
}

.dt-laptop-slider{
  width:50%;
  float: right;
  margin-right: -150px;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/179949/macbook.png');
  background-repeat: no-repeat;
  background-position: top left;
  background-size: contain;
  width: 900px;
  z-index:4;
}


.laptop-screen{
  margin: 67px 167px;
  width: 570px;
  height: 390px;
  overflow: hidden;
  position: relative;

}
.app-shot{
  position:absolute;
  animation:round 22s infinite;
  opacity:0;
  z-index:-1;
  margin-left: auto;
  margin-right: auto;
  display: block;
  
}
@keyframes round{   
  25%{opacity:1;}
  40%{opacity:0;}
} 

img:nth-child(5){animation-delay:0s;}
img:nth-child(4){animation-delay:4s;}
img:nth-child(3){animation-delay:8s;}
img:nth-child(2){animation-delay:12s;}
img:nth-child(1){animation-delay:16s;}

</style>
</head>
<body>
<?php
include("nevbar.php");
?>

<div class="dt-laptop-slider" style="position:relative;right:400px;top:px;">
  <div class="laptop-screen">
    <img class='app-shot' src="images/test5.png"  height="85%" width="100%" alt="test1" />
    <img class='app-shot' src="images/test6.png"   height="85%" width="100%" alt="test1" />
    <img class='app-shot' src="images/test3.png" height="85%" width="100%"  alt="test1" />
    <img class='app-shot' src="images/test2.png" height="85%" width="100%" alt="test1"/>
	<img class='app-shot' src="images/test1.png"  height="85%" width="100%" alt="test1" />
   
  </div>
</div>
<?php
include("footer.php");
?>

<?php
include("ajax.php");
?>
</body>
</html>