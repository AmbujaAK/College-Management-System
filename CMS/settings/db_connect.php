<?php
    require_once 'connect.php';

    $dbname = 'project-php';

    $select_db = mysqli_select_db($conn,$dbname);

    if(!$select_db){
        echo "<center><h1 style='color:red'>Database not connected !!</h1><center>";
    }
?>