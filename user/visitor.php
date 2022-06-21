<?php
session_start();
include "../php/db_conn.php";

if (!(isset($_SESSION['username']) && isset($_SESSION['id']))) {
    header("Location: home.php");
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $ic = $_POST["ic"];
    $phone = $_POST["phone"];


    $photo_name = $_FILES["photo"]["name"];
    $photo_tmp_name = $_FILES["photo"]["tmp_name"];
    $photo_size = $_FILES["photo"]["size"];
    $photo_new_name = rand() . $photo_name;


    if ($photo_size > 5242880) {
        echo "<script>alert('Photo is very big. Maximum photo uploading size is 5Mb. ');</script>";
    } else {

        if (!empty($_FILES["photo"]["name"])) {  //edit data with changing picture
            $sql = "INSERT INTO visitor_pass(email,name,address,ic,phone, photo) VALUES('$email', '$name', '$address','$ic', '$phone', '$photo_new_name') ";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Visitor pass generated successfully');</script>";
                move_uploaded_file($photo_tmp_name, "../uploads/" . $photo_new_name);
                header("Location: ../user/visitorPass.php");
            } else {
                echo "<script>alert('Visitor cannot be generated.');</script>";
                echo  $conn->error;
            }
        }
    }
}
?>
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
    <title>Casa Idaman - Visitor</title>
</head>

<body>

    <body class="text-white" style="background-color: black;">


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
        <!-- <div class="overlay"></div> -->
        <section id="#home" class="bg-cover hero-section border-bottom pb-0 " style="background-image: url('https://images.unsplash.com/photo-1650509220322-40caf79619d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

            <form class="row container bg-dark " action="" enctype="multipart/form-data" method="POST" style="margin: 20vh 10px ; z-index: 2; border-radius: 15px; padding: 15px;">

                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name " name="name">
                </div>
                <div class="col-12">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="Address" placeholder="1234 Main St" name="address">
                </div>
                <div class="col-6">
                    <label for="IC" class="form-label">IC No</label>
                    <input type="text" class="form-control" id="ic" placeholder="xxxxxx-xx-xxxx" name="ic">
                </div>
                <div class="col-md-6">
                    <label for="Phone" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="Phone" placeholder="xxx-xxxxxxxx" name="phone">
                </div>
                <div class="col-mb-6">
                    <label for="Vaccine" class="form-label">Screenshot of Vaccination Status</label>
                    <input type="file" accept="image/*" id="photo" name="photo">
                </div>

                <div class="col-12 mb-3">
                    <button type="submit" href="visitor.php" name="submit" class="btn btn-primary">Generate</button>
                </div>

            </form>
        </section>

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
                <a href="../user/home.html">home</a>
                <a href="../user/faci.html">facilities</a>
                <a href="../user/visitor.html">visitor</a>
                <a href="../user/covid-19 status.html">covid-19 status</a>
                <a href="../user/profile.html">Profile</a>

            </div>

            <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>

        </section>

        <!-- footer section ends -->



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>