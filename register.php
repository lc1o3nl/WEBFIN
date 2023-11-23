<?php
require_once('db.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass']; 


if (empty ($login) || empty($pass) || empty ($repeatpass) || empty ($email)) {
    echo "Fill in all fields";
} 
else 
{
    if($pass != $repeatpass) {
        echo "Passwords do not match";
    } else {
        $sql = "INSERT INTO 'users' (login, email, pass) VALUES ('$login', '$email', '$pass')";
        if($conn -> query($sql) === TRUE){
            echo "Registered successfully";
        } else {
            echo "Error: " . $conn ->error; 
        }
    }
}




