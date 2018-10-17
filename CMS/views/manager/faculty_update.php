<?php
    include '../../settings/db_connect.php';
    $notify = '<span></span>';
    
    if(isset($_GET['id']) && isset($_POST['faculty_id']) &&
    isset($_POST['fname']) && isset($_POST['lname']) &&
    isset($_POST['pass']) && isset($_POST['gender']) &&
    isset($_POST['email']) && isset($_POST['mobile'])){
        $id = $_GET['id'];
        $faculty_id = $_POST['faculty_id'];
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        if(!empty($faculty_id) && !empty($first_name) && !empty($last_name) &&
        !empty($gender) && !empty($email) && !empty($mobile) &&
        !empty($pass)){
            $sql = "UPDATE faculty
                    SET faculty_id = '$faculty_id', first_name = '$first_name', last_name = '$last_name', pass = '$pass',
                        gender = '$gender', email = '$email', mobile = $mobile 
                    WHERE id = $id ;";
            
            $exec_query = mysqli_query($conn,$sql);
            if($exec_query){
                header("location:faculty.php");
                //echo "<span style='color:green'>Data added to Department table</span>";
            }else{
                echo "<span style='color:red'>Data not added , Wrong Query</span>";
            }
        }else{
            echo "<span style='color:red'>Forms not filled</span>";
        }
    }
?>