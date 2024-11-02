<div class="dashboard__header">
   <h2 class="dashboard__heading"><?php echo $title; ?></h2>
</div>

   <!-- <?php include_once __DIR__ . './../../templates/alertas.php'; ?> -->
   <form action="/admin/proyecto/crear" method="post" class="formulariopost" >
      <div class="formulario__flex">
         <?php include_once __DIR__ . '/formulario.php'; ?>
         <div class="formulario__sidebar">
            <div class="formulario__item">
               <legend class="formulario__legend">Detalles</legend>
               <p>Fecha: 2024-10-20</p>
               <input type="submit" value="Publicar" class="formulario__submit formulario__submit--full">
            </div>
            <div class="formulario__item">
               <legend class="formulario__legend">Desarrollado en</legend>
               <ul class="tecnologia">
                  <li class="tecnologia__li html5">HTML5</li>
                  <li class="tecnologia__li css">CSS</li>
                  <li class="tecnologia__li js">JS</li>
                  <li class="tecnologia__li sass">SASS</li>
               </ul>
               <input type="hidden" name="" value="">
            </div>
            <div class="formulario__item">
               <legend class="formulario__legend">Imagen destacada</legend>
               <input type="file" name="imagen" id="iamgen">
               <img src="/build/img/blog.webp" alt="">
            </div>
         </div>
      </div>
   </form>

