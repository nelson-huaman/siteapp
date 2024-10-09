<h2 class="dashboard__h2">Listado de <?php echo $title; ?></h2>

<div class="dashboard__contenedor-boton">
   <a href="/admin/blogs/crear" class="dashboard__boton">
      <i class="fa-solid fa-circle-plus"></i> Añadir Nuevo
   </a>
</div>

<div class="dashboard__contenedor dashboard__contenedor--tabla">
   <?php if(!empty($blogs)) { ?>
      <table class="tabla">
         <thead class="tabla__thead">
            <tr>
               <th scope="col" class="tabla__th">Nombre</th>
               <th scope="col" class="tabla__th">Categoría</th>
               <th scope="col" class="tabla__th">Fecha</th>
               <th scope="col" class="tabla__th">Estado</th>
               <th scope="col" class="tabla__th"></th>
            </tr>
         </thead>
         <tbody class="tabla__tbody">
            <?php foreach($blogs as $blog) { ?>
               <tr class="tabla__tr">
                  <td class="tabla__td">
                     <?php echo $blog->titulo; ?>
                  </td>
                  <td class="tabla__td">
                     <?php echo $blog->categoria->nombre; ?>
                  </td>
                  <td class="tabla__td">
                     <?php echo $blog->fecha; ?>
                  </td>
                  <td class="tabla__td">
                     <div class="tabla__estado tabla__estado--<?php echo ($blog->estado === '1') ? 'activo' : 'inactivo'; ?>">
                        <?php echo ($blog->estado === '1') ? 'Activo' : 'Inactivo'; ?>
                     </div>
                  </td>
                  <td class="tabla__td">
                     <div class="tabla__acciones">
                        <a class="tabla__accion tabla__accion--editar" href="/admin/blogs/editar?id=<?php echo $blog->id; ?>" title="Editar">
                           <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="/admin/blogs/estado" method="POST" class="tabla__formulario">
                           <input type="hidden" name="id" value="<?php echo $blog->id; ?>">
                           <input type="hidden" name="estado" value="<?php echo $blog->estado; ?>">
                           <button class="tabla__accion tabla__accion--estado" type="submit" title="<?php echo ($blog->estado === '1') ? 'Desactivar' : 'Activar'; ?>">
                              <i class="fa-solid fa-<?php echo ($blog->estado === '1') ? 'toggle-on' : 'toggle-off'; ?>"></i>
                           </button>
                        </form>
                        <form action="/admin/blogs/eliminar" method="POST" class="tabla__formulario">
                           <input type="hidden" name="id" value="<?php echo $blog->id; ?>">
                           <button class="tabla__accion tabla__accion--eliminar" type="submit" title="Eliminiar Permanente">
                              <i class="fa-solid fa-trash-can"></i>
                           </button>
                        </form>
                     </div>
                  </td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   <?php } else { ?>
      <p class="text-center">No hay Blogs áun</p>
   <?php } ?>
</div>

<?php echo $paginacion; ?>