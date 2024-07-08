<!--database connection-->
<?php

$servername = "localhost";
$user = "root";
$pass = "root";
$dbname = "carrer_treemultisoft";

$conn = mysqli_connect($servername, $user, $pass, $dbname);

if (!$conn) {
    echo 'Somethin wrong with database' . mysqli_connect_error();
}

?>
<!--database connection-->