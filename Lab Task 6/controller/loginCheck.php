<?php
session_start();
require_once "../model/terminalOwnerModel.php";
$patientUsername = $_POST['patientUserName'];
$patientPassword = $_POST['patientPassword'];
if ($patientUsername=="" && $patientPassword=="" ) {
    header('location: ../views/terminalLogIn.php?err=bothEmpty');
    return;
}
if ($patientUsername == "") {
    //echo "invalid username/password!";
    header('location: ../views/terminalLogIn.php?err=userEmpty');
} 
if ( $patientPassword == "") {
    header('location: ../views/terminalLogIn.php?err=passwordEmpty');
}
else {
    $user = ['patientUserName' => $patientUsername, 'patientPassword' => $patientPassword];
    $status = loginCheck($user);

    //$file = fopen('../patientRegistration.txt', "r");
    // while (!feof($file)) {
    // $data = fgets($file);
    // $user = explode("|", $data);
    // if ($user[2] == $patientUsername && $user[3] == $patientPassword) {
    //
    /* $user = ['patientId' => $status['patientId'],'firstName' => $status[''], 'lastName' => $status[1], 'userName' => $status[2], 'password' => $status[3], 'dob' => $status[4], 'age' => $status[5], 'gender' => $status[6]]; */
    if ($status != null) {
        $user = ['BIN' => $status['BIN'], 'First_name' => $status['First_name'], 'Last_name' => $status['Last_name'], 'User_Name' => $status['User_Name'], 'Password' => $status['Password'], 'DOB' => $status['DOB'],'Age' => $status['Age'], 'Email' => $status['Email'], 'Gender' => $status['Gender'],'Address' => $status['Address'],'Phone_Number' => $status['Phone_Number'],'User_Type' => $status['User_Type'],'Profile' => $status['Profile']];
       
        $_SESSION['user'] = $user;
        ///
        setcookie('status', 'true', time() + 3600, '/');
        header('location: ../view/Home.php');
    }
    //}
    // }

    echo "invalid user";
}

    //$_POST
