<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
    <h2>Edit User </h2>


    <?php
    $conn = mysqli_connect('localhost','root','66ecdaf1','Users');
    if(isset($_GET['edit'])) {
        $edit_id = $_GET['edit'];

        $select = "SELECT * FROM user WHERE user_id = '$edit_id'";
        $run = mysqli_query($conn, $select);
        $row_user = mysqli_fetch_array($run);
        $user_name = $row_user['user_name'];
        $user_email = $row_user['user_email'];
        $user_password = $row_user['user_password'];
    }

    ?>
    <form action="" method = "post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" value="<?php echo $user_email;?>" id="email" placeholder="Enter email" name="user_email">
        </div>
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" value="<?php echo $user_name;?>" placeholder="Name " name="user_name">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" value="<?php echo $user_password;?>" placeholder="Enter password" name="user_password">
        </div>

        <input type="submit" name = "insert-btn" class="btn btn-primary"/>
    </form>

    <?php

    $conn = mysqli_connect('localhost','root','66ecdaf1','Users');

    if(isset($_POST['insert-btn'])) {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];


        $insert = "INSERT INTO user(user_name,user_email,user_password) VALUES('$user_name','$user_email','$user_password')";
        $run_insert = mysqli_query($conn, $insert);
        if ($run_insert === true) {
            echo "Data has been inserted";

        } else {
            echo "Insert Failed";
        }
    }





    /*    if(mysqli_connect_errno()){
            echo "Connection failed";}
        else{
            echo "Connection passed";

        }*/

    ?>
</div>

</body>
</html>
