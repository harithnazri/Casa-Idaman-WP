<?php
session_start();

include("../php/db_conn.php");


$report = "SELECT * FROM quarantine 
          INNER JOIN users 
          ON quarantine.username = users.username
          ORDER BY validation ASC";

          
$data = mysqli_query($conn, $report);
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
    
    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="js/script.js"></script>

    <script>src="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"</script>
    <script>src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"</script>

    <!-- CSS link --> 
    <link rel="stylesheet" href="../css/c19.css">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
  
    
    <title>Casa Idaman C19 Report</title>
  </head>

  <body class="bg-dark">

    <!-- header section starts  -->
    
    <header class="container ">
    
      <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
        <div class="container">
            <div style="display: flex; align-items:center;">
                <a class="navbar-brand" href="#"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
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
                        <a class="nav-link text-white nav-list " href="../admin/management.html">Home</a>
                      </li>
                      <li class="nav-item navi">
                        <a class="nav-link text-white" href="../admin/manageResident.html">Manage Residents</a>
                      </li>
                      <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../c19management/c19management.php">Covid Reports</a>
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
  
  
  </header>
    
    <!-- header section ends  -->
  
    <main>
      <section>
        <div class="container-lg" id="DataVisualiser">
          <div class="row">
            <h1 class="mb-3 text-white">Covid-19 Data Updates</h1>
            <p id="total" class="text-white">Daily and monthly cases of Casa Idaman's Covid-19 positive and close contact's quarantine data.</p>
          </div>
          <div class="justify-content-md-end">
              <a href="../Covid-19 User/covid-19cases.php" class="btn btn-primary" role="button">Show Covid-19 cases</a>
            </div>
          <br>
      </section>

      <!--update-->  
      
      <section> <!-- Update Daily C19 Cases-->
        <div class="container-lg my-lg-5" >
        
          <div id="updatedataform" class="col gap-2 bg-light">           
            <div class="container py-5 h-100">
              <div class="row">
                <p id="total">Validate, update, delete and add resident's quarantine reports here.</p>
              </div>
              <div class="row">
                  <div class="col-md-12" id="msg"></div>
              </div>
              <div class="row">
                  <div class="table-responsive">
                  <table class="table table-secondary table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">Report ID</th>
                            <th scope="col">House Number</th>
                            <th scope="col">Type of Case</th>
                            <th scope="col">Quarantine Start Date</th>
                            <th scope="col">Quarantine End Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Validation Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($data)) {
                          echo "
                          <tr>                   
                              <td>" . $row['reportid'] . "</td>
                              <td>" . $row['houseNum'] . "</td>
                              <td>" . $row['stats'] . "</td>
                              <td>" . $row['quarantineStarts'] . "</td>
                              <td>" . $row['quarantineEnds'] . "</td>
                              <td>" . $row['username'] . "</td>
                              <td>" . $row['phonenumber'] . "</td>
                              <td>" . $row['email'] . "</td>
                              <td>" . $row['validation'] . "</td>
                              <td>
                                <a href='../user/c19managementvalidate.php?reportid=" . $row['reportid'] . "' class='btn btn-primary btn-sm' input type = 'submit' >Update</a>
                                <a href='../php/c19-delete-report.php?reportid=" . $row['reportid'] . "' class='btn btn-danger btn-sm' input type='submit' onclick=\"javascript: return confirm('Are you sure to delete this record?');\" >Delete</a>
                              </td>                                                                                                               
                          </tr>
                          ";
                        }
                        ?>
                    </tbody>
                  </table>
                  <a href="..\user\c19qreport.php" class="btn btn-primary" role="button">Add a report</a>
                  </div>
              </div>
            </div>
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
