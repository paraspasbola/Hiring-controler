<?php
require_once("connection.php");
if(isset($_POST['Delete'])) {
    $a = $_POST['candidate_id'];
    $sql = mysqli_query($conn,"DELETE FROM `tbl_candidate` WHERE Candidate_id ='$a'");
     if($sql) {
        header("location:candidate_info.php");

        } 

}


?>