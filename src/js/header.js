(function() {
   
   const header = document.querySelector('#header')
   if(header) {

      const openMenu = document.querySelector(".header__open")
      const closeMenu = document.querySelector(".header__close")
      const navegacion = document.querySelector(".header__nav")
      const toggleSearchForm = document.querySelector(".header__buscar")
      const buscarForm = document.querySelector(".header__form-buscar")
      
      const isVisible = "header__form-buscar--visible"
      const showMenu = "header__show"
      const noTransition = "no-transition"
      let resize;
      
      openMenu.addEventListener("click", () => {
         navegacion.classList.add(showMenu)
      })

      closeMenu.addEventListener("click", () => {
         navegacion.classList.remove(showMenu)
      })

      toggleSearchForm.addEventListener("click", () => {
         buscarForm.classList.re(isVisible)
      })

      window.addEventListener("resize", () => {
         header.querySelectorAll("*").forEach(function(el) {
            el.classList.add(noTransition)
         })
         clearInterval(resize)
         resize = setTimeout(resizingComplete, 500)
      })

      function resizingComplete() {
         header.querySelectorAll("*").forEach(function(el) {
            el.classList.remove(noTransition)
         })
      }
   }
})();