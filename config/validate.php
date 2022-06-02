<?php
include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if($_SERVER["REQUEST_METHOD"] =="POST"){
$adminame=test_input($_POST["adminame"]);
$password=test_input($_POST["password"]);
$stmt= $conn->prepare("SELECT* FROM adminlogin");
$stmt->execute();
$users= $stmt->fetchAll();

foreach($users as $user){
    if(($user['adminname']==$adminame) && ($user['password']==$password)){
       header("Location:../dashboard.php");
    }
    else{
       
        header("Location:../error/404.php");
        echo "<script language='javascript'>";
        echo"alert('WRONG CREDENTAILS')";
        echo "</script>";
    
    }
}

}

?>