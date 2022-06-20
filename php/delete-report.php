<?php
include("db_conn.php");
  
    $reportid = $_GET['reportid'];

    $sql = "DELETE FROM quarantine WHERE reportid='$reportid'";
    $run = mysqli_query($conn, $sql);

    if($run){
        echo "<script> alert('Report deleted successfully');
        window.location.href='../user/covid-19 status.php'</script> ";
    }
    else{
        echo "Report can not be updated.";
        echo "Error: " . mysqli_error($conn);
    }

?>
