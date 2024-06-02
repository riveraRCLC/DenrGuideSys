<?php

$frametitle = $_POST["frametitle"];
$description = $_POST["description"];
$fileid = $_POST["fileid"];

require_once "dbh.inc.php";

$targetDirImages = "../storage/images/";
$targetDirVideos = "../storage/videos/";
$targetDirPPT = "../storage/ppt/";

$fileName = basename($_FILES["media"]["name"]);
$targetFileImage = $targetDirImages . $fileName;
$targetFileVideo = $targetDirVideos . $fileName;
$targetFilePPT = $targetDirPPT . $fileName;

$fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

// Determine the target directory based on the file type
if (in_array($fileType, ["jpg", "jpeg", "png", "gif"])) {
    $targetFile = $targetFileImage;
} elseif (in_array($fileType, ["mp4", "avi", "mov"])) {
    $targetFile = $targetFileVideo;
} elseif (in_array($fileType, ["ppt", "pptx"])) {
    $targetFile = $targetFilePPT;
} else {
    echo "Error: Unsupported file type.";
    exit;
}

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["media"]["tmp_name"], $targetFile)) {
    // Prepare the SQL query
    $query = "INSERT INTO frame (frametitle, description, fileid, file_path) VALUES (?, ?, ?, ?);";
    $stmt = $pdo->prepare($query);

    // Execute the query
    if ($stmt->execute([$frametitle, $description, $fileid, $targetFile])) {
        echo "The file " . htmlspecialchars($fileName) . " has been uploaded and data saved.";
    } else {
        echo "Error: Could not save data to database.";
    }
} else {
    echo "Error: There was an error uploading your file.";
}
?>