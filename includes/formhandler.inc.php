<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['media']) && $_FILES['media']['error'] == UPLOAD_ERR_OK) {
        $frametitle = $_POST["frametitle"];
        $description = $_POST["description"];
        $fileid = $_POST["fileid"];

        require_once "dbh.inc.php";

        $targetDirImages = "../storage/images/";
        $targetDirVideos = "../storage/videos/";
        $targetDirPPT = "../storage/ppt/";

        $fileName = basename($_FILES["media"]["name"]);
        $fileTmpName = $_FILES["media"]["tmp_name"];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Determine the target directory based on the file type
        if (in_array($fileType, ["jpg", "jpeg", "png", "gif"])) {
            $targetDir = $targetDirImages;
        } elseif (in_array($fileType, ["mp4", "avi", "mov"])) {
            $targetDir = $targetDirVideos;
        } elseif (in_array($fileType, ["ppt", "pptx"])) {
            $targetDir = $targetDirPPT;
        } else {
            echo "Error: Unsupported file type.";
            exit;
        }

        $targetFile = $targetDir . $fileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpName, $targetFile)) {
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
    } else {
        echo "Error: File upload error.";
    }
} else {
    echo "Invalid request.";
}
?>