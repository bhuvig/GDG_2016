<?php
ob_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        while (ob_get_status()) 
		{
		    ob_end_clean();
		}

		// no redirect
		$url2 = 'http://localhost/simple_gray_621/pixlr.php'; // this can be set based on whatever
		header( "Location: $url2" );


    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>