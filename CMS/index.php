<?php
    include_once 'settings/db_connect.php';
    $connected = "<span style='color:green'>Database connected !!</span>";
    $not_connected = "<span style='color:red'>Database not connected !!</span>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <center>
        <h1>PHP Project</h1>
        <?php if($conn) echo $connected; else echo $not_connected; ?>
    </center>
    <hr>
    <div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="views/manager/students/">Student</a></li>
            <li><a href="views/manager/teachers/">Teacher</a></li>
            <li><a href="views/manager/departments/">Departments</a></li>
        </ul>
    </div>
</body>
</html>