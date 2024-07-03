<?php

session_start();
include("connections.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {



    $id = $_POST['ID'];

    $fnumber = $_POST['password'];




    if (
        !empty($id) && !empty($fnumber)
    ) {

        $query = "SELECT * FROM student WHERE std_id='$id' limit 1";

        $result = mysqli_query($connect, $query);
        // echo ("Its working");

        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['fnumber'] === $fnumber) {

                    $_SESSION['user'] = $user_data['std_id'];


                    header("Location:parent-panel.php");
                    exit;
                }
            }
        }
    } else {
        echo ("Wrong Email Or Password");
        header("Location:parent-login.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parent Login</title>
    <link rel="stylesheet" href="css/login-styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <header>Login Form</header>
        <form action="#" method="POST">
            <div class="field email">
                <div class="input-area">
                    <input type="number" name="ID" placeholder="ID" />
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">ID can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="text" name="password" placeholder="Password" />
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>
            <!-- <div class="pass-txt"><a href="#">Forgot password?</a></div> -->
            <input type="submit" value="Login" />
        </form>
        <a href="index.php" class="back-btn"><span>Go Back</span></a>
        <!-- <div class="sign-txt">Not yet member? <a href="#">Signup now</a></div> -->
    </div>

    <!-- <script src="script.js"></script> -->
</body>

</html>