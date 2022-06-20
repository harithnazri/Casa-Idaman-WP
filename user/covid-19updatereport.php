<?php
session_start();
include("../php/db_conn.php");

    $reportid = $_GET['reportid'];
    $report = "SELECT * FROM quarantine WHERE reportid='$reportid'";
    $data = mysqli_query($conn, $report);
    $row = mysqli_fetch_array($data);
    
?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="../css/covid-19.css">
        <title>Covid-19 Report</title>

        <!-- icon link -->
        <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">
    </head>
<br><br>

<header class="container ">

  <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
      <div class="container">
          <div style="display: flex; align-items:center;">
              <a class="navbar-brand" href="../user/home.php"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
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
                      <a class="nav-link text-white nav-list " href="../user/home.php">Home</a>
                  </li>
                  <li class="nav-item navi">
                      <a class="nav-link text-white" href="../user/faci.php">Facilities</a>
                  </li>
                  <li class="nav-item navi">
                      <a class="nav-link text-white nav-list " href="../user/visitor.php">Visitor</a>
                  </li>
                  <li class="nav-item navi">

                      <a class="nav-link text-white" href="../user/covid-19 status.php">Covid-19 Status</a>

                  </li>
                  <li class="nav-item navi">

                      <a class="nav-link text-white" href="../user/profile.php"><i
                              class="fa-solid fa-circle-user"></i>
                              <?php
                                echo $_SESSION['username'];
                              ?>
                            </a>
                  </li>

                  <li class="nav-item navi">
                      <a class="nav-link text-white" href="../Login System/logout.php">Logout</a>
                  </li>


              </ul>
          </div>
      </div>
  </nav>

</header>

<body class="bg-dark text-white">
  <br><br><br>
    <div class="col d-flex justify-content-center">
    <div class="col-xs-9 col-md-6">
    <div class="card" style="border-radius: 15px; background-color: rgba(251, 251, 251, 0.175);">
        <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5"> <img src="../pic/casaidaman.png" width="130px" alt=""> Quarantine Report</h2>
            <h6 class="fw-light">Update/Delete your resident quarantine status by filling the form below.</h6><br>
            <form method="post" enctype = "multipart/form-data">
            
            <div class="mb-3">
            <?php               
                if($row['reportid']==$reportid){
            ?>
                <label for="houseNum">House Number:</label>
                <input type="text" class="form-control" id ="houseNum" name="houseNum" value="<?php echo $row['houseNum'];?>">
            </div>
            <div class="mb-3">
                <label for=stats>What is your status? </label><br>
                <select class="form-select" name="stats">
                  <option value="Covid-19 Positive"> Covid-19 Positive</option>
                  <option value="Close Contact"> Close Contact</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="evidence">Upload your evidence: (Upload the previous file if you wish to not update the evidence)</label>
                <input type="file" accept=image/* class="form-control" name="evidence" value="<?php echo $row['evidence']; ?>">
              </div>
              <div class="mb-3">
                <label for="quarantineStarts">When does your quarantine starts?</label>
                <input type="date" class="form-control" id="quarantineStarts" name="quarantineStarts" value = "<?php echo $row['quarantineStarts']; ?>">
              </div>
              <div class="mb-3">
               <label for="quarantineEnds">When does your quarantine ends?</label>
                <input type="date" class="form-control" id="quarantineEnds" name="quarantineEnds" value = "<?php echo $row['quarantineEnds']; ?>">
              </div><br>
              <a href="../user/covid-19 status.php" class="btn btn-primary" role="button" >Cancel</a>
              <input type = "submit" class='btn btn-dark' role="button" name = "update" type= "submit" value="Update" onclick="return confirm('Are you sure to update this record?');">
                <?php } ?>
            </form>   
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

    </body>

</html>

<?php

if(isset($_POST["update"])){

    $username = $_SESSION['username']; 
    $houseNum = $_POST['houseNum'];
    $stats = $_POST['stats'];
    $evidence = $_FILES['evidence']['name'];
    $quarantineStarts= date('Y-m-d', strtotime($_POST['quarantineStarts']));
    $quarantineEnds = date('Y-m-d', strtotime($_POST['quarantineEnds']));
    
    $update = "UPDATE quarantine SET houseNum='$houseNum', stats='$stats', evidence='$evidence', quarantineStarts='$quarantineStarts', quarantineEnds='$quarantineEnds' WHERE reportid= '$reportid'";
    $run = mysqli_query($conn, $update);

    if($run){
        echo "<script> alert('Report updated successfully');
        window.location.href='../user/covid-19 status.php'</script> ";
    }
    else{
        echo " <script> alert('Record can not be updated.');</script>";
        echo "Error: ".mysqli_error($conn);
    }
}
?>
