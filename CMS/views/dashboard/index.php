<?php
    include '../main/header.php';
?>
<?php
    include_once '../../settings/db_connect.php';
    $connected = "<span style='color:green'>Database connected !!</span>";
    $not_connected = "<span style='color:red'>Database not connected !!</span>";
?>

<div class="right_col" role="main">
    <center>
        <h1>PHP Project</h1>
        <?php if($conn) echo $connected; else echo $not_connected; ?>
    </center>
    <hr>
    <div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="../manager/students.php">Student</a></li>
            <li><a href="../manager/teachers/">Teacher</a></li>
            <li><a href="../manager/departments/">Departments</a></li>
        </ul>
    </div>
</div>

<?php
include '../main/footer.php'
?>