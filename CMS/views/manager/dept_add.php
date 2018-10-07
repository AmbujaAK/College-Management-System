<?php
	include '../../settings/db_connect.php';
	include '../main/header.php';

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
<div class="right_col" role="main">
	<div class="box-header" style="height:65px">
		<h3 class="box-title"></h3>
		<div class="col-xs-12" style="padding-top:10px; padding-bottom:10px">
			<div class="input-group input-group-sm" style="float:left; margin-left:-20px;">
				<h1 type="text" class="btn btn-block btn-dark" style="width:1090px">Add departments</h1>
			</div>
		</div>
	</div>
	<div class="box-body no-padding">
		<form action="dept_add.php" method="post">
			<table class="table table-hover" style="background-color:white">
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
			<input class="btn btn-success" type="submit">
		</form>
	</div>
</div>
<?php
  include '../main/footer.php'
?>