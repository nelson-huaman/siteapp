<div class="formulario__contenido">
   <div class="formulario__item">
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
      <div class="formulario__row">
         <label for="contenido" class="formulario__label">Descripción</label>
         <textarea name="contenido" id="contenido" class="formulario__textarea"></textarea>
      </div>
   </div>
   <div class="formulario__item">
      <legend class="formulario__legend">SEO</legend>
      Lorem ipsum dolor sit amet 
   </div>
</div>