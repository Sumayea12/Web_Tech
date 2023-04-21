<?php 
session_start();
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>

	<title>Home Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body id="homebg">
	
		<div class="centerDesign">
			<br>
			<br>
			<br>
			<br>
			<br>

		<h2 align="center">Welcome To The Terminal Owner Panel</h2>
		
		<h3 align="center">Welcome To The Home Page <?php echo $_SESSION['user']['User_Name'] ?></h3>
		
		
		



<table bgcolor="black" width="1200" align="center">
        <tr bgcolor="#D6EEEE">
            <th width="240" ><a href="Create_Profile.php"> Create Profile </a></th>
            <th width="150"><a href="showData.php"> Show All Data </a></th>
            <th width="150"><a href="terminalPersonalInformation.php"> Update Information </a></th>
            <th width="150"><a href="TerminalRegistration.php"> Terminal Registration </a></th>
            <th width="300"><a href="availavilityOfTerminal.php"> Availavility of Terminal </a></th>
			<th width="200"><a href="DeleteOwnAccount.php"> Delete own account </a></th>
            <th width="150"><a href="blockTransportOwner.php"> Block Transport Owner </a></th>
            <th width="150"><a href="blockExportImportOwner.php"> Block Exporter/importer Owner </a></th>
            <th width="150"><a href="../controller/logout.php"> logout </a></th>
			
        </tr>

</body>
</html>

<?php } else{

	echo "invalid request";
} ?>