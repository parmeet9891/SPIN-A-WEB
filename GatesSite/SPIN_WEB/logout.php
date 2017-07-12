<?php
  session_start();
    session_destroy();
    echo  "<script type='text/javascript'>alert ('You are logout successfully!')</script>";
     echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

?>

