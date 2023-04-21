
<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }


?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controller/loginCheck.php" enctype="">
         <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2>Terminal Owner Login and Registraion</h2>
                </td>

            </tr>
        </table>
        <table align="center">
            <tr align="center">
                <td colspan="4">
                    <p>UserName: </p>
                </td>
                <td>
                    <input type="text" name="patientUserName" value="">
                </td>

            </tr>
            <tr align="center">
                <td colspan="4">
                    <p>Password : </p>
                </td>
                <td>
                    <input type="password" name="patientPassword" value="">
                </td>

            </tr>



        </table>

        <table align="center">
            <tr>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>
                <td>
                    <input type="submit" name="btn" value="login" />
					
                    <!--  <button type="submit">Login</button> -->
                </td>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>
                <td><a href="signUp.php"><input type="button" name="btn" value="signup" /></a></td>
            </tr>
            <tr>
                <td colspan="3"></td>
              <!--   <td><a href="forgotPatientPassword.php"><button>Forgot password</button></a></td> -->
            </tr>
            <tr>
                <td>

                </td>
            </tr>
        </table>
                    
					 
        </form>
        <table align="center">
            <tr>
                <td>
                <a href="../Index.php"><button>Back Home page</button></a>
                </td>
            </tr>
        </table>
		
</body>
</html>