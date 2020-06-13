<?php
$firstName=$_POST['firstName'];
$phoneNumber=$_POST['phoneNumber'];
$addressShop=$_POST['addressShop'];
$employesNumber=$_POST['employesNumber'];
$shopNumber=$_POST['shopNumber'];
$emailId=$_POST['emailId'];
$registrationDate=$_POST['registrationDate'];
$satisfiedFull=$_POST['satisfiedFull'];


//DateBase Connection

$conn=new mysqli('localhost','root','','service');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(firstName, phoneNumber, addressShop, employesNumber, shopNumber, emailId, registrationDate, satisfiedFull) values(?,?,?,?,?,?,?,?)");
}

$stmt->bind_param("sisiisis",$firstName, $phoneNumber, $addressShop, $employesNumber, $shopNumber, $emailId, $registrationDate, $satisfiedFull);
$stmt->execute();
echo "Registration SuccessFully.....";
$stmt->close();
$conn->close();




?>