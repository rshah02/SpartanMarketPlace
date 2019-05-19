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
    <?php
  

            session_start();

            $username="admin";
            $password="password";
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                header("Location:index.php");
                ini_set('session.gc_maxlifetime',  300);

            }

            if(isset($_POST['username'])&& isset($_POST['password'])){

                if($_POST['username']==$username && $_POST['password']==$password){
                    $_SESSION['loggedin']='true';
                    ini_set('session.gc_maxlifetime',  300);
                   // header("Location:index.php");
                    header("Location: {$_SERVER['HTTP_REFERER']}");
                }
            }
    ?>
</head>
<body>
    <div class="container">
    <h1 style="text-align:center;padding:20px"> PLEASE LOGIN </h1>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="col-lg-12" style="padding:40px 0 0 0 ; border:2px solid gray; border-radius:2%;">
            <form method="post" action="login.php">  
                <div class="form-group formGroup">
                    <input type="text" class="form-control" name="username" placeholder="Username" />
                    <br/>
                </div>
                <div class="form-group formGroup">
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                    <br/>
                </div>
                <div class="form-group formGroup">
                <button  class="btn btn-primary" type="submit" value="submit">Login</button>
                </div>
            </form>
        </div>
        </div>
        <div class="col-lg-4"></div>

    </div>
    </div>
</body>
</html>