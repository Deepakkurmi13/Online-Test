<?php
session_start();
?>

<?php

if($_SESSION['username'] == "deepakkurmi_60" && isset($_GET["id"]))
{

    if(isset($_POST["export"]))
    {
        include("database-connection.php");
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');
        $output = fopen("php://output", "w");
        fputcsv($output,array('ID','NAME','score')); 

        $id= $_GET["id"];

        $queryTest = "SELECT ROW_NUMBER() OVER(ORDER BY (SELECT 1)) AS sn, b.name, a.rightanswer FROM  results a,  student_table b WHERE a.testid=$id AND b.username=a.username ORDER BY  rightanswer DESC";

        $run = mysqli_query($conn ,$queryTest); 

        while($row = mysqli_fetch_assoc($run)){

            fputcsv($output,$row);
        }
  
         fclose($output);

    }
    else
    {
        header("location: LMS");
    }
}

?>