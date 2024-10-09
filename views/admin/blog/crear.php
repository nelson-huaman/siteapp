<!-- <h2 class="dashboard__h2">Listado de <?php echo $title; ?></h2> -->
<div class="dashboard__contenedor-boton">
   <a href="/admin/blogs" class="dashboard__boton">
      <i class="fa-solid fa-circle-plus"></i> Volver
   </a>
</div>

<div class="dashboard__contenedor dashboard__contenedor--post">
   <form action="/admin/blogs/crear" method="post" class="formulario formulario--post">
      <div class="formulario__contenido">
         <?php include_once __DIR__ . '/formulario.php'; ?>
      </div>
      <div class="formulario__sidebar">
         
         <div class="formulario__publicar">
            <input type="submit" value="Publicar" class="formulario__submit formulario__submit--full">
            <div class="formulario__datos">
               <p class="formulario__texto"><span>Fecha:</span> <?php echo date('Y-m-d'); ?></p>
            </div>
         </div>

         <div class="formulario__publicar">
            <fieldset class="formulario__fieldset">
               <div class="formulario__row">
                  <label for="imagen" class="formulario__label">Imagen de portada</label>
                  <input
                     type="file" name="imagen" id="imagen"
                     value="<?php echo stringHTML($categoria->imagen ?? ''); ?>" placeholder="Portada"
                     class="formulario__input"
                  >
               </div>
            </fieldset>
         </div>

         <div class="formulario__publicar">
            <fieldset class="formulario__fieldset">
               <div class="formulario__row">
                  <label for="categoria" class="formulario__label">Categoría</label>
                  <input
                     type="checkbox" name="categoria" id="categoria"
                     value="nelson" placeholder="Portada"
                     class="formulario__input"
                  >
                  <input
                     type="checkbox" name="categoria" id="categoria"
                     value="nelson" placeholder="Portada"
                     class="formulario__input"
                  >
               </div>
            </fieldset>
         </div>
      </div>
   </form>
</div>