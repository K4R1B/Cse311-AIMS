<?php

session_start();

include("connections.php");
include("functions.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin Database table view</title>
</head>

<body>

    <div class="container mt-4">
        

        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Registered Admins
                        </h4><br>
                        <a href="Admin-register.php"
                                            class="btn btn-success btn-sm">Add New User</a>
                        <a href="Admin-panel.php"
                                            class="btn btn-info btn-sm">Return</a>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>DOB</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM admin";
                                $query_run = mysqli_query($connect, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $admin) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $admin['full_name']; ?>
                                    </td>
                                    <td>
                                        <?= $admin['dob']; ?>
                                    </td>
                                    <td>
                                        <?= $admin['email']; ?>
                                    </td>
                                    <td>
                                        <?= $admin['phone']; ?>
                                    </td>
                                    <td>
                                        <?= $admin['stat']; ?>
                                    </td>
                                    <td>
                                        <a href="view.php? id=<?= $admin['email']; ?>"
                                            class="btn btn-info btn-sm">View</a>

                                        <a href="Edit-Profile.php?id=<?= $admin['email']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>

                                        <form action="view-code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete" value="<?= $admin['email']; ?>"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>




                                <?php
                                    }

                                }


                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>