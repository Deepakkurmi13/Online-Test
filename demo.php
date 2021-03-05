<html lang="en">
<head>
<title>online-Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
@import url('https:/*fonts.googleapis.com/css2?family=Piazzolla:wght@700;900&display=swap');
* {
    font-family: 'Piazzolla', serif;
}
 :root {
    --main-bg: #1e272e;
    --main-color: #0097e6;
}
html {
    font-size: 95%;
}
.row {
    margin: 0px;
}  
.main-manu{
   background-color: var(--main-bg);
   box-shadow:2px 0px 1px 3px gray;
   position:fixed;
   top:0;
}
.navbar
{
	padding:.5rem 1rem;
}
.middel_part
{
    height:100%;
    width:100%;
	margin:0;
	padding:0;
   /*background-color:red;*/
}
.left_part
{
    min-height:510px;
	width:250px;
	background-color:#eee;
	position:fixed;
	box-shadow:0.1rem 1px 1px 0.1rem lightgray;
    left:0;
	top:58px;	
	float:left;
	
}
.right_part
{
	min-height:800px;
	width:81.5%;
	background-color:white;
	float:right;
}
.navbar-toggler-icon
{
	color:white;
}
footer{
	background-color: var(--main-bg);
	box-shadow: 0px 2px 1px 6px gray;
	position:fixed;
	bottom:0px;
	width:100%;
	color:black;
}

#btn1
{
	color:white;
}

@media screen and (max-width: 991px) {
  .left_part {
    display: none;
	 transition:display 0.5s;
  }
  .right_part
  {
	  width:100%;
  }
}
</style>
<body> 
 
 <!----navbar -->

    <div class="container-fluid main-manu">
        <div class="row">
            <div class="col-md-12 col-12 mx-auto">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">Logo</a>
                    <button id="btn1" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>

        </div>
    </div>


<!----- the  middle part---->
<!-----the middle part----->
<div class="middel_part">

<!-----the left part---->
<!-----the left part---->
<div class="left_part">

</div>
<!-----the left part end---->

<!------the right part---->
<!------the right part---->
<div class="right_part">


</div>
<!------the right part end---->

</div>
<!------the  middle part end---->

<!-------footer----->
<footer>
<div>
<center>
</p>this is a website</p>
</div>
</center>
</footer>

</body>
</html>