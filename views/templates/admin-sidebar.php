<aside class="sidebar" id="sidebar">
   <div class="sidebar__div"></div>
   <nav class="sidebar__nav">
      <div class="sidebar__header">
         <div class="sidebar__logo">
            <a href="/admin/dashboard">
               <img src="/build/img/logo.svg" alt="Logo Nelson" class="menu__logo" width="1280" height="720">
            </a>
            <button class="sidebar__close">
               <i class="fa-solid fa-xmark"></i>
            </button>
         </div>
         <div class="sidebar__user">
            <div class="sidebar__user--avatar">NH</div>
            <div class="sidebar__user--nombre">Nelson Huaman <span>Administrador</span></div>
         </div>
      </div>
      <div class="sidebar__menu">
         <?php include __DIR__ . '/menu.php'; ?>
      </div>
      <div class="sidebar__footer">
         <a href="/" class="sidebar__enlace" target="_blank">
            <i class="fa-solid fa-share-from-square"></i> Web
         </a>
         <a href="/salir" class="sidebar__enlace">
            <i class="fa-solid fa-right-from-bracket"></i> Salir
         </a>
      </div>
   </nav>
</aside>