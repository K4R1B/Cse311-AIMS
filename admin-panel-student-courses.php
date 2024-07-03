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

    <title>Course Database Table View</title>
</head>

<body>

    <div class="container mt-4">


        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Assigned Students & Courses
                        </h4><br>
                        <a href="student-data-course-register.php" class="btn btn-success btn-sm">Add Student To
                            Course</a>
                        <a href="Admin-panel.php" class="btn btn-info btn-sm">Return</a>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Student ID</th>

                                    <th>Student Name</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM student_course ";
                                $query_run = mysqli_query($connect, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $dean) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $dean['c_name']; ?>
                                    </td>
                                    <td>
                                        <?= $dean['std_id']; ?>
                                    </td>
                                    <td>
                                        <?= $dean['std_name']; ?>
                                    </td>
                                    <td>
                                        <a href="student-view.php? id=<?= $dean['std_id']; ?>"
                                            class="btn btn-info btn-sm">View</a>

                                        <a href="student-course-register.php?id=<?= $dean['std_id']; ?>"
                                            class="btn btn-success btn-sm">Add Course</a>


                                        <form action="view-code.php" method="POST" class="d-inline">
                                            <button type="submit" name="student-course-delete"
                                                value="<?= $dean['c_name']; ?>"
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