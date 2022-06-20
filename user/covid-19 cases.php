<?php   
session_start();
include("../php/db_conn.php");

    $sql = "SELECT * FROM coviddailycases";
    $run = mysqli_query($conn, $sql);
    

?>

<html>
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/covid-19.css">
        <title>Covid-19 Cases</title>
        <!-- icon link -->
        <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    </head>
    <br>
    <header class="container ">

    <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
        <div class="container">
            <div style="display: flex; align-items:center;">
                <a class="navbar-brand" href="../user/home.php"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
                <h3 style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class=" navbar-toggler-icon "><i class="fas fa-bars"
                        style="color:#fff; font-size:28px;"></i></span>
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
                        <a class="nav-link text-white nav-list " href="../user/visitor.php">Visitor</a>
                    </li>
                    <li class="nav-item navi">

                        <a class="nav-link text-white" href="../Covid-19 User/covid-19status.php">Covid-19 Status</a>

                    </li>
                    <li class="nav-item navi">

                        <a class="nav-link text-white nav-list " style="text-transform:capitalize;" href="../profile.php"><i class="fa-solid fa-circle-user"> </i>
                        <?php
                        echo $_SESSION['username']; ?> </a>
                    
                    </li>
                    <li class="nav-item navi">
                        <a class="nav-link text-white" href="../Login System/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <?php
    date_default_timezone_set('Asia/Kuala_Lumpur');
    ?>
    <body class="bg-dark">
        <br><br><br><br>
        <div class="col d-flex justify-content-center">
            <div class="col-md-8 ">
                <div class="card" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.83);">
                    <div class="card-body p-5">
                        <h1 class="text-uppercase text-center"><img src="../pic/casaidaman.png" width="130px" alt="">Daily Covid-19 Cases</h1><br>                        
                        <h3 class="text-uppercase text-center"><?php echo date("l")." "."(".(date("Y-m-d")).")";?></h3><br>
                        
                            <canvas id="covidChart2"></canvas><br><br>
                        
                    </div>
                    
                </div>
            </div>
        </div><br><br>
        <div class="col d-flex justify-content-center">
            <div class="col-md-8 ">
                <div class="card" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.83);">
                    <div class="card-body p-5">
                        <div class="justify-content-center text-center">
                            <h2 class="section-heading text-uppercase ">Malaysia's Covid-19 Data</h2>
                            <h3 class="section-subheading text-black ">The official Malaysia government website for data and insights on COVID-19.</h3>
                            <br>
                            <a class="btn btn-primary btn-xl text-uppercase"  href="https://covidnow.moh.gov.my/">COVIDNOW Website</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

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
                <a href="../user/faci.php">facilities</a>
                <a href="../user/visitor.php">visitor</a>
                <a href="../user/covid-19 status.php">covid-19 status</a>
                <a href="../user/profile.php">Profile</a>
        
            </div>
        
            <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>
        
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        
   <script> 
        var ctx = document.getElementById('covidChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
                datasets: [{
                    label: 'Number of Cases',
                    data: [],
                    backgroundColor: [
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)'
                    ],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1,
                    barThickness: 'flex'
                }]
            },
            options: {
                responsive:true,
                scales: {
                    yAxes: [{
                        ticks:{
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
    <script> 
        var ct = document.getElementById('covidChart2').getContext('2d');
        var myChart = new Chart(ct, {
            type: 'bar',
            data: {
                labels: ['Block A','Block B','Total'],
                datasets: [{
                    label: 'Number of Cases',
                    data: [<?php while($data = mysqli_fetch_array($run)){
                            if($data['updateDate'] == date("Y-m-d")){ ?><?php echo $data['blockA']; ?>,<?php echo $data['blockB']; ?>,<?php echo $data['total']; ?>
                            <?php }} ?>],
                    backgroundColor: [
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)'
                    ],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1,
                    barThickness: 'flex'
                }]  
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks:{
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>

    </body>

</html>  

