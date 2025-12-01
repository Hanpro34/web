<?php
$nombre = $_POST['nombre'] ?? '';
$apellidos = $_POST['apellidos'] ?? '';
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Crear carpeta data si no existe
$carpeta_data = __DIR__ . '/data';
if (!is_dir($carpeta_data)) {
    mkdir($carpeta_data, 0777, true);
}

// Archivo para guardar usuarios registrados
$archivo_usuarios = $carpeta_data . '/usuarios.json';

// Leer usuarios existentes
$usuarios = [];
if (file_exists($archivo_usuarios)) {
    $contenido = file_get_contents($archivo_usuarios);
    $usuarios = json_decode($contenido, true) ?? [];
}

// Crear nuevo usuario
$nuevo_usuario = [
    'nombre' => $nombre,
    'apellidos' => $apellidos,
    'correo' => $correo,
    'contrasena' => $contrasena
];

// Agregar el nuevo usuario
$usuarios[] = $nuevo_usuario;

// Guardar en archivo
$resultado = file_put_contents($archivo_usuarios, json_encode($usuarios, JSON_PRETTY_PRINT));

if ($resultado === false) {
    echo "Error al guardar el registro";
    exit();
}

// Redirigir a la página de inicio de sesión
header("Location: ../inicio%20de%20sesion/in.sesion.php");
exit();
?>
