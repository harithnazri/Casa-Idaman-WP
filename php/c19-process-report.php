<html>

</html>
<?php

include("db_conn.php");

    if(isset($_POST['username'])&&($_POST['houseNum'])&&isset($_POST['stats'])&&isset($_FILES['evidence'])&&isset($_POST['quarantineStarts'])&&isset($_POST['quarantineEnds']))
    {
        $username = $_POST['username'];
        $houseNum = $_POST['houseNum'];
        $stats = $_POST['stats'];
        $evidence = $_FILES['evidence']['name'];
        $quarantineStarts= date('Y-m-d', strtotime($_POST['quarantineStarts']));
        $quarantineEnds = date('Y-m-d', strtotime($_POST['quarantineEnds']));
        
        $evidencetemp = $_FILES['evidence']['tmp_name'];

        $target = "/Covid-19 User/Evidence/" .$evidence;
        
        $sql = "INSERT INTO quarantine(username,houseNum,stats,evidence,quarantineStarts,quarantineEnds) VALUES ('$username','$houseNum', '$stats', '$evidence', '$quarantineStarts', '$quarantineEnds')";
        $run = mysqli_query($conn, $sql);

        copy($evidencetemp, $target);
        
        if($run){
            header("Location: ../c19management/c19updatedata.php");
            
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }  
    }
    else{
        header("Location: ../user/c19qreport.php");
        
    }
?>
