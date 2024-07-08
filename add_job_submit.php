<?php

session_start();
if(!isset($_SESSION['name'])){
	echo ' <script>window.location.assign("index.php")</script>';

}
else{

    ?>
    <?php
require_once('connection.php');

if(isset($_POST['submit_job'])){

    

    $post_id =$_POST['post_id'];
    $post_name =$_POST['post_name'];

    mkdir("./hiring/$post_name", 0700);


    $result = mysqli_query($conn, "INSERT INTO tbl_addjob (`post_id`,`post_name`)
    VALUES('$post_id','$post_name')");


    if($result)
    {
        header('location:add_job.php');
    }
    else{
        echo 'something went wrong';
    }


}

?>
<?php
}
?>

