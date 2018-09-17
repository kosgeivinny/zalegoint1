<?php
include "connect.php";
include "login_connect.php";

if (!$_SESSION['name']){
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Home Page
    </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">

</head>
<body>
<br>
<nav class="nav-tabs">
    <a href="logout.php" class="btn btn-danger" >Logout </a>
</nav>
<div class="container" align="center">
    <br />
<p> Welcome: <?php echo $_SESSION['name']; ?></p>

    <?php

    $disp = "SELECT * FROM users";
    $display = mysqli_query($conn, $disp);

    echo "<table class='table table-hover'>
<h2> <b><u>Registered Users</u></b></h2>
<thead class='alert-success'><th>First Name</th> <th>Last Name</th><th>Username</th></thead>";

    while ($row=mysqli_fetch_assoc($display)){
          echo "
    <tbody><tr><td>".$row['First_Name']."</td><td>".$row['Last_Name']."</td><td>".$row['Username']."</td></tr></tbody>
    ";
    }
    ?>
</div>
</body>
</html>