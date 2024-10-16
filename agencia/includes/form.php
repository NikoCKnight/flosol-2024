<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grupo_flosol";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $modelo = $conn->real_escape_string($_POST['model']);
    $anio = $conn->real_escape_string($_POST['year']);
    $mensaje = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO form_agencia (nombre, email, modelo, año, mensaje, fecha)
            VALUES ('$nombre', '$email', '$modelo', '$anio', '$mensaje', NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='text-success'>Cotización enviada con éxito.</p>";
    } else {
        echo "<p class='text-danger'>Error: " . $conn->error . "</p>";
    }
    $conn->close();
}
if (!isset($modelos)) {
    $modelos = ["Modelos no disponibles"];
}
?>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 class="text-center py-4">Solicita Una Cotización</h2>
      <form action="" method="POST">
        <div class="form-group row">
          <div class="col-md-6 mb-3">
            <label for="name">Nombre *</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="email">E-Mail *</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6 mb-3">
            <label for="model">Modelo *</label>
            <select class="form-control" id="model" name="model" required>
              <option value="" disabled selected>Selecciona un modelo</option>
              <?php
              foreach ($modelos as $modelo) {
                  echo "<option value='" . strtolower($modelo) . "'>$modelo</option>";
              }
              ?>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label for="year">Año *</label>
            <select class="form-control" id="year" name="year" required>
              <option value="" disabled selected>Selecciona un año</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="message">Tu Mensaje</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Escribe tu mensaje aquí"></textarea>
        </div>
        <div class="text-center pt-4">
          <button type="submit" class="btn btn-custom">Enviar Tu Mensaje</button>
        </div>
      </form>
    </div>
  </div>