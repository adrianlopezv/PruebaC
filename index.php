<?php
require_once 'pdoconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$stmt2 = $conn->query("SELECT * FROM empleado");
$rowsequipo = $stmt2->fetchAll(PDO::FETCH_ASSOC);

print_r( $rowsequipo);
?>