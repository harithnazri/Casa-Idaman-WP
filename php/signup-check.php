<?php
session_start();
include "db_conn.php";

if (
    isset($_POST['email']) && isset ($_POST['username']) && isset($_POST['password'] )
    && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['re_password'] )
    
    ){

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    
    $user_data = 'email=' . $email;
    


    if (empty($email)) {
        header("Location: ../Login%20System/register.php?error=Email is required&$user_data");
        exit();
    } else if (empty($username)) {
        header("Location: .../Login%20System/register.php?error=Username is required&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: .../Login%20System/register.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: ../Login%20System/register.php?error=Re Password is required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: ../Login%20System/register.php?error=The confirmation password  does not match&$user_data");
        exit();
    }   else {

        // hashing the password
        // $pass = md5($pass);
        $pass = $pass;

        $sql = "SELECT * FROM users WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../Login%20System/register.php?error=The username is taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(email,username, password) VALUES('$email', '$username', '$pass')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: ../Login%20System/login.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: ../Login%20System/register.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: ../Login%20System/register.php");
    exit();
}
