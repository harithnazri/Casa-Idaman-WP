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
        <link rel="icon" href="./pic/casaidaman.png" type="image/icon type">
        <!-- FontAwesome  -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <!-- CSS link  -->
        <link rel="stylesheet" href="../css/main.css">

        <title>Casa Idaman Condominium</title>

    </head>

    <body class="text-white " style="background-color:black;">
        <!-- container d-flex justify-content-center align-items-center -->
        <?php if ($_SESSION['role'] == 'admin') { ?>
            <!-- For Admin -->
            <!-- header section starts  -->

            <header class="container ">

                <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
                    <div class="container">
                        <div style="display: flex; align-items:center;">
                            <a class="navbar-brand" href="#"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
                            <h3 class="title" style="font-weight: 800; font-size: 24px; color: #ffffff; ">Casa Idaman</h3>
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
                                    <a class="nav-link text-white" href="./">Managing resident's Acc</a>
                                </li>
                                <li class="nav-item navi">
                                    <a class="nav-link text-white" href="#">Covid-19 Reports</a>
                                </li>
                                <li class="nav-item navi">
                                    <a class="nav-link text-white nav-list " href="../user/profile.php"><i class="fa-solid fa-circle-user"> </i>
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


            <div class="container d-flex justify-content-center align-items-center text-white" style="  min-height: 100vh;">
                <div class="card d-flex flex-column align-items-center text-center " style="width: 18rem;">
                    <?php

                    $sql = "SELECT * FROM users WHERE id='{$_SESSION["id"]}'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                            <img src="../uploads/<?php echo $row["photo"]; ?>" alt="User" class="rounded-circle " width="150">

                    <?php
                        }
                    }
                    ?>
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <?= $_SESSION['name'] ?>
                        </h5>
                        <a href="logout.php" class="btn btn-dark">Logout</a>
                    </div>
                </div>
                <div class="p-3">
                    <?php include '../php/members.php';
                    if (mysqli_num_rows($res) > 0) { ?>

                        <h1 class="display-4 fs-1">Members</h1>
                        <table class="table text-white" style="width: 32rem;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">User name</th>
                                    <th scope="col">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($rows = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $rows['username'] ?></td>
                                        <td><?= $rows['username'] ?></td>
                                        <td><?= $rows['role'] ?></td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>
            </div>

        <?php } else { ?>
            <!-- FORE USERS -->
            <!-- <div class="card" style="width: 18rem;">
		<img src="img/user-default.png" 
			class="card-img-top" 
			alt="admin image">
		<div class="card-body text-center">
		<h5 class="card-title">
			<= $_SESSION['name'] ?>a
		</h5>-->
            <!-- <a href="logout.php" class="btn btn-dark">Logout</a> -->
            <!-- </div> -->
            <!-- </div> -->

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
            <div class="overlay"></div>
            <section id="#home" class="bg-cover hero-section border-bottom pb-0 " style="background-image: url('https://images.unsplash.com/photo-1649185885038-ce0483f9f5ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

                <div class="container text-white text-center hero " style="z-index: 2;">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-4 fw-bolder">Welcome To Casa <br> Idaman Condominium</h1>
                            <h4>Greatest Community</h4>
                            <p class="my-4">A leasehold contemporary condominium located off Jalan Ipoh. Completed in 2010, the project has two blocks, each with 18 storeys and houses 608 units in total. The units come in three different types; A, B and C, with built-up sizes of 1,181 square feet, 1,007 square feet and 1062 square feet, respectively.</p>
                            <a href="#login" class="btn btn-main btn-login  ">EXPLORE</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- header section ends  -->

            <!-- Facilities section ends-->
            <section class="design " id="facility">

                <div class="container text-white text-center  ">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <h1 class="display-6 fw-bolder">Our <span style="color: #d3ad7f;">Facilities</span> </h1>
                            <!-- carousell -->
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item  active">
                                        <img src="../pic/lounge.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Lounge</h5>
                                            <p class="text-white">Comfort, convenience, and exclusivity are our top priorities.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../pic/pool.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Swimming Pool</h5>
                                            <p class="text-white">Open from 10 a.m to 8 p.m.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" ″>
                                        <img src="../pic/gym.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Gymnasium Room</h5>
                                            <p class="text-white">Chill and build your Muscle. Stay Healthy.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Visitor  -->

            <section class="design  " id="visitor">

                <div class="container text-white text-center  ">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <h1 class="display-6 fw-bolder" style="color: #d3ad7f;">Visitor</h1>
                        </div>
                    </div>



                </div>
                <div class="container-fluid px-5">
                    <div class=" row mt-5 bg-dark  ">
                        <div class="col-lg-5 p-0 "><img style="width: 100%;" src="../pic/visitor.png" alt=""></div>
                        <div class="col-lg-5 m-auto p-5  ">
                            <h3>COME TO <span style="color: #d3ad7f;">VISIT US?</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora
                                ipsum fuga alias
                                quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil
                                voluptas culpa! Neque
                                consectetur obcaecati sapiente?</p>
                            <a href="#" class="btn btn-login">GENERATE!</a>
                        </div>
                    </div>
                </div>
            </section>



            <!-- footer section starts  -->

            <section class="footer">

                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/my.casa.idaman/" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                </div>

                <div class="links">
                    <a href="home.php">home</a>
                    <a href="faci.php">facilities</a>
                    <a href="visitor.php">visitor</a>
                    <a href="covid-19 status.php">covid-19 status</a>
                    <a href="../user/profile.php">profile</a>

                </div>

                <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>

            </section>
        <?php } ?>
        <!-- footer section ends -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html><?php } else {
            header("Location: login.php");
        } ?>