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
    <title>Department list</title>
</head>
<body>
    <div>
        <span><a href="add_dept.php">Add new</a></span>
    </div>
    <div>
        <table border>
            <tr>
                <th>s.no</th>
                <th>dept_id</th>
                <th>Departments</th>
                <th>Action</th>
            </tr>
            
            <?php
                # get department list from database.
                $sql = "SELECT * FROM departments";
                $res_set = mysqli_query($conn,$sql);

                if($res_set){
                    if(mysqli_num_rows($res_set) > 0){
                        while($row = mysqli_fetch_assoc($res_set)){
                            echo '<tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['dept_id'].'</td>
                                <td>'.$row['dept_name'].'</td>
                                <td>
                                    <form method="get" action="update_dept.php">
                                        <input type="hidden" name="id" value="'.$row['id'].'">
                                        <input type="submit" value="edit">
                                    </form>
                                </td>
                                </tr>';
                        }
                    }else{
                        echo 'wrong query';
                    }
                }
                
            ?>
        </table>
    </div>
</body>
</html>