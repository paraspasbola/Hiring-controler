<!--login backend code  -->
<?php
// Creating session
// session_start();
require_once('connection.php');

//fetching the value from sign form.

if (isset($_POST['sign_in_btn'])) {

    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $temp_email = "";
    $last_name = "";
    $phonenumber = "";


    //coverting the password in the form of base64 encode.
    $encript = base64_encode(base64_encode(base64_encode("$password")));

    //checking email and password from database.    
    $check_email_pass = mysqli_query($conn, "select email from tbl_registration where email='$email' AND password='$encript'");

    while ($check_email = $check_email_pass->fetch_assoc()) {
        $temp_email = $check_email["email"];
    }
    if ($temp_email != NULL) {

        //fecth user name from database.

        $user_name = mysqli_query($conn, "select first_name,email from tbl_registration where email='$temp_email'");
        while ($check_name = $user_name->fetch_assoc()) {
            $temp_name = $check_name["first_name"];
            $last_name = $check_name["last_name"];
            $phonenumber = $check_name["phonenumber"];
            $email = $check_name["email"];

        }
        //giving user name to session. 
        $_SESSION['name'] = "$temp_name";
        $_SESSION['last_name'] = "$last_name";
        $_SESSION['phonenumber'] = "$phonenumber";
        $_SESSION['email'] = "$email";


        //redirecting user to dashboard.
        echo '<script>window.location.assign("dashboard.php")</script>';
    } else {

        //unset the session.
        echo '<script> alert("NO User exist!")</script>';
        echo ' <script>window.location.assign("index.php")</script>';
        
        session_unset();


    }
}

?>
