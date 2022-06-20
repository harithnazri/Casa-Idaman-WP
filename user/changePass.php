<?php
session_start();
include "../php/db_conn.php";

if (!(isset($_SESSION['username']) && isset($_SESSION['id']))) {
  header("Location: home.php");
}

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
      $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);

    if(empty($op)){
      header("Location: changePass.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: changePass.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: changePass.php?error=The confirmation password  does not match");
	  exit();
    }else if($op !== $_SESSION["password"]){
      header("Location: changePass.php?error=The old password is wrong");
    exit();
    }else {
    	/* hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $id = $_SESSION['id']; */

        $sql = "SELECT password
                FROM users WHERE 
                id='{$_SESSION["id"]}' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if($result){
        	
        	$sql_2 = "UPDATE users
        	          SET password='$np'
        	          WHERE id='{$_SESSION["id"]}'";
        	mysqli_query($conn, $sql_2);
        	header("Location: profile.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: changePass.php?error=Incorrect password");
	        exit();
        }

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
    <link rel="stylesheet" href="../css/changePassword.css">

    <title>User Profile</title>
  </head>
  <body class="text-black" style="background-color:rgb(40, 38, 38);">

  <br><br><br><br>

  <header class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
        <div class="container">
            <div style="display: flex; align-items:center;">
                <a class="navbar-brand" href="../user/home.php"><img class="logo" src="../pic/casaidaman.png" width="180px"
                        alt=""></a>
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
                        <a class="nav-link text-white" href="../user/faci.html">Facilities</a>
                    </li>
                    <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../user/visitor.html">Visitor</a>
                    </li>
                    <li class="nav-item navi">

                        <a class="nav-link text-white" href="../user/c19status.html">Covid-19 Status</a>


                    </li>
                    
                    <li class="nav-item navi">
                    
                      <a class="nav-link text-white" href="../user/profile.php"><i class="fa-solid fa-circle-user"></i>  
                      <?php
                        echo $_SESSION['username']; ?> 
                      </a>
                    
                    </li>
                    
                    <li class="nav-item navi">
                        <a class="nav-link text-white" href="../main.php">Logout</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
  </header>
<!-- body section starts  -->
<body>
    <form action="" method="post" enctype="multipart/form-data" style="width: 500px;">
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
      

      <h2>Password</h2>
     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">


     	<button type="submit" style="color: white; background-color: #008CBA;" href="profile.php">CHANGE</button>
          
     </form>
</body>
  <!-- footer section starts  -->
<footer>
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
        </footer>
  <!-- footer section ends -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
  </body>
  </html><?php 
  
  
