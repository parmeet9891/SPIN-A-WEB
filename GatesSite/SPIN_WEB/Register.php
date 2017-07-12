<?php
if(isset($_POST['s1']))
{
    $conn = mysqli_connect("localhost", "parmeet", "parmeet@123", "mytsg");
    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());
    
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
    $pno = $_POST['phone'];
    
    $query = "SELECT username FROM register WHERE username='$user'"; 
    
    $dup = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($dup)>0)
        echo "<script type='text/javascript'>alert('This Username already exists. Try with some new username');</script>";
    
    else
    {
        $stmt = $conn->prepare("INSERT INTO register(username, password, mail, mobile_number) VALUES (?,?,?,?)");
        $stmt->bind_param('sssi',$user,$pass,$mail,$pno);
        $stmt->execute();
        echo "You are now registred.";
        $stmt->close();
        echo "<script type='text/javascript'>alert('You are registered Successfully!. You will be redirected to Login page.');</script>";
        echo "<script type='text/javascript'>window.location.href = 'Login.php';</script>";
        $conn->close(); 
     
    }
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
                        <a href="">Register</a>
                    </li>
                    <li>
                        <a href="Login.php">Login</a>
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
                <p>Before Entering into the competition, you need to register and then Login First.</p>
                <h4 align="center">Scroll Down to register</h4>
            </div>
        </div>
    </header><br><br>
    <form method="post">
            <table align="center" border="2">
                 <div class="panel panel-primary">
                <div class="panel-heading">REGSITERATION FORM</div>
                <div class="panel-body">
                <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
    <div class="form-group">
    <label for="exampleInputMail">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="mail@example.com">
  </div>
    <div class="form-group">
    <label for="exampleInputMail">Contact Number</label>
    <input type="text" class="form-control" id="NumberInputId" name="phone" placeholder="XXXXXXXXXX">
  </div>
                    <input type="submit" class="btn btn-primary" value="Register" name="s1"/>
    </div>
            </div>
            </table>
        </form>