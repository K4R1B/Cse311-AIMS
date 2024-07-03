<?php
include("connections.php");

?>

<?php
if (isset($_GET['id'])) {
    $user_data = mysqli_real_escape_string($connect, $_GET['id']);
    $query = "SELECT * FROM student WHERE std_id='$user_data'";
    $query_run = mysqli_query($connect, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $user_data = mysqli_fetch_array($query_run);
    } else {
        echo ("NULL");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile-styles.css" />
</head>

<body>
    <div class="student-profile py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" src="Images/student.png" alt="" />
                            <h3>

                                <?php echo ($user_data['full_name']); ?>

                            </h3>
                        </div>
                        <div class="card-body">

                            <p class="mb-0">
                                <strong class="pr-1">ID:</strong>
                                <?php echo ($user_data['std_id']); ?>
                            </p>
                            <p class="mb-0"><strong class="pr-1">Department:</strong>
                                <?php echo ($user_data['dept']); ?>
                            </p>
                            <p class="mb-0"><strong class="pr-1">Status:</strong>
                                <?php echo ($user_data['stat']); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0">
                                <i class="far fa-clone pr-1"></i>General Information
                            </h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Date Of Birth</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['dob']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Start Date</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['sdate']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Gender</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['gender']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Phone</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['phone']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Email</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['email']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Password</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['passkey']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Semester Fee</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['salary']); ?>
                                        <p>/-BDT</p>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="30%">NID/Passport</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['nid_pass']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Address</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['address']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">CGPA</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['cgpa']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Credit</th>
                                    <td width="2%">:</td>
                                    <td>
                                        <?php echo ($user_data['credit']); ?>
                                    </td>
                                </tr>
                                <!-- <tr>
                  <th width="30%">Father</th>
                  <td width="2%">:</td>
                  <td><?php echo ($user_data['full_name']); ?></td>
                </tr>
                <tr>
                  <th width="30%">Contact</th>
                  <td width="2%">:</td>
                  <td><?php echo ($user_data['full_name']); ?></td>
                </tr>
                <tr>
                  <th width="30%">Mother</th>
                  <td width="2%">:</td>
                  <td>B+</td>
                </tr>
                <tr>
                  <th width="30%">Contact</th>
                  <td width="2%">:</td>
                  <td>B+</td>
                </tr> -->
                            </table>

                            <a href="student-table-view.php" class="button">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>