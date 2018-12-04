<?php
try{

	include '../lib/dbconfig.php';
	$csv = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($csv,"r");
	$i=0;
	while(($cont = fgetcsv($handle,1000,",")) !== false){
		
		if(!isset($cont[1])){
			$cont[1] = 0;
		}
		$name = $cont[0];
		print($name."<br>");
		$town = $cont[1];
		print($town);
		if($i==0)
		{

		}else{
			$sql = "INSERT INTO location (id_region,region,town) VALUES ('','$name','$town')";
			if ($conn->query($sql) === TRUE) {
			    echo "Success Upload!";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		$i++;
	}
}
catch(Exception $e)
{
	echo "<br>Error -  ".$e->getMessage();
}


?>