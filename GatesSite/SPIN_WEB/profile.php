<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .image{
            position: relative;
            width: 100%;
        }
        h2 { 
   position: absolute; 
   top: 200px; 
   left: 0; 
   width: 100%; 
}
    div.transbox {
  margin: 10px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox h4 {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
       </style>
   
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

    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
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
                    <a href="">Your Profile</a>
                    <?php
                    session_start();
                    
                    $a = $_SESSION['loggin'];
                    if($a=='yes')
                    {
                       echo "<font color='white'>Welcome here,". $_SESSION['username']."</font>";
                    }
                    else{
                       echo "<script type='text/javascript'>alert('Logged In to continue');</script>";
                       echo "<script type='text/javascript'>window.location.href = 'Login.php';</script";
                    }
//if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
 //  echo "<font color='white'>Welcome here,". $_SESSION['username']."</font>";
//}
//else
 // {
 // echo "<script type='text/javascript'>alert('Logged In to continue');</script>";
  //echo "<script type='text/javascript'>window.location.href = 'Login.php';</script";
  
  //} 
 
 ?>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="image">
        <img src="html.jpg" class="align-center img-responsive">
        <h2>
            <div class="transbox">
                <h4><center><font size="9">Hello People.</font></center><br>
                    We know that you are eager to enter into the competition. But here are some <font color="red">POINTS</font> that you must know.<br><br>
                    1. The Test would consists of 20 Questions based on HTML,CSS.<br><br>
                    2. The Second Round and Third Round will be onsite.<br><br>
                    3. Results will be passed on to your Email Id or Phone numbers you have entered first.<br><br>
                    4. The results will be final, No changes would be made.(As they will be checked more than once).<br><br>
                    5. Your results will be submitted properly and automatically you will be logged out.<br><br>
                    6. You will be given 15 minutes to solve this quiz.If not completed in 15 minutes then you will be logout.<br><br>
                    NOW YOU CAN ENTER INTO THE COMPETITION.
                   
                </h4> 
            </div>
            <center><a href="competitionworld.php" class="btn btn-success btn-xl page-scroll">Enter The Competition</a></center>
        </h2>
    </div>
               
               
        
   
