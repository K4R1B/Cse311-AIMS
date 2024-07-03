<?php
session_start();

include("connections.php");
include("functions.php");

$user_data = check_login_dean($connect);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dean</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="logout.php">AICM</a>

        </div>


    </header>



    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="Admin-panel.php" class="active">Dashboard</a>
                <a href="dean-profile.php">Profile</a>
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
                <h1>Welcome To Control Panel </h1>
                <h3>Loged in:
                    <?php echo ($user_data['full_name']); ?>
                    <p>Status:  <?php echo ($user_data['stat']); ?></p>
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
                            <a href="dean-panel-dean-table.php">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-user-check"></i></span>
                                    <h3>Dean</h3>
                                </article>
                            </a>
                            <a href="AdminPanel-Faculty-option.html">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-user"></i></span>
                                    <h3>Faculty</h3>
                                </article>
                            </a>
                            <a href="Adminpanel-Student-option.html">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-book-reader"></i></span>
                                    <h3>Student</h3>
                                </article>
                            </a>
                            <a href="Adminpanel-Parent-option.html">
                                <article class="achive-box">
                                    <span class="achive-icon"><i class="uil uil-users-alt"></i></span>
                                    <h3>Parent</h3>
                                </article>
                            </a>



                        </div>
                    </div>

                </div>
            </section>




        </div>
    </div>
</body>

</html>