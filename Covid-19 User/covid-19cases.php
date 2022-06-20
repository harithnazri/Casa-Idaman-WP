
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
      
                            <a class="nav-link text-white" href="../Covid-19 User/covid-19status.php">Covid-19 Status</a>
      
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

    <body class="bg-dark">
        <br><br><br><br>
        <div class="col d-flex justify-content-center">
            <div class="col-xs-6 col-md-10 ">
                <div class="card" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.83);">
                    <div class="card-body p-4">
                        <h1 class="text-uppercase text-center"><img src="../pic/casaidaman.png" width="130px" alt="">Covid-19 Cases</h1><br>
                        <h2 class="text-center">Today's Cases: 20</h2><br><br>
                        <h3 class="text-uppercase text-center">Weekly</h3>
                        <canvas id="covidChart"></canvas><br><br><br>
                        <h3 class="text-uppercase text-center">Monthly</h3>
                        <canvas id="covidChart2"></canvas><br><br>
                    </div>
                    
                </div>
            </div>
        </div><br><br>
        <div class="col d-flex justify-content-center">
            <div class="col-xs-6 col-md-10 ">
                <div class="card" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.83);">
                    <div class="card-body p-4">
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
                <a href="../user/home.html">home</a>
                <a href="../user/faci.html">facilities</a>
                <a href="../user/visitor.html">visitor</a>
                <a href="../user/covid-19 status.html">covid-19 status</a>
                <a href="../user/profile.html">Profile</a>
        
            </div>
        
            <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>
        
        </section>


   <script> 
        var ctx = document.getElementById('covidChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
                datasets: [{
                    label: 'Number of Cases',
                    data: [20, 0, 0, 0, 0, 0,0],
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
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero:true
            }
            }
        }
        });
    </script>
    <script> 
        var ct = document.getElementById('covidChart2').getContext('2d');
        var myChart = new Chart(ct, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Number of Cases',
                    data: [180,147,156 ,90, 0, 0],
                    backgroundColor: [
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
                    'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    </body>

</html>  

