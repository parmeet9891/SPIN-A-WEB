<?php
    $conn=mysqli_connect("localhost", "parmeet", "parmeet@123","mytsg");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
        echo "Connected !!";
    $sql = "SELECT * FROM register order by totalmarks desc";
    $result = mysqli_query($conn, $sql);

    if(!$result)
        die("No Connection");
    else
        echo "<br>Fetched !!<br><br>";
    
    while($row = mysqli_fetch_array($result))
    {   
        echo $row['username']."<br>".$row['mail']."<br>".$row['mobile_number']."<br>".$row['totalmarks']."<br><br>";
   
    }
    $conn->close();
?>