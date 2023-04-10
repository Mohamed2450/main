<?php
// Make sure the captured data exists
if (isset($_FILES["files"]) && !empty($_FILES["files"])) {
    // Upload destination directory
    $upload_destination = "uploads/";
    // Iterate all the files and move the temporary file to the new directory
    for ($i = 0; $i < count($_FILES["files"]["tmp_name"]); $i++) {
        // Add your validation here
        $file = $upload_destination . $_FILES["files"]["name"][$i];
        // Move temporary files to new specified location
        move_uploaded_file($_FILES["files"]["tmp_name"][$i], $file);
    }
    // Output response
    echo "Upload Complete!";
}
/*
// Implementing Validation
// File Size
if ($_FILES['files']['size'][$i] > 200000) {
	exit('Please upload a file less than 200KB!');
}
// Restrict the files to Images only
if (getimagesize($_FILES['files']['tmp_name'][$i]) === FALSE) {
	exit('Unsupported format! Please upload an image file!');
}
*/
?>
