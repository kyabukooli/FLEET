<?php
$servername = "localhost";
$username = "root";
$password = "";


    $conn = new PDO("mysql:host=$servername;dbname=fleet", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$id=$_POST['id']?? null;
if(!$id){
header('Location:../Drivers.php');
exit;

}
$statement=$conn->prepare('DELETE FROM drivers WHERE ID=:id');
$statement->bindValue(':id',$id);
$statement->execute();
header('Location:../Drivers.php');
?>