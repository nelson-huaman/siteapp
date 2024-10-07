<main class="main">
   <h1 class="main__titulo">Ponte en <?php echo $title; ?></h1>
   <div class="contacto">
      <form action="" class="formulario">
         <fieldset class="formulario__fieldset">
            <div class="formulario__colunm">
               <div class="formulario__row">
                  <label for="nombre" class="formulario__label">Nombres</label>
                  <input
                     type="text" name="nombre" id="nombre"
                     placeholder="Nombres"
                     value=""
                     class="formulario__input"
                  >
               </div>
               <div class="formulario__row">
                  <label for="apellido" class="formulario__label">Apellidos</label>
                  <input
                     type="text" name="apellido" id="apellido"
                     placeholder="Apellidos"
                     value=""
                     class="formulario__input"
                  >
               </div>
            </div>
            <div class="formulario__colunm">
               <div class="formulario__row">
                  <label for="email" class="formulario__label">Correo</label>
                  <input
                     type="text" name="email" id="email"
                     placeholder="Correo"
                     value=""
                     class="formulario__input"
                  >
               </div>
               <div class="formulario__row">
                  <label for="telefono" class="formulario__label">Telefono</label>
                  <input
                     type="tel" name="telefono" id="telefono"
                     placeholder="Telefono"
                     value=""
                     class="formulario__input"
                  >
               </div>
            </div>
            <div class="formulario__row">
               <label for="mensaje" class="formulario__label">Mensaje</label>
               <textarea name="mensaje" id="mensaje" rows="6" class="formulario__input" placeholder="Deja tu mensaje "></textarea>
            </div>
            <input type="submit" class="formulario__submit" value="Enviar Mensaje">
         </fieldset>
      </form>
   </div>
   
</main>