<?php
include_once('connection.php');
// VEHICLE REGISTRATON
try {
    $img=$_POST['dp'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $DOB=$_POST['dob'];
    $contact=$_POST['contact'];
    // SUBMITTING DATA TO VEHICLE TABLE
    $sql="INSERT INTO drivers (dp,firstname,lastname,DOB,contact) VALUES('$img','$fname','$lname','$DOB','$contact')";
    $conn->exec($sql);
   
    header("Location:../Drivers.php");
    
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
?>