<?php
    include_once('../php/db_conn.php');

    if(isset($_POST['firstName'])&&($_POST['lastName'])&&isset($_POST['email'])&&isset($_POST['pnumber'])&&isset($_POST['bookdate'])&&isset($_POST['booktime'])&&isset($_POST['facilityID']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $bookdate= date('Y-m-d', strtotime($_POST['bookdate']));
        $booktime= date('Y-m-d', strtotime($_POST['booktime']));
        $facilityID = $_POST['facilityID'];

        
        $sql = "INSERT INTO reservation(firstName,lastName,email,pnumber,bookdate,booktime,facilityID) VALUES ('$firstName','$lastName', '$email', '$pnumber', $bookdate, $booktime, $facilityID)";
        $run = mysqli_query($conn, $sql);
        
        if($run){
            header("reservation.html");
            
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }  
    }
    else{
        header("reservation.html");
        
    }
?>