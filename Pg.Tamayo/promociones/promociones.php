<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUTO PREMIUM - Promociones</title>
  <link rel="stylesheet" href="promociones.css">
</head>
<body>
  <header class="header">
    <nav class="nav-bar">
      <div class="nav-left">
        <button onclick="location.href='../catalogo/catalogo.php'">Catálogo</button>
      </div>
      <div class="nav-right">
        <div class="dropdown">
          <button class="dropdown-btn">Acerca de nosotros ▼</button>
          <div class="dropdown-content">
            <a href="mailto:contacto@autopremium.com">📧 Correo</a>
            <a href="https://facebook.com/autopremium" target="_blank">📘 Facebook</a>
            <a href="https://wa.me/1234567890" target="_blank">💬 WhatsApp</a>
          </div>
        </div>
        <button onclick="location.href='../inicio de sesion/in.sesion.php'">Cerrar Sesión</button>
      </div>
    </nav>
    <h1>Agencia Auto Premium</h1>
    <h2 class="slogan">¡Promociones exclusivas para ti!</h2>
  </header>

  <section class="promociones">
    <div class="promo-card">
      <img src="./img/b3s.png" alt="BMW Serie 3">
      <h3>BMW Serie 3</h3>
      <p>20% de descuento en la versión Sport. Elegancia y rendimiento a un precio especial.</p>
      <button>Ver más</button>
    </div>

    <div class="promo-card">
      <img src="./img/sp.png" alt="SUV de lujo">
      <h3>SUV Premium</h3>
      <p>Plan de financiamiento a 36 meses sin intereses. Potencia y espacio para tu familia.</p>
      <button>Ver más</button>
    </div>

    <div class="promo-card">
      <img src="./img/g80.png" alt="Genesis G80">
      <h3>Genesis G80</h3>
      <p>Bono de $50,000 MXN en la compra de tu sedán de lujo. Confort y tecnología avanzada.</p>
      <button>Ver más</button>
    </div>
  </section>

  <footer class="footer">
    <p>Derechos Reservados 2023 | MX | Universidad Politécnica de Gómez Palacio</p>
  </footer>
</body>
</html>
