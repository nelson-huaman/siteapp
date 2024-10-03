(function() {
   const sidebar = document.querySelector('#sidebar');
   if(sidebar) {
      
      const openMenu = document.querySelector('.menu-open-mobil');
      const openMenuPC = document.querySelector('.menu-open');
      const closeMenu = document.querySelector('.sidebar__close');
      const divClose = document.querySelector('.sidebar__div');
      const showMenu = 'sidebar__show';
      const noTransition = 'no-transition';
      let resize;
      
      openMenu.addEventListener('click', () => sidebar.classList.add(showMenu));
      openMenuPC.addEventListener('click', () => sidebar.classList.toggle(showMenu));
      closeMenu.addEventListener('click', () => sidebar.classList.remove(showMenu));
      divClose.addEventListener('click', () => sidebar.classList.remove(showMenu));

      window.addEventListener("resize", () => {
         sidebar.querySelectorAll("*").forEach(function(el) {
            el.classList.add(noTransition)
         })
         clearInterval(resize)
         resize = setTimeout(resizingComplete, 500)
      });

      function resizingComplete() {
         sidebar.querySelectorAll("*").forEach(function(el) {
            el.classList.remove(noTransition)
         });
      }
   }
})();