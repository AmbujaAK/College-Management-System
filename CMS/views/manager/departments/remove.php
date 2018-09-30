<?php
    echo '<a href="../departments"><h3>back</h3></a>';
    include '../../../settings/db_connect.php';

    $notify = '<span></span>';
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(!empty($id)) {
            $sql = "DELETE FROM departments
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