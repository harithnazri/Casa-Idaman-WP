<?php
include("db_conn.php");

    $username = $_POST['username'];
    $houseNum = $_POST['houseNum'];
    $stats = $_POST['stats'];
    $evidence = $_FILES['evidence']['name'];
    $quarantineStarts= date('Y-m-d', strtotime($_POST['quarantineStarts']));
    $quarantineEnds = date('Y-m-d', strtotime($_POST['quarantineEnds']));

    $sql = "UPDATE quarantine SET username='$username', houseNum='$houseNum', stats='$stats', evidence='$evidence', quarantineStarts='$quarantineStarts', quarantineEnds='$quarantineEnds' WHERE username='$username'";
    $run = mysqli_query($conn, $sql);

    if($run){
        header("Location: ../Covid-19%20User/covid-19status.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }

?>
