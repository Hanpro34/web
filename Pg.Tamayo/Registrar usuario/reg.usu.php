<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUTO PREMIUM - Registro</title>
  <link rel="stylesheet" href="reg.usu.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <h1>AUTO PREMIUM</h1>
      <p>Agencia de autos</p>
    </div>
    <form class="login-form" action="pro_registro.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="apellidos">Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" required>

      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>

      <button type="submit">Registrarse</button>
    </form>
    <p class="registro">¿Ya tienes cuenta? <a href="../inicio de sesion/in.sesion.php">Inicia sesión aquí</a></p>
  </div>
</body>
</html>
