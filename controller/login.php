<?php

	include '../lib/dbconfig.php';
	session_start();
	

	$uname=$_POST['name'];
	$pass=$_POST['password'];
	

	$hashPass = sha1($pass);

	$sql = "SELECT salt FROM owner WHERE email ='$uname' OR username ='$uname'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       $salt= $row["salt"];

	       $protectPass = sha1($salt.$hashPass);

	       $sql1 = "SELECT * FROM owner WHERE pass='$protectPass'";
	       $result1 = $conn->query($sql1);

	         while($row1 = $result1->fetch_assoc()) {
	         	if($result1->num_rows > 0){
	         			$_SESSION["auth"] = "adminauth";
						$_SESSION["name"] = $uname;
			       		echo $row1["username"].'-'.$row1["email"];
			       }else{
			       		echo "Wrong Password";
			       }
		         }

	    }
	} else {
	    echo "Username Not found!...";
	}
	$conn->close();

?>