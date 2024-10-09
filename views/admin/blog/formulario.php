<fieldset class="formulario__fieldset">
   <?php include_once __DIR__ . './../../templates/alertas.php'; ?>
   <div class="formulario__row">
      <label for="titulo" class="formulario__label">Titulo</label>
      <input
         type="text" name="titulo" id="titulo"
         value="<?php echo stringHTML($categoria->titulo ?? ''); ?>" placeholder="Titulo"
         class="formulario__input"
      >
   </div>
   <div class="formulario__row">
      <label for="slug" class="formulario__label">Slug</label>
      <input
         type="text" name="slug" id="slug"
         value="<?php echo stringHTML($categoria->slug ?? ''); ?>" placeholder="Slug"
         class="formulario__input" 
      >
   </div>
   <textarea name="contenido" id="contenido"></textarea>
</fieldset>