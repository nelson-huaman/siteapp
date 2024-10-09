<fieldset class="formulario__fieldset">
   <legend class="formulario__legend">Información de la Categoría</legend>
   <?php include_once __DIR__ . './../../../templates/alertas.php'; ?>
   <div class="formulario__row">
         <label for="nombre" class="formulario__label">Nombre</label>
         <input
         type="text" name="nombre" id="nombre"
         value="<?php echo stringHTML($categoria->nombre ?? ''); ?>" placeholder="Nombre"
         class="formulario__input"
      >
   </div>
</fieldset>