<?php
    $databaseHost = 'localhost';
    $databaseName = 'my_db';
    $databaseUsername = 'root';
    $databasePassword = '';
    
    
    //MySQLi Procedural
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    
    //MySQLi Object-Oriented approach
    /*
    $mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    */
    
    //MySQLi Procedural approach
    // mysqli_connect_errno returns the last error code
    if ( mysqli_connect_errno() ) {
        // die() is equivalent to exit()
        die( "Database connection failed: " . mysqli_connect_error() );
    } 
    
    //Step 2: Handling Connection Errors - mysqli 
    //MySQLi Object-Oriented approach
    //connect_errno returns the last error code
    // Check connection
    /*
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    */
    
    echo "Database connected successfully <br>";

    if(isset($_POST['Submit'])) {	
        //The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
            
        // checking empty fields
        if(empty($C) || empty($lastName) || empty($email) || empty($pnumber)) {
                    
            if(empty($firstName)) {
                echo "<font color='red'>First name field is empty.</font><br/>";
            }
            
            if(empty($lastName)) {
                echo "<font color='red'>Last name field is empty.</font><br/>";
            }
            
            if(empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }

            if(empty($pnumber)) {
                echo "<font color='red'>Phone number field is empty.</font><br/>";
            }
            
            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else { 
            // if all the fields are filled (not empty) 
            
            //Step 3. Execute the SQL query.	
            //insert data to database	
            $result = mysqli_query($mysqli, "INSERT INTO users(firstName,lastName,email,pnumber) VALUES('$firstName','$lastName','$email','$pnumber')");
            
            //Step 4. Process the results.
            //display success message & the new data can be viewed on index.php
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='index.php'>View Result</a>";
        
            //Step 5: Freeing Resources and Closing Connection using mysqli
            mysqli_close($mysqli);
        }
    }
?>

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
            <h3 class="text-white text-center mb-5">Make a <span style="color: #d3ad7f;">Reservation</span> </h3>
        </div>

        <form class="row g-3" action="../php/reservation.php" method="post" enctype = "multipart/form-data">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="pnumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="pnumber" name="pnumber">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" name="Sumbit">Submit</button>
            </div>
        </form>

    </div>
</body>