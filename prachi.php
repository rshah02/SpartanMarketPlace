<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>
      Creative Profile Personal Category Bootstrap Responsive Web Template |
      Home :: W3layouts
    </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta
      name="keywords"
      content="Creative Profile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
      addEventListener(
        "load",
        function() {
          setTimeout(hideURLbar, 0);
        },
        false
      );

      function hideURLbar() {
        window.scrollTo(0, 1);
      }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link
      href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <!-- //Web-Fonts -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://cdn.auth0.com/js/auth0/9.10/auth0.min.js"></script>

    function p1() {
	<?php
			ob_start();
			// $servername = "jakejakekim56271.ipagemysql.com";
			// $username = "jake";
			// $password = "jake";
			// $dbname = "jakekim1";
      $servername = "localhost";
$username = 'mahavirv_admin';
$password = 'admin';
$dbname = "mahavirv_admin";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE product SET COUNT= COUNT + 1 WHERE ID='P1'";

			if ($conn->query($sql) === TRUE) {
			    //echo "Record updated successfully";
			} else {
			    //echo "Error updating record: " . $conn->error;
			}
			$conn->close();
			?>
	  window.open("https://test-remains.000webhostapp.com/CafeauLait.php", "p", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=500,height=500");
	}

  </head>

  <body>
    <div class="wrap" id="home">
      <!-- header -->
      <header>
        <div class="container">
          <div class="header d-lg-flex">
            <div class="nav_w3ls mt-lg-3">
              <nav>
                <label for="drop" class="toggle mt-lg-0 mt-sm-1"
                  ><span class="fa fa-bars" aria-hidden="true"></span
                ></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li class=""><a href="#about">About </a></li>
                  <li class=""><a href="#services">Services </a></li>
                  <li class="">
                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle"
                      >Dropdown
                      <span class="fa fa-angle-down" aria-hidden="true"></span>
                    </label>
                    <a href="#"
                      >Dropdown
                      <span class="fa fa-angle-down" aria-hidden="true"></span
                    ></a>
                    <input type="checkbox" id="drop-2" />
                    <ul class="inner-dropdown">
                      <li><a href="#skills">My Skills</a></li>
                      <li class="">
                        <a href="#edu-exp">Education and Experience</a>
                      </li>
                    </ul>
                  </li>
                  <li class=""><a href="#projects">Projects</a></li>
                  <li class="">
                    <a href="remoteUserDisplay.php">Remote Users</a>
                  </li>

                  <li class=""><a href="contact.php">Contact Me</a></li>
                  <li class=""><a href="Users.php">Users</a></li>
                </ul>
              </nav>
            </div>
            <div class="social mt-lg-3 mt-1 ml-auto">
              <ul>
                <li class="mr-sm-3 mr-2 icons">
                  <a href="#"
                    ><span class="fa fa-facebook" aria-hidden="true"></span
                  ></a>
                </li>
                <li class="mr-sm-3 mr-2 icons">
                  <a href="#"
                    ><span class="fa fa-instagram" aria-hidden="true"></span
                  ></a>
                </li>
                <li class="mr-sm-3 mr-2 icons">
                  <a href="#"
                    ><span class="fa fa-twitter" aria-hidden="true"></span
                  ></a>
                </li>
                <li class=" icons">
                  <a href="#"
                    ><span class="fa fa-pinterest" aria-hidden="true"></span
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- //header -->

      <!-- logo -->
      <div class="container my-lg-4 mb-4">
        <div class="logo text-center">
          <h1>
            <a href="index.html"
              ><span class="fa fa-diamond"></span> Spartan's Market Place</a
            >
          </h1>
        </div>
      </div>
      <!-- //logo -->

      <!-- container -->
      <div class="container">
        <!-- main -->
        <div class="main">
          <!-- banner -->
       

          <!-- //skills -->
          
          <!-- Projects -->
          <section class="projects" id="projects">
            <div class="inner-sec">
              <h3 class="heading text-capitalize mb-md-5 mb-4">
                products and Services <span></span>
              </h3>
              <div class="row news-grids text-center">
                <div class="col-4 gal-img">
                
                  <a href="https://test-remains.000webhostapp.com/CafeauLait.php"
                    ><img
                      src="images/prachi1.png"
                      alt="news image"
                      class="img-fluid"
                    />
                    <span class="Image">Creative profile Services</span>
                  </a>
                </div>
                <div class="col-4 gal-img">
                  <a href="vaibhav.php"
                    ><img
                      src="images/vaibhav.png"
                      alt="news image"
                      class="img-fluid"
                    />
                    <span class="Image">Nerdy thread</span>
                  </a>
                </div>
                <div class="col-4 gal-img">
                  <a href="javascript:p();">
                  <img
                      src="images/prachi.png"
                      alt="news image"
                      class="img-fluid"
                    />
                    <span class="Image">Coffees</span>
                  </a>
                </div>
                <div class="col-4 gal-img">
                  <a href="http://www.jake-kim.com/#products"
                    ><img
                      src="images/jake.png"
                      alt="news image"
                      class="img-fluid"
                    />
                    <span class="Image">Jake-kim</span>
                  </a>
                </div>
                <div class="col-4 gal-img">
                  <a href="http://namratakasar.com/westernvalley"
                    ><img
                      src="images/namrata.png"
                      alt="news image"
                      class="img-fluid"
                    />
                    <span class="Image">westernvalley</span>
                    <!-- index.php -->

                  </a>
                  

                </div>
              </div>
            </div>
          </section>
          <!-- //Projects -->

          <!-- tabs -->
         

        <!-- contact -->
        <section class="contact" id="contact">
          <div class="inner-sec">
            <h3 class="heading text-capitalize mb-4">
              Get In Touch <span></span>
            </h3>
            <form
              name="contact-form"
              class="contact-form"
              method="post"
              action="#"
            >
              <div class="row">
                <div class="col-md-6 con-gd">
                  <div class="form-group">
                    <p>Name *</p>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Enter Your Name"
                      name="name"
                      required=""
                    />
                  </div>
                  <div class="form-group">
                    <p>Email *</p>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Enter Your Email Id"
                      name="email"
                      required=""
                    />
                  </div>
                </div>
                <div class="col-md-6 con-gd">
                  <div class="form-group">
                    <p>Send a Message *</p>
                    <textarea
                      name="Message"
                      class="form-control"
                      placeholder="Enter Your Message"
                      required=""
                    ></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form>
          </div>
        </section>
        <!-- contact -->
      </div>
      <!-- //container -->

      <!-- footer -->
      <div class="container">
        <footer class="footer-emp-w3ls">
          <div class="copy-right-top border-top">
            <p class="copy-right text-center text-white py-4">
              &copy; 2019 Creative Profile. All Rights Reserved | Design by
              <a href="http://w3layouts.com/"> W3layouts </a>
            </p>
          </div>
        </footer>
      </div>
      <!-- //footer -->

      <!-- move top -->
      <div class="move-top text-right">
        <a href="#home" class="move-top">
          <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
        </a>
      </div>
      <!-- move top -->
    </div>
  </body>
</html>
