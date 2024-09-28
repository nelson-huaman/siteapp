<main class="login">
   <?php require_once __DIR__ . '/../templates/alertas.php'; ?>
   <form action="/login" method="post" class="formulario">
      <fieldset class="formulario__fieldset">
         <div class="formulario__row">
               <label for="email" class="formulario__label">Correo</label>
               <input
                  type="email" name="email" id="email"
                  placeholder="Correo"
                  value=""
                  class="formulario__input"
               >
            </div>
            <div class="formulario__row">
               <label for="password" class="formulario__label">Contraseña</label>
               <input
                  type="password" name="password" id="password"
                  placeholder="Contraseña"
                  value=""
                  class="formulario__input"
               >
            </div>
         <input type="submit" class="formulario__submit" value="Iniciar Sesión">
      </fieldset>
   </form>
</main>