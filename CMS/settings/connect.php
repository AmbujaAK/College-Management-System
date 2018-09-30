<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($hostname,$username,$password);

    if(!$conn){
        echo 'server not connected';
    }
?>