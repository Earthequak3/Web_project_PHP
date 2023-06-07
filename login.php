<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Simple Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
            <input type="text" name = "email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
        <div class="form-group">
            <input type="submit" name = "login-btn" class="btn btn-primary btn-block" value="Login"/>
        </div>
        <div class="clearfix">
        </div>
    </form>
    <p class="text-center"><a href="add_users.php">Create an Account</a></p>



    <?php
    function generateCSRFToken(): string
    {
        $token = bin2hex(random_bytes(32)); // Generare de 32 de caractere aleatoare în format hexadecimal
        $_SESSION['csrf_token'] = $token; // Salvarea tokenului în sesiune
        return $token;
    }
    $conn = mysqli_connect('localhost','root','66ecdaf1','Users');


    if (isset($_POST['login-btn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $csrfToken = $_POST['csrf_token'];

        if (isset($csrfToken) && isset($_SESSION['csrf_token'])) {

            $select = "SELECT * FROM user WHERE user_email='$email'";

            $run = mysqli_query($conn, $select);

                $row_user = mysqli_fetch_array($run);
                $db_email = $row_user['user_email'];
                $db_password = $row_user['user_password'];

                if ($email == $db_email && $password == $db_password) {
                    echo "<script>window.open('index.php','_self')</script>";
                    $_SESSION['email'] = $db_email;
                } else {
                    echo "Email or Password is invalid";
                }


        } else {
            echo "Invalid CSRF Token";

        }
    }

    ?>
</div>
</body>
</html>