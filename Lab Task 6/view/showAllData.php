<?php
session_start();
require_once "../model/terminalOwnerModel.php";

$status = showAllOwners();
echo "<table border=1>
<tr>
    <th>TerminalOwnerName</th>
    <th>ContainerCapacity</th>
    <th>TerminalCode</th>
    <th>SizeOfLaborForce</th>
    <th>YardArea</th>
    <th>NumberOfCranes</th>
    <th>TerminalApprovalBythe ControlPanel(Yes/No)</th>
 
</tr>";

    while ($data = mysqli_fetch_assoc($status)) {


        echo "<tr>
    <td>{$data['TerminalOwnerName']}</td>
    <td>{$data['ContainerCapacity']}</td>
    <td>{$data['TerminalCode']}</td>
    <td>{$data['SizeOfLaborForce']}</td>
    <td>{$data['YardArea']}</td>
    <td>{$data['NumberOfCranes']}</td>
    <td>{$data['TerminalApprovalBythe ControlPanel(Yes/No)']}</td>
    
    
    
</tr>";
    }

    echo "</table>";
    // $status = mysqli_query($conn, $sql);
    // return $status;
?>
