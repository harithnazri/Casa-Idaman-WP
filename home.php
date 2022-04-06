<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>HOME</title>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- FontAwesome  -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



		<!-- CSS link  -->
		<link rel="stylesheet" href="css/home.css">
	</head>

	<body>
		<div>
			<!-- container d-flex justify-content-center align-items-center -->
			<?php if ($_SESSION['role'] == 'admin') { ?>
				<!-- For Admin -->
				<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
					<div class="card " style="width: 18rem;">
						<img src="pic/admin-default.png" class="card-img-top" alt="admin image">
						<div class="card-body text-center">
							<h5 class="card-title">
								<?= $_SESSION['name'] ?>
							</h5>
							<a href="logout.php" class="btn btn-dark">Logout</a>
						</div>
					</div>
					<div class="p-3">
						<?php include 'php/members.php';
						if (mysqli_num_rows($res) > 0) { ?>

							<h1 class="display-4 fs-1">Members</h1>
							<table class="table" style="width: 32rem;">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Name</th>
										<th scope="col">User name</th>
										<th scope="col">Role</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									while ($rows = mysqli_fetch_assoc($res)) { ?>
										<tr>
											<th scope="row"><?= $i ?></th>
											<td><?= $rows['name'] ?></td>
											<td><?= $rows['username'] ?></td>
											<td><?= $rows['role'] ?></td>
										</tr>
									<?php $i++;
									} ?>
								</tbody>
							</table>
						<?php } ?>
					</div>
				</div>
			<?php } else { ?>
				<!-- FORE USERS -->
				<!-- <div class="card" style="width: 18rem;">
		<img src="img/user-default.png" 
			class="card-img-top" 
			alt="admin image">
		<div class="card-body text-center">
		<h5 class="card-title">
			<?= $_SESSION['name'] ?>
		</h5>-->
				<a href="logout.php" class="btn btn-dark">Logout</a>
				<!-- </div> -->
				<!-- </div> -->
				<header class="container ">

					<nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
						<div class="container">
							<div style="display: flex; align-items:center;">
								<a class="navbar-brand" href="#"><img class="logo" src="pic/casaidaman.png" width="180px" alt=""></a>
								<h3 style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
							</div>

							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav ms-auto ">
									<li class="nav-item navi">
										<a class="nav-link text-white nav-list " href="#">Home</a>
									</li>
									<li class="nav-item navi">
										<a class="nav-link text-white" href="#facility">Facilities</a>
									</li>
									<li class="nav-item navi">
										<a class="nav-link text-white nav-list " href="#visitor">Visitor</a>
									</li>
									<li class="nav-item navi">
										<a class="nav-link text-white" href="#">Covid-19 Status</a>
									</li>
									<li class="nav-item navi">
										<a class="nav-link text-white nav-list " href="profile.html"><i class="fa-solid fa-circle-user"> </i>
											<?php
											echo $_SESSION['username']; ?>
										</a>
									</li>
									<li class="nav-item navi">
										<a class="nav-link text-white" href="logout.php">Logout</a>
									</li>


								</ul>
							</div>
						</div>
					</nav>


				</header>

				<div class="overlay"></div>
				<section id="#home" class="bg-cover hero-section border-bottom pb-0 " style="background-image: url('https://images.unsplash.com/photo-1531315630201-bb15abeb1653?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

					<div class="container text-white text-center hero " style="z-index: 2;">
						<div class="row">
							<div class="col-12">
								<h1 class="display-4 fw-bolder">Welcome To Casa <br> Idaman Condominium</h1>
								<h4>Greatest Community</h4>
								<p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, laudantium repellendus
									accusantium culpa eligendi cum praesentium quae ipsam explicabo doloremque cupiditate esse, ratione
									error deleniti assumenda fugiat debitis corrupti. Consectetur.</p>

							</div>
						</div>
					</div>
				</section>
			<?php } ?>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>

	</html>
<?php } else {
	header("Location: index.php");
} ?>