<?php
require_once('connection.php');

if(isset($_POST['submit'])){

    $job_id =$_POST['job_id'];
    $tempdate = date('Y-m-d', strtotime($_POST['date']));
    $job_post =$_POST['job_post'];
    $Experience =$_POST['Experience'];
    $description =$_POST['description'];

    mkdir("./hiring/$tempdate", 0700);

    $result = mysqli_query($conn, "INSERT INTO tbl_jobpost (`job_id`,`date`,`job_post`,`Experience`,`description`)
    VALUES('$job_id','$tempdate','$job_post','$Experience',' $description')");

    if($result)
    {
        header('location:job_post_form.php');
    }
    else{
        echo 'something went wrong';
    }


}

?>