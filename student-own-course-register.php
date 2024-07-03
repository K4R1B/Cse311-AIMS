<?php

session_start();

include("connections.php");

?>


<?php
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $query = "SELECT * FROM student WHERE std_id='$user_id'";
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

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $course = $_POST['course'];

    $dean_id = $dean['std_id'];
    $fullname = $dean['full_name'];


    if (
        !empty($course) && !empty($dean_id)
    ) {
        $query = "INSERT INTO student_course (c_name, std_id, std_name) VALUES ('$course', '$dean_id', '$fullname');";
        $query_run = mysqli_query($connect, $query);

        header("Location:student-panel.php");
        die;
    } else {
        echo ("please enter valid data");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course Register</title>
    <link rel="stylesheet" href="css/register-styles.css" />
</head>

<body>
    <div class="container">
        <header>Personal Details</header>
        <form action="#" method="POST">
            <div class="first-form">
                <div class="personal info">
                    <span class="title">Personal Information</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="ID">ID</label>
                            <input type="number" name="dean_id" value="<?= $dean['std_id']; ?>" placeholder="101####" disabled />
                        </div>

                        <div class="input-field">
                            <label for="Full Name">Full Name</label>
                            <input type="text" name="fullname" value="<?= $dean['full_name']; ?>" placeholder="Enter Full Name" disabled />
                        </div>

                        <!-- <div class="input-field">
                            <label for="DOB">DOB</label>
                            <input type="date" name="dob" value="<?= $dean['dob']; ?>"
                                placeholder="Enter Date Of Birth" />
                        </div> -->

                        <div class="input-field">
                            <label for="Email">Email Address</label>
                            <input type="email" name="email" value="<?= $dean['email']; ?>" placeholder="Enter Email Address" disabled />
                        </div>

                        <div class="input-field">
                            <label for="Mobile">Mobile Number</label>
                            <input type="number" name="number" value="<?= $dean['phone']; ?>" placeholder="Enter Mobile Number" disabled />
                        </div>

                        <!-- <div class="input-field">
                            <label for="salary">Semester Fee</label>
                            <input type="number" name="salary" value="<?= $dean['salary']; ?>" placeholder="1000.00"disabled  />
                        </div> -->

                        <!-- <div class="input-field">
                            <label for="Mobile">Password</label>
                            <input type="text" value="<?= $dean['passkey']; ?>" name="pass" placeholder="Password" />
                        </div> -->

                        <!-- <div class="input-field">
                            <label for="Gender">Gender</label>
                            <input type="text" value="<?= $dean['gender']; ?>" name="gender"
                                placeholder="Male/Female" />
                        </div> -->



                        <!-- <div class="input-field">
                            <label for="NID/PassportNumber">NID</label>
                            <input type="text" name="nid" value="<?= $dean['nid_pass']; ?>"
                                placeholder="Enter NID/Passport Number" />
                        </div> -->

                        <div class="input-field">
                            <label for="Department">Department</label>
                            <input type="text" value="<?= $dean['dept']; ?>" name="dept" placeholder="" disabled />
                        </div>



                        <!-- <div class="input-field">
                            <label for="Address">Address</label>
                            <input type="text" name="address" value="<?= $dean['address']; ?>"
                                placeholder="Enter Address" />
                        </div> -->



                        <!-- <div class="input-field">
                            <label for="Joining Date">Joining Date</label>
                            <input type="date" name="JOD" value="<?= $dean['sdate']; ?>"
                                placeholder="Enter Joining Date" />
                        </div> -->

                        <div class="input-field">
                            <label for="Status">Status</label>
                            <input type="text" value="<?= $dean['stat']; ?>" name="stat" placeholder="Regular/Probation/Suspended" disabled />
                        </div>

                        <div class="input-field">
                            <label for="CGPA">CGPA</label>
                            <input type="" value="<?= $dean['cgpa']; ?>" name="cgpa" placeholder="" disabled />
                        </div>

                        <div class="input-field">
                            <label for="credit">Total Credit</label>
                            <input type="text" value="<?= $dean['credit']; ?>" name="credit" placeholder="" disabled />
                        </div>

                        <div class="input-field">
                            <label for="Course">Courses</label>
                            <select required name="course">
                                <option disabled selected>Courses</option>
                                <option>CSE 115 Programmin language 1</option>
                                <option>CSE 115L Programmin language 1 LAB</option>
                                <option>CSE 173 Discrete Mathematics</option>
                                <option>CSE 215 Programmin language 2</option>
                                <option>CSE 215L Programmin language 2 LAB</option>
                                <option>CSE 225 Data Structure And Algoridthm</option>
                                <option>CSE 225L Data Structure And Algoridthm LAB</option>
                                <option>CSE 231 Digital Logic Design</option>
                                <option>CSE 231L Digital Logic Design LAB</option>
                                <option>MAT 116 Precalculas</option>
                                <option>MAT 120 Calculas 1</option>
                                <option>MAT 130 Calculas 2</option>
                                <option>MAT 250 Calculas 3</option>
                                <option>MAT 350 Engineering Mathematics</option>
                                <option>MAT 361 Probability & Statistics</option>
                                <option>ENG103 Intermidiate Composition</option>
                                <option>PHI104 Introduction to Ethics </option>
                                <option>ECO101 Introduction to Microeconomics</option>
                                <option>EEE452 Engineering Economics</option>
                                <option>HIS101 Bangladesh Culture and Heritage</option>
                                <option>CSE299 Junior Design</option>

                            </select>
                        </div>

                        <!-- <div class="input-field">
                            <label for="father">Father's Name</label>
                            <input type="text" name="father" value="<?= $dean['father']; ?>" placeholder="Enter Name" />
                        </div>

                        <div class="input-field">
                            <label for="mother">Mother's Name</label>
                            <input type="text" name="mother" value="<?= $dean['mother']; ?>" placeholder="Enter Name" />
                        </div>

                        <div class="input-field">
                            <label for="FNID">Father's NID</label>
                            <input type="text" name="fnid" value="<?= $dean['fnid']; ?>" placeholder="Enter NID" />
                        </div>

                        <div class="input-field">
                            <label for="MNID">Mother's NID</label>
                            <input type="text" name="mnid" value="<?= $dean['mnid']; ?>" placeholder="Enter NID" />
                        </div>

                        <div class="input-field">
                            <label for="Fmobile">Father's Number</label>
                            <input type="number" name="fnumber" value="<?= $dean['fnumber']; ?>"
                                placeholder="Enter Mobile" />
                        </div>

                        <div class="input-field">
                            <label for="Mmobile">Mother's Number</label>
                            <input type="number" name="mnumber" value="<?= $dean['mnumber']; ?>"
                                placeholder="Enter Mobile" />
                        </div> -->






                    </div>
                    <button class="submit">
                        <span class="btnText">Add To Course</span>
                    </button>
                    <a href="student-panel.php" class="btn btn-danger">Return</a>
                </div>

            </div>
        </form>
    </div>
</body>

</html>