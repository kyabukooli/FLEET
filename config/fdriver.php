<?php
include_once('connection.php');
$stmt = $conn->prepare('SELECT* FROM drivers');
$stmt->execute();
$drivers=$stmt->fetchAll(PDO::FETCH_ASSOC);



?>