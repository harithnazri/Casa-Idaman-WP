<?php
session_start();
include("db_conn.php");

    if(isset($_POST['DCases1'])&&isset($_POST['DCasesA1'])&&isset($_POST['DCasesB1']))
    {
        $updateDate = date ('Y-m-d', strtotime($_POST['updateDate']));  
        $total = $_POST['DCases1'];
        $blockA = $_POST['DCasesA1'];
        $blockB = $_POST['DCasesB1'];
        
        $sql = "INSERT INTO coviddailycases(updateDate,blockA,blockB,total) VALUES ('$updateDate','$blockA','$blockB','$total')";
        $run = mysqli_query($conn, $sql);

 
        if($run){
            header("Location: ../admin/c19management.php");
            
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }  
    }
    else{
        header("Location: ../c19management/c19management.php");
        
    }
?>