<?php 

    $dbcon = mysqli_connect('localhost','root','0826165190','lonely_db');

    if (mysqli_connect_error($dbcon)) {
        echo 'Connection failed';
    } 

?>