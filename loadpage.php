<?php
session_start();


include("database-connection.php");


if(isset($_POST["text"]))
{
	$text = $_POST["text"];
}
else
{
	$text ='';	
}



if(isset($_POST["number"]))
{
	$limit = $_POST["number"];
	$limit_per_page = $limit;
}
else
{
	$limit_per_page = 10;
}

$page = "";

$output ="";

/*
$output .="<table>
<tr><td><p id='rank'>LMS Rank</p></td></tr>
<tr><td><p id='line0'>..............................................................................................................................................................................................................................................................................................................................................................</p></td></tr>

<tr><td><fieldset id='data1'>
<i class='fa fa-search' aria-hidden='true' id='click'></i>
<input type='text' name='search'  placeholder='Type to Search' id='search' onkeyup='search()'/>
<select id='list' onchange='myFunction()'>";
  
if($limit_per_page == 10) 
{
	$output .="<option value='10' selected>10</option>
  <option value='20'>20</option>
   <option value='30'>30</option>
</select>";
}
elseif($limit_per_page == 20)  
{
	$output .="<option value='10' >10</option>
  <option value='20' selected>20</option>
   <option value='30'>30</option>
</select>";
}
else{
	$output .="<option value='10'>10</option>
    <option value='20'>20</option>
    <option value='30' selected>30</option>
</select>";	
}

$output .="</fieldset></td></tr></table>";
*/

if(isset($_POST["page_no"]))
{
	$page = $_POST["page_no"];
}
else
{
	$page =1;
}

$offset = ($page - 1)* $limit_per_page;




//$query = "SELECT id,rating,star,username FROM student_table ORDER BY rating DESC LIMIT {$offset},{$limit_per_page}";
$query="SELECT COUNT(*) AS rank, t.id, t.rating,t.star,t.username FROM (select id,rating,star,username from student_table WHERE username LIKE '%$text%' OR username LIKE '{$text}%' OR username='abcdefghijklmnopqrstuvwxy') AS t JOIN (select id,rating,star,username from student_table WHERE username LIKE '%$text%' OR username LIKE '{$text}%' OR username='abcdefghijklmnopqrstuvwxy')  AS dt ON t.rating  < dt.rating  GROUP BY t.id ORDER BY rank,id LIMIT {$offset},{$limit_per_page}";
$run = mysqli_query($conn ,$query);
$result = mysqli_num_rows($run);

$output .='<table class="table table-hover" id="per" class="table-responsive">
    <thead>
      <tr>
        <th class="w1" >Rank</th>
        <th  class="w2">UserName</th>
        <th  class="w3">Rating</th>
      </tr>
    </thead>
    <tbody> ';
   

$rating=0;

while($fetch = mysqli_fetch_assoc($run))
{
	
	$rank=$fetch['rank'];
	$username = $fetch['username'];
	$prev=$rating;
	$rating = $fetch['rating'];
	$star = $fetch['star'];
	$id = $fetch['id'];

if(isset($_SESSION["id"]) && $_SESSION["id"]==$id)
{

$output .="
<tr  style='height:60px;background-color:#e8e5e8;'>";
$output .="<td class='c1'><p id='id'>{$rank}</p></td>";
$output .="<td class='c2'><span id='data'><font id='number'>{$star}</font><font id='star'><i  class='far fa-star'></i></font></span><p class='username'>{$username}</p></td> 
<td class='c3'><p id='rating'>{$rating}</p></td>
</tr>
";

}
else
{
$output .="
<tr  style='height:60px;'>";
$output .="<td class='c1'><p id='id'>{$rank}</p></td>";

$output .="<td class='c2'><span id='data'><font id='number'>{$star}</font><font id='star'><i  class='far fa-star'></i></font></span><p class='username'>{$username}</p></td> 
<td class='c3'><p id='rating'>{$rating}</p></td>
</tr>
";

}
}

$output .='
</tbody>
</table>
';


$query = "SELECT * FROM student_table";
$run = mysqli_query($conn ,$query);
$result = mysqli_num_rows($run);

$total_pages = ceil(($result-1)/$limit_per_page);
$temp1=1;
if($page!=1)
{
	$temp1=$page-1;
}





$output .="<div class='pagination'><a href='' class='first' id='1'>1</a><a href='' id='{$temp1}'>&laquo;</a>";
$temp2=1;
if(($page-3)>0)
{
	  $temp2=$page-3;
	  if(($total_pages-$temp2)<6)
	  {
		  if(($total_pages-6)>0)
		     $temp2=$total_pages-6;
		  else
		     $temp2=1;
	  }
}
else
{
	$temp2=1;
}

for($i=$temp2;$i <= 6+$temp2 && $i <= $total_pages; $i++)
{
	if($i == $page)
	{
		$class_name = "active";
	}
	else{
		$class_name = "";
	}
	
	$output .="<a href='' class='{$class_name}' id='{$i}'>{$i}</a>";
}
$temp=$total_pages;
if($page!=$total_pages)
{
$temp=$page+1;
}
$output .=" <a href='' id='{$temp}'>&raquo;</a>";

if($total_pages>1)
{
$output .="<a href='' class='last' id='{$total_pages}'>{$total_pages}</a>";
}

$output .='</div>';


  echo $output;



?>


