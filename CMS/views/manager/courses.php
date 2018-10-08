<?php
	include '../../settings/db_connect.php';
  include '../main/header.php';
?>
<div class="right_col" role="main">
	<div class="box-header" style="height:65px">
		<h3 class="box-title"></h3>

		<!-- Add new departments button -->
		<div class="col-xs-12" style="padding-top:10px; padding-bottom:10px">
			<div class="input-group input-group-sm" style="float:left; margin-left:-20px;">
				<a href="course_add.php"> <button type="button" class="btn btn-block btn-success" style="width:200px">New Courses</button></a>
			</div>
		</div>
	</div>
  <div class="box-body no-padding">
    <table class="table table-hover" style="background-color:white">
			<tr>
				<th>s.no</th>
				<th>course_id</th>
				<th>dept_id</th>
				<th>Courses</th>
				<th colspan=2>Action</th>
			</tr>
            
			<?php
				# get department list from database.
				$sql = "SELECT * FROM courses";
				$res_set = mysqli_query($conn,$sql);

				if($res_set){
					if(mysqli_num_rows($res_set) > 0){
						while($row = mysqli_fetch_assoc($res_set)){
							echo '<tr>
								<td>'.$row['id'].'</td>
								<td>'.$row['course_id'].'</td>
								<td>'.$row['dept_id'].'</td>
								<td>'.$row['course_name'].'</td>
								<td>
									<form method="get" action="course_edit.php">
										<input type="hidden" name="id" value="'.$row['id'].'">
										<input class="btn btn-primary" type="submit" value="edit">
									</form>
								</td>
								<td>
									<form method="get" action="course_remove.php">
										<input type="hidden" name="id" value="'.$row['id'].'">
										<input class="btn btn-danger" type="submit" value="delete">
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
</div>
<?php
  include '../main/footer.php'
?>