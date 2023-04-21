<?php
session_start();
require_once "../model/terminalOwnerModel.php";
$searchTerminalCode = $_POST['searchTerminalCode'];




// sleep(4);

if ($searchTerminalCode != null) {
    $user = ['searchTerminalCode' => $searchTerminalCode];

$status = showSpecificValue($user);
//echo $status['productCost'];
if ($status==null) {
   echo "data not found";
   return;
}
if ($searchTerminalCode == null) {
} 
$searchTerminalCode  = $_POST['searchTerminalCode'];
    echo "Terminal id is: " . $status['TerminalCode'];
    
} else {
    echo "PLease input data";
  
    return;
}

?>



<html>

<head>

</head>

<body >
    <form method="post" action="" >
   
        <table>
            <tr>
                <td>TerminalOwnerName</td>
                <td>ContainerCapacity</td>
                <td>TerminalCode</td>
                <td>SizeOfLaborForce</td>
                <td>YardArea</td>
                <td>NumberOfCranes</td>
                <td>TerminalApprovalBythe ControlPanel(Yes/No)</td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <input type="text" name="searchTerminalCode" id="" value=<?php echo $status['TerminalOwnerName']  ?> readonly>
                </td>
                <td>
                    <!-- <input type="text" name="" id=""value="{$status['productName']}"> -->
                    <input type="text" name="ContainerCapacity" id="" value=<?php echo $status['ContainerCapacity']  ?> readonly>
                </td>
                <td>
                    <input type="text" name="TerminalCode" id="" value=<?php echo $status['TerminalCode']  ?> readonly>
                </td>

                <td>
                    <input type="text" name="SizeOfLaborForce" id="" value=<?php echo $status['SizeOfLaborForce']  ?> readonly>
                </td>
                <td>
                    <input type="text" name="YardArea" id="" value=<?php echo $status['YardArea']  ?> readonly>
                </td>
                <td>
                    <input type="text" name="NumberOfCranes" id="" value=<?php echo $status['NumberOfCranes']  ?> readonly>
                </td>
                <td>
                    <input type="text" name="TerminalApprovalBythe ControlPanel(Yes/No)" id="" value=<?php echo $status['TerminalApprovalBythe ControlPanel(Yes/No)']  ?> readonly>
                </td>

                <!-- <td align="right"> <input type="submit" name="btn" value="Update" /></td> -->


            </tr>
        </table>
    </form>

</body>

</html>