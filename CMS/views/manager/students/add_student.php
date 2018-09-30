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
    <title>add students</title>
</head>
<body>
    <center>
        <div>
            <h1>Add Students</h1>
        </div>
        <div>
            <?php
                $student_id = $first_name = $last_name = $pass = "";
                $gender = $email = $mobile = $rollno = $dept = "";

                if(isset($_POST['stud_id']) && isset($_POST['fname']) &&
                isset($_POST['lname']) && isset($_POST['pass']) &&
                isset($_POST['gender']) && isset($_POST['email']) &&
                isset($_POST['mobile']) && isset($_POST['rollno']) &&
                isset($_POST['dept'])){
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
                        $sql = "INSERT INTO students (student_id,first_name,last_name,pass,gender,email,mobile,roll_no,dept)
                                VALUES ('$student_id','$first_name','$last_name','$pass','$gender','$email',$mobile,$rollno,'$dept')";

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
            <form action="add_student.php" method="post">
                <table border>
                    <tr><td>Student ID : </td><td><input name="stud_id" type="text"></td></tr>
                    <tr><td>First name : </td><td><input name="fname" type="text"></td></tr>
                    <tr><td>Last name : </td><td><input name="lname" type="text"></td></tr>
                    <tr><td>Password : </td><td><input name="pass" type="password"></td></tr>
                    <tr><td>Gender : </td><td><input name="gender" type="text"></td></tr>
                    <tr><td>Email : </td><td><input name="email" type="email"></td></tr>
                    <tr><td>Mobile : </td><td><input name="mobile" type="phone"></td></tr>
                    <tr><td>Roll No. : </td><td><input name="rollno" type="text"></td></tr>
                    <tr>
                        <td>Department : </td>
                        <td>
                            <select name="dept">
                                <option value="0">----select departments----</option>
                                <?php
                                    # get departments from database
                                    $sql = "SELECT * FROM departments";
                                    $result_set = mysqli_query($conn,$sql);
                                    if($result_set){
                                        if(mysqli_num_rows($result_set) > 0){
                                            while($row = mysqli_fetch_assoc($result_set)){
                                                echo '<option value="'. $row['dept_id'] .'">' . $row['dept_name'] .'</option>';
                                            }
                                        }else{
                                            echo "No departments";
                                        }
                                    }else{
                                        echo "Wrong query";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit">
            </form>
        </div>
    </center>
</body>
</html>