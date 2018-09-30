<?php
    echo '<a href="../departments"><h3>back</h3></a>';
    include '../../../settings/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add departments</title>
</head>
<body>
    <center>
        <div>
            <h1>Add Departments</h1>
        </div>
        <div>
            <?php
                $dept_id = $dept_name = $id = "";
                
                if(isset($_POST['dept_id']) && isset($_POST['dept_name'])){
                    $data[$id]['dept_id'] = "";
                    $data[$id]['dept_name'] = "";
                    $dept_id = $_POST['dept_id'];
                    $dept_name = $_POST['dept_name'];

                    if(!empty($dept_id) && !empty($dept_name)) {
                        $sql = "INSERT INTO departments (dept_id,dept_name) VALUES ($dept_id,'$dept_name')";
                        $exec_query = mysqli_query($conn,$sql);
                        if($exec_query){
                            echo "<span style='color:green'>Data added to Department table</span>";
                        }else{
                            echo "<span style='color:red'>Data not added , Wrong Query</span>";
                        }
                    }else{
                        echo "<span style='color:red'>Forms not filled</span>";
                    }
                }
            ?>
        </div>
        <div>
            <form action="add_dept.php" method="post">
                <table border>
                    <tr>
                        <td>Department ID : </td>
                        <td><input name="dept_id" value="" type="text"></td>
                    </tr>
                    <tr>
                        <td>Department : </td>
                        <td><input name="dept_name" value=""type="text"></td>
                    </tr>
                </table>
                <br>
                <input type="submit">
            </form>
        </div>
    </center>
</body>
</html>