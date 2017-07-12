<?php
    if(isset($_POST['s1']))
    {
        $obj = new mysqli("localhost", "parmeet", "parmeet@123", "mytsg");
   
        $newuser = mysqli_real_escape_string($obj,$_POST['username']);
        $newpassword = mysqli_real_escape_string($obj,$_POST['password']);
        $sel_user = "SELECT totalmarks FROM register WHERE username='$newuser' AND password='$newpassword'";
        $run_user = mysqli_query($obj, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        $info = mysqli_fetch_assoc($run_user);
         $tm = $info['totalmarks'];
        if($check_user>0)
        {   
            if($tm>0)
        {
           echo "<script type='text/javascript'>alert('You have already participated in this contest');</script>";
             echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
        }
            session_start();
             $_SESSION['loggedin']==true;
             $_SESSION['username'] = $newuser;
             $_SESSION['loggin'] = 'yes';
            echo "<script type='text/javascript'>alert('Logged In');</script>";
            echo "<script type='text/javascript'>window.location.href = 'profile.php';</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Wrong Username OR Password');</script>";
        }
        $obj->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome To Official Website of Spin a Web</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">SPIN A WEB</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  
                 
                    <li>
                        <a href="">LogIn</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Your Favorite Source for HTML Quiz</h1>
                <hr>
                <h2>Great! It seems that you have registered.</h2>
                <h4 align="center"> If not, then <a href="Register.php">click here</a> to register youself first.</h4>
               
            </div>
        </div>
    </header><br><br>
    <form method="post">
            <table align="center" border="2">
                 <div class="panel panel-primary">
                <div class="panel-heading">LOGIN FORM</div>
                <div class="panel-body">
                <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
                    <input type="submit" class="btn btn-primary" value="Login" name="s1"/>
    </div>
            </div>
            </table>
        </form>
    