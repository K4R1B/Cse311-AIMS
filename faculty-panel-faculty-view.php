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

    <title>Faculty Database Table View</title>
</head>

<body>

    <div class="container mt-4">


        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Registered Facultys
                        </h4><br>
                        <!-- <a href="dean-register.php" class="btn btn-success btn-sm">Add New User</a> -->
                        <a href="faculty-panel.php" class="btn btn-info btn-sm">Return</a>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Department</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM faculty ";
                                $query_run = mysqli_query($connect, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $dean) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $dean['full_name']; ?>
                                    </td>
                                    <td>
                                        <?= $dean['dept']; ?>
                                    </td>
                                    <td>
                                        <?= $dean['email']; ?>
                                    </td>
                                    <td>
                                        <?= $dean['phone']; ?>
                                    </td>
                                    <td>
                                        <?= $dean['stat']; ?>
                                    </td>
                                    <td>
                                        <a href="faculty-view.php? id=<?= $dean['fac_id']; ?>"
                                            class="btn btn-info btn-sm">View</a>

                                        <!-- <a href="dean-edit.php?id=<?= $dean['dean_id']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>

                                        <form action="view-code.php" method="POST" class="d-inline">
                                            <button type="submit" name="dean-delete" value="<?= $dean['dean_id']; ?>"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form> -->
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