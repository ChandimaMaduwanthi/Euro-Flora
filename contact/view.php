<?php

include '../db.php';

$sql = "SELECT * FROM contact";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result=$stmt->fetchAll();
// echo sizeof($result);

if(sizeof($result)!=0){
    foreach($result as $row){
        echo "<br><img src=\"../files/".$row['attachment']."\" width=\"300px\" height=\"300px\"><br>".$row['name']."<br>".$row['email']."<br>";
    }
}


?>