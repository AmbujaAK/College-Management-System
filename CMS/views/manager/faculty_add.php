<?php
  include '../../settings/db_connect.php';
	include '../main/header.php';

	$faculty_id = $first_name = $last_name = "";
	$gender = $email = $mobile = "";
	$error = 'something errors';
	$success = '';

	if(isset($_POST['faculty_id']) && isset($_POST['fname']) &&
	isset($_POST['lname']) && isset($_POST['pass']) &&
	isset($_POST['gender']) && isset($_POST['email']) &&
	isset($_POST['mobile'])){
		$faculty_id = $_POST['faculty_id'];
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$pass = $_POST['pass'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];

		if(!empty($faculty_id) && !empty($first_name) && !empty($last_name) &&
		!empty($gender) && !empty($email) && !empty($mobile) &&
		!empty($pass)){
				$sql = "INSERT INTO faculty (faculty_id,first_name,last_name,pass,gender,email,mobile)
								VALUES ('$faculty_id','$first_name','$last_name','$pass','$gender','$email',$mobile)";

				$exec_query = mysqli_query($conn,$sql);
				if($exec_query){
						$success = 'Data added to Department table';
				}else{
					$error = 'Data not added , Wrong Query';
				}
		}else{
				$error = 'Forms not filled';
		}
	}
?>
<div class="right_col" role="main">
	<!-- alerts on error -->
	<?php if($success){?>
	<div class="alert alert-success alert-dismissible fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success!</strong> <?php echo $success; ?>
  	</div>
	<?php }else if($error){?>
	<!-- alerts on success -->
	<div class="alert alert-danger alert-dismissible fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<strong>Error!</strong> <?php echo $error; ?>
  	</div>
	<?php }?>
	<div class="box-header" style="height:65px">
		<h3 class="box-title"></h3>

		<!-- Add new course button -->
		<div class="col-xs-12" style="padding-top:10px; padding-bottom:10px">
			<div class="input-group input-group-sm" style="float:left; margin-left:-20px;">
				<h1 type="text" class="btn btn-block btn-dark" style="width:1090px">Add faculty</h1>
			</div>
		</div>
	</div>
	<div class="box-body no-padding">
		<form action="faculty_add.php" method="post">
			<table class="table table-hover" style="background-color:white">
				<tr><td>Faculty ID : </td><td><input name="faculty_id" type="text"></td></tr>
				<tr><td>First name : </td><td><input name="fname" type="text"></td></tr>
				<tr><td>Last name : </td><td><input name="lname" type="text"></td></tr>
				<tr><td>Password : </td><td><input name="pass" type="password"></td></tr>
				<tr><td>Gender : </td><td><input name="gender" type="text"></td></tr>
				<tr><td>Email : </td><td><input name="email" type="email"></td></tr>
				<tr><td>Mobile : </td><td><input name="mobile" type="phone"></td></tr>
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