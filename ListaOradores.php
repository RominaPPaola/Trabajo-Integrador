<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!--mi hoja de estilos-->
  <link rel="stylesheet" href="tp.integrador.css">
  <title>TP Integrador</title>
</head>
<body>
  <nav class="navbar bg-body-tertiary: " style="background-color: #3b454d;">
    <div class="container-fluid"><!--barra griz de navegacion-->
      <a class="navbar-brand" href="tp.integrador.php">
        <img src="img/codoacodo.png" alt="Logo" width="120" height="80" class="d-inline-block align-text">
        Conf Bs As
      </a>
      <div class="boton">
        <button type="button" class="btn b1">La conferencia</button>
        <a href="ListaOradores.php" type="button" class="btn b2">Los oradores</a>
        <button type="button" class="btn b3">El lugar y la fecha</button>
        <a href="indexintegr.html" type="button" class="btn b5">Comprar tickets</a>
      </div>
    </div>
  </nav>

<?php
// Crear conexión
$conn = new mysqli("localhost", "root", "", "integrador_cac");

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL 
$sql = "SELECT * FROM oradores";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
  // Obtener encabezados de columna
  $columnas = $result->fetch_assoc();

  // Convertir a mayúsculas solo la primera fila de encabezados
  $columnas = array_map('strtoupper', array_keys($columnas));

  // Mostrar los datos en una tabla dinámica con estilo
  echo "<h2><center>Listado de ORADORES suscriptos:</center></h2>";
  echo "<table border='1' style='border-collapse: collapse; width: 100%; background-color: #B5B2B2;'>";

  // Imprimir encabezados de columna
  echo "<tr>";
  foreach ($columnas as $column) {
      echo "<th style='padding: 10px; text-align: center; border-right: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF;'>$column</th>";
  }
  echo "</tr>";

  // Restablecer el puntero de resultados a la primera fila
  $result->data_seek(0);

  // Imprimir filas de datos
  while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      foreach ($row as $value) {
          echo "<td style='padding: 10px; text-align: center; border-right: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF;'>$value</td>";
      }
      echo "</tr>";
  }

  echo "</table>";
} else {
  echo "<br><br><br><br><h2><center>No se encontraron ORADORES suscriptos a la fecha.<center></h2>";
}

// Cerrar la conexión
$conn->close();
?>

</body>