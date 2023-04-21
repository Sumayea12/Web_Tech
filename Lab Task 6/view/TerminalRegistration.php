<?php

/* if (isset($_GET['nameErr'])) {
    if ($_GET['nameErr'] == '') {
        echo "invalid request error..";
    }
} */





if (isset($_GET['errT'])) {
 

    if ($_GET['errT'] == 'null') {
        echo "null value not accepted";
    }
   
}
?>

<html>

<head>
    <title>Terminal Registration</title>
</head>

<body>
    <form method="post" action="../controller/TerminalCheck.php" enctype="">
        <fieldset>
            <legend>Signup</legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2>Terminal Owner Registraion</h2>
                    </td>
                    

                </tr>
                <tr align="center">
                <td>
                <?php
                        if (isset($_GET['errT'])) {
                            if ($_GET['errT'] == 'null') {
                                echo "#Need to fill all the field";
                            }
                        }
                        ?>
                </td>
               
                </tr>
            </table>
    
            <table align="center">
            <tr align="left">

                



</tr>
                <tr align="left">

                
                    <td colspan="4">
                  
                        <p>Terminal Owner Name: </p>
                    </td>
                    <td>
                        <input type="text" name="OwnerName" value="">



                    </td>
                
                    <td>
                        <?php
                        if (isset($_GET['err'])) {
                            if ($_GET['err'] == 'OwnerName') {
                                echo "only letter require in name";
                            }
                        }
                        ?>
                    </td>

                </tr>



<tr>
<td colspan="4">

<p>Container Capacity : </p>
</td>
<td>
<input type="text" name="ContainerCapacity" value="">



</td>
</tr>
                



<td colspan="4">

    <p>Container Code : </p>
</td>
<td>
    <input type="text" name="ContainerCode" value="">



<tr>
</td>

<td colspan="4">

    <p>Size of Labor Force  : </p>
</td>
<td>
    <input type="text" name="LaborForce" value="">


</td>
</tr>

<tr>
</td>

<td colspan="4">

    <p>Yard Area : </p>
</td>
<td>
    <input type="text" name="YardArea" value="">


</td>
</tr>

<tr>
</td>

<td colspan="4">

    <p>Number of Cranes  : </p>
</td>
<td>
    <input type="text" name="NumberOfCranes" value="">


</td>
</tr>

<tr align="left">
                    <td colspan="4">
                        <p>Terminal Approval by the Control Panel: </p>
                    </td>
                    <td>
                        <input type="radio" name="approval" value="Yes" id="">Yes
                        <input type="radio" name="approval" value="No" id="">No
                 
                    </td>

                </tr>
             <tr>
                <td>
                    <td align="right"><input type="submit" name="btn" value="Submit" /></td>
                </td>
             </tr>

                
      
    </table>
                    </fieldset>
    </form>
    <!-- <a href="Home.php"><button>Home</button></a> -->
</body>

</html>