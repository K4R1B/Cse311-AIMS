<?php

session_start();

include("connections.php");

?>


<?php
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $query = "SELECT * FROM dean WHERE dean_id='$user_id'";
    $query_run = mysqli_query($connect, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $dean = mysqli_fetch_array($query_run);
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
    <title>Dean Registration</title>
    <link rel="stylesheet" href="css/register-styles.css" />
</head>

<body>
    <div class="container">
        <header>Personal Details</header>
        <form action="view-code.php" method="POST">
            <div class="first-form">
                <div class="personal info">
                    <span class="title">Personal Information</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="ID">ID</label>
                            <input type="number" name="dean_id" value="<?= $dean['dean_id']; ?>" placeholder="101####" />
                        </div>

                        <div class="input-field">
                            <label for="Full Name">Full Name</label>
                            <input type="text" name="fullname" value="<?= $dean['full_name']; ?>"
                                placeholder="Enter Full Name" />
                        </div>

                        <div class="input-field">
                            <label for="DOB">DOB</label>
                            <input type="date" name="dob" value="<?= $dean['dob']; ?>"
                                placeholder="Enter Date Of Birth" />
                        </div>

                        <div class="input-field">
                            <label for="Email">Email Address</label>
                            <input type="email" name="email" value="<?= $dean['email']; ?>"
                                placeholder="Enter Email Address" />
                        </div>

                        <div class="input-field">
                            <label for="Mobile">Mobile Number</label>
                            <input type="number" name="number" value="<?= $dean['phone']; ?>"
                                placeholder="Enter Mobile Number" />
                        </div>

                        <div class="input-field">
                            <label for="salary">Monthly Salary</label>
                            <input type="number" name="salary" value="<?= $dean['salary']; ?>" placeholder="1000.00" />
                        </div>

                        <div class="input-field">
                            <label for="Mobile">Password</label>
                            <input type="text" value="<?= $dean['passkey']; ?>" name="pass" placeholder="Password" />
                        </div>

                        <div class="input-field">
                            <label for="Gender">Gender</label>
                            <input type="text" value="<?= $dean['gender']; ?>" name="gender"
                                placeholder="Male/Female" />
                        </div>

                        <!-- <div class="input-field">
                            <label for="Gender">Gender</label>
                            <select required name="gender" value="<?= $dean['gender']; ?>" >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div> -->

                        <div class="input-field">
                            <label for="NID/PassportNumber">NID</label>
                            <input type="text" name="nid" value="<?= $dean['nid_pass']; ?>"
                                placeholder="Enter NID/Passport Number" />
                        </div>

                        <div class="input-field">
                            <label for="Department">Department</label>
                            <input type="text" value="<?= $dean['dept']; ?>" name="dept" placeholder="" />
                        </div>

                        <!-- <div class="input-field">
                            <label for="Department">Department</label>
                            <select required name="dept" value="<?= $dean['dept']; ?>">
                                <option disabled selected>Department</option>
                                <option>Electrical & Computer Engineering</option>
                                <option>Mathematics & Physics</option>
                                <option>Architecture</option>
                                <option>Environmental Science</option>
                                <option>Business & Economics</option>
                                <option>Pharmacology & Bioengineering</option>
                            </select>
                        </div> -->

                        <div class="input-field">
                            <label for="Address">Address</label>
                            <input type="text" name="address" value="<?= $dean['address']; ?>"
                                placeholder="Enter Address" />
                        </div>



                        <div class="input-field">
                            <label for="Joining Date">Joining Date</label>
                            <input type="date" name="JOD" value="<?= $dean['sdate']; ?>"
                                placeholder="Enter Joining Date" />
                        </div>

                        <div class="input-field">
                            <label for="Status">Status</label>
                            <input type="text" value="<?= $dean['stat']; ?>" name="stat"
                                placeholder="Active/Inactive" />
                        </div>



                        <!-- <div class="input-field">
                            <label for="Status">Status</label>
                            <select required name="stat" value="<?= $dean['stat']; ?>">
                                <option disabled selected>Select Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div> -->


                    </div>
                    <button class="submit" name="Dean-Update">
                        <span class="btnText">Update</span>
                    </button>
                    <a href="dean-table-view.php" class="btn btn-danger">Return</a>
                </div>

            </div>
        </form>
    </div>
</body>

</html>