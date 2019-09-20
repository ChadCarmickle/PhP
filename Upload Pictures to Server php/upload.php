	
<?php
	#$target_dir = "‪C:\xampp\htdocs\Pages";
	$target_file = ($_FILES["fileToUpload"]["name"]);
	$fileToUpload = $_FILES['fileToUpload']['tmp_name']; 
		echo " File Uploaded connected. "; 

		if(move_uploaded_file($fileToUpload, $target_file) ){ 
		 header("Location: http://localhost:8080/Pages/");
		 exit;
		}
		else { 
		    		echo " File Uploaded Connecting failed "; 

		} 

?>