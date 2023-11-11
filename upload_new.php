<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['resume'])) {
    $target_dir = "uploads/"; // Directory where files will be saved
    $target_file = $target_dir . basename($_FILES['resume']['name']);
    $uploadOk = 1;
    $resumeFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($resumeFileType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES['resume']['name'])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload your resume</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  Select your resume to upload (PDF only):
  <input type="file" name="resume" id="resume">
  <input type="submit" value="Upload Resume" name="submit">
</form>
</body>
</html>
