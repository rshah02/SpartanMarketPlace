<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css">
    <!--<script src="main.js"></script> -->
    <style>
        .formGroup{
            padding:0px 20px 0 20px;
        }

        .form-control{
            margin:0 auto;
            color:black;
            background-color:grey;  
        }
       

        </style>
    
</head>
<body>

<div class="wrap" id="home">
    <header class="headerWraper">
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
  


<?php
          
          $link = mysqli_connect("localhost", "mahavirv_admin", "admin", "mahavirv_admin");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$field = mysqli_real_escape_string($link, $_REQUEST['field']);
$value = mysqli_real_escape_string($link, $_REQUEST['value']);

// Attempt insert query execution
$sql = "SELECT * FROM users WHERE $field='$value'";
if($result = mysqli_query($link, $sql)){
  if(mysqli_num_rows($result) > 0){
      echo "<table>";
          echo "<tr>";
              echo "<th>First Name</th>";
              echo "<th>Last Name</th>";
              echo "<th>Email Address</th>";
              echo "<th>Home Address</th>";
              echo "<th>Home Phone Number</th>";
              echo "<th>Cell Phone Number</th>";
          echo "</tr>";
      while($row = mysqli_fetch_array($result)){
          echo "<tr>";
              echo "<td>" . $row['first_name'] . "</td>";
              echo "<td>" . $row['last_name'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['home_address'] . "</td>";
              echo "<td>" . $row['home_phone'] . "</td>";
              echo "<td>" . $row['cell_phone'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";
      // Free result set
      mysqli_free_result($result);
  } else{
      echo "No records matching your query were found.";
  }
}

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
           
    ?>
    </body>
    </html>