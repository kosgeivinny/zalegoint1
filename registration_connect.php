<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 9/17/18
 * Time: 10:05 AM
 */

include "connect.php";

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $password = md5($pwd);

    $insert = "INSERT INTO users (First_Name, Last_Name, Username, Password) VALUES ('$firstname', '$lastname', '$username', '$password')";
    $todb = mysqli_query($conn, $insert);

    if (!$todb){
        echo "Query failed" . mysqli_error($conn);
    }

    else{
        ?>
        <script> alert("Registration Successful!");
            window.location.assign('registration.php');
        </script>
        <?php
    }
}
?>