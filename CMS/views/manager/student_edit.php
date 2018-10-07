<?php
	include '../../settings/db_connect.php';
	include '../main/header.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$student_id = $first_name = $last_name = $pass = $gender = $email = $mobile = $roll_no = $dept = "";

		# get students list from database.
		$sql = "SELECT * FROM students WHERE id = '$id'";
		$res_set = mysqli_query($conn,$sql);

		if($res_set){
			if(mysqli_num_rows($res_set) > 0){
				while($row = mysqli_fetch_assoc($res_set)){
					$student_id = $row['student_id'];
					$first_name = $row['first_name'];
					$last_name = $row['last_name'];
					$pass = $row['pass'];
					$gender = $row['gender'];
					$email = $row['email'];
					$mobile = $row['mobile'];
					$roll_no = $row['roll_no'];
					$dept = $row['dept'];
				}
			}
		}
	}    
?>
<div class="right_col" role="main">
	<div style="background-color:white">
			<form action="student_update.php?id=<?php echo $id ?>" method="post">
					<table class="table">
							<tr><td>Student ID : </td><td><input name="stud_id" type="text" value="<?php echo $student_id; ?>"></td></tr>
							<tr><td>First name : </td><td><input name="fname" type="text" value="<?php echo $first_name; ?>"></td></tr>
							<tr><td>Last name : </td><td><input name="lname" type="text" value="<?php echo $last_name; ?>"></td></tr>
							<tr><td>Password : </td><td><input name="pass" type="password" value="<?php echo $pass; ?>"></td></tr>
							<tr><td>Gender : </td><td><input name="gender" type="text" value="<?php echo $gender; ?>"></td></tr>
							<tr><td>Email : </td><td><input name="email" type="email" value="<?php echo $email; ?>"></td></tr>
							<tr><td>Mobile : </td><td><input name="mobile" type="phone" value="<?php echo $mobile; ?>"></td></tr>
							<tr><td>Roll No. : </td><td><input name="rollno" type="text" value="<?php echo $roll_no; ?>"></td></tr>
							<tr>
									<td>Department : </td>
									<td>
											<select name="dept" value="<?php echo $dept; ?>">
													<option value="0"><?php echo $dept; ?></option>
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
					<input class="btn btn-success" type="submit">
			</form>
	</div>
</div>
<?php
  include '../main/footer.php'
?>