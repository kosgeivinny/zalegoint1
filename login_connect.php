<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 9/17/18
 * Time: 10:42 AM
 */

include "connect.php";
session_start();

if (isset($_POST['login'])){

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $password = md5($pwd);

    $log = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
    $login = mysqli_query($conn, $log);
    $lognow = mysqli_num_rows($login);

    if ($lognow == 1){

        $_SESSION['name'] = $username;

        ?>

        <script>
        window.location.assign('home.php');

        </script>
<?php
    }

    else{
        ?>
        <script> alert("Wrong Credentials!!");
            window.location.assign('login.php');
        </script>
        <?php
    }
}
?>
