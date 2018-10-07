<?php
  include '../../settings/db_connect.php';
	include '../main/header.php';

	$student_id = $first_name = $last_name = $pass = "";
	$gender = $email = $mobile = $rollno = $dept = "";
	$alert = 'something errors';

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
						$alert = 'Data added to Department table';
				}else{
					$alert = 'Data not added , Wrong Query';
				}
		}else{
				$alert = 'Forms not filled';
		}
	}
?>
<div class="right_col" role="main">
	<!-- alerts on error -->
	<div class="alert alert-danger alert-dismissible fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<strong>Error!</strong> <?php echo $alert; ?>
  	</div>

	<div class="box-header" style="height:65px">
		<h3 class="box-title"></h3>

		<!-- Add new course button -->
		<div class="col-xs-12" style="padding-top:10px; padding-bottom:10px">
			<div class="input-group input-group-sm" style="float:left; margin-left:-20px;">
				<h1 type="text" class="btn btn-block btn-dark" style="width:1090px">Add students</h1>
			</div>
		</div>
	</div>
	<div class="box-body no-padding">
		<form action="student_add.php" method="post">
			<table class="table table-hover" style="background-color:white">
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
			<input class="btn btn-success" type="submit">
		</form>
  </div>
</div>
<script>
	//$('.alert').alert();
</script>
<?php
  include '../main/footer.php'
?>