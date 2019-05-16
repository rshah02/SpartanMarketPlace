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
                  <li class=""><a href="index.html">Projects</a></li>
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
              ><span class="fa fa-diamond"></span> Creative Profile</a
            >
          </h1>
        </div>
      </div>
      <!-- //logo -->
          <div class="container my-lg-4 mb 4">
            <h1>Last Five visited Project pages </h1>
            <table class="table">
              <thead>
              <tr>
                <th>Projects</th>
                <th>Number of visits</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                $reverseCookie=array_reverse($_COOKIE);
                foreach(array_slice($reverseCookie,0,5)as $key =>$value){
                  print("<tr>
                  <td>$key</td>
                  <td>$value</td>
                  </tr>");
                }
                ?>
    </tbody>
             
            </table>
           </div>
      <!-- container -->
      
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
