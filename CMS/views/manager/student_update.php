<?php
    include '../../settings/db_connect.php';
    $notify = '<span></span>';
    
    if(isset($_GET['id']) && isset($_POST['stud_id']) &&
    isset($_POST['fname']) && isset($_POST['lname']) &&
    isset($_POST['pass']) && isset($_POST['gender']) &&
    isset($_POST['email']) && isset($_POST['mobile']) &&
    isset($_POST['rollno']) && isset($_POST['dept'])){
        $id = $_GET['id'];
        $student_id = $_POST['stud_id'];
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $rollno = $_POST['rollno'];
        $dept = $_POST['dept'];

        if(!empty($student_id) && !empty($first_name) && !empty($last_name) &&
        !empty($gender) && !empty($email) && !empty($mobile) &&
        !empty($rollno) && !empty($dept) && !empty($pass)){
            $sql = "UPDATE students
                    SET student_id = '$student_id', first_name = '$first_name', last_name = '$last_name', pass = '$pass',
                        gender = '$gender', email = '$email', mobile = $mobile, roll_no = $rollno, dept = '$dept' 
                    WHERE id = $id ;";
            
            $exec_query = mysqli_query($conn,$sql);
            if($exec_query){
                header("location:students.php");
                //echo "<span style='color:green'>Data added to Department table</span>";
            }else{
                echo "<span style='color:red'>Data not added , Wrong Query</span>";
            }
        }else{
            echo "<span style='color:red'>Forms not filled</span>";
        }
    }
?>