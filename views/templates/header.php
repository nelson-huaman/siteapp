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
                  <i class="fas fa-times" aria-hidden="true"></i>
               </button>
            </li>
            <li class="header__item">
               <a href="/" class="header__enlace">Inicio</a>
            </li>
            <li class="header__item">
               <a href="acerca-de" class="header__enlace">Acerca De</a>
            </li>
            <li class="header__item">
               <a href="/proyectos" class="header__enlace">Proyectos</a>
            </li>
            <li class="header__item">
               <a href="/servicios" class="header__enlace">Servicios</a>
            </li>
            <li class="header__item">
               <a href="/blog" class="header__enlace">Blog</a>
            </li>
            <li class="header__item">
               <a href="/contacto" class="header__enlace">Contacto</a>
            </li>
            <li class="header__redes">
               Facebook
            </li>
         </ul>
         <button class="header__buscar">
            <i class="fas fa-search fa-lg"></i>
         </button>
         
         <button class="header__open"  aria-label="Open Mobile Menu">
            <i class="fas fa-bars" aria-hidden="true"></i>
         </button>
      </nav>
   </div>
   <form class="header__form-buscar">
      <div class="header__form-buscar--div">
         <input type="search" placeholder="Buscar" class="header__form-buscar--input">
         <button aria-label="Buscar" type="submit" class="header__form-buscar--submit">
            <i class="fas fa-search fa-2x" aria-hidden="true"></i>  
         </button>
      </div>
   </form>
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
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://facebook.com/C%C3%B3digo-Con-Juan-103341632130628">
                        <span class="menu-redes__ocultar">Facebook</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://twitter.com/codigoconjuan">
                        <span class="menu-redes__ocultar">Twitter</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://youtube.com/codigoconjuan">
                        <span class="menu-redes__ocultar">YouTube</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://instagram.com/codigoconjuan">
                        <span class="menu-redes__ocultar">Instagram</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://tiktok.com/@codigoconjuan">
                        <span class="menu-redes__ocultar">Tiktok</span>
                     </a>
                     <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://github.com/codigoconjuan">
                        <span class="menu-redes__ocultar">Github</span>
                     </a>
                  </nav>
               </div>
            </div>
            <div class="portada__imagen">
               <img src="/build/img/foto.webp" alt="" class="portada__foto">
            </div>
         </div>
      </div>
   </section>
<?php } else { ?>
   <section class="page-name">
      <div class="page-name__contenedor">
         <h1 class="page-name__titulo"><?php echo $page_titulo; ?></h1>
      </div>
   </section>
<?php } ?>