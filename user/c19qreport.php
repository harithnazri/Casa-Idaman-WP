<?php
session_start();
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


<body class="bg-dark text-white">
  <br><br><br>
    <div class="col d-flex justify-content-center">
    <div class="col-xs-9 col-md-6">
    <div class="card" style="border-radius: 15px; background-color: rgba(251, 251, 251, 0.175);">
        <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5"> <img src="../pic/casaidaman.png" width="130px" alt=""> Quarantine Report</h2>
            <h6 class="fw-light">Report your resident quarantine status by filling the form below.</h6><br>
            <form method="post", action="../php/c19-process-report.php" enctype = "multipart/form-data">
            <div class="mb-3">
                <label for="username">Username: </label>
                <input type="text" class="form-control" id ="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="houseNum">House Number: </label>
                <input type="text" class="form-control" id ="houseNum" name="houseNum" required>
            </div>
            <div class="mb-3">
                <label for=stats>What is your status? </label><br>
                <select class="form-select" name="stats">
                  <option value="Covid-19 Positive"> Covid-19 Positive</option>
                  <option value="Close Contact"> Close Contact</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="evidence">Upload your evidence:</label>
                <input type="file" class="form-control" name="evidence" required>
              </div>
              <div class="mb-3">
                <label for="quarantineStarts">When does your quarantine starts?</label>
                <input type="date" class="form-control" id="quarantineStarts" name="quarantineStarts" required>
              </div>
              <div class="mb-3">
               <label for="quarantineEnds">When does your quarantine ends?</label>
                <input type="date" class="form-control" id="quarantineEnds" name="quarantineEnds" required>
              </div><br>
              <a href="../c19management/c19updatedata.php" class="btn btn-primary" role="button" >Cancel</a>
              <button class="btn btn-dark" type="submit" value="submit">Submit</button>
            </form>   
        </div>
    </div>
    </div>
</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    </body>

</html>
