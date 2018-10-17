<?php
	include '../../settings/db_connect.php';
	include '../main/header.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$faculty_id = $first_name = $last_name = $pass = $gender = $email = $mobile = "";

		# get students list from database.
		$sql = "SELECT * FROM faculty WHERE id = '$id'";
		$res_set = mysqli_query($conn,$sql);

		if($res_set){
			if(mysqli_num_rows($res_set) > 0){
				while($row = mysqli_fetch_assoc($res_set)){
					$faculty_id = $row['faculty_id'];
					$first_name = $row['first_name'];
					$last_name = $row['last_name'];
					$pass = $row['pass'];
					$gender = $row['gender'];
					$email = $row['email'];
					$mobile = $row['mobile'];
				}
			}
		}
	}    
?>
<div class="right_col" role="main">
	<div style="background-color:white">
			<form action="faculty_update.php?id=<?php echo $id ?>" method="post">
					<table class="table">
							<tr><td>Fcaculty ID : </td><td><input name="faculty_id" type="text" value="<?php echo $faculty_id; ?>"></td></tr>
							<tr><td>First name : </td><td><input name="fname" type="text" value="<?php echo $first_name; ?>"></td></tr>
							<tr><td>Last name : </td><td><input name="lname" type="text" value="<?php echo $last_name; ?>"></td></tr>
							<tr><td>Password : </td><td><input name="pass" type="password" value="<?php echo $pass; ?>"></td></tr>
							<tr><td>Gender : </td><td><input name="gender" type="text" value="<?php echo $gender; ?>"></td></tr>
							<tr><td>Email : </td><td><input name="email" type="email" value="<?php echo $email; ?>"></td></tr>
							<tr><td>Mobile : </td><td><input name="mobile" type="phone" value="<?php echo $mobile; ?>"></td></tr>
					</table>
					<br>
					<input class="btn btn-success" type="submit">
			</form>
	</div>
</div>
<?php
  include '../main/footer.php'
?>