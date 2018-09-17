<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 9/17/18
 * Time: 10:14 AM
 */

$conn = mysqli_connect('Localhost', 'root', '59156254654', 'zalego');
if (!$conn){
    echo "Connection failed!". mysqli_error($conn);
}

/*else{
    echo "Connection successful!";
}*/
?>