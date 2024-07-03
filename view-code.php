<?php
session_start();
include("connections.php");


if (isset($_POST['delete'])) {
    $admin = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM admin WHERE email='$admin' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Table Updated");
        header("Location: table-view.php");
        exit(0);
    } else {
        echo ("Failed Operation");
        header("Location: table-view.php");
        exit(0);
    }
}

if (isset($_POST['Update'])) {
    $admin = mysqli_real_escape_string($connect, $_POST['email']);


    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $dob = mysqli_real_escape_string($connect, $_POST['dob']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $number = mysqli_real_escape_string($connect, $_POST['number']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);
    $nid = mysqli_real_escape_string($connect, $_POST['nid']);
    $dept = mysqli_real_escape_string($connect, $_POST['dept']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $jod = mysqli_real_escape_string($connect, $_POST['JOD']);
    $stat = mysqli_real_escape_string($connect, $_POST['stat']);
    // echo ($admin);

    $query = "UPDATE admin SET full_name='$fullname', dob='$dob', gender='$gender', phone='$number', email='$email'
    , dept='$dept', sdate='$jod', stat='$stat', nid_pass='$nid', address='$address' WHERE email='$admin' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo (" Updated Successfully");
        header("Location: table-view.php");
        exit(0);
    } else {
        echo (" Updated Failed");
        header("Location: Edit-profile.php");
        exit(0);
    }
}


if (isset($_POST['dean-delete'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['dean-delete']);

    $query = "DELETE FROM dean WHERE dean_id='$dean' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Table Updated");
        header("Location: dean-table-view.php");
        exit(0);
    } else {
        echo ("Failed Operation");
        header("Location: dean-table-view.php");
        exit(0);
    }
}

if (isset($_POST['Dean-Update'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['dean_id']);

    $dean_id = mysqli_real_escape_string($connect, $_POST['dean_id']);
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $dob = mysqli_real_escape_string($connect, $_POST['dob']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $number = mysqli_real_escape_string($connect, $_POST['number']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);
    $nid = mysqli_real_escape_string($connect, $_POST['nid']);
    $dept = mysqli_real_escape_string($connect, $_POST['dept']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $jod = mysqli_real_escape_string($connect, $_POST['JOD']);
    $stat = mysqli_real_escape_string($connect, $_POST['stat']);
    $salary = mysqli_real_escape_string($connect, $_POST['salary']);
    $passkey = mysqli_real_escape_string($connect, $_POST['pass']);
    echo ($dean);

    $query = "UPDATE dean SET dean_id='$dean_id', full_name='$fullname', dob='$dob', gender='$gender', phone='$number', email='$email'
    , dept='$dept', sdate='$jod', stat='$stat', nid_pass='$nid', address='$address',salary='$salary',passkey='$passkey' WHERE dean_id='$dean_id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Data Updated Successfully");
        header("Location: dean-table-view.php");
        exit(0);
    } else {
        echo ("Data Updated Failed");
        header("Location: dean-edit.php");
        exit(0);
    }
}


if (isset($_POST['Faculty-Update'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['dean_id']);

    $dean_id = mysqli_real_escape_string($connect, $_POST['dean_id']);
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $dob = mysqli_real_escape_string($connect, $_POST['dob']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $number = mysqli_real_escape_string($connect, $_POST['number']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);
    $nid = mysqli_real_escape_string($connect, $_POST['nid']);
    $dept = mysqli_real_escape_string($connect, $_POST['dept']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $jod = mysqli_real_escape_string($connect, $_POST['JOD']);
    $stat = mysqli_real_escape_string($connect, $_POST['stat']);
    $salary = mysqli_real_escape_string($connect, $_POST['salary']);
    $passkey = mysqli_real_escape_string($connect, $_POST['pass']);
    echo ($dean);

    $query = "UPDATE faculty SET fac_id='$dean_id', full_name='$fullname', dob='$dob', gender='$gender', phone='$number', email='$email'
    , dept='$dept', sdate='$jod', stat='$stat', nid_pass='$nid', address='$address',salary='$salary',passkey='$passkey' WHERE fac_id='$dean_id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Data Updated Successfully");
        header("Location: faculty-table-view.php");
        exit(0);
    } else {
        echo ("Data Updated Failed");
        header("Location: faculty-edit.php");
        exit(0);
    }
}


if (isset($_POST['faculty-delete'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['faculty-delete']);

    $query = "DELETE FROM faculty WHERE fac_id='$dean' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Table Updated");
        header("Location: faculty-table-view.php");
        exit(0);
    } else {
        echo ("Failed Operation");
        header("Location: faculty-table-view.php");
        exit(0);
    }
}

if (isset($_POST['student-delete'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['student-delete']);

    $query = "DELETE FROM student WHERE std_id='$dean' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Table Updated");
        header("Location: student-table-view.php");
        exit(0);
    } else {
        echo ("Failed Operation");
        header("Location: student-table-view.php");
        exit(0);
    }
}


if (isset($_POST['Student-Update'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['dean_id']);

    $dean_id = mysqli_real_escape_string($connect, $_POST['dean_id']);
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $dob = mysqli_real_escape_string($connect, $_POST['dob']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $number = mysqli_real_escape_string($connect, $_POST['number']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);
    $nid = mysqli_real_escape_string($connect, $_POST['nid']);
    $dept = mysqli_real_escape_string($connect, $_POST['dept']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $jod = mysqli_real_escape_string($connect, $_POST['JOD']);
    $stat = mysqli_real_escape_string($connect, $_POST['stat']);
    $salary = mysqli_real_escape_string($connect, $_POST['salary']);
    $passkey = mysqli_real_escape_string($connect, $_POST['pass']);
    $cgpa = mysqli_real_escape_string($connect, $_POST['cgpa']);
    $credit = mysqli_real_escape_string($connect, $_POST['credit']);
    echo ($dean);

    $query = "UPDATE student SET std_id='$dean_id', full_name='$fullname', dob='$dob', gender='$gender', phone='$number', email='$email'
    , dept='$dept', sdate='$jod', stat='$stat', nid_pass='$nid', address='$address',salary='$salary',passkey='$passkey',cgpa='$cgpa',credit='$credit' WHERE std_id='$dean_id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Data Updated Successfully");
        header("Location: student-table-view.php");
        exit(0);
    } else {
        echo ("Data Updated Failed");
        header("Location: student-edit.php");
        exit(0);
    }
}

if (isset($_POST['faculty-course-delete'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['faculty-course-delete']);

    $query = "DELETE FROM faculty_course WHERE c_name='$dean' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Table Updated");
        header("Location: admin-panel-faculty-courses.php");
        exit(0);
    } else {
        echo ("Failed Operation");
        header("Location: admin-panel-faculty-courses.php");
        exit(0);
    }
}


if (isset($_POST['student-course-delete'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['student-course-delete']);

    $query = "DELETE FROM student_course WHERE c_name='$dean' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Table Updated");
        header("Location: admin-panel-student-courses.php");
        exit(0);
    } else {
        echo ("Failed Operation");
        header("Location: admin-panel-student-courses.php");
        exit(0);
    }
}

if (isset($_POST['student-own-course-delete'])) {
    $dean = mysqli_real_escape_string($connect, $_POST['student-own-course-delete']);

    $query = "DELETE FROM student_course WHERE c_name='$dean' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo ("Table Updated");
        header("Location: student-panel.php");
        exit(0);
    } else {
        echo ("Failed Operation");
        header("Location: student-panel.php");
        exit(0);
    }
}



// if (isset($_POST['save_student'])) {
//     $name = mysqli_real_escape_string($con, $_POST['name']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $phone = mysqli_real_escape_string($con, $_POST['phone']);
//     $course = mysqli_real_escape_string($con, $_POST['course']);

//     $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

//     $query_run = mysqli_query($con, $query);
//     if ($query_run) {
//         $_SESSION['message'] = "Student Created Successfully";
//         header("Location: student-create.php");
//         exit(0);
//     } else {
//         $_SESSION['message'] = "Student Not Created";
//         header("Location: student-create.php");
//         exit(0);
//     }
// }
