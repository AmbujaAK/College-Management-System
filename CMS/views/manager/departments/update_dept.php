<?php
    echo '<a href="../departments"><h3>back</h3></a>';
    include '../../../settings/db_connect.php';
?>
<?php
    $notify = '<span></span>';
    /*
    if(isset($_GET['id']) && isset($_POST['dept_id']) && isset($_POST['dept_name'])){
        $id = $_GET['id'];

        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];
        
        if(!empty($dept_id) && !empty($dept_name)) {
            $sql = "UPDATE departments
                    SET dept_id = $dept_id, dept_name = '$dept_name'
                    WHERE id = '$id';";
            $exec_query = mysqli_query($conn,$sql);
            if($exec_query){
                $notify = "<span style='color:green'>Data added to Department table</span>";
            }else{
                $notify = "<span style='color:red'>Data not added , Wrong Query</span>";
            }
        }else{
            $notify = "<span style='color:red'>Forms not filled</span>";
        }
    }
    */
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $dept_id = $dept_name = "";

        # get department list from database.
        $sql = "SELECT * FROM departments WHERE id = '$id'";
        $res_set = mysqli_query($conn,$sql);

        if($res_set){
            if(mysqli_num_rows($res_set) > 0){
                while($row = mysqli_fetch_assoc($res_set)){
                    $dept_id = $row['dept_id'];
                    $dept_name = $row['dept_name'];
                }
            }
        }
    }
    
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
            <h1>Update Departments</h1>
        </div>
        <div>
            <?php echo $notify; ?><?php echo $id; ?>
        </div>
        <div>
            <form action="update.php?id=<?php echo $id; ?>" method="post">
                <table border>
                    <tr>
                        <td>Department ID : </td>
                        <td><input name="dept_id" value="<?php echo $dept_id; ?>" type="text"></td>
                    </tr>
                    <tr>
                        <td>Department : </td>
                        <td><input name="dept_name" value="<?php echo $dept_name; ?>"type="text"></td>
                    </tr>
                </table>
                <br>
                <input type="submit">
            </form>
        </div>
    </center>
</body>
</html>