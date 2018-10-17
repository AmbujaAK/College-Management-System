<?php
	include_once '../../settings/db_connect.php';
	include '../main/header.php';
?>

<div class="right_col" role="main">
	<!--<div class="box">-->
		<div class="box-header" style="height:65px">
				<h3 class="box-title"></h3>

				<!-- Add new course button -->
				<div class="col-xs-12" style="padding-top:10px; padding-bottom:10px">
						<div class="input-group input-group-sm" style="float:left; margin-left:-20px;">
								<a href="faculty_add.php"> <button type="button" class="btn btn-block btn-success" style="width:200px">New Course</button></a>
						</div>
				</div>
		</div>
		<div class="box-body no-padding">
			<table class="table table-hover" style="background-color:white">
				<tbody>
					<tr>
						<th>s.no</th>
						<th>faculty_id</th>
						<th>Faculty name</th>
						<th>gender</th>
						<th>mobile</th>
						<th colspan=2 style="text-align:center">Action</th>
					</tr>
					<?php
					# get department list from database.
					$sql = "SELECT * FROM faculty";
					$res_set = mysqli_query($conn,$sql);

					if($res_set){
						if(mysqli_num_rows($res_set) > 0){
							while($row = mysqli_fetch_assoc($res_set)){
								echo '<tr> 
									<td>'.$row['id'] .'</td> 
									<td>'.$row['faculty_id'] .'</td> 
									<td>'.$row['first_name'].' '.$row['last_name'].'</td>
									<td>'.$row['gender'].'</td>
									<td>'.$row['mobile'].'</td>
									<td>
										<form method="get" action="faculty_edit.php">
											<input type="hidden" name="id" value="'.$row['id'].'">
											<input class="btn btn-primary" type="submit" value="edit">
										</form>
									</td>
									<td>
										<form method="get" action="faculty_remove.php">
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
				</tbody>
			</table>
		</div>
	<!--</div>-->
</div>
<?php
  include '../main/footer.php'
?>