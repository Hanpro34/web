<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agencia Auto Premium - Catálogo</title>
  <link rel="stylesheet" href="catalogo.css">
</head>
<body>
  <header class="header">
    <nav class="nav-bar">
      <div class="nav-left">
        <button onclick="location.href='../promociones/promociones.php'">Promociones</button>
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
    <h2 class="slogan">Más que un auto, un estilo de vida</h2>
  </header>

  <section class="poster-carousel">
    <div class="poster-slide active">
      <img src="./img/posters/1.png" alt="Mercedes-Benz">
    </div>
    <div class="poster-slide">
      <img src="./img/posters/2.png" alt="BMW Serie 3">
    </div>
    <div class="poster-slide">
      <img src="./img/posters/3.png" alt="SUV de lujo">
    </div>
    <div class="poster-slide">
      <img src="./img/posters/4.png" alt="Genesis G80">
    </div>
    <div class="poster-controls">
      <button onclick="prevPoster()">❮</button>
      <button onclick="nextPoster()">❯</button>
    </div>
  </section>

  <section class="descripcion">
    <div class="auto">
      <img src="./img/carros_catalogo/bmw.png" class="bmw">
      <div class="auto-content">
        <h3>BMW Serie 3</h3>
        <p>El BMW Serie 3 es una berlina deportiva premium que combina elegancia, tecnología avanzada y un rendimiento dinámico excepcional.</p>
      </div>
    </div>
    <div class="auto">
      <img src="./img/carros_catalogo/suv.png" alt="">
      <div class="auto-content">
        <h3>SUV Premium</h3>
        <p>Espacioso y potente. Tiene versiones (gasolina, híbrida y eléctrica) de hasta 625 hp. Ofrece tracción integral, pantalla curva, asistencias de manejo y acabados premium.</p>
      </div>
    </div>
    <div class="auto">
      <img src="./img/carros_catalogo/d,cost.png" alt="">
      <div class="auto-content">
        <h3>Convertible de Lujo</h3>
        <p>Elegante y potente, captado en una carretera costera al atardecer. Transmite lujo, velocidad y libertad.</p>
      </div>
    </div>
    <div class="auto">
      <img src="./img/carros_catalogo/genesis.png" alt="">
      <div class="auto-content">
        <h3>Genesis G80</h3>
        <p>El G80 es un sedán de lujo de tamaño completo que combina diseño elegante, tecnología avanzada y confort premium.</p>
      </div>
    </div>
  </section>

  <footer class="footer">
    <p>Derechos Reservados 2025 | MX | Universidad Politécnica de Gómez Palacio</p>
  </footer>

  <script>
    let currentPoster = 0;
    const posters = document.querySelectorAll('.poster-slide');

    function showPoster(index) {
      posters.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
    }

    function nextPoster() {
      currentPoster = (currentPoster + 1) % posters.length;
      showPoster(currentPoster);
    }

    function prevPoster() {
      currentPoster = (currentPoster - 1 + posters.length) % posters.length;
      showPoster(currentPoster);
    }
  </script>
</body>
</html>
