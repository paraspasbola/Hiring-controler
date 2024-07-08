<?php
include("connection.php");


$id=$_GET['job_id'];
$status=$_GET['status'];

$q="update  tbl_jobpost set status=$status where job_id=$id";

mysqli_query($conn,$q);
header('location:job_status.php');

?>