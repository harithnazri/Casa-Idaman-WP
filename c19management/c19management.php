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

  </head>

  <body class="bg-dark">

    <!-- header section starts  -->
    
    <header class="container "> <!-- Navigation Bar-->
    
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
                <a class="nav-link text-white nav-list " href="../admin/c19management.html">Covid Reports</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white nav-list " href="../admin/c19validation.html">Covid Validation</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white nav-list " href="../admin/c19updatedata.html">Covid Data Update</a>
              </li>
              <li class="nav-item navi">
                <a class="nav-link text-white" href="../Login System/logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    
    </header>
    
    <!-- header section ends  -->
  
    <main>
      <section class="container " style="margin-top: 15vh;" id="gapAbove">

      </section>
      <section class="container">
        <div class="card d-flex" >
          <img class="card-img-top" src="../pic/covid.png" alt="Card image cap" style="height: 150px;">
          <div class="card-body">
            <p class="card-text">
              <h3>Covid-19 Cases</h3>
              <h5>See Covid-19 cases daily and monthy numbers here</h5>
              
              <a href="c19report.html" class="btn btn-dark"  role="button" style="padding:10px">Covid-19 Report</a> 
            </p>
          </div>
        </div>
      </section>

      <!--update-->
      <section> <!-- Update Daily C19 Cases-->
        <div class="container my-5" >
        
          <div class="col gap-3">
            <hr>
            <h4 class="mb-3 gap-5">Update Daily Covid-19 Status</h4>
            
            <button class="btn btn-danger" onclick="dailyCaseButton()">Update Daily Cases here</button>
            <form id="update"class="needs-validation" novalidate style="display: none;" method="post", action="../php/process-covid.php">
              <div class="row g-3 gap-2 bg-light" style="padding: 20px; color: black;">

                <form>
                  <br>
                  <h3>Today: <span id="current_date"></span></h3>
                  
                    <script>
                    document.getElementById("current_date").innerHTML = Date();
                    </script>
                  <div class="form-group">
                    <label for="updateDate">Date:</label>
                    <input type="date" class="form-control" id="updateDate" name="updateDate">
                  </div>
                  <div class="form-group">
                    <label for="DCases">Daily number of <span><b>OVERALL</b></span> Covid-19 cases:</label>
                    <input type="number" class="form-control" id="DCases1" placeholder="Example: 1,2,3,4..." name="DCases1">
                  </div>
                  <div class="form-group">
                    <label for="DCasesA">Daily number of <span><b>BLOCK A</b></span> Covid-19 cases:</label>
                    <input type="number" class="form-control" id="DCasesA1" placeholder="Example: 1,2,3,4..." name = "DCasesA1">
                  </div>
                  <div class="form-group">
                    <label for="DCasesB">Daily number of <span><b>BLOCK B</b></span> Covid-19 cases:</label>
                    <input type="number" class="form-control" id="DCasesB1" placeholder="Example: 1,2,3,4..." name = "DCasesB1">
                  </div>
                  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </form>
            </form>

            <script>
              function dailyCaseButton() {
                var x = document.getElementById("update");
                if (x.style.display === "block") {
                  x.style.display = "none";
                } else {
                  x.style.display = "block";
                }
              }
              </script>
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
