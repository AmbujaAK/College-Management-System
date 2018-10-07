<?php
    include '../../settings/db_connect.php';
    $notify = '<span></span>';
    
    if(isset($_GET['id']) &&
    isset($_POST['dept_id']) && isset($_POST['dept_name'])){
        $id = $_GET['id'];
        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];

        if(!empty($dept_name) && !empty($dept_id)){
            $sql = "UPDATE departments
                    SET dept_name = '$dept_name', dept_id = '$dept_id'
                    WHERE id = $id ;";
            
            $exec_query = mysqli_query($conn,$sql);
            if($exec_query){
                header("location:departments.php");
                //echo "<span style='color:green'>Data added to Department table</span>";
            }else{
                echo "<span style='color:red'>Data not added , Wrong Query</span>";
            }
        }else{
            echo "<span style='color:red'>Forms not filled</span>";
        }
    }
?>