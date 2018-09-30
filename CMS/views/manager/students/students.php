<?php
    echo '<a href="../students"><h3>back</h3></a>';
    include '../../../settings/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students list</title>
</head>
<body>
    <div>
        <span><a href="add_student.php">Add new</a></span>
    </div>
    <div>
        <table border>
            <tr>
                <th>s.no</th>
                <th>student_id</th>
                <th>Students name</th>
                <th>gender</th>
                <th>mobile</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
            <?php
                # get department list from database.
                $sql = "SELECT * FROM students";
                $res_set = mysqli_query($conn,$sql);

                if($res_set){
                    if(mysqli_num_rows($res_set) > 0){
                        while($row = mysqli_fetch_assoc($res_set)){
                            echo '<tr> 
                                <td>'.$row['id'] .'</td> 
                                <td>'.$row['student_id'] .'</td> 
                                <td>'.$row['first_name'].' '.$row['last_name'].'</td>
                                <td>'.$row['gender'].'</td>
                                <td>'.$row['mobile'].'</td>
                                <td>'.$row['dept'].'</td>
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