<!DOCTYPE html>
<html lang="es_mx">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUTO PREMIUM - Inicio de Sesión</title>
  <link rel="stylesheet" href="in.sesion.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="./img/logo.png" alt="Logo de AUTO PREMIUM" id="logo-img">
    </div>
    <form class="login-form" action="login.php" method="POST">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario" required>

      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>

      <button type="submit">Iniciar Sesión</button>
    </form>
    <p class="registro">¿No tienes cuenta? <a href="../Registrar usuario/reg.usu.php">Registrate aquí</a></p>
  </div>
</body>
</html>
