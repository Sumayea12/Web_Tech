<?php
require_once "db.php";

/*     function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        if($user != null){
            return true;
        }else{
            return false;
        }
    } */





    
function addTerminalOwner($user)
{


    $conn = getConnection();
    $sql = "insert into troregistration values( '{$user['binNum']}', '{$user['firstName']}', '{$user['lastName']}', '{$user['userName']}', '{$user['password']}', '{$user['dob']}', '{$user['OwnerAge']}', '{$user['age']}', '{$user['gender']}', '{$user['Address']}', '{$user['phoneNumber']}', '{$user['userType']}', '{$user['myfile']}')"; 
    $status = mysqli_query($conn, $sql);
    return $status;
}

function TerminalRegister($user)
{


    $conn = getConnection();
    $sql = "insert into terminalregister values( '{$user['OwnerName']}', '{$user['ContainerCapacity']}', '{$user['ContainerCode']}', '{$user['LaborForce']}', '{$user['YardArea']}', '{$user['NumberOfCranes']}', '{$user['approval']}')"; 
    $status = mysqli_query($conn, $sql);
    return $status;
}

function showAllOwners()
{
    $conn = getConnection();
    $sql = "select * from terminalregister";

    //////////////////////////////////
    $result = mysqli_query($conn, $sql);
    return $result;
}

function showSpecificValue($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM terminalregister where TerminalCode='{$user['searchTerminalCode']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}






function loginCheck($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM troregistration where User_Name='{$user['patientUserName']}' AND Password='{$user['patientPassword']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}

function personalInfoUpdate($user){
    $conn = getConnection();
    $sql = "UPDATE troregistration SET First_name='{$user['UfirstName']}',Last_name='{$user['UlastName']}',User_Name='{$user['UuserName']}',Password='{$user['Upassword']}',DOB='{$user['Udob']}',Email='{$user['Uage']}',Gender='{$user['Ugender']}' where User_Name='{$user['UuserName']}'";;
    $status = mysqli_query($conn, $sql);
    return $status;

}















// function loginCheck($user)
// {
//     $conn = getConnection();
//     //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
//     $sql = "SELECT * FROM patientregistration where patientUserName='{$user['patientUserName']}' AND patientPassword='{$user['patientPassword']}'";
//     $result = mysqli_query($conn, $sql);


//     $data = mysqli_fetch_assoc($result);

//     if ($data == null) {
//         /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
//         return null;
//     } else {
//         return $data;
//     }
// }











function doctorRequest($user)
{
    $conn = getConnection();
    $sql = "insert into doctorappoinmentrequest values('{$user['0']}', '{$user['1']}', '{$user['2']}', '{$user['3']}')";
    $status = mysqli_query($conn, $sql);
    return $status;
}


function showpatientAdmissionDetails($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM patientregistration where patientUserName='{$user['patientUserName']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}

function patientReview($user)
{
    $conn = getConnection();
    $sql = "insert into patientreview values('', '{$user['patientUN']}', '{$user['ratting']}', '{$user['patientReviewText']}')";
    $status = mysqli_query($conn, $sql);
    return $status;
}

// function personalInfoUpdate($user){
//     $conn = getConnection();
//     $sql = "UPDATE patientregistration SET patientFName='{$user['UfirstName']}',patientLName='{$user['UlastName']}',patientUserName='{$user['UuserName']}',patientPassword='{$user['Upassword']}',patientDOB='{$user['Udob']}',patientEmail='{$user['Uage']}',patientGender='{$user['Ugender']}' where patientId='{$user['patientId']}'";;
//     $status = mysqli_query($conn, $sql);
//     return $status;

// }

function paymentDetails($user){
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM patientpaymentdetails where patientUserName='{$user['patientUserName']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}








function showAllProduct()
{
    $conn = getConnection();
    $sql = "select * from phramacistaddproduct ";

    //////////////////////////////////
    $result = mysqli_query($conn, $sql);
    return $result;
}

function updateProduct($user)
{

    $conn = getConnection();
    $sql = "UPDATE phramacistaddproduct SET productName='{$user['productName']}',productCost='{$user['productCost']}',setStatus='{$user['setStatus']}' where medicineId='{$user['searchTerminalCode']}'";;
    $status = mysqli_query($conn, $sql);
    return $status;
}

function deleteProduct($user)
{
    $conn = getConnection();
    $sql = "DELETE from phramacistaddproduct where productName='{$user['searchTerminalCode']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}
