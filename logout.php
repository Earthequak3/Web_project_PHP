<?php
session_start();
$conn = mysqli_connect('localhost','root','66ecdaf1','Users');

    echo "<script>window.open('login.php','_self');</script>";

    session_destroy();
?>