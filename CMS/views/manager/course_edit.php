<?php
	include '../../settings/db_connect.php';
	include '../main/header.php';

	$notify = '<span></span>';
	if(isset($_GET['id'])){
        $id = $_GET['id'];
        $course_id = $dept_id = $course_name = "";

        # get department list from database.
        $sql = "SELECT * FROM courses WHERE id = '$id'";
        $res_set = mysqli_query($conn,$sql);

        if($res_set){
            if(mysqli_num_rows($res_set) > 0){
                while($row = mysqli_fetch_assoc($res_set)){
					$course_id = $row['course_id'];
					$dept_id = $row['dept_id'];
                    $course_name = $row['course_name'];
                }
            }
        }
    }    
?>
<div class="right_col" role="main">
	<div class="box-header" style="height:65px">
		<h3 class="box-title"></h3>

		<div class="col-xs-12" style="padding-top:10px; padding-bottom:10px">
			<div class="input-group input-group-sm" style="float:left; margin-left:-20px;">
				<h1 type="text" class="btn btn-block btn-dark" style="width:1090px">Edit courses</h1>
			</div>
		</div>
	</div>
	<div class="box-body no-padding">
		<form action="course_update.php?id=<?php echo $id ?>" method="post">
			<table class="table table-hover" style="background-color:white">
				<tr>
					<td>Course ID : </td>
					<td><input name="course_id" value="<?php echo $course_id; ?>" type="text"></td>
				</tr>
				<tr>
					<td>Department ID : </td>
					<td><input name="dept_id" value="<?php echo $dept_id; ?>" type="text"></td>
				</tr>
				<tr>
					<td>Course : </td>
					<td><input name="course_name" value="<?php echo $course_name;?>" type="text"></td>
				</tr>
			</table>
			<br>
			<input class="btn btn-success" type="submit">
		</form>
	</div>
</div>
<?php
  include '../main/footer.php'
?>