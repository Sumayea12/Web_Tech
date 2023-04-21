<?php
session_start();
require_once "../model/terminalOwnerModel.php";


$OwnerName = $_POST['OwnerName'];
$ContainerCapacity = $_POST['ContainerCapacity'];
$ContainerCode = $_POST['ContainerCode'];

$LaborForce = $_POST['LaborForce'];
$YardArea = $_POST['YardArea'];
$NumberOfCranes = $_POST['NumberOfCranes'];
$approval = $_POST['approval'];




if ($OwnerName == "" || $ContainerCapacity == "" || $ContainerCode == "" || $LaborForce == "" || $YardArea == ""||$NumberOfCranes == ""||$approval == "") {
    header('location: ../view/Home.php?errT=null');
} 




else {
    
    $user = ['OwnerName' => $OwnerName,'ContainerCapacity' => $ContainerCapacity, 'ContainerCode' => $ContainerCode, 'LaborForce' => $LaborForce, 'YardArea' => $YardArea, 'NumberOfCranes' => $NumberOfCranes, 'approval' => $approval]; 
    $status = TerminalRegister($user);
    $_SESSION['user'] = $user;
    // $user = $firstName . "|" . $lastName . "|" . $userName . "|" . $password . "|" . $dob . "|" . $age . "|" . $gender ."|" . $myfile . "\r\n";

    if ($status) {
        echo "check";
                header('location: ../view/terminalLogIn.php');
       
    } else {
        echo "Database error...";
    }


}