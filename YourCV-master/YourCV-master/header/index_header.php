<?php include_once('functions/analyticstracking.php');?>
<!DOCTYPE html>
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
                
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

		<!-- Header -->
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
											
                                                                                        <?php 
											
                                                                                            
                                                                                        if(isset($_SESSION['name'])&&!empty($_SESSION['name'])&&isset($_SESSION['surname'])&&!empty($_SESSION['surname']))
                                                                                        {
                                                                                            echo "<li class='current_page_item'><a href='main.php'>Home</a></li>";
                                                                                            echo "<li><a href='main.php'>".$_SESSION['name']." ".$_SESSION['surname']."</a></li>";
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                           echo "<li class='current_page_item'><a href='index.php'>Home</a></li>";
                                                                                        }
                                                                                        ?>
                                                                                        <li>
                                                                                       <!--<a href="">Dropdowna</a>
												<ul>
													<li><a href='#'>Lorem ipsum dolor</a></li>
													<li><a href='#'>Magna phasellus</a></li>
													<li>
														<a href='#'>Phasellus consequat</a>
														<ul>
															<li><a href='#'>Lorem ipsum dolor</a></li>
															<li><a href='#'>Phasellus consequat</a></li>
															<li><a href="#">Magna phasellus</a></li>
															<li><a href='#'>Etiam dolore nisl</a></li>
														</ul>
													</li>
													<li><a href='#'>Veroeros feugiat</a></li>
												</ul>
											</li>
											<li><a href="right-sidebar.html">Right Sidebar</a></li>-->
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
                                                                                        <li class=""><a href="register.php">Register</a></li>

										</ul>
									</nav>
							
							</div>
						</header>
                                                <div id="banner">
							<h2><strong>Your CV: </strong>Make your Curriculum Vitae
                                                            by <a href="https://europass.cedefop.europa.eu/en/documents/curriculum-vitae"><u>Europass</u></a> standards </h2>
							<!--<p>Does this statement make you want to click the big shiny button?</p>
							<a href="#" class="button big icon fa-check-circle">Yes it does</a>-->
						</div>
                                        </div>
                                </div>  
<div id='main-wrapper'>
   