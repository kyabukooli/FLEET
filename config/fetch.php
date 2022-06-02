<?php
include_once('connection.php');
$stmt = $conn->prepare('SELECT* FROM vehicle');
$stmt->execute();
$vehicle=$stmt->fetchAll(PDO::FETCH_ASSOC);



?>