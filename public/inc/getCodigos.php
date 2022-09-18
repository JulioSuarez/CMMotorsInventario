<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["campo"];

$sql = "SELECT ci, nombre FROM clientes WHERE ci LIKE ? ORDER BY ci ASC";
$query = $pdo->prepare($sql);
$query->execute([$campo . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	// $html .= "<li onclick=\"mostrar('" . $row["ci"] . "')\">" . $row["ci"] . " - " . $row["nombre"] . " " . $row["apellido"] .  " - " . $row["nit"] . " - " . $row["nit"] . $row["telefono"] ."</li>";
	$html .= "<li>" . $row["ci"] . " - " . $row["nombre"] . "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
