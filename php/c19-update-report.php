<?php
include("db_conn.php");

    $username = $_POST['username'];
    $houseNum = $_POST['houseNum'];
    $stats = $_POST['stats'];
    $evidence = $_FILES['evidence']['name'];
    $quarantineStarts= date('Y-m-d', strtotime($_POST['quarantineStarts']));
    $quarantineEnds = date('Y-m-d', strtotime($_POST['quarantineEnds']));
    $validation = $_POST['validation'];

    $sql = "UPDATE quarantine SET username='$username', houseNum='$houseNum', stats='$stats', evidence='$evidence', quarantineStarts='$quarantineStarts', quarantineEnds='$quarantineEnds' , validation = '$validation' WHERE username='$username'";
    $run = mysqli_query($conn, $sql);

    if($run){
        header("Location: ../c19management/c19updatedata.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }

?>
