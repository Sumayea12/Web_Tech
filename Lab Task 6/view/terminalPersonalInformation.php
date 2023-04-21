<?php
session_start();

if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "null username/password";
    }
    
}
?>
<html>

<head>
    <title>Update Info</title>
</head>
<link rel="stylesheet" href="../Assets/css/style.css">
<body id="patientHome">
    <form method="post" action="../controller/patientPersonalInfocheck.php" enctype="">
        <fieldset>
            <legend>Update patient info</legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2></h2>
                    </td>

                </tr>
            </table>

            <table align="center">
                <tr align="left">
                    <td colspan="4">
                        <p> First Name: </p>
                    </td>
                    <td>
                    <input type="text" name="UfirstName" value="<?php echo $_SESSION['user']['First_name'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p> Last Name: </p>
                    </td>
                    <td>
                        <input type="text" name="UlastName" value="<?php echo $_SESSION['user']['Last_name'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>User Name: </p>
                    </td>
                    <td>
                        <input type="text" name="UuserName" value="<?php echo $_SESSION['user']['User_Name'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Password: </p>
                    </td>
                    <td>
                        <input type="password" name="Upassword" value="<?php echo $_SESSION['user']['Password'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>DOB: </p>
                    </td>
                    <td>
                        <input type="date" name="Udob" value="<?php echo $_SESSION['user']['DOB'] ?>">
                    </td>

                </tr>

                <tr align="left">
                    <td colspan="4">
                        <p>Email: </p>
                    </td>
                    <td>
                        <input type="email" name="Uage" value="<?php echo $_SESSION['user']['Email'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Gender: </p>
                    </td>
                    <td>
                        <!-- <input type="radio" name="gender" value="Male" id="">Male
                        <input type="radio" name="gender" value="Female" id="">Female
                        <input type="radio" name="gender" value="Other" id="">Others -->

                        <input type="text" name="Ugender" value="<?php echo $_SESSION['user']['Gender'] ?>" readonly>
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">

                    </td>

                    <td align="right"><input type="submit" name="btn" value="Update" /></td>



                </tr>
            </table>

        </fieldset>
    </form>
</body>

</html>