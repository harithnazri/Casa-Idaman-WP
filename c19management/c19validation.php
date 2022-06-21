<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "my_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = 'SELECT * 
          FROM quarantine
          ORDER BY validation ASC';

  $result = mysqli_query($conn, $sql);
  #$quarantine_report = mysqli_fetch_all($result, MYSQLI_ASSOC);

  
  
 print_r($quarantine_report);
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icon link -->
    <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">
    <!-- CSS link --> 
    <link rel="stylesheet" href="../css/c19.css">
    <link href="../css/main.css" rel="stylesheet">

    <title>Casa Idaman C19 Report</title>

    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>

  <body class="bg-dark">
    <!-- header section starts  -->
    <!-- Navigation Bar -->
    <div class="container "> <!-- Navigation Bar-->
    
      <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
        <div class="container">
          <div style="display: flex; align-items:center;">
            <a class="navbar-brand" href="#"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
            <h3 style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
          </div>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" navbar-toggler-icon "><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item navi">
                <a class="nav-link text-white nav-list " href="../admin/management.html">Home</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white" href="../admin/manageResident.html">Manage Residents</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white nav-list " href="../c19management/c19report.html">Covid Reports</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white nav-list " href="../c19management/c19validation.php">Covid Validation</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white nav-list " href="../c19management/c19updatedata.php">Covid Data Update</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white" href="../main.html">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    
    </div>
    
    
    <!-- header section ends  -->

    <main>

      <section class='container-lg mt-5'>
        <h1 class="mb-3 gap-5 text-white">Covid-19 & Quarantine Validation Page</h1>
        <p id="total" class="text-white">The table below shows the covid-19 and quarantine reports that requires validation.</p>
      </section>

      <!--update-->
      <section> <!-- Update Daily C19 Cases-->
        <div class="container my-5" >
        
          <div class="col gap-3">
                       
            <div class="card" style="height:540px; background-color: rgba(251, 251, 251, 0.175); border-radius: 15px;">
              <div class="card-body p-5">
                <div class="row">
                  <h2 id="header2">Casa Idaman Covid-19 & Quarantine Index</h2>
                  <p id="total">Report your quarantine status here.</p><br>
                  <hr>
                </div>
                <div class="row">
                  <table class="table table-bordered border-secondary table-striped table-hover bg-light text-center table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">Report ID</th>
                        <th scope="col">Type of Case</th>
                        <th scope="col">Quarantine Start Date</th>
                        <th scope="col">Quarantine End Date</th>
                        <th scope="col">Evidence</th>
                        <th scope="col">Username</th>
                        <th scope="col">House Number</th>
                        <th scope="col">Validation Status</th>
                        <th scope="col">Validation</th>
                    </tr>
                    </thead>
                    <tbody><?php 
                    if($result->num_rows>0){
                      while($row = $result-> fetch_assoc()){
                        echo "<tr>
                          <td>" . $row['reportid'] . "</td>
                          <td>" . $row['stats'] . "</td>
                          <td>" . $row['quarantineStarts'] . "</td>
                          <td>" . $row['quarantineEnds'] . "</td>
                          <td>" . $row['evidence'] . "</td>
                          <td>" . $row['username'] . "</td>
                          <td>" . $row['houseNum'] . "</td>
                          <td>" . $row['validation'] . "</td>
                          <td>" . 
                        "<form>
                         <input type=\"submit\" value=\"Validate\">
                        </form></td></tr>";
                        
                      }
                    } 
                    mysqli_close($conn);
                    ?>
                    </tr>
                    </tbody>
                  </table> 
                </div>
              </div>
          </div>
          <br>
          </div>
        </div>
      </section>
    </main> 
  

    <!--Footer-->
    <footer class="footer">
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/my.casa.idaman/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#facility">facilities</a>
        <a href="#visitor">visitor</a>
        <a href="c19report.html">covid-19 status</a>
        <a href="#">login</a>

    </div>

    <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>
    </footer>
  </body>
</html>
