<!DOCTYPE html>
<html lang="en">
<head>
  <title>cards</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.card{
   border:none;
   padding:10px 25px 0px 0px;
}
.card .img-card{
  height:17rem;
  border-radius: 16px 16px 16px 16px;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
}
.card .img-card img{
   height:16rem;
   width:100%;
   border-radius:16px 16px 0px 0px ;
}
.card .img-card img:hover{
    opacity:0.8;
}
.card .img-card button{
  position:relative;
   bottom:48px;
   width:100%;
   font-size:15px;
   font-family:Brush Script MT (cursive);
   border:none;
   outline:none;
   background-color:#e4efe9;
   height:4.3rem;
   border-radius: 0px 0px 16px 16px;
  
}
.card .img-card button:hover{
  color:white;
  background-color:#3d3d3d;
}
.card .img-card p{
     margin-top:5px;
     font-size:22px;
     color:black;
     font-family:Brush Script MT (cursive);
}
.card .img-card p:hover{
  color:white;
}
</style>
</head>
<body>
  
  <!-- cards -->
  <div class="container my-5">
    <div class="row">
      
      <div class="col-md-3 card">
        <div class="img-card">
          <img src="images/bird.png" alt="loading">
          <button id="btn_show">₹ Pricing <p>Book Printing</p></button>
        </div>
      </div> 
    </div>
  </div>

</body>
</html>
