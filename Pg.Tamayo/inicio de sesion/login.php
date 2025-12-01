<?php
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Archivo donde se guardan los usuarios registrados (en la raíz de Pg.Tamayo)
$archivo_usuarios = dirname(dirname(__FILE__)) . '/usuarios_data/usuarios.txt';

// Validar credenciales
$credencial_valida = false;

if (file_exists($archivo_usuarios)) {
    $lineas = file($archivo_usuarios, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    if ($lineas) {
        foreach ($lineas as $linea) {
            $datos = explode('|', $linea);
            if (count($datos) == 4) {
                $nombre_guardado = trim($datos[0]);
                $correo_guardado = trim($datos[2]);
                $contrasena_guardada = trim($datos[3]);
                
                // Validar por nombre o correo
                if (($usuario === $nombre_guardado || $usuario === $correo_guardado) && $contrasena === $contrasena_guardada) {
                    $credencial_valida = true;
                    break;
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado del login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.7);
      font-family: 'Segoe UI', sans-serif;
    }
    
    .modal {
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
      text-align: center;
      min-width: 300px;
    }
    
    .modal h2 {
      margin: 0 0 20px 0;
      font-size: 24px;
    }
    
    .modal.success h2 {
      color: #28a745;
    }
    
    .modal.error h2 {
      color: #dc3545;
    }
    
    .modal p {
      margin: 0;
      color: #666;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="modal <?php echo $credencial_valida ? 'success' : 'error'; ?>">
    <h2><?php echo $credencial_valida ? '✓ Bienvenido' : '✗ Credenciales incorrectas'; ?></h2>
    <p><?php echo $credencial_valida ? 'Redirigiendo al catálogo...' : 'Usuario o contraseña incorrectos. Intenta de nuevo.'; ?></p>
  </div>
  
  <script>
    <?php if ($credencial_valida): ?>
      setTimeout(function() {
        window.location.href = '../catalogo/catalogo.php';
      }, 2000);
    <?php else: ?>
      setTimeout(function() {
        window.location.href = 'in.sesion.php';
      }, 3000);
    <?php endif; ?>
  </script>
</body>
</html>
