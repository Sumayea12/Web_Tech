<html>
<body>
<form method="post" action="logincheck.php">
        <fieldset>
				<legend><b>LOGIN</b></legend>
				
                <label>User Name:</label>
	           <input style="background-color: <?php if (isset($_COOKIE['color'])) {
		        echo $_COOKIE['color'];
	            }?>"type="text" name="uname" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>">
	            <br><br>
				
				<label>Password:</label>
	            <input type="password" name="pass" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>">
                <br><br>
                <input id="remember" type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>> <label for="remember">Remember Me</label>
	            <br><br>
   
                <input type="submit" name="login" value="Login">

				<a href="Changepassword.php"> Change Password </a>
						
				
				
			</fieldset>
		</form>
</body>
</html>
	
		