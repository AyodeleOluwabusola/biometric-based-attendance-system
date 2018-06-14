<?php
include "login/config.php";
session_start();


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">
                    <img src="images/logo.png" alt="ATTENDANCE">
                </a>
                <a class="navbar-brand hidden" href="./">
                    <img src="images/logo2.png" alt="Logo">
                </a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">
                            <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="devices.php">Devices</a>
                            </li>
                            <li>
                                <!-- <i class="fa fa-id-badge"></i>
                                <a href="ui-badges.html">Devices</a>
                            </li>
                            <li>
                                <i class="fa fa-bars"></i>
                                <a href="ui-tabs.html">Tabs</a>
                            </li>
                            <li>
                                <i class="fa fa-share-square-o"></i>
                                <a href="ui-social-buttons.html">Social Buttons</a> -->
                            </li>
                            <!-- <li>
                                <i class="fa fa-id-card-o"></i>
                                <a href="ui-cards.html">Cards</a>
                            </li> -->
                            <li>
                                <i class="fa fa-exclamation-triangle"></i>
                                <a href="ui-alerts.html">Alerts</a>
                            </li>
                            <li>
                                <i class="fa fa-spinner"></i>
                                <a href="ui-progressbar.html">Progress Bars</a>
                            </li>
                            <!-- <li>
                                <i class="fa fa-fire"></i>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <i class="fa fa-book"></i>
                                <a href="ui-switches.html">Switches</a>
                            </li>
                            <li>
                                <i class="fa fa-th"></i>
                                <a href="ui-grids.html">Grids</a>
                            </li>
                            <li>
                                <i class="fa fa-file-word-o"></i>
                                <a href="ui-typgraphy.html">Typography</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-table"></i>
                                <a href="tables-basic.html">Time Table</a>
                            </li>
                            <li>
                                <i class="fa fa-table"></i>
                                <a href="tables-data.html">Data Table/Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-th"></i>
                                <a href="forms-basic.html">Basic Form</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-th"></i>
                                <a href="forms-advanced.html">Advanced Form</a>
                            </li>
                        </ul>
                    </li>

                    <h3 class="menu-title">PEOPLE</h3>
                    <!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-graduation-cap"></i>Students</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-user-plus"></i>
                                <a href="add_stud.php">Add student</a>
                            </li>
                            <li>
                                <i class="menu-icon ti-themify-logo"></i>
                                <a href="view_stud.html">View students</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-users"></i>Admisnistrator</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-user-plus"></i>
                                <a href="admin.html">Add Administrator</a>
                            </li>
                            <li>
                                <i class="menu-icon ti-themify-logo"></i>
                                <a href="view_admin.html">View Administrator</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="widgets.html">
                            <i class="menu-icon ti-email"></i>Widgets </a>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-line-chart"></i>
                                <a href="charts-chartjs.html">Chart JS</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-area-chart"></i>
                                <a href="charts-flot.html">Flot Chart</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-pie-chart"></i>
                                <a href="charts-peity.html">Peity Chart</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-map-o"></i>
                                <a href="maps-gmap.html">Google Maps</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-street-view"></i>
                                <a href="maps-vector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Settings</h3>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-sign-out"></i>
                                <a href="page-login.html">Logout</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-edit"></i>
                                <a href="page-register.html">Change password</a>
                            </li>
                            <!-- <li>
                                <i class="menu-icon fa fa-paper-plane"></i>
                                <a href="pages-forget.html">Forget Pass</a>
                            </li> -->
                        </ul>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left">
                        <i class="fa fa fa-tasks"></i>
                    </a>
                    <div class="header-left">
                        <button class="search-trigger">
                            <i class="fa fa-search"></i>
                        </button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit">
                                    <i class="fa fa-close"></i>
                                </button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="photo media-left">
                                        <img alt="avatar" src="images/avatar/1.jpg">
                                    </span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <span class="photo media-left">
                                        <img alt="avatar" src="images/avatar/2.jpg">
                                    </span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <span class="photo media-left">
                                        <img alt="avatar" src="images/avatar/3.jpg">
                                    </span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left">
                                        <img alt="avatar" src="images/avatar/4.jpg">
                                    </span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#">
                                <i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#">
                                <i class="fa fa- user"></i>Notifications
                                <span class="count">13</span>
                            </a>

                            <a class="nav-link" href="#">
                                <i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#">
                                <i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Welcome <?php  echo $_SESSION['username']; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>


        <div class="container">
            <p class="text-center">Students Records</p>
           <?php
    	
    	include 'include/function.php';

	if (isset($_GET['action']) && $_GET['action'] == 'index') {
?>

		<script type="text/javascript">

			$('title').html('User');

			function user_delete(user_id, user_name) {

				var r = confirm("Delete user "+user_name+" ?");

				if (r == true) {

					push('user.php?action=delete&user_id='+user_id);

				}
			}
			
			function user_register(user_id, user_name) {
				
				$('body').ajaxMask();
			
				regStats = 0;
				regCt = -1;
				try
				{
					timer_register.stop();
				}
				catch(err)	
				{
					console.log('Registration timer has been init');
				}
				
				
				var limit = 4;
				var ct = 1;
				var timeout = 5000;
				
				timer_register = $.timer(timeout, function() {					
					console.log("'"+user_name+"' registration checking...");
					user_checkregister(user_id,$("#user_finger_"+user_id).html());
					if (ct>=limit || regStats==1) 
					{
						timer_register.stop();
						console.log("'"+user_name+"' registration checking end");
						if (ct>=limit && regStats==0)
						{
							alert("'"+user_name+"' registration fail!");
							$('body').ajaxMask({ stop: true });
						}						
						if (regStats==1)
						{
							$("#user_finger_"+user_id).html(regCt);
							alert("'"+user_name+"' registration success!");
							$('body').ajaxMask({ stop: true });
							load('user.php?action=index');
						}
					}
					ct++;
				});
			}
			
			function user_checkregister(user_id, current) {
				$.ajax({
					url			:	"user.php?action=checkreg&user_id="+user_id+"&current="+current,
					type		:	"GET",
					success		:	function(data)
									{
										try
										{
											var res = jQuery.parseJSON(data);	
											if (res.result)
											{
												regStats = 1;
												$.each(res, function(key, value){
													if (key=='current')
													{														
														regCt = value;
													}
												});
											}
										}
										catch(err)
										{
											alert(err.message);
										}
									}
				});
			}

		</script>

		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-success" onclick="load('<?php echo $base_path?>user.php?action=create')">Add</button>
			</div>
		</div>
		<br>

<?php

		$user = getUser();

		if (count($user) > 0) {

			echo	"<div class='row'>"
					."<div class='col-md-12'>"
						."<table class='table table-bordered table-hover'>"
								."<thead>"
									."<tr>"
										."<th class='col-md-4'>User ID</th>"
										."<th class='col-md-4'>Username</th>"
										."<th class='col-md-2'>Template</th>"
										."<th class='col-md-2'>Action</th>"
									."</tr>"
								."</thead>"
								."<tbody>";

			foreach ($user as $row) {

				$finger 			= getUserFinger($row['user_id']);
				$register			= '';
				$verification		= '';
				$url_register		= base64_encode($base_path."register.php?user_id=".$row['user_id']);
				$url_verification	= base64_encode($base_path."verification.php?user_id=".$row['user_id']);

				if (count($finger) == 0) {

					$register = "<a href='finspot:FingerspotReg;$url_register' class='btn btn-xs btn-primary' onclick=\"user_register('".$row['user_id']."','".$row['user_name']."')\">Register</a>";

				} else {
					
					$verification = "<a href='finspot:FingerspotVer;$url_verification' class='btn btn-xs btn-success'>Login</a>";
					
				}

				echo					"<tr>"
				 					."<td>".$row['user_id']."</td>"
				 					."<td>".$row['user_name']."</td>"
				 					."<td><code id='user_finger_".$row['user_id']."'>".count($finger)."</code></td>"
				 					."<td>"
										."<button type='button' class='btn btn-xs btn-danger' onclick=\"user_delete('".$row['user_id']."','".$row['user_name']."')\">Delete</button>"
										."&nbsp"
										."$register"
										."$verification"
									."</td>"
				 					."</tr>";

			}

			echo
								"</tbody>"
						."</table>"
					."</div>"
				."</div>";

		} else {

			echo 'User Empty';

		}

	} elseif (isset($_GET['action']) && $_GET['action'] == 'create') {
?>

		<script type="text/javascript">

			$('title').html('Add user');

			function user_store() {

				user_name	= $('#user_name').val();

				push('user.php?action=store&user_name='+user_name);

			}

		</script>

		<div class="row">
			<div class="col-md-4">

			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="user_name">Username</label>
					<input type="text"  id="user_name" class="form-control" placeholder="Enter Username">
				</div>
				<a class="btn btn-default" onclick="load('<?php echo $base_path?>user.php?action=index')">Back</a>
				<button type="submit" class="btn btn-success" onclick="user_store()">Save</button>
			</div>
			<div class="col-md-4">

			</div>
		</div>

<?php
	} elseif (isset($_GET['action']) && $_GET['action'] == 'store') {

		$res 		= array();
        		$res['result'] 	= false;

		if ($_GET['user_name'] == '' || !isset($_GET['user_name']) || empty($_GET['user_name'])) {

			$res['user_name'] = "username can't empty";

		} elseif (isset($_GET['user_name']) && !empty($_GET['user_name'])) {

			$user_name = checkUserName($_GET['user_name']);

			if ($user_name != 1) {

				$res['user_name'] = $user_name;

			}

		}

		if (count($res) > 1) {

			echo json_encode($res);

		} else {

			$sql 	= "INSERT INTO demo_user SET user_name='".$_GET['user_name']."' ";
			$result = mysql_query($sql);

			if ($result) {

				$res['result']	= true;
				$res['reload'] 	= "user.php?action=index";

			} else {

				$res['server'] = "Error insert data!";

			}

			echo json_encode($res);

		}

	} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {

		$sql1		= "DELETE FROM demo_user WHERE user_id = '".$_GET['user_id']."' ";
		$result1	= mysql_query($sql1);
		
		$sql2 		= "DELETE FROM demo_finger WHERE user_id = '".$_GET['user_id']."' ";
		$result2 	= mysql_query($sql2);

		if ($result1 && $result2) {

			$res['result'] 	= true;
			$res['reload'] 	= "user.php?action=index";

		} else {

			$res['server'] 	= "Error delete data!#".$sql1;

		}

		echo json_encode($res);

	} elseif (isset ($_GET['action']) && $_GET['action'] == 'checkreg') {
		
		$sql1		= "SELECT count(finger_id) as ct FROM demo_finger WHERE user_id=".$_GET['user_id'];
		$result1	= mysql_query($sql1);
		$data1 		= mysql_fetch_array($result1);
		
		if (intval($data1['ct']) > intval($_GET['current'])) {
			$res['result'] = true;			
			$res['current'] = intval($data1['ct']);			
		}
		else
		{
			$res['result'] = false;
		}
		echo json_encode($res);
		
	} else {

		echo "Parameter invalid..";

	}
?>
        </div>



           

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        (function ($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>