<?php
session_start();
require_once "../model/terminalOwnerModel.php";
$patientId=$_SESSION['user']['patientId'];
$firstName = $_POST['UfirstName'];
$lastName = $_POST['UlastName'];
$userName = $_POST['UuserName'];
$password = $_POST['Upassword'];
$dob = $_POST['Udob'];
$age = $_POST['Uage'];
$gender = $_POST['Ugender'];
//$reg = $_POST['btn'];

//if ($userName == "" || $password == "") {
//echo "invalid username/password!";
// header('location: signUp.php?err=null');
/*  if ($reg == true) {
        header('location: reg.php?err=null'); //?err=null
    } */
//} else {

//$file = fopen('../patientRegistration.txt', "r");
//while (!feof($file)) {
   // $data = fgets($file);
   // $user = explode("|", $data);
    // if ($user[2] == $username && $user[3] == $password) {
    // echo " match found";
    // echo $user[2];


    // $user[2]=$email;
    ////////////
    $user = ['patientId'=> $patientId,'UfirstName'=> $firstName, 'UlastName'=>$lastName, 'UuserName'=>$userName, 'Upassword'=>$password, 'Udob'=>$dob, 'Uage'=>$age, 'Ugender'=>$gender];
    $status = personalInfoUpdate($user);

    $_SESSION['user'] = $user;


    /*  $name = $user[0];
            $pass = $user[1]; */
    /* $fn = $firstName;
    $ln = $lastName;
    $un = $userName;
    $pw = $password;
    $db = $dob;
    $ageV = $age;
    $genderV = $gender; */
    // echo "fn"+$fn;

    //$user = $user[0]."|".$user[1]."|".$email."\r\n";



   // $key = "$userName";

    //load file into $fc array

    //$fc = file("../patientRegistration.txt");

    //open same file and use "w" to clear file

    //$f = fopen("../patientRegistration.txt", "w");

    //loop through array using foreach

 /*    foreach ($fc as $line) {
        if (!strstr($line, $key)) //look for $key in each line
            fputs($f, $line); //place $line back in file
    } */

 /*    fclose($f);
    $user = $fn . "|" . $ln . "|" . $un . "|" . $pw . "|" . $db . "|" . $ageV . "|" . $genderV . "\r\n";
    $file = fopen('../patientRegistration.txt', 'a');
    fwrite($file, $user);
    fclose($file); */
    session_start();
    session_destroy();
    setcookie('status', 'true', time()-10, '/');
    header('location: ../view/terminalLogIn.php');
   // break;
//}
// }

//echo "data updated";
//}

    //$_POST
