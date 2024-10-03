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

<?php include __DIR__ . '/portada.php'; ?>
