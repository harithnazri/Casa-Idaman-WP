<?php
session_start();
include "../php/db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- icon link -->
    <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">

    <!-- CSS link  -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/faci.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Casa Idaman - Facilities</title>

</head>

<body class="text-white" style="background-color: black;">
    <!-- header section starts  -->
    
    <header class="container ">
    
        <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
            <div class="container">
                <div style="display: flex; align-items:center;">
                    <a class="navbar-brand" href="../user/home.html"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
                    <h3 style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
                </div>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=" navbar-toggler-icon "><i class="fas fa-bars"
                            style="color:#fff; font-size:28px;"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item navi">
                            <a class="nav-link text-white nav-list " href="../user/home.html">Home</a>
                        </li>
                        <li class="nav-item navi">
                            <a class="nav-link text-white" href="../user/faci.html">Facilities</a>
                        </li>
                        <li class="nav-item navi">
                            <a class="nav-link text-white nav-list " href="../user/visitor.html">Visitor</a>
                        </li>
                        <li class="nav-item navi">
    
                            <a class="nav-link text-white" href="../user/covid-19 status.html">Covid-19 Status</a>
    
                        </li>
                        <li class="nav-item navi">
    
                            <a class="nav-link text-white" href="../user/profile.html"><i
                                    class="fa-solid fa-circle-user"></i> Sam</a>
    
                        </li>
    
                        <li class="nav-item navi">
                            <a class="nav-link text-white" href="../main.html">Logout</a>
                        </li>
    
    
                    </ul>
                </div>
            </div>
        </nav>
    
    
    </header>


<div class="container mx-auto " style="margin-top: 20vh;">
    <div class="pt-3  mb-3">
        <h3 class="text-white text-center mb-5">Explore Our <span style="color: #d3ad7f;">Facilities</span> </h3>
        <h6 class="text-white text-center mb-5"><a href="../user/reservationform.html" style="color: #d3ad7f;">Make a reservation here.</span> </h6>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3" >
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
                <img src="../pic/lounge.png" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">Lounge</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Lobi</h6>
                    <p class="card-text">Whether it's just a cup of coffee or even something stronger, we serve only the best.</p>
                    <a href="https://www.google.com/maps/place/Casa+Idaman+Condominium+-+Block+B/@3.1874282,101.6828941,13.5z/data=!4m5!3m4!1s0x31cc479d49e4dddb:0x328c1392f25940c5!8m2!3d3.2044919!4d101.6810259" target="_blank" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                    <a href="#" class="btn " data-bs-target="#exampleModalToggle1" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <!-- Lounge Modal -->
            <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel1" style="color: #777;"> Lounge </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Lounge Carousel -->
                        <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active" data-bs-interval="7500">
                                    <img src="https://petapixel.com/assets/uploads/2011/04/singlelight.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                                
                                <div class="carousel-item" data-bs-interval="7500">
                                    <img src="https://cyneats.com/wp-content/uploads/2017/01/Black-Cat_-Live-Music-In-SF-14-of-14.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End Lounge Carousel -->
                        <div class="modal-body" style="color: gray;">
                            <i class="bi bi-telephone"></i> &nbsp; Tel: +6012 3456 789 <br>
                            <i class="bi bi-envelope"></i> &nbsp; Email: casaidaman_lounge@gmail.com <br>
                            <i class="bi bi-clock"></i> &nbsp; Hours: Monday - Sunday / 3pm - 12am <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 ">
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
                <img src="../pic/pool.jpg" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">Swimming Pool</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Kolam Renang</h6>
                    <p class="card-text">Located in the heart of Casa Idaman, complete with a children’s wading pool with water slides.</p>
                    <a href="https://www.google.com/maps/place/Casa+Idaman+Condominium+-+Block+B/@3.1874282,101.6828941,13.5z/data=!4m5!3m4!1s0x31cc479d49e4dddb:0x328c1392f25940c5!8m2!3d3.2044919!4d101.6810259" target="_blank" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                    <a href="#" class="btn " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <!-- Pool Modal -->
            <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel3" style="color: #777;"> Swimming Pool </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Pool Carousel -->
                        <div id="carousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active" data-bs-interval="7500">
                                    <img src="https://media.blogto.com/articles/20180607-hotel-pools.jpg?cmd=resize_then_crop&quality=70&w=2048&height=1365" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Pool </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                                
                                <div class="carousel-item" data-bs-interval="7500">
                                    <img src="https://thumbs.dreamstime.com/b/swimming-pool-residents-apartments-site-communal-newly-built-130880609.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Pool </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End Pool Carousel -->
                        <div class="modal-body" style="color: gray;">
                            Tel: +6012 3456 789 <br>
                            Email: casaidaman_pool@gmail.com <br>
                            Open Hours: Monday - Saturday / 10am - 10pm <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 ">
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
                <img src="../pic/gym.png" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">Gymnasium</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Gimnasium</h6>
                    <p class="card-text">The gym and fitness centre feature a variety of state-of-the-art cardio and strength training equipment.</p>
                    <a href="https://www.google.com/maps/place/Casa+Idaman+Condominium+-+Block+B/@3.1874282,101.6828941,13.5z/data=!4m5!3m4!1s0x31cc479d49e4dddb:0x328c1392f25940c5!8m2!3d3.2044919!4d101.6810259" target="_blank" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                    <a href="#" class="btn " data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel" style="color: #777;"> Gymnasium </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Gym Carousel -->
                        <div id="carousel3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active" data-bs-interval="7500">
                                    <img src="https://www.oeschberghof.com/assets/images/e/golfhote-oeschberghof-black-forrest-active-days-4-ef26a142.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Gymnasium </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                                
                                <div class="carousel-item" data-bs-interval="7500">
                                    <img src="https://i.pinimg.com/originals/54/39/4f/54394fe40bea22384d66a4fbc4c13331.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Gymnasium </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End Gym Carousel -->
                        <div class="modal-body" style="color: gray;">
                            Tel: +6012 3456 789 <br>
                            Email: casaidaman_gym@gmail.com <br>
                            Open Hours: 10am - 10pm <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 ">
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
                <img src="https://images.unsplash.com/photo-1606157715703-ebbcfb43158a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">Barbeque Pit</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">We provide marinated raw food, frozen food, raw seafood and BBQ pit set.</p>
                    <a href="https://www.google.com/maps/place/Casa+Idaman+Condominium+-+Block+B/@3.1874282,101.6828941,13.5z/data=!4m5!3m4!1s0x31cc479d49e4dddb:0x328c1392f25940c5!8m2!3d3.2044919!4d101.6810259" target="_blank" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                    <a href="#" class="btn " data-bs-target="#exampleModalToggle4" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel4" style="color: #777;"> Barbeque Pit </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- BBQ Carousel -->
                        <div id="carousel4" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active" data-bs-interval="7500">
                                    <img src="https://www.fireplaceofatlanta.com/wp-content/uploads/2014/06/Outdoor-Kitchen-BBQ-Galore.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> BBQ Pit </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                                
                                <div class="carousel-item" data-bs-interval="7500">
                                    <img src="https://static.thehoneycombers.com/wp-content/uploads/sites/2/2017/01/seorae-1024x731.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> BBQ Pit </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End BBQ Carousel -->
                        <div class="modal-body" style="color: gray;">
                            Tel: +6012 3456 789 <br>
                            Email: casaidaman_bbq@gmail.com <br>
                            Open Hours: Monday - Sunday / 3pm - 12am <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
            
                <img src="https://images.unsplash.com/photo-1487466365202-1afdb86c764e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">Football Field</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Padang Bola</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="https://www.google.com/maps/place/Padang+Bola+Sepak+PPR+Batu+Muda/@3.2099252,101.680274,17z/data=!4m12!1m6!3m5!1s0x31cc479d49e4dddb:0x328c1392f25940c5!2sCasa+Idaman+Condominium+-+Block+B!8m2!3d3.2044919!4d101.6810259!3m4!1s0x31cc47c05f9439c5:0x8b068bd7f08c2b68!8m2!3d3.2094013!4d101.6812878" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                    <a href="#" class="btn mx-2" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel5" style="color: #777;"> Football Field
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Football Field Carousel -->
                        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active" data-bs-interval="7500">
                                    <img src="https://petapixel.com/assets/uploads/2011/04/singlelight.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                                
                                <div class="carousel-item" data-bs-interval="7500">
                                    <img src="https://cyneats.com/wp-content/uploads/2017/01/Black-Cat_-Live-Music-In-SF-14-of-14.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End Football Field Carousel -->
                        <div class="modal-body" style="color: gray;">
                            Tel: +6012 3456 789 <br>
                            Email: casaidaman_lounge@gmail.com <br>
                            Open Hours: Monday - Sunday / 3pm - 12am <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
            
                <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f07?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1164&q=80" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">Kuala Lumpur City Centre</h5>
                    <h6 class="card-subtitle mb-2 text-muted">KLCC</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                    <a href="#" class="btn mx-2" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel6" style="color: #777;"> Kuala Lumpur City Centre </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- KLCC Carousel -->
                        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active" data-bs-interval="7500">
                                    <img src="https://petapixel.com/assets/uploads/2011/04/singlelight.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                                
                                <div class="carousel-item" data-bs-interval="7500">
                                    <img src="https://cyneats.com/wp-content/uploads/2017/01/Black-Cat_-Live-Music-In-SF-14-of-14.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End KLCC Carousel -->
                        <div class="modal-body" style="color: gray;">
                            Tel: +6012 3456 789 <br>
                            Email: casaidaman_lounge@gmail.com <br>
                            Open Hours: Monday - Sunday / 3pm - 12am <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
            
                <img src="https://images.unsplash.com/photo-1591453022135-9ea84127b8ee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzl8fGJhemFhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">Danau Kota Uptown</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Bazaar Wangsa Maju</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                <a href="https://www.google.com/maps/place/Bazaria+Wangsamaju+(Danau+Kota+Uptown)/@3.2192147,101.630934,13.5z/data=!4m12!1m6!3m5!1s0x31cc479d49e4dddb:0x328c1392f25940c5!2sCasa+Idaman+Condominium+-+Block+B!8m2!3d3.2044919!4d101.6810259!3m4!1s0x31cc380e30a042e9:0xc8530091a4278cd0!8m2!3d3.2106714!4d101.7210281" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                <a href="#" class="btn mx-2" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel7" style="color: #777;"> Danau Kota Uptown
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Danau Kota Carousel -->
                        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active" data-bs-interval="7500">
                                    <img src="https://petapixel.com/assets/uploads/2011/04/singlelight.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                                
                                <div class="carousel-item" data-bs-interval="7500">
                                    <img src="https://cyneats.com/wp-content/uploads/2017/01/Black-Cat_-Live-Music-In-SF-14-of-14.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4> Lounge </h4>
                                        <i class="fa-solid fa-wind"></i> &nbsp; Air-conditioned <br>
                                        <i class="bi bi-stars"></i></i> &nbsp; Sanitized frequently <br>
                                        <i class="bi bi-person"></i> &nbsp; Membership discount <br>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End Danau Kota Carousel -->
                        <div class="modal-body" style="color: gray;">
                            Tel: +6012 3456 789 <br>
                            Email: casaidaman_lounge@gmail.com <br>
                            Open Hours: Monday - Sunday / 3pm - 12am <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card col-md-3" style="width: 18rem; border-radius: 20px; margin: 20px;">
                <img src="https://images.unsplash.com/photo-1567958451986-2de427a4a0be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
                <div class="card-body" style="color:black;">
                    <h5 class="card-title">KL East Mall</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Pusat Beli-belah</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn mr-2"><i class="fa-solid fa-location-dot"></i> Locate</a>
                    <a href="#" class="btn mx-2" data-bs-target="#exampleModalToggle8" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Details</a>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel8"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel8" style="color: #777;"> KL East Mall
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="color: gray;">
                            Tel: +6012 3456 789 <br>
                            Email: casaidaman_lounge@gmail.com <br>
                            Open Hours: Monday - Sunday / 3pm - 12am <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bf4914c67b.js" crossorigin="anonymous"></script>
</body>
</html>