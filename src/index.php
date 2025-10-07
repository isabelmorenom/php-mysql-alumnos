<?php
require_once 'conexion.php';
$result = $conn->query("SELECT * FROM alumnos");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Listado de Alumnos</title>
  <style>
    body { font-family: Arial; margin: 30px; }
    table { border-collapse: collapse; width: 60%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #f0f0f0; }
  </style>
</head>
<body>
  <h1>📘 Listado de Alumnos</h1>
  <?php if ($result && $result->num_rows > 0): ?>
    <table>
      <tr><th>ID</th><th>Nombre</th><th>Email</th></tr>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['nombre'] ?></td>
          <td><?= $row['email'] ?></td>
        </tr>
      <?php endwhile; ?>
    </table>
  <?php else: ?>
    <p>No hay alumnos en la base de datos.</p>
  <?php endif; ?>
</body>
</html>
