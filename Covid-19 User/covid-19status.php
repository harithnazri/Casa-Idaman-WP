<?php
session_start();

include("../php/db_conn.php");

    $report = "SELECT reportid, username, houseNum, stats, quarantineStarts, quarantineEnds FROM quarantine";
    $data = mysqli_query($conn, $report);    

?>
<html>
    
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
    <!-- <link rel="stylesheet" href="../css/covid-19.css"> -->
    <link rel="stylesheet" href="../css/main.css">

    <title>Covid-19 Status</title>

</head>

<body class="text-white bg-dark" >


<!-- header section starts  -->

<header class="container ">

    <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
        <div class="container">
            <div style="display: flex; align-items:center;">
                <a class="navbar-brand" href="../user/home.html"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
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
                        <a class="nav-link text-white" href="../user/faci.html">Facilities</a>
                    </li>
                    <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../user/visitor.html">Visitor</a>
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

    <section class="container col my-lg-5  ">
        <br><br>
            <div class="card img-top " style="background-color: rgba(0, 0, 0, 0.426); border-radius: 100px  " > 
                <img style="width: 100%;" src="../pic/covid.png" alt="">
                <div class="card-img-overlay">
                <div class="card-body p-4">
                    <h3 >Covid-19 Cases</h3><br>
                    <h4>Casa Idaman's Covid-19 Real-Time Report</h4><br>
                    <div class="row">
                        <h4>
                          Today's Covid-19 Cases: 20
                        </h4>
                      </div>
                      <div class="row">
                        <div>
                          <h4>
                            Block A: 11
                          </h4>
                        </div>
                        <div>
                          <h4>
                            Block B: 9
                          </h4>
                        </div>
                      </div><br>
                    <a href="../Covid-19 User/covid-19cases.php" class="btn btn-primary"  role="button" >Show Covid-19 cases</a> 
                </div>
            </div>
            </div>
            <br><br>

            <div class="card" style="height:540px; background-color: rgba(251, 251, 251, 0.175); border-radius: 50px;">
                <div class="card-body p-5">
                    <h3 >Covid-19 Quarantine Report</h3><br>
                    <h5>Report your quarantine status here.</h5><br>
                    <a href="../Covid-19 User/covid-19quarantinereport.php" class="btn btn-primary"  role="button" >Add a report</a>
                    <br><br>
                    <h6>Your report:</h6>
                    <table class="table table-secondary table-striped table-bordered ">
                        <thead>
                        <tr>
                            <th scope="col">Report ID</th>
                            <th scope="col">House Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Quarantine Start Date</th>
                            <th scope="col">Quarantine End Date</th>
                            <th scope="col">Update/Delete Record</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row = mysqli_fetch_array($data)){
                            if($_SESSION['username']==$row['username']){
                                echo"
                                <tr>                   
                                    <td>".$row['reportid']."</td>
                                    <td>".$row['houseNum']."</td>
                                    <td>".$row['stats']."</td>
                                    <td>".$row['quarantineStarts']."</td>
                                    <td>".$row['quarantineEnds']."</td>
                                    <td>
                                        <a href='../Covid-19 User/covid-19updatereport.php?reportid=".$row['reportid']."' class='btn btn-primary btn-sm' input type = 'submit' >Update</a>
                                        <a href='../php/delete-report.php?reportid=".$row['reportid']."' class='btn btn-danger btn-sm' input type='submit' onclick=\"javascript: return confirm('Are you sure to delete this record?');\" >Delete</a>
                                    </td>                                                                                                               
                                </tr>
                                "; 
                            }
                        }
                        ?>
                        </tbody>
                    </table> 
                </div>
            </div>
            <br><hr>
          <!--we care for you-->
          <div class="row container gap-3">
              <h3 class="heading3 gap-3">We care for you.</h3>
              <h2>All of our staff are fully vaccinated and have fulfilled the number of days required.</h2>
              <p>
                  Casa Idaman places the places the highest priority on the health and well-being of our guests and staff. We are closely monitoring guidance related to the Coronavirus (COVID-19) from the Malaysian Government, the World Health Organization (WHO) and local health agencies. As the authorities and health agencies share more information on safe travel in Malaysia, we will update our policies and procedures accordingly.
              </p>
          </div>
          <hr>

          <div class="row container gap-3">
              <div class="col">
                <h3 class="heading3 gap-3">Visitor Procedure</h3>
                <h2>All of our staff are fully vaccinated and have fulfilled the number of days required.</h2>
                <p>
                    Casa Idaman places the places the highest priority on the health and well-being of our guests and staff. We are closely monitoring guidance related to the Coronavirus (COVID-19) from the Malaysian Government, the World Health Organization (WHO) and local health agencies. As the authorities and health agencies share more information on safe travel in Malaysia, we will update our policies and procedures accordingly.
                </p>
                <button type="button" class="btn btn-primary btn-lg">Download Visiting Procedure</button>
              </div>
              
              <img class="col" style="border-radius: 50px;" src="../pic/visitor.png" alt=""width="300"height="400">
          </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>     
