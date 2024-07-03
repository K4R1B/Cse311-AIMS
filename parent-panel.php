<?php
session_start();

include("connections.php");
include("functions.php");

$user_data = check_login_parent($connect);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Student</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="logout.php">AIMS</a>

        </div>


    </header>



    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="student-panel.php" class="active">Dashboard</a>
                <a href="student-profile.php">Profile</a>
                <a href="https://mail.google.com/mail/u/0/?tab=cm#inbox">Gmail</a>
                <a href="https://drive.google.com/drive/u/0/">Drive</a>
                <a href="https://calendar.google.com/calendar/u/0/r">Calender</a>
                <a href="https://meet.google.com/?hs=197&pli=1&authuser=0">Meet</a>

                <div class="links">
                    <a href="logout.php" id="Logout">Logout</a>
                </div>
            </div>
        </nav>

        <div class="main-body">

            <div class="promo_card">
                <h1>Control Panel </h1>
                <h3>Loged in:
                    <?php echo ($user_data['father']); ?>
                    <p>Student:
                        <?php echo ($user_data['full_name']); ?>
                    </p>
                </h3>
            </div>


            <section class="achivements">
                <div class="achivements-cont">
                    <div class="achive-left">
                        <h1>Select Option</h1>

                        <div class="achive-cards">
                            <!-- <a href="table-view.php">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-user-plus"></i></span>
                                    <h3>Admin</h3>
                                </article>
                            </a> -->


                            <!-- <a href="dean-panel-dean-table.php">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-user-check"></i></span>
                                    <h3>Dean</h3>
                                </article>
                            </a> -->


                            <!-- <a href="faculty-panel-faculty-view.php">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-user"></i></span>
                                    <h3>Faculty</h3>
                                </article>
                            </a> -->
                            <a href="parent-own-course-view.php?id=<?= $user_data['std_id']; ?>">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-book-reader"></i></span>
                                    <h3>Courses</h3>
                                </article>
                            </a>

                            <!-- <a href="student-own-course-view.php?id=<?= $user_data['std_id']; ?>">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-book-reader"></i></span>
                                    <h3>Add A Course</h3>
                                </article>
                            </a> -->



                        </div>
                    </div>

                </div>
            </section>




        </div>
    </div>
</body>

</html>