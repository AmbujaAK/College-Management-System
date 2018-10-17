<?php
	include '../main/header.php';
?>
<?php
	include_once '../../settings/db_connect.php';
	$connected = "<span style='color:green'>Database connected !!</span>";
	$not_connected = "<span style='color:red'>Database not connected !!</span>";
?>

<div class="right_col" role="main">
	<div class="container">
			<div class="row">
					<!-- ./total courses -->
					<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-red">
									<div class="inner">
											<h3><?php echo 'Courses' ?></h3>
											<p>Total Course</p>
									</div>
									<div class="icon">
											<i class="ion ion-pie-graph"></i>
									</div>
									<a href='../manager/courses.php' class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
					</div>

					<!-- ./total trainner -->
					<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-green">
									<div class="inner">
											<h3><?php echo 'Employee'; ?></h3>
											<p>Total Trainner</p>
									</div>
									<div class="icon">
											<i class="ion ion-person-add"></i>
									</div>
									<a href="../manager/faculty.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
					</div>
					
					<!-- ./total students -->
					<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-blue">
									<div class="inner">
											<h3><?php echo 'Student'; ?></h3>
											<p>Total Student</p>
									</div>
									<div class="icon">
											<i class="ion ion-person-add"></i>
									</div>
									<a href="../manager/students.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
					</div>

					<!-- ./total report -->
					<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-red">
									<div class="inner">
											<h3><?php echo 'Reports'; ?></h3>
											<p>Total Report</p>
									</div>
									<div class="icon">
											<i class="ion ion-stats-bars"></i>
									</div>
									<a href="../../views/academic/report.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
					</div>
					<!-- ./col -->
			</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-9">
				<div>.....</div>
				<div style="background:red">hello</div>
			</div>
			<div class="col-xs-3">
				<div>.....</div>
				<div style="background:blue">ambuja</div>
			</div>
		</div>
	</div>
</div>

<?php
	include '../main/footer.php'
?>