<?php

session_start();

include("connections.php");

?>


<?php
if (isset($_GET['id'])) {
    $user_email = $_GET['id'];
    $query = "SELECT * FROM admin WHERE email='$user_email'";
    $query_run = mysqli_query($connect, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $admin = mysqli_fetch_array($query_run);
        // print_r($admin);

?>


<?php
    } else {
        echo ("NO Sunch Record Found !");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="css/register-styles.css" />
</head>

<body>
    <div class="container">
        <header>Personal Details</header>
        <form action="view-code.php" method="POST">
            <!-- <input type="text" name="admin_email" value="<?= $admin['email']; ?>"> -->
            <div class="first-form">
                <div class="personal info">
                    <span class="title">Personal Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="Full Name">Full Name</label>
                            <input type="text" name="fullname" value="<?= $admin['full_name']; ?>"
                                placeholder="Enter Full Name" />
                        </div>

                        <div class="input-field">
                            <label for="DOB">DOB</label>
                            <input type="date" name="dob" value="<?= $admin['dob']; ?>"
                                placeholder="Enter Date Of Birth" />
                        </div>

                        <div class="input-field">
                            <label for="Email">Email Address</label>
                            <input type="email" name="email" value="<?= $admin['email']; ?>"
                                placeholder="Enter Email Address" />
                        </div>

                        <div class="input-field">
                            <label for="Mobile">Mobile Number</label>
                            <input type="number" name="number" value="<?= $admin['phone']; ?>"
                                placeholder="Enter Mobile Number" />
                        </div>

                        <!-- <div class="input-field">
                            <label for="Gender">Gender</label>
                            <select required name="gender" >
                                <option  value="<?= $admin['gender']; ?>">Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div> -->
                        <div class="input-field">
                            <label for="Gender">Gender</label>
                            <input type="text" name="gender" value="<?= $admin['gender']; ?>" placeholder="Gender" />
                        </div>

                        <div class="input-field">
                            <label for="NID/PassportNumber">NID</label>
                            <input type="text" name="nid" value="<?= $admin['nid_pass']; ?>"
                                placeholder="Enter NID/Passport Number" />
                        </div>

                        <!-- <div class="input-field">
                            <label for="Department">Department</label>
                            <select required name="dept" value="<?= $admin['full_name']; ?>">
                                <option disabled selected>Department</option>
                                <option>ECE</option>
                                <option>DMP</option>
                                <option>ARCHI</option>
                                <option>ENV</option>
                                <option>BBA</option>
                                <option>PHARMA</option>
                            </select>
                        </div> -->
                        <div class="input-field">
                            <label for="Department">Department</label>
                            <input type="text" name="dept" value="<?= $admin['dept']; ?>"
                                placeholder="Department Name" />
                        </div>

                        <div class="input-field">
                            <label for="Address">Address</label>
                            <input type="text" name="address" value="<?= $admin['address']; ?>"
                                placeholder="Enter Address" />
                        </div>



                        <div class="input-field">
                            <label for="Joining Date">Joining Date</label>
                            <input type="date" name="JOD" value="<?= $admin['sdate']; ?>"
                                placeholder="Enter Joining Date" />
                        </div>

                        <div class="input-field">
                            <label for="Status">Status</label>
                            <input type="text" name="stat" value="<?= $admin['stat']; ?>"
                                placeholder="Active/Inactive" />
                        </div>



                        <!-- <div class="input-field">
                            <label for="Status">Status</label>
                            <select required name="stat" value="<?= $admin['stat']; ?>">
                                <option disabled selected>Select Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div> -->


                    </div>
                    <button class="submit" name="Update">
                        <span class="btnText">Update</span>
                    </button>
                    <a href="table-view.php" class="btn btn-danger">Return</a>
                </div>

            </div>
        </form>
    </div>
</body>

</html>


<?php
// if (isset($_GET['email'])) {
//     $user_email = $_GET['email'];
//     $quesry = "SELECT * FROM admin WHERE email='$user_email'";
//     $query_run = mysqli_query($connect, $query);

//     if (mysqli_num_rows($query_run) > 0) {
//         $admin = mysqli_fetch_array($query_run);

?>

<?php
//     } else {
//         echo ("NO Sunch Record Found !");
//     }
// }
?>