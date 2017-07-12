<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .q1{
            text-align: center;
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
                <a class="navbar-brand page-scroll" href="GatesSite.php">SPIN A WEB</a>
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

 ?>
                    </li>localhost
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav><br><br><br><br><br>
    You will be logout after <span id="seconds">900 </span>seconds
    <script>
      var seconds = 900;
      setInterval(
        function(){
          if (seconds <= 1) {
            window.location = 'logout.php';
          }
          else {
            document.getElementById('seconds').innerHTML = --seconds;
          }
        },
        1000
      );
    </script>
    
    <form method="post" action="results.php">
    <div class="q1">
        <p>
            Question Number 1: What is the full form HTML?<br>
            <input type="radio" name="r1" value="1">Hyper Text Makeup Language.<br>
            <input type="radio" name="r1" value="2">Hyper Text Markup Language.<br>
            <input type="radio" name="r1" value="3">Hyper Text Make Language.     <br>
            <input type="radio" name="r1" value="4">Hyper Text Meaning Language.<br>
        </p><br>
         <p>
            Question Number 2: What is the full form CSS?<br>
            <input type="radio" name="r2" value="1">Cascading single sheet<br>
            <input type="radio" name="r2" value="2">Cascading style sheet<br>
            <input type="radio" name="r2" value="3">Cascade Style sheet<br>
            <input type="radio" name="r2" value="4">Cascading settle sheet<br>
         </p><br>
         <p>
            Question Number 3: Which symbol is used to end the tag in HTML?<br>
            <input type="radio" name="r3" value="1">\<br>
            <input type="radio" name="r3" value="2">/<br>
            <input type="radio" name="r3" value="3">!<br>
            <input type="radio" name="r3" value="4">+<br>
         </p><br>
         <p>
            Question Number 4: Who is making the Web standards?<br>
            <input type="radio" name="r4" value="1">Mozilla<br>
            <input type="radio" name="r4" value="2">Google<br>
            <input type="radio" name="r4" value="3">Microsoft<br>
            <input type="radio" name="r4" value="4">The World Wide Web Consortium<br>
         </p><br>
         <p>
            Question Number 5: Inline Elements are normally displayed without starting a new line<br>
            <input type="radio" name="r5" value="1">True<br>
            <input type="radio" name="r5" value="2">False<br>
            <input type="radio" name="r5" value="3">None of the above<br>
            <input type="radio" name="r5" value="4">Does Not Exist Something Like Above<br>
         </p><br>
        <p>
            Question Number 6:  An iframe is used to display a web page within a web page.<br>
            <input type="radio" name="r6" value="1">There is nothing like iframe<br>
            <input type="radio" name="r6" value="2">False<br>
            <input type="radio" name="r6" value="3">True<br>
            <input type="radio" name="r6" value="4">Sometimes True, Sometimes False<br>
        </p><br>
          <p>
            Question Number 7: Which of the following is true about Local Storage in HTML5?<br>
            <input type="radio" name="r7" value="1">HTML5 introduces the localStorage attribute which would be used to access a page's local storage area without no time limit.<br>
            <input type="radio" name="r7" value="2">this local storage will be available whenever you would use that page.<br>
            <input type="radio" name="r7" value="3">Both of the above.<br>
            <input type="radio" name="r7" value="4">None of the above.<br>
          </p><br>
         <p>
            Question Number 8: Which HTML attribute is used to define inline styles?<br>
            <input type="radio" name="r8" value="1">styles<br>
            <input type="radio" name="r8" value="2">class<br>
            <input type="radio" name="r8" value="3">font<br>
            <input type="radio" name="r8" value="4">style<br>
         </p><br>
         <p>
            Question Number 9:Which of the following is correct about Browser Safe Colors?<br>
            <input type="radio" name="r9" value="1">These are 216 colors which are supposed to be most safe and computer independent colors.<br>
            <input type="radio" name="r9" value="2">These colors vary from hexa code 000000 to FFFFFF.<br>
            <input type="radio" name="r9" value="3">These colors are safe to use because they ensure that all computers would display the colors correctly when running a 256 color palette.<br>
            <input type="radio" name="r9" value="4"> All of the above.<br>
         </p><br>
         <p>
            Question Number 10: Which of the following property specifies the distance between a marker and the text in the list?<br>
            <input type="radio" name="r10" value="1">marker-offset<br>
            <input type="radio" name="r10" value="2">marker-onset<br>
            <input type="radio" name="r10" value="3"> list-style-image<br>
            <input type="radio" name="r10" value="4"> list-style<br>
         </p><br>
         <p>
            Question Number 11:Which value of Socket.readyState atribute of WebSocket indicates that the connection has been closed or could not be opened?<br>
            <input type="radio" name="r11" value="1">0<br>
            <input type="radio" name="r11" value="2">1<br>
            <input type="radio" name="r11" value="3">2<br>  
            <input type="radio" name="r11" value="4">3<br>
         </p><br>
         <p>
            Question Number 12: When using the padding property, are you allowed to use negative values?<br>
            <input type="radio" name="r12" value="1">No<br>
            <input type="radio" name="r12" value="2">Yes<br>
            <input type="radio" name="r12" value="3">Nothing exists like this<br>
            <input type="radio" name="r12" value="4">It depends<br>
         </p><br>
         <p>
            Question Number 13: What is the previous version of HTML, prior to HTML5<br>
            <input type="radio" name="r13" value="1">HTML4<br>
            <input type="radio" name="r13" value="2">HTML 4.1<br>
            <input type="radio" name="r13" value="3">HTML 4.01<br>
            <input type="radio" name="r13" value="4">HTML 4.9<br>
         </p><br>
         <p>
            Question Number 14: Which HTML tag would be used to display power in expression (A+B)2 ?<br>
            <input type="radio" name="r14" value="1">SUP<br>
            <input type="radio" name="r14" value="2">SUB<br>
            <input type="radio" name="r14" value="3">B<br>
            <input type="radio" name="r14" value="4">P<br>
         </p><br>
         <p>
            Question Number 15: Which of the following is correct about Short Hex Code format of CSS colors?<br>
            <input type="radio" name="r15" value="1">This is a shorter form of the six-digit notation.<br>
            <input type="radio" name="r15" value="2">In this format, each digit is replicated to arrive at an equivalent six-digit value.<br>
            <input type="radio" name="r15" value="3"> Each hexadecimal code will be preceded by a pound or hash sign '#'.<br>
            <input type="radio" name="r15" value="4">All of the above.<br>
         </p><br>
         <p>
            Question Number 16:  In HTML5, contextmenu and spellcheck are:<br>
            <input type="radio" name="r16" value="1">HTML attributes<br>
            <input type="radio" name="r16" value="2">HTML elements<br>
            <input type="radio" name="r16" value="3">Style Attributes<br>
            <input type="radio" name="r16" value="4">Event Attributes<br>
         </p><br>
         <p>
            Question Number 17: Which of the following defines 1% of viewport width?<br>
            <input type="radio" name="r17" value="1">px<br>
            <input type="radio" name="r17" value="2">vh<br>
            <input type="radio" name="r17" value="3">vw<br>
            <input type="radio" name="r17" value="4">vmin<br>
         </p><br>
         <p>
            Question Number 18: In HTML, which method is used to get the current location of the user?<br>
            <input type="radio" name="r18" value="1">getCurrentPosition()<br>
            <input type="radio" name="r18" value="2">getUserPosition()<br>
            <input type="radio" name="r18" value="3">getPosition()<br>
            <input type="radio" name="r18" value="4">getLocation()<br>
         </p><br>
         <p>
            Question Number 19: Which of the following attribute triggers event when media can start play, but might has to stop for buffering?<br>
            <input type="radio" name="r19" value="1">onbeforeplay<br>
            <input type="radio" name="r19" value="2">onplay<br>
            <input type="radio" name="r19" value="3">oncanplay<br>
            <input type="radio" name="r19" value="4">oncanplaythrough<br>
         </p><br>
         <p>
            Question Number 20: In HTML5, which attribute is used to specify that an input field must be filled out?<br>
            <input type="radio" name="r20" value="1">formvalidate<br>
            <input type="radio" name="r20" value="2">placeholder<br>
            <input type="radio" name="r20" value="3">required<br>
            <input type="radio" name="r20" value="4">validate<br>
         </p><br>
         <input type="submit" class="btn btn-primary" value="Submit" name="s2"/>
    </div>
    </form>