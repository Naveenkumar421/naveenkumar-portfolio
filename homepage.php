<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div style="text-align:center; padding:15%;" class="main">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['fName'];
        }
       }
       ?>
        Your message was recieved by me successfully, so wait for my response for your request message in your whatsapp.
      </p>
      <a href="logout.php"><b>Go Back</b></a>
    </div>
</body>
</html>