<?php
$server = 'localhost';
$username = 'n1566458_learn_with';
$password = '4ul7ODUggrvK';
$database = 'n1566458_learn_with';

if (isset($_POST))
    $conn = new mysqli($server, $username, $password, $database);
if ($conn) {
    // echo 'Server Connected Success';
} else {
    die(mysqli_error($conn));
}

?>  