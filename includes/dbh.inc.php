<?php
$dsn = "mysql:host=localhost;dbname=clientguide";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed:" . $e->getMessage();
}

// Fetch data from the database
$stmt = $pdo->prepare("SELECT * FROM your_table");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return data as JSON
echo json_encode($data);