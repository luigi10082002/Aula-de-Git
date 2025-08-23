<?php
require 'config.php';

$sql = "SELECT Id_Cliente, Nome, Endereco, Cidade, Telefone FROM Clientes";
$stmt = $conn->query($sql);

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset='UTF-8'>
<title>Lista de Clientes</title>
<style>
    body { font-family: Arial, sans-serif; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #007BFF; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
    tr:nth-child(odd) { background-color: #ffffff; }
</style>
</head>
<body>
<h2>Lista de Clientes</h2>";

    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Telefone</th>
          </tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['Id_Cliente']}</td>
                <td>{$row['Nome']}</td>
                <td>{$row['Endereco']}</td>
                <td>{$row['Cidade']}</td>
                <td>{$row['Telefone']}</td>
              </tr>";
    }
    echo "</table>";

echo "</body></html>";
?>
