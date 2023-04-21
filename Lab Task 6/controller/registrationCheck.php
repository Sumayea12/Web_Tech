<?php
session_start();
require_once "../model/terminalOwnerModel.php";

$binNum = $_POST['binNum'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$OwnerAge = $_POST['OwnerAge'];

$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$Address = $_POST['Address'];
$phoneNumber = $_POST['phoneNumber'];
$userType = $_POST['userType'];
$myfile=$_POST['myfile'];

$src = $_FILES['myfile']['tmp_name'];
$file_name = $_FILES['myfile']['name'];
$myfile = "../uploads/$file_name";






if ($firstName == "" || $lastName == "" || $userName == "" || $password == "" || $dob == ""||$age=="" || $gender == "") {
    header('location: ../view/signUp.php?err=null');
} 




else if (!preg_match("/^[a-zA-Z\s]+$/", $firstName)) {
    header('location: ../view/signUp.php?err=firstName');
} else if (!preg_match("/^[a-zA-Z\s]+$/", $lastName)) {
    header('location: ../view/signUp.php?err=lastName');
} else  if (empty($_POST["age"])) {
    $nameErr = "dim";
    header('location: ../view/signUp.php?err=EmailReq');
} else if (!preg_match('/^\w{4,20}$/', $userName)) {
    header('location: ../views/signUp.php?err=wrongUserName');
} else if (!preg_match("/([a-zA-Z0-9])+\@([a-zA-Z0-9-])+\.(com)+/", $age)) {
    header('location: ../view/signUp.php?err=wrongEmail');
} 

//////1

else {
    
    $user = ['binNum' => $binNum,'firstName' => $firstName, 'lastName' => $lastName, 'userName' => $userName, 'password' => $password, 'dob' => $dob, 'OwnerAge' => $OwnerAge, 'age' => $age, 'gender' => $gender, 'Address' => $Address,'phoneNumber' => $phoneNumber,'userType' => $userType, 'myfile' => $myfile]; 
    $status = addTerminalOwner($user);
    $_SESSION['user'] = $user;
    // $user = $firstName . "|" . $lastName . "|" . $userName . "|" . $password . "|" . $dob . "|" . $age . "|" . $gender ."|" . $myfile . "\r\n";

    if ($status) {
        move_uploaded_file($src, $myfile);
        header('location: ../view/terminalLogIn.php');
    } else {
        echo "Database error...";
    }


}







//1 else {
//     $user = ['firstName' => $firstName, 'lastName' => $lastName, 'userName' => $userName, 'password' => $password, 'dob' => $dob, 'age' => $age, 'gender' => $gender, 'myfile' => $myfile]; 
//     $_SESSION['user'] = $user;
//     $user = $firstName . "|" . $lastName . "|" . $userName . "|" . $password . "|" . $dob . "|" . $age . "|" . $gender ."|" . $myfile . "\r\n";


//     if (file_exists('../model/data.json')) {
//         $current_data = file_get_contents('../model/data.json');
//         $array_data = json_decode($current_data, true);
//         $new_data = array('firstName' => $firstName, 'lastName' => $lastName, 'userName' => $userName, 'password' => $password, 'dob' => $dob, 'age' => $age, 'gender' => $gender, 'myfile' => $myfile);
//         $array_data[] = $new_data;
//         $final_data = json_encode($array_data);
//         if (file_put_contents('data.json', $final_data)) {
//             $message = "<label>File Appended Success fully</p>";
//             header('location: ../view/terminalLogIn.php');
//         }
//     } else {
//         $error = 'JSON File not exits';
//     }
// }
