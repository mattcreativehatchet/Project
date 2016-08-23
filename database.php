<?php

#ini_set("display_errors", "1");
#error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'auth';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
    die( "Connection failed: " . $e->getMessage());
}

function insert_into_db($email, $password) {

    $con = mysqli_connect(localhost, root, root, auth);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();

    }

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    mysqli_query($con, "INSERT INTO  " . users . " (email, password)
                       VALUES ('$email','$password')");

	echo  mysqli_error($con);

    mysqli_close($con);
}

function check_user($email, $password) {

    $con = mysqli_connect(localhost, root, root, auth);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();

    }

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

  $test =  mysqli_query($con, "SELECT * FROM users WHERE email = email");

print_r($test);
print_r($email);
var_dump($test['num_rows']);
var_dump($test->num_rows);
exit;

	echo  mysqli_error($con);

    mysqli_close($con);
}
?>
