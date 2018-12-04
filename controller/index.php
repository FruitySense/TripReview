<?php
if("adminauth" == $_SESSION["auth"]){
 		
 	}else{

 		header('Location: 404.php');
 	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>csv insert</title>
</head>
<body>
	<form action="csvUpload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="csvfile" required>
	<input type="submit" value="Upload">	
	</form>
</body>
</html>