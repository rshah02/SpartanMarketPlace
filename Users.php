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
<body style="height:1200px">
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
  </div>
    <div class="container">
      <div class="row">
       
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          
         <div class="col-lg-12" style=" margin:20px 0 20px 0;padding:40px 0 0 0 ; border:2px solid gray; border-radius:2%;">
            <h2>Search Existing Users</h2>
            <form method="post" action="userlist.php">  
                <div class="form-group formGroup">
                  <label>Search records By</label>
                  <select name="field"> 
                      <option selected="selected"></option>
                      <option>first_name</option>
                      <option>email</option>
                      <option>cell_phone</option>
                  </select>
                  <br/>
                </div>
               <div class="form-group formGroup">
                    <input type="text" class="form-control" name="value" placeholder="value" />
                    <br/>
                </div>

               
                <div class="form-group formGroup">
                <button  class="btn btn-primary" type="submit" value="submit">Search</button>
               
                </div>
            </form>
         </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
   
      <div class="row">
        <h1 style="text-align:center;padding:20px"> create a user</h1>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="col-lg-12" style="padding:40px 0 0 0 ; border:2px solid gray; border-radius:2%;">
             <form method="post" action="createuser.php">  
                <div class="form-group formGroup">
                    <input type="text" class="form-control" name="firstname" placeholder="firstname" />
                    <br/>
                </div>
                <div class="form-group formGroup">
                    <input type="text" class="form-control" name="lastname" placeholder="lastname" />
                    <br/>
                </div>
                <div class="form-group formGroup">
                    <input type="email" class="form-control" name="email" placeholder="email" />
                    <br/>
                </div>
                <div class="form-group formGroup">
                    <input type="text" class="form-control" name="homeaddress" placeholder="homeaddress" />
                    <br/>
                </div>
                
                <div class="form-group formGroup">
                    <input type="phone" class="form-control" name="homephone" placeholder="homephone" />
                    <br/>
                </div>
                <div class="form-group formGroup">
                    <input type="phone" class="form-control" name="cellphone" placeholder="cellphone" />
                    <br/>
                </div>
                <div class="form-group formGroup">
                   <button  class="btn btn-primary" type="submit" value="submit">create</button>
                    <button  class="btn btn-danger" type="reset" value="reset">cancel</button>
                </div>
              </form>

            </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
   

    </body>
</html>