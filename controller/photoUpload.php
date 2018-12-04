<?php 

	include 'lib/dbconfig.php';

	/**
	 * summary
	 */
	class ImageUpload
	{
	    
	    public function Upload($Uploadfilename){
	    	$orgfilename = basename($_FILES['file']['name']);
		$filename = sha1($orgfilename); 
		$target = "upload/";
		$targetFilePath = $target . $filename;

		$filetype = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		$allowTypes = array('jpg','png','jpeg');

		if(in_array($filetype, $allowTypes)){
			 //upload file to server
			 if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
			 	// insert into database
			 	
			 	$response['status'] = 'success';
			 }else{

			 	$response['status'] = 'error';

			 }
		}else{
			$response['status'] = 'TypError';
		}

		echo json_decode($response);
	    }
	}


 ?>