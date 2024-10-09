<h2 class="dashboard__h2">Listado de <?php echo $title; ?></h2>
<div class="dashboard__contenedor-boton">
   <a href="/admin/blogs/categorias" class="dashboard__boton">
      <i class="fa-solid fa-circle-plus"></i> Volver
   </a>
</div>

<div class="dashboard__formulario">
   <form action="/admin/blogs/categorias/crear" method="post" class="formulario">
      <?php include_once __DIR__ . '/formulario.php'; ?>
      <div class="formulario__accion">
         <input type="submit" value="Registrar" class="formulario__submit">
      </div>
   </form>
</div>