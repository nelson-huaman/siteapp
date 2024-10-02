<aside class="sidebar" id="sidebar">
   <nav class="sidebar__nav" id="menu">
      <div class="sidebar__header">
         <div class="sidebar__logo">
            <a href="/admin/dashboard">
               <img src="/build/img/logo.svg" alt="Logo Acis" class="menu__logo">
            </a>
            <button class="menu__close">
               <i class="fa-solid fa-xmark"></i>
            </button>
         </div>
         <div class="sidebar__user">
            <div class="sidebar__user--avatar">NH</div>
            <div class="sidebar__user--nombre">Nelson Huaman <span>Administrador</span></div>
         </div>
      </div>
      <ul class="sidebar__menu menu">
         <li class="menu__item <?php echo paginaActual('dashboard') ? 'menu__activo' : ''; ?>">
            <a href="/admin/dashboard" class="menu__enlace">
               <i class="fa-solid fa-house"></i>
               <span class="menu__nombre">Escritorio</span>
            </a>
         </li>
         <li class="menu__item <?php echo paginaActual('proyectos') ? 'menu__activo' : ''; ?>">
            <a href="/admin/proyectos" class="menu__enlace">
               <i class="fa-solid fa-house"></i>
               <span class="menu__nombre">Proyectos</span>
            </a>
         </li>
         <li class="menu__item <?php echo paginaActual('asesores') ? 'menu__activo' : ''; ?>">
            <div class="menu__enlace menu__icono">
               <i class="fa-solid fa-user-tie"></i>
               <span class="menu__nombre">Blog</span>
            </div>
            <ul class="menu__submenu">
               <li class="menu__item--sub">
                  <a href="/admin/asesores" class="menu__enlace">
                     <i class="fa-solid fa-caret-right"></i>
                     <span class="menu__nombre">Blogs</span>
                  </a>
               </li>
               <li class="menu__item--sub">
                  <a href="/admin/asesores/roles" class="menu__enlace">
                     <i class="fa-solid fa-caret-right"></i>
                     <span class="menu__nombre">Categorías</span>
                  </a>
               </li>
            </ul>
         </li>
         <li class="menu__item">
            <a href="/admin/dashboard" class="menu__enlace">
               <i class="fa-solid fa-cart-shopping"></i>
               <span class="menu__nombre">Notificación</span>
            </a>
         </li>
         <li class="menu__item">
            <a href="/admin/dashboard" class="menu__enlace">
               <i class="fa-solid fa-house"></i>
               <span class="menu__nombre">Documentación</span>
            </a>
         </li>
      </ul>
      <div class="sidebar__footer">
         <a href="/" class="sidebar__enlace" target="_blank">
            <i class="fa-solid fa-share-from-square"></i>
            Web
         </a>
         <a href="/salir" class="sidebar__enlace">
            <i class="fa-solid fa-right-from-bracket"></i>
            Salir
         </a>
      </div>
   </nav>
</aside>