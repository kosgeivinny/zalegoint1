<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 9/17/18
 * Time: 11:57 AM
 */


session_start();
unset($_SESSION);
session_destroy();
header("Location: login.php");

?>