<!DOCTYPE html>
<html>

<head>
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body style="padding: 0; ">
    <section class="vh-100 bg-image" style="background-image: url('https://images.unsplash.com/photo-1648818165820-429a98b21fc5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>


                                <form action="../php/signup-check.php" method="post">
                                    <?php if (isset($_GET['error'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $_GET['error'] ?>
                                        </div>
                                    <?php } ?>

                                    <div class="form-outline mb-4">
                                        <?php if (isset($_GET['success'])) { ?>
                                            <p class="success"><?php echo $_GET['success']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="form-outline mb-4 ">
                                        <label class="form-label">Email</label>
                                        <?php if (isset($_GET['email'])) { ?>
                                            <input type="email" name="username" value="<?php echo $_GET['email']; ?>"><br>
                                        <?php } else { ?>
                                            <input type="email" class="form-control" name="email" p><br>
                                        <?php } ?>
                                    </div>
                                    <div class="form-outline mb-4 ">
                                        <label class="form-label">Username</label>
                                        <?php if (isset($_GET['username'])) { ?>
                                            <input type="text" name="username" value="<?php echo $_GET['username']; ?>"><br>
                                        <?php } else { ?>
                                            <input type="text" class="form-control" name="username" p><br>
                                        <?php } ?>
                                    </div>


                                    <div class="form-outline mb-4  ">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" p><br>
                                    </div>
                                    <div class="form-outline mb-4 ">
                                        <label class="form-label">Re Password</label>
                                        <input type="password" class="form-control" name="re_password"><br>
                                    </div>
                                    <div class="form-check  d-flex justify-content-center mb-3">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" name="agreement" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="TermOfService.html" class="text-body"><u>Terms of
                                                    service</u></a>

                                        </label>
                                    </div>

                            </div>
                            <div class=" d-flex justify-content-center ">
                                <button type=" submit" class="btn btn-primary btn-block btn-lg gradient-custom-4  text-white">Sign Up</button>

                            </div>
                            <p class="text-center text-muted mt-5 mb-3">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>