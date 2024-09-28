<header class="header" id="header">
   <div class="header__contenedor">
      <a href="/">
         <img class="header__logo" src="/build/img/logo.svg" alt="logo Nelson">
      </a>
      <nav class="header__nav">
         <ul class="header__menu">
            <li class="header__mobil">
               <img class="header__logo" src="/build/img/logo.svg" alt="Logo Nelson">
               <button class="header__close" aria-label="Close Mobile Menu">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </li>
            <li class="header__item">
               <a href="/" class="header__enlace">Inicio</a>
            </li>
            <li class="header__item">
               <a href="/acerca-de" class="header__enlace <?php echo paginaActual('acerca-de') ? 'header__activo' : ''; ?>">Acerca De</a>
            </li>
            <li class="header__item">
               <a href="/proyectos" class="header__enlace <?php echo paginaActual('proyectos') ? 'header__activo' : ''; ?>">Proyectos</a>
            </li>
            <li class="header__item">
               <a href="/blogs" class="header__enlace <?php echo paginaActual('blogs') ? 'header__activo' : ''; ?>">Blog</a>
            </li>
            <li class="header__item">
               <a href="/contacto" class="header__enlace <?php echo paginaActual('contacto') ? 'header__activo' : ''; ?>">Contacto</a>
            </li>
            <li class="header__redes">
               Facebook
            </li>
         </ul>
         <button class="header__open"  aria-label="Open Mobile Menu">
            <i class="fa-solid fa-bars"></i>
         </button>
      </nav>
   </div>
</header>

<?php if($header) { ?>
   <section class="portada">
      <div class="portada__contenedor">
         <div class="portada__grid">
            <div class="portada__informacion">
               <span class="portada__span">Hola soy</span>
               <h1 class="portada__nombre">
                  Nelson
                  <span class="portada__nombre--color">Huamán H.</span>
               </h1>
               <p class="portada__texto">¡Un desarrollador web apasionado de Lima, Perú!</p>
               <div class="portada__contacto">
                  <a href="#" class="portada__boton">
                     <i class="fa-brands fa-whatsapp"></i>
                     Contáctame
                  </a>
                  <nav class="menu-redes">
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://facebook.com/">
                        <span class="menu-redes__ocultar">Facebook</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://twitter.com/">
                        <span class="menu-redes__ocultar">Twitter</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://youtube.com/">
                        <span class="menu-redes__ocultar">YouTube</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://instagram.com/">
                        <span class="menu-redes__ocultar">Instagram</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://tiktok.com/">
                        <span class="menu-redes__ocultar">Tiktok</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://github.com/">
                        <span class="menu-redes__ocultar">Github</span>
                     </a>
                  </nav>
               </div>
            </div>
            <div class="portada__imagen">
               <picture>
                  <source srcset="/build/img/foto.webp" type="image/webp">
                  <source srcset="/build/img/foto.avif" type="image/avif">
                  <source srcset="/build/img/foto.png" type="image/png">
                  <img class="portada__foto" loading="lazy" width="200" height="300" src="/build/img/foto.png" alt="Imagen Ponente">
               </picture>
            </div>
         </div>
      </div>
   </section>
   <?php return; ?>
<?php } ?>
<section class="page-name">
   <div class="page-name__contenedor">
      <h1 class="page-name__titulo"><?php echo $page_titulo; ?></h1>
   </div>
</section>
