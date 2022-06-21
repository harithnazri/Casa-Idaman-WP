<?php
session_start();
include "../php/db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- icon link -->
        <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">
        <!-- FontAwesome  -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <!-- CSS link  -->
        <link rel="stylesheet" href="../css/main.css">

        <title>Casa Idaman Condominium</title>

    </head>

    <body class="text-black" style="background-color:black;  ">

        <!-- header section starts  -->

        <header class="container ">


            <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
                <div class="container">
                    <div style="display: flex; align-items:center;">
                        <a class="navbar-brand" href="#"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
                        <h3 class="title" style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=" navbar-toggler-icon "><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item navi">
                                <a class="nav-link text-white nav-list " href="../user/home.php">Home</a>
                            </li>
                            <li class="nav-item navi">
                                <a class="nav-link text-white" href="../user/faci.php">Facilities</a>
                            </li>
                            <li class="nav-item navi">
                                <a class="nav-link text-white nav-list " href="./visitor.php">Visitor</a>
                            </li>
                            <li class="nav-item navi">
                                <a class="nav-link text-white" href="./covid-19 status.php">Covid-19 Status</a>
                            </li>
                            <li class="nav-item navi">
                                <a class="nav-link text-white nav-list " style="text-transform:capitalize;" href="../user/profile.php"><i class="fa-solid fa-circle-user"> </i>
                                    <?php
                                    echo $_SESSION['username']; ?>
                                </a>
                            </li>
                            </li>
                            <li class="nav-item navi"><a class="nav-link text-white" href="../Login System/logout.php">Logout</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>



        </header>



        <section class="vh-100" style=" background-image: url('https://images.unsplash.com/photo-1444080748397-f442aa95c3e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="width: 40rem;">
                            <img src="https://images.unsplash.com/photo-1525068953724-e2bdcda87c2f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1700&q=80" class="card-img-top" alt="visitor_pass">
                            <div class="card-body">

                                <h5 class="card-title d-flex justify-content-center">Visitor pass for : <?php
                                                                                                        echo $_SESSION['username']; ?>
                                    </a> </h5>
                                <p class="card-text">This is your visitor pass. Kindly, show the pass to the guard to go through. Pass will be expired in 1 day.</p>
                                <p><?php
                                    echo "Today is " . date("Y/m/d") . "<br>";

                                    date_default_timezone_set("Asia/Kuala_Lumpur");
                                    echo "The time is " . date("h:i:sa");

                                    ?></p>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <a href="../user/home.php" class=" btn btn-primary ">Home Page </a>
                                <button onclick="window.print() " class=" mx-3 btn btn-primary ">Print Pass</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html><?php } else {
            header("Location: login.php");
        } ?>