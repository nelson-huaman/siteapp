<main class="main">
   <div class="login">
      <h1 class="login__titulo">Iniciar Sesión</h1>
      <?php require_once __DIR__ . '/../templates/alertas.php'; ?>
      <form action="/login" method="post" class="formulario">
         <fieldset class="formulario__fieldset">
            <div class="formulario__row">
                  <label for="email" class="formulario__label">Correo</label>
                  <input
                     type="email" name="email" id="email"
                     value="" placeholder="Correo"
                     class="formulario__input"
                  >
               </div>
               <div class="formulario__row">
                  <label for="password" class="formulario__label">Contraseña</label>
                  <input
                     type="password" name="password" id="password"
                     value="" placeholder="Contraseña"
                     class="formulario__input"
                  >
               </div>
            <input type="submit" class="formulario__submit" value="Iniciar Sesión">
         </fieldset>
      </form>
   </div>
</main>