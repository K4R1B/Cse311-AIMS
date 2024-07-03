<?php

function check_login($connect)
{

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];
        $sql = "SELECT * FROM admin WHERE email='$user' limit 1";

        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location : login.php");
    die;
}


function check_login_student($connect)
{

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];
        $sql = "SELECT * FROM student WHERE std_id='$user' limit 1";

        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location : student-login.php");
    die;
}


function check_login_faculty($connect)
{

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];
        $sql = "SELECT * FROM faculty WHERE fac_id='$user' limit 1";

        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location : faculty-login.php");
    die;
}



function check_login_dean($connect)
{

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];
        $sql = "SELECT * FROM dean WHERE dean_id='$user' limit 1";

        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location : dean-login.php");
    die;
}


function check_login_parent($connect)
{

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];
        $sql = "SELECT * FROM student WHERE std_id='$user' limit 1";

        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location : parent-login.php");
    die;
}



function check_register_student($connect)
{

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];
        $sql = "SELECT * FROM student WHERE std_id='$user' limit 1";

        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location : student-login.php");
    die;
}
