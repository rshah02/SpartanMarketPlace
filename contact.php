<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>webdesigner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="stylesheet" href="css/bootstrap.css"><!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css"><!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<?php 

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']=="false"){
    header("Location:login.php");
}

?>
</head>
<body>
<header style="background-color:blue;color:white">
			<div class="container">
				<div class="header d-lg-flex">
					<div class="nav_w3ls mt-lg-3">
						<nav>
							<label for="drop" class="toggle mt-lg-0 mt-sm-1"><span class="fa fa-bars"
									aria-hidden="true"></span></label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li class="active"><a href="index.html">Home</a></li>
								<li class=""><a href="#about">About </a></li>
								<li class=""><a href="#services">Services </a></li>
								<li class="">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul class="inner-dropdown">
										<li><a href="#skills">My Skills</a></li>
										<li class=""><a href="#edu-exp">Education and Experience</a></li>
									</ul>
								</li>
								<li class=""><a href="#projects">Projects</a></li>
								<li class=""><a href="contact.php">Contact Me</a></li>
							</ul>
						</nav>
					</div>
					<div class="social mt-lg-3 mt-1 ml-auto">
						<ul>
							<li class="mr-sm-3 mr-2 icons"><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li class="mr-sm-3 mr-2 icons"><a href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
							</li>
							<li class="mr-sm-3 mr-2 icons"><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
							<li class=" icons"><a href="#"><span class="fa fa-pinterest" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		
<div class="contact">
<h1> Contact Information </h1>
<?php


$file = file_get_contents('contact.txt.txt', true);

$lines=explode("\n",$file);

foreach($lines as $newline){

    echo '<br>'. $newline .'<br>';
}


?>
</div>
</body>
</html>

