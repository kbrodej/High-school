
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
	</head>
	<body class="right-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">

					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="index.php" id="logo">Your CV</a></h1>
								
								<!-- Nav -->
									<nav id="nav">
										<ul>
											<li class="current_page_item"><a href="main.php">Home</a></li>
                                                                                        <li><a href="cv_type.php">Make CV</a></li>
                                                                                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
											<?php 
                                                                                        if(isset($_SESSION['name'])&&!empty($_SESSION['name'])&&isset($_SESSION['surname'])&&!empty($_SESSION['surname']))           
                                                                                        {
                                                                                              echo "<li><a href='profile.php'>".$_SESSION['name']." ".$_SESSION['surname']."</a>";      
                                                                                               echo "<ul>".
													"<li><a href='#'>Manage your CVs</a></li>".
													"<li><a href='#'>Change password</a></li>".
													"<li>".
														"<a href='#'>Phasellus consequat</a>".
														"<ul>".
															"<li><a href='#'>Lorem ipsum dolor</a></li>".
															"<li><a href='#'>Phasellus consequat</a></li>".
															"<li><a href='#'>Magna phasellus</a></li>".
															"<li><a href='#'>Etiam dolore nisl</a></li>".
														"</ul>".
													"</li>".
													"<li><a href='#'>Settings</a></li>".
												"</ul>"."
											</li>";
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
				