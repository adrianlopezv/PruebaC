<?php
require_once"pdo.php";

$stmt2 = $pdo->query("SELECT * FROM empleado WHERE empleado.NUM_EMPLEADO = 1");
$rowsequipo = $stmt2->fetch(PDO::FETCH_ASSOC);

print_r( $rowsequipo);

echo("\n");
echo ("Aqui esta la contra: ".$rowsequipo['CONTRASENA']);

if($rowsequipo['CONTRASENA']=="IngBio"){
  echo "Si señol";
}else {
  echo "Nel pastel";
}
