<?php include ('functions/analyticstracking.php'); ?>
<!DOCTYPE HTML>

<!--
	ZeroFour by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Your CV</title>
                
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <meta charset="UTF-8">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
                <script src="js/submitForms.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
                
              <!--jQUERY -->
               <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
                <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script>
                $(function() {
                  $( "#datepicker","#datepicker2" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1950:2015",
                    dateFormat: "yy-mm-dd"
                  });
                });
                </script>
                  <script>
                $(function() {
                  $('.datepick').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1950:2015",
                    dateFormat: "yy-mm-dd"
                  });
                });
                </script>
	</head>
	<body class="right-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">

					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="main.php" id="logo">Your CV</a></h1>
								
								<!-- Nav -->
									<nav id="nav">
										<ul>
											<li class="current_page_item"><a href="main.php">Home</a></li>
                                                                                        <?php
                                                                                        if(!empty($_SESSION['login']))
                                                                                        {
                                                                   
                                                                                            echo "<li><a href='cv_type.php'>Make CV</a>";      
                                                                                               echo "<ul>".
													"<li><a href='cv_addMoreLanugagesPickCv.php'>Add language to CV</a></li>".
													"<li><a href='cv_AddtoWhich.php?choice=work'>Add Work Experiences</a></li>".
                                                                                                       "<li><a href='cv_AddtoWhich.php?choice=edu'>Add Education</a></li>".
												"</ul>"."
											</li>";
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                        }
                                                                                        ?>
											<?php 
                                                                                        if(isset($_SESSION['name'])&&!empty($_SESSION['name'])&&isset($_SESSION['surname'])&&!empty($_SESSION['surname']))           
                                                                                        {
                                                                                              echo "<li><a href='profile.php'>".$_SESSION['name']." ".$_SESSION['surname']."</a>";      
                                                                                               echo "<ul>".
													"<li><a href='change_password.php'>Change password</a></li>".
												"</ul>"."
											</li>";
                                                                                          ///// user logs 
                                                                                            include('functions/GetIp.php');
                                                                                            //include('functions/getSingleValue.php');
                                                                                            //include('functions/UrlCheck.php');
                                                                                            include('functions/UserLogs.php');
                                                                                            include('database.php');
                                                                                            $ip=GetClientIp();
                                                                                            $date=date("Y-m-d");
                                                                                            $time=date("H:i:s");
                                                                                            $id_user=$_SESSION['id_user'];
                                                                                            $page= url();
                                                                                            insertUserLogs($db, $page, $date, $time, $ip, $id_user);
                                                                                               
                                                                                        } 
                                                                                        ?>
											
											
											<?php  
                                                                                        if(!empty($_SESSION['login']))
                                                                                        {
                                                                                        if($_SESSION['login']=1)
                                                                                        {
                                                                                            echo "<li><a href='logout.php'>Logout</a></li>";
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            echo "Wrong procedure";
                                                                                        }
                                                                                       
                                                                                        }
                                                                                         else
                                                                                        {
                                                                                            
                                                                                          echo "<li><a href='login.php'>Login</a></li>";  
                                                                                        }
                                                                                        
                                                                                       
                                                                                        ?>
										</ul>
									</nav>
							
							</div>
						</header>

				</div>
			</div>
                <div id="main-wrapper">
				