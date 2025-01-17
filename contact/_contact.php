<?php

include '../db.php';

$name = $_REQUEST['names'];
$email = $_REQUEST['emails'];
$phone = $_REQUEST['phone'];
$ordercode = $_REQUEST['code'];
$message = $_REQUEST['message'];

$file = $_FILES['file'];
$filename = $_FILES['file']['name'];
$filetempname = $_FILES['file']['tmp_name'];
$filetype = $_FILES['file']['type'];
$fileerr = $_FILES['file']['error'];
$filesize = $_FILES['file']['size'];

$extension = array('jpg','png','jpeg');
$fileext = strtolower(end(explode(".", $filename)));
$attachment = uniqid('',true).".".$fileext;

try{
    // $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `order_code`, `message`, `attachment`) VALUES ('".$name."','".$email."','".$phone."','".$ordercode."','".$message."','".$attachment."')";
    $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `order_code`, `message`, `attachment`) VALUES (:name,:email,:phone,:ordercode,:message,:attachment)";
    
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':ordercode',$ordercode);
    $stmt->bindParam(':message',$message);
    $stmt->bindParam(':attachment',$attachment);

    
    $stmt->execute();

    if($stmt->rowCount()==1){
        $filepath = "../files/".$attachment;
        move_uploaded_file($filetempname,$filepath);
        header("Location: contact.php?er=1");
    }

}catch(PDOException $e){
    echo $e->getMessage();
}

?>