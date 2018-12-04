<?php
	include "lib/dbconfig.php";
	try{
		if(isset($_POST['region'])){
		$name = $_POST['region'];
		$response="";
		$sql = "SELECT town FROM location WHERE region='$name'";

		$result = $conn->query($sql);

			if($result->num_rows > 0){
		    while($row = $result->fetch_assoc()) {

		    	 echo $row['town'].',';
		    	}
			}else{

			}
			$conn->close();
		}
	}catch(Exception $e)
	{
		echo $e->getMessage();
	}
	

?>