<?php
require_once 'pdoconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$stmt2 = $conn->query("SELECT * FROM empleado WHERE empleado.NUM_EMPLEADO = 1");
$rowsequipo = $stmt2->fetchAll(PDO::FETCH_ASSOC);

print_r( $rowsequipo);

echo $rowsequipo['CONTRASE�A'];

if($rowsequipo['AP_PATERNO']=="Lopez"){
  echo "Si señol";
}else {
  echo "Nel pastel";
}
?>
