<?php
session_start();
include "../php/db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icon link -->
    <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">


    <!-- CSS link  -->
    <link rel="stylesheet" href="../css/main.css">

    <title>User Profile</title>
  </head>

  <body class="text-black" style="background-color:black;">

    <br><br><br><br>

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

    <?php

    $sql = "SELECT * FROM users WHERE id='{$_SESSION["id"]}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

    ?>

        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="../uploads/<?php echo $row["photo"]; ?>" alt="User" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h4><?php echo $row["fullname"] ?></h4>

                    <p class="text-muted font-size-sm">Casa Idaman</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">



                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?php echo $row['fullname'] ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?php echo $row['email']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone Number</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?php echo $row['phonenumber']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Home Number</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?php echo $row['homenumber']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Room Number</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    B505
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-12">
                    <a class="btn btn-info " target="__blank" href="editprofile.php" id="edit">Edit</a>
                  </div>
                </div>
            <?php
          }
        }
            ?>
              </div>
            </div>
          </div>

          <?php

          ?>
          <!-- footer section starts  -->

          <section class="footer">

            <div class="share">
              <a href="https://www.facebook.com/groups/casaidamangroup" class="fab fa-facebook-f"></a>
              <a href="https://twitter.com/casaidaman" class="fab fa-twitter"></a>
              <a href="https://www.instagram.com/my.casa.idaman/" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-linkedin"></a>
              <a href="#" class="fab fa-pinterest"></a>
            </div>

            <div class="links">
              <a href="../user/home.php">home</a>
              <a href="../user/faci.html">facilities</a>
              <a href="../user/visitor.html">visitor</a>
              <a href="../user/covid-19 status.html">covid-19 status</a>
              <a href="../user/profile.php">Profile</a>

            </div>

            <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>

          </section>

          <!-- footer section ends -->



          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

  </html><?php } else {
          header("Location: login.php");
        } ?>