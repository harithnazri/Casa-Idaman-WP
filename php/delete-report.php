<?php
include("db_conn.php");
  
    $reportid = $_GET['reportid'];

    $sql = "DELETE FROM quarantine WHERE reportid='$reportid'";
    $run = mysqli_query($conn, $sql);

    if($run){
        header("Location: ../Covid-19%20User/covid-19status.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }

?>
