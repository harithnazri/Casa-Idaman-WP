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
    <link rel="icon" href="pic/casaidaman.png" type="image/icon type">

    <!-- CSS link  -->
    <link rel="stylesheet" href="css/main.css">

    <title>Casa Idaman Condominium</title>

</head>

<body class="text-white">


    <!-- header section starts  -->

    <header class="container ">

        <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
            <div class="container">
                <div style="display: flex; align-items:center;">
                    <a class="navbar-brand" href="#"><img class="logo" src="pic/casaidaman.png" width="180px" alt=""></a>
                    <h3 class="title" style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=" navbar-toggler-icon "><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item navi">
                            <a class="nav-link text-white nav-list " href="./Login System/register.php">Register</a>
                        </li>
                        <!-- <li class="nav-item navi">
                        <a class="nav-link text-white" href="#facility">Facilities</a>
                    </li>
                    <li class="nav-item navi">
                        <a class="nav-link text-white nav-list "  href="#visitor">Visitor</a>
                    </li>
                    <li class="nav-item navi">
                        <a class="nav-link text-white" href="#">Covid-19 Status</a>
                    </li> -->
                        <li class="nav-item navi">
                            <a class="nav-link text-white nav-list " href="./Login System/login.php">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


    </header>
    <div class="overlay2"></div>
    <section id="#home" class="bg-cover hero-section border-bottom pb-0 " style="background-image: url('https://images.unsplash.com/photo-1586227740560-8cf2732c1531?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1922&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

        <div class="container text-white text-center hero " style="z-index: 2;">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 fw-bolder">Welcome To Casa <br> Idaman Condominium</h1>
                    <h4>Greatest Community</h4>
                    <p class="my-4">Being a part of a community might make us feel like we're a part of something bigger than ourselves. It can provide us
                        with opportunity to interact with others, achieve our goals, and feel protected and secure. It is essential for everyone
                        to have a sense of community.</p>
                    <a href="/login.php" class="btn btn-main btn-login  ">LOGIN</a>
                </div>
            </div>
        </div>
    </section>

    <!-- header section ends  -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>