<?php

/* if (isset($_GET['nameErr'])) {
    if ($_GET['nameErr'] == '') {
        echo "invalid request error..";
    }
} */





if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
      //  echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
       // echo "null username/password";
    }
    if ($_GET['err'] == 'EmailReq') {
        echo "Email require";
    }
   
}
?>

<html>

<head>
    <title>Signup</title>
</head>

<body>
    <form method="post" action="../controller/registrationCheck.php" enctype="multipart/form-data">
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
                        if (isset($_GET['err'])) {
                            if ($_GET['err'] == 'null') {
                                echo "#Need to fill all the field";
                            }
                        }
                        ?>
                </td>
               
                </tr>
            </table>
    
            <table align="center">
            <tr align="left">

                
<td colspan="4">

    <p>Bin  Number: </p>
</td>
<td>
    <input type="text" name="binNum" value="">



</td>


</tr>
                <tr align="left">

                
                    <td colspan="4">
                  
                        <p>First Name: </p>
                    </td>
                    <td>
                        <input type="text" name="firstName" value="">



                    </td>
                
                    <td>
                        <?php
                        if (isset($_GET['err'])) {
                            if ($_GET['err'] == 'firstName') {
                                echo "only letter require in first name";
                            }
                        }
                        ?>
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Last Name: </p>
                    </td>
                    <td>
                        <input type="text" name="lastName" value="">
                    </td>
                    <td>
                        <?php
                        if (isset($_GET['err'])) {
                            if ($_GET['err'] == 'lastName') {
                                echo "only letter require in last name";
                            }
                        }
                        ?>
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>User Name: </p>
                    </td>
                    <td>
                        <input type="text" name="userName" value="">
                    </td>
                    <td>
                        <?php
                        if (isset($_GET['err'])) {
                            if ($_GET['err'] == 'wrongUserName') {
                                echo "wrong user name";
                            }
                        }
                        ?>
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Password: </p>
                    </td>
                    <td>
                        <input type="password" name="password" value="">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>DOB: </p>
                    </td>
                    <td>
                        <input type="date" name="dob" value="">
                    </td>

                </tr>
                <tr align="left">

                
<td colspan="4">

    <p>Input you age  : </p>
</td>
<td>
    <input type="text" name="OwnerAge" value="">



</td>


</tr>

                <tr align="left">
                    <td colspan="4">
                        <p>Email: </p>
                    </td>
                    <td>
                        <input type="email" name="age" value="">

                    </td>
                    <td>
                        <?php
                        if (isset($_GET['err'])) {
                            if ($_GET['err'] == 'wrongEmail') {
                                echo "wrong email ";
                            }
                        }
                        ?>
                    </td>


                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Gender: </p>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="Male" id="">Male
                        <input type="radio" name="gender" value="Female" id="">Female
                        <input type="radio" name="gender" value="Other" id="">Others
                    </td>

                </tr>
                <tr align="left">

                
<td colspan="4">

    <p>Input you Address  : </p>
</td>
<td>
    <input type="text" name="Address" value="">



</td>


</tr>
<tr align="left">

                
<td colspan="4">

    <p>Input you Phone number  : </p>
</td>
<td>
    <input type="text" name="phoneNumber" value="">



</td>


</tr>
<tr align="left">

                
<td colspan="4">

    <p>Input you User type  : </p>
</td>
<td>
    <input type="text" name="userType" value="">



</td>


</tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Image: </p>
                    </td>
                    <td>
                     <input type="file" name="myfile" value="" />
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">

                    </td>

                    <td align="right"><input type="submit" name="btn" value="Submit" /></td>




                </tr>
                <a href="showAllData.php">show all data</a>
            </table>

        </fieldset>
    </form>
    <table align="center">
        <tr>
            <td>
                <a href="terminalLogIn.php"><button>Back to Login</button></a>
            </td>
        </tr>
    </table>
</body>

</html>