<?php
session_start();
include("database-connection.php");


$query = "SELECT id,rating,star,username FROM student_table WHERE username LIKE '%{$search}%' ";
$run = mysqli_query($conn ,$query);
$result = mysqli_num_rows($run);

while($fetch = mysqli_fetch_assoc($run))
{
	
	$rank = $fetch['rank'];
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
$output .="<td class='c2'><span id='data'><font id='number'>{$star}</font><font id='star'><i  class='far fa-star'></i></font></span><p id='username'>{$username}</p></td> 
<td class='c3'><p id='rating'>{$rating}</p></td>
</tr>
";

}
else
{
$output .="
<tr  style='height:60px;'>";
$output .="<td class='c1'><p id='id'>{$rank}</p></td>";

$output .="<td class='c2'><span id='data'><font id='number'>{$star}</font><font id='star'><i  class='far fa-star'></i></font></span><p id='username'>{$username}</p></td> 
<td class='c3'><p id='rating'>{$rating}</p></td>
</tr>
";

}
}




?>