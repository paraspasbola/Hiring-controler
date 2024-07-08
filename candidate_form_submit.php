<?php
require_once('connection.php');

if(isset($_POST['submit'])){

    $filename = $_FILES["resume"]["name"];
    $tempname = $_FILES["resume"]["tmp_name"];
    $folder ="resume/".$filename;
    // echo $folder;
    move_uploaded_file($tempname, $folder );


    $Candidate_id = $_POST['Candidate_id'];
    $Candidate_name = $_POST['Candidate_name'];
    $D_o_b=date("Y-m-d",strtotime($_POST['D_o_b']));  //dob
    $Experience = $_POST['Experience'];
    $resume = $_POST['resume'];
    $education = $_POST['education'];
    $address = $_POST['address'];   
    $applied_post = $_POST['job_post'];
    $phonenumber = $_POST['phonenumber'];   
    $email = $_POST['email'];   

    
    $flag = mysqli_query($conn, "SELECT job_id FROM tbl_jobpost WHERE job_post = '$applied_post'");
    while($sql=$flag->fetch_assoc()){

    $id = $sql['job_id'];

    $result = mysqli_query($conn, "INSERT INTO tbl_candidate (`Candidate_id`,`Candidate_name`,`D_o_b`,`Experience`,`resume`,`education`,`address`,`applied_post`,`job_id`,`phonenumber`,`email`)
    VALUES('$Candidate_id ','$Candidate_name','$D_o_b','$Experience',' $folder','$education','$address','$applied_post','$id','$phonenumber','$email')");

    if($result)
    {
        header('location:candidate_form.php');
    }
    else{
        echo 'something went wrong';
    }
}


}

?>