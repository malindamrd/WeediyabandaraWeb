<?php 

include("../db/dbConnection.php");

$sql ="SELECT * FROM news order by news_date DESC";
$result = $conn->query($sql);










?>