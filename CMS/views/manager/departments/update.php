<?php
    echo '<a href="../departments"><h3>back</h3></a>';
    include '../../../settings/db_connect.php';

    $notify = '<span></span>';
    if(isset($_GET['id']) && isset($_POST['dept_id']) && isset($_POST['dept_name'])){
        $id = $_GET['id'];
        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];

        if(!empty($id) && !empty($dept_id) && !empty($dept_name)) {
            $sql = "UPDATE departments
                    SET dept_id = $dept_id, dept_name = '$dept_name'
                    WHERE id = '$id';";
            $exec_query = mysqli_query($conn,$sql);
            if($exec_query){
                header("location:departments.php");
            }else{
                $notify = "<span style='color:red'>Data not added , Wrong Query</span>";
            }

        }else{
            $notify = "<span style='color:red'>Forms not filled</span>";
        }
    }
?>