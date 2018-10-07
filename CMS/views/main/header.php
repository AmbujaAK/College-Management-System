<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../assets/images/favicon.ico" type="image/ico" />

    <title>CMS! | </title>

    <!-- Bootstrap -->
    <link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- left menu -->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>CMS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../assets/images/ambuja.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Ambuj Kumar</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- Sidebar Menu -->
            <?php
                $urltmp =  explode('/', $_SERVER['REQUEST_URI']);
                $titleTemp = $urltmp[count($urltmp)-1];
                $subUrl = explode('?', $titleTemp);
                $subUrl = explode('.', $subUrl[0]);
                $subUrl = explode('_', $subUrl[0]);
                $nowTitle = $subUrl[0];
                $mainTitle = 'GENERAL';
                $header_info = array('Home'=>array('Dashboard'=>array('url'=>'../dashboard/index.php')),
                                     'Academic'=>array('Courses'=>array('url'=>'../manager/courses.php'),
                                                    'Departments'=>array('url'=>'../manager/departments.php'),
                                                    'Training'=>array('url'=>'../manager/training.php')),
                                      'Students'=>array('Students record'=>array('url'=>'../manager/students.php')),
                                      'Faculty'=>array('Faculty record'=>array('url'=>'../manager/faculty.php')),                
                                      'Examination'=>array('Question Bank'=>array('url'=>'../manager/quesbank.php'),
                                                    'Examination Form'=>array('url'=>'../manager/exam.php'),
                                                    'Results'=>array('url'=>'../manager/results.php')),
                                      'Projects'=>array('Projects'=>array('url'=>'../manager/projects.php'),
                                                        'List of projects'=>array('url'=>'../manager/project_list.php')));
            ?>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <?php foreach ($header_info as $mainKey => $headerMain) {?>
                  <li><a><i class="fa fa-home"></i><?php echo $mainKey; ?><span class="fa fa-chevron-down"></span></a>
                    <!--<ul class="nav child_menu">-->
                      <?php
                        echo '<ul class="nav child_menu">';
                        foreach($headerMain as $subKey=>$headerSub){
                        if(strtolower($subKey) == strtolower($nowTitle)){
                          $nowTitle = $subKey;
                          $mainTitle = $mainKey;
                          echo '<li class="active"><a href="'.$headerSub['url'].'">'.$subKey.'</a></li>';
                        }else{
                          echo '<li><a href="'.$headerSub['url'].'">'.$subKey.'</a></li>';
                        }
                      }?>
                      <?php echo '</ul>'; }?>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../assets/images/ambuja.jpg" alt="">Ambuj
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <!-- notification lists -->
                    <li>
                      <a>
                        <span class="image"><img src="../assets/images/ambuja.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Ambuj Kumar</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <!-- end of notifications -->
                    <!-- see all -->
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                    <!-- end of see all -->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
    <!-- all others file will be included here later -->
		
    <!-- end block-->
<!-- From here footer.php file will be included -->		
