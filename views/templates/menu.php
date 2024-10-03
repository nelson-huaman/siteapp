<ul class="menu" id="menu">
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