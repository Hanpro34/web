<?php
$nombre = $_POST['nombre'] ?? '';
$apellidos = $_POST['apellidos'] ?? '';
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar que los campos no estén vacíos
if (empty($nombre) || empty($apellidos) || empty($correo) || empty($contrasena)) {
    echo "Error: Todos los campos son requeridos.";
    exit();
}

// Carpeta de datos en la raíz de Pg.Tamayo
$carpeta_datos = __DIR__ . '/../usuarios_data';

// Crear carpeta si no existe
if (!is_dir($carpeta_datos)) {
    if (!@mkdir($carpeta_datos, 0777, true)) {
        echo "Error: No se pudo crear la carpeta de datos.";
        exit();
    }
}

// Archivo para guardar usuarios
$archivo_usuarios = $carpeta_datos . '/usuarios.txt';

// Crear un registro del usuario (separado por |)
$usuario_registro = $nombre . "|" . $apellidos . "|" . $correo . "|" . $contrasena . "\n";

// Guardar el registro
if (@file_put_contents($archivo_usuarios, $usuario_registro, FILE_APPEND) !== false) {
    @chmod($archivo_usuarios, 0666);
    // Registro guardado exitosamente, redirigir a catálogo
    header("Location: ../catalogo/catalogo.php");
    exit();
} else {
    echo "Error al guardar el registro. Por favor, intenta de nuevo.";
    exit();
}
?>
