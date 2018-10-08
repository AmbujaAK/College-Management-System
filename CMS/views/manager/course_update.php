<?php
    include '../../settings/db_connect.php';
    $notify = '<span></span>';
    
    if(isset($_GET['id']) && isset($_POST['course_id']) &&
    isset($_POST['dept_id']) && isset($_POST['course_name'])){
        $id = $_GET['id'];
        $course_id = $_POST['course_id'];
        $dept_id = $_POST['dept_id'];
        $course_name = $_POST['course_name'];

        if(!empty($dept_id) && !empty($course_name) && !empty($course_id)){
            $sql = "UPDATE courses
                    SET course_name = '$course_name', course_id = '$course_id',dept_id = '$dept_id'
                    WHERE id = $id ;";
            
            $exec_query = mysqli_query($conn,$sql);
            if($exec_query){
                header("location:courses.php");
                //echo "<span style='color:green'>Data added to Department table</span>";
            }else{
                echo "<span style='color:red'>Data not added , Wrong Query</span>";
            }
        }else{
            echo "<span style='color:red'>Forms not filled</span>";
        }
    }
?>