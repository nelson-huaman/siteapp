<aside class="sidebar" id="sidebar">
   <div class="sidebar__div"></div>
   <div class="sidebar__nav">
      <div class="sidebar__header">
         <div class="sidebar__head">
            <a href="#">
               <img class="sidebar__logo" src="/build/img/logo.svg" alt="Logo Acis" width="1280" height="720">
            </a>
            <button class="sidebar__close"><i class="fa-solid fa-xmark"></i></button>
         </div>
         <div class="sidebar__user">
            <div class="sidebar__user--avatar">
               <?php echo substr($_SESSION['nombre'], 0 , 1) . substr($_SESSION['apellido'], 0, 1); ?>
            </div>
            <div class="sidebar__user--nombre"><?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?> <span>Administrador</span></div>
         </div>
      </div>
      <div class="sidebar__menu">
         <?php include __DIR__ . '/menu.php'; ?>
      </div>
      <div class="sidebar__footer">
         <a href="/" class="sidebar__enlace" target="_blank"><i class="fa-solid fa-share-from-square"></i> Web</a>
         <form action="/salir" method="post">
            <button class="sidebar__enlace" type="submit">Salir <i class="fa-solid fa-right-from-bracket"></i></button>
         </form>
      </div>
   </div>
</aside>
