<?php
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Archivo donde se guardan los usuarios registrados
$archivo_usuarios = '../Registrar usuario/data/usuarios.json';

// Validar credenciales
$credencial_valida = false;

if (file_exists($archivo_usuarios)) {
    $contenido = file_get_contents($archivo_usuarios);
    $usuarios = json_decode($contenido, true);
    
    if (is_array($usuarios)) {
        // Buscar usuario por correo o nombre
        foreach ($usuarios as $user) {
            if (($user['correo'] === $usuario || $user['nombre'] === $usuario) && $user['contrasena'] === $contrasena) {
                $credencial_valida = true;
                break;
            }
        }
    }
}

if ($credencial_valida) {
  echo "<h2 style='color:lime;'>Bienvenido</h2>";
} else {
  echo "<h2 style='color:red;'>Credenciales incorrectas</h2>";
}
?>
