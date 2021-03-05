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
						$("#form-data").trigger("reset");
						window.location.href = "LMS";
						
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
   

   $("#problem").click(function(){
	 
	 alert("this feature in working mode"); 
    });


$(document).ready(function(){ 
    
	$("#listbtn").click(function(){
		$(".list-content").toggle();
    });
   
});

});
</script>
<script>
$(document).ready(function(){ 
    var val = "<?php echo $vkey ?>";
	var email = "<?php echo $email ?>";
	$.ajax({
	  url :'verifyemail.php',
      type: 'POST',
      data:{vkey     :val,
			email    :email},
      success : function(data){
		  alert(data);
		  window.location.href= "LMS";
		},		  
	});
});      
</script>

<script>
function currentTime() {
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