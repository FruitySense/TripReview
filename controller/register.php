<?php
include '../lib/dbconfig.php';
	if("adminauth" == $_SESSION["auth"]){
		try{
			$uname=$_POST['name'];
			$pass=$_POST['password'];
			$email=$_POST['email'];

			$hashpass=sha1($pass);

			$salt = sha1(rand(1,1000));

			$storePass = sha1($salt.$hashpass);

			$sql = "INSERT INTO owner (id,username,pass,email,salt) VALUES ('','$uname', '$storePass', '$email','$salt')";

			if ($conn->query($sql) === TRUE) {
			    echo "1";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}catch(Exception $ex)
		{
			echo " Warning !  ". $ex->getMessage();
		}
 		
	}else{

 		header('Location: 404.php');
 	}

	

	

$conn->close();

?>
