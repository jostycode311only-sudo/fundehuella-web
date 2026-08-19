<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF8">

    <!-- Cambio de Bootstrap 3 a 5, línea obligatoria para mantener el diseño responsivo"-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FundeHuella - Sitio Oficial </title>

    <!-- CSS CAMBIO BOOTSTRAP 5-->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
</html>

<body data-bs-spy="scroll" data-bs-target="#navbarNav">
  <!-- contenido principal -->
  <!-- Barra de navegación Bootstrap 5 -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">

    <!-- LOGO Y NOMBRE -->
    <a class="navbar-brand fw-bold" href="#">Fundación Huella Para El Futuro</a>
    
    <!-- BOTÓN MENÚ PARA MOVILES (CAMBIO A DATA-BS-) -->
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>

    <!-- MENÚ DE NAVEGACIÓN -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nosotros">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#documentos">Documentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sección de Bienvenida :) -->
  <!-- El id="inicio" sirve para que el menú principal salte aquí -->

  <header id="inicio" class="hero-section text-white d-flex align-items-center text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <!-- LOGO -->
          <img src="img/iconfunde.png" alt="Logo Fundehuella" class="img-fluid mb-4 drop-shadow" style="max-height:300px;">
          
          <h1 class="display-3 fw-bold mb-4">Bienvenidos a FundeHuella</h1>
          <p class="lead mb-5 fs-4">Construyendo una sociedad más digna y humana para los niños, niñas, adolecentes y jóvenes.</p>

          <!-- Botones de acción -->
          <a href="#nosotros" class="btn btn-primary btn-jg px-5 py-3 rounded-pill shadow me-3 fw-bold">Conoce Nuestra Labor</a>
          <a href="#contacto" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill shadow fw-bold">Contáctanos</a>
        </div>
      </div>
    </div>
  </header>

  <!-- SECCIÓN NOSOTROS -->
    <section id="nosotros" class="py-5">
        <div class="container my-5">
            <!--Qué hacemos y Por qué lo hacemos -->
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold text-primary display-5 mb-3 text-dark">Quiénes Somos</h2>
                    <p class="lead text-secondary">
                        Fundación Huella para el Futuro es una entidad privada sin ánimo de lucro, creada en el año 2007. Estamos dedicados a desarrollar programas especiales en pro de los sectores más vulnerables de la población, para promover la construcción de una sociedad más digna y más humana.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
              <img src="img/bg-banner.jpg" alt="Banner Funde Huella" class="img-fluid mb-4 drop-shadow" style="max-height:600px;">
            </div>

            <!-- Tarjetas de Misión y Visión -->
            <!-- La clase 'g-4' crea un espacio (gap) uniforme entre las columnas -->
            <div class="row g-4">
                <!-- Tarjeta Misión -->
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm bg-light p-4 rounded-4">
                        <div class="card-body">
                            <h3 class="fw-bold text-primary text-dark mb-3">
                              <i class="bi bi-bullseye me-2"></i>Nuestra Misión
                            </h3>
                            <p class="card-text text-secondary fs-5">
                              Promover el desarrollo social de nuestro país por medio de acciones y programas que propicien el mejoramiento de la calidad de vida de las personas más vulnerables, a través de la administración de recursos privados y públicos nacionales e internacionales con quienes trabajamos en alianza.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Tarjeta Visión -->
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm bg-light p-4 rounded-4">
                        <div class="card-body">
                            <h3 class="fw-bold text-primary text-dark mb-3">
                              <i class="bi bi-eye-fill me-2"></i>Nuestra Visión
                            </h3>
                            <p class="card-text text-secondary fs-5">
                              Posicionarnos como una organización líder en el desarrollo de programas y proyectos innovadores y en la promoción de procesos sostenibles con impacto positivo en la comunidad en los que el individuo sea agente de su propio desarrollo y el cambio social que requiere nuestro país.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Tarjeta del PAE -->
           <div class="row g-4 mt-5">
                <div class="col-md-12">
                    <div class="card h-100 border-0 shadow-sm bg-light p-4 rounded-4">
                        <div class="card-body">
                            <h3 class="fw-bold text-primary mb-3 text-center text-dark">Programa de Alimentación Escolar (PAE)</h3>
                            <p class="card-text text-secondary fs-5">
                              La Fundación Huella para el Futuro, en alianza con la Alcaldía Municipal de Puerto Boyacá, ha implementado el Programa de Alimentación Escolar (PAE) para garantizar que los estudiantes de las instituciones educativas del municipio reciban una alimentación adecuada y nutritiva. Este programa busca mejorar la salud y el rendimiento académico de los niños y jóvenes, contribuyendo así a su desarrollo integral.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container my-5" id="documentos">
  <h2 class="text-center mb-4 fw-bold text-primary text-dark">Documentos Institucionales</h2>
  <p class="text-center text-secondary mb-5">Aquí encontrarás los documentos oficiales de la Fundación Huella Para El Futuro.</p>
  
  <!-- FILA DE BOOTSTRAP - AQUÍ SE ORGANIZA LAS TARJETAS EN COLUMNAS DE MANERA RESPONSIVA -->
  <div class="row">
    <?php
    $directorio = "esal/doc/";

    // VERIFICACIÓN SI LA CARPETA EXISTE O ESTA EN EL SERVIDOR
    if (is_dir($directorio)) {
      // SE ESCANEA LOS ARCHIVOS DENTRO DEL DIRECTORIO.
      $archivos = scandir($directorio);
      
      foreach ($archivos as $archivo) {
        // FILTRO PARA IGNORAR LOS DIRECTORIOS "." Y ".." PARA SOLO ARCHIVOS PDF 
        if ($archivo != "." && $archivo != ".." && strtolower(pathinfo($archivo, PATHINFO_EXTENSION)) == "pdf") {
          // Limpiamos el nombre del archivo para que se vea estético (remplaza guiones/pisos por espacios)
          $nombre_limpio = ucwords(str_replace(['-', '_'], ' ', pathinfo($archivo, PATHINFO_FILENAME)));
      ?>
          <!-- Columna de Bootstrap 5 para cada tarjeta: 1 columna en celular (col-12), 2 en tablets (col-md-6), 3 en escritorios (col-lg-4) -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 bg-light">
              <div class="card-body d-flex flex-column justify-content-between">
                <div>
                  <h5 class="card-title fw-bold text-dark mb-2">
                    <?php echo $nombre_limpio; ?>
                  </h5>
                  <p class="card-text text-muted small">
                    Archivo oficial en formato PDF listo para visualizacicón o descarga.
                  </p>
                </div>
                <a href="<?php echo $directorio . $archivo; ?>" target="_blank" class="btn btn-outline-primary mt-3 w-100">
                    Abrir PDF 
                </a>
              </div>
            </div>
          </div>
      <?php 
          }
        }
    } else {
      echo '<div class="col-12"><p class="text-center text-danger">La carpeta de documentos no está disponible.>/p></div>';
    }
    ?>
    </div>
  </div>

  <!-- Sección contacto y ubicación -->
  <section id="contacto" class="py-5 bg-light">
      <div class="container my-5">
        <div class="text-center mb-5">
          <h2 class="fw-bold text-primary display-5 mb-3 text-dark"> Contacto y Ubicación</h2>
          <p class="text-secondary lead">Comunícate con nuestros equipo de profesionales, estamos listos para atenderte y escucharte.</p>
        </div>

        <div class="row justify-content-center text-center g-4">
          <!-- Ubicación GOOGLE MAPS -->
          <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 shadow-sm h-100">
              <h3 class="fw-bold text-dark mb-3">Ubicación</h3>
              <p class="text-secondary mb-1">Cra 2 # 7 -42 Segundo Piso</p>
              <p class="text-secondary fw-bold mb-4">Puerto Boyacá, Boyacá</p>
              <a href="https://www.google.com/maps/search/?api=1&query=Cra+2+%23+7+-+42+Puerto+Boyaca" target="_blank" class="btn btn-outline-primary rounded-pill px-4 mt-auto">Ver en Google Maps</a>
            </div>
          </div>
        <!--Telefono-->
        <div class="col-md-4">
          <div class="p-4 bg-white rounded-4 shadow-sm h-100">
            <h4 class="fw-bold text-dark mb-3">Teléfonos</h4>
            <p class="text-secondary mb-1">Atención: Diana Katalina Marulanda</p>
            <p class="text-secondary mb-1">320 883 5919</p>
            <a href="tel:+573155689338" class="btn btn-outline-primary rounded-pill px-4 mt-auto">Llamar Ahora</a>
          </div>
      </div>

      <!-- Correo -->
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 d-flex flex-column align-items-center">
          <h4 class="fw-bold text-dark mb-3">Correo Electrónico</h4>
          <p class="text-secondary mb-0">info.fundehuellaboyaca@gmail.com</p>
          
          <!-- Botón para abrir directo el correo -->
          <a href="mailto:fundacionhuella@gmail.org" class="btn btn-outline-primary rounded-pill px-4 mt-auto">Escríbenos un correo</a>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!-- Footer y las redes sociales (Facebook, Instagram y Tik Tok)-->
  <footer class="bg-dark text-white text-center py-4">
    <div class="container text-center text-md-start">
      <div class="row text-center text-md-start">
        <!-- Parte 1 -->
          <div class="col-md4 col-lg-4 col-xl-4 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 fw-bold text-primary">FundeHuella</h5>
            <p class="text-secondary">Estamos dedicados a desarrollar programas especiales en pro de los sectores más vulnerables de la población, para promover la construcción de una sociedad más digna y más humana.</p>
          </div>
        
        <!-- Parte 2 Enlaces rapidos-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 fw-bold text-primary">Enlaces</h5>
          <p><a href="#inicio" class="text-white text-decoration-none">Inicio</a></p>
          <p><a href="#nosotros" class="text-white text-decoration-none">Nosotros</a></p>
          <p><a href="#documentos" class="text-white text-decoration-none">Documentos</a></p>
          <p><a href="#contacto" class="text-white text-decoration-none">Contacto</a></p>
        </div>

        <!-- Parte 3 Redes Sociales -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 fw-bold text-primary">Síguenos</h5>
          <p class="text-secondary">Descubre más de nuestra labor diaria en nuestras redes:</p>
                    
          <!-- Botones de Redes -->
          <div class="d-flex justify-content-center justify-content-md-start gap-3 mt-4">
            <!-- Actualizar cada 3 meses los enlaces -->
            <a href="https://www.facebook.com/Fundehuellapt" class="btn btn-outline-light btn-floating"><i class="bi bi-facebook fs-5"></i></a>
            <a href="https://www.instagram.com/funde_huella/" class="btn btn-outline-light btn-floating"><i class="bi bi-instagram fs-5"></i></a>
            <a href="https://www.tiktok.com/@funde_huellapb?_r=1&_t=ZS-98uLbSGZtP3" class="btn btn-outline-light btn-floating"><i class="bi bi-tiktok fs-5"></i></a>
          </div>
        </div>
      </div>
    </div>
      <p class="mb-0">&copy; 2026 Fundación Huella Para El Futuro. Todos los derechos reservados.</p>
  </footer>
  
  <!-- BOTÓN FLOTANTE DE WHATSAPP -->
    <!-- El enlace incluye el código de Colombia (57) y un mensaje predeterminado -->
    <a href="https://wa.me/573208835919?text=Hola%20Fundehuella,%20me%20gustaría%20obtener%20más%20información." 
       class="whatsapp-btn shadow-lg" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-whatsapp"></i>
    </a>

  <!-- JAVA SCRIPT DE BOOTSTRAP 5 (Va con Popper.js para los menús desplegables) JS nativo -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ZONA DE SCRIPTS PERSONALIZADOS -->
  <!-- <script src="js/main.js"></script> -->
</body>
</html>     