<main class="main">
   <div class="blogs">
      <h1 class="blogs__titulo">Listado de <?php echo $title; ?></h1>
      <div class="blogs__flex">
         <div class="blogs__contenido">
            <div class="blogs__grid">
               <div class="blogs__item">
                  <picture>
                     <source srcset="/build/img/blog.webp" type="image/webp">
                     <source srcset="/build/img/blog.avif" type="image/avif">
                     <source srcset="/build/img/blog.png" type="image/png">
                     <img class="blogs__imagen" loading="lazy" width="200" height="300" src="/build/img/blog.png" alt="Imagen del Blog">
                  </picture>
                  <div class="blogs__info">
                     <h2 class="blogs__h2">El proceso de desarrollo web: Factores para un desarrollo web exitoso</h2>
                     <ul class="tag">
                        <li class="tag__li">
                           <i class="fa-solid fa-calendar-days"></i>
                           12. Jul. 2024
                        </li>
                        <li class="tag__li">
                           <i class="fa-solid fa-tag"></i>
                           PHP
                        </li>
                     </ul>
                     <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                     <a href="/blog/blog-01" class="blogs__boton">
                        <i class="fa-solid fa-angles-right"></i> Seguir Leyendo
                     </a>
                  </div>
               </div>
               <div class="blogs__item">
                  <picture>
                     <source srcset="/build/img/blog.webp" type="image/webp">
                     <source srcset="/build/img/blog.avif" type="image/avif">
                     <source srcset="/build/img/blog.png" type="image/png">
                     <img class="blogs__imagen" loading="lazy" width="200" height="300" src="/build/img/blog.png" alt="Imagen del Blog">
                  </picture>
                  <div class="blogs__info">
                     <h2 class="blogs__h2">El proceso de desarrollo web: Factores para un desarrollo web exitoso</h2>
                     <ul class="tag">
                        <li class="tag__li">
                           <i class="fa-solid fa-calendar-days"></i>
                           12. Jul. 2024
                        </li>
                        <li class="tag__li">
                           <i class="fa-solid fa-tag"></i>
                           PHP
                        </li>
                     </ul>
                     <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                     <a href="/blog/blog-01" class="blogs__boton">
                        <i class="fa-solid fa-angles-right"></i> Seguir Leyendo
                     </a>
                  </div>
               </div>
               <div class="blogs__item">
                  <picture>
                     <source srcset="/build/img/blog.webp" type="image/webp">
                     <source srcset="/build/img/blog.avif" type="image/avif">
                     <source srcset="/build/img/blog.png" type="image/png">
                     <img class="blogs__imagen" loading="lazy" width="200" height="300" src="/build/img/blog.png" alt="Imagen del Blog">
                  </picture>
                  <div class="blogs__info">
                     <h2 class="blogs__h2">El proceso de desarrollo web: Factores para un desarrollo web exitoso</h2>
                     <ul class="tag">
                        <li class="tag__li">
                           <i class="fa-solid fa-calendar-days"></i>
                           12. Jul. 2024
                        </li>
                        <li class="tag__li">
                           <i class="fa-solid fa-tag"></i>
                           PHP
                        </li>
                     </ul>
                     <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                     <a href="/blog/blog-01" class="blogs__boton">
                        <i class="fa-solid fa-angles-right"></i> Seguir Leyendo
                     </a>
                  </div>
               </div>
               <div class="blogs__item">
                  <picture>
                     <source srcset="/build/img/blog.webp" type="image/webp">
                     <source srcset="/build/img/blog.avif" type="image/avif">
                     <source srcset="/build/img/blog.png" type="image/png">
                     <img class="blogs__imagen" loading="lazy" width="200" height="300" src="/build/img/blog.png" alt="Imagen del Blog">
                  </picture>
                  <div class="blogs__info">
                     <h2 class="blogs__h2">El proceso de desarrollo web: Factores para un desarrollo web exitoso</h2>
                     <ul class="tag">
                        <li class="tag__li">
                           <i class="fa-solid fa-calendar-days"></i>
                           12. Jul. 2024
                        </li>
                        <li class="tag__li">
                           <i class="fa-solid fa-tag"></i>
                           PHP
                        </li>
                     </ul>
                     <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                     <a href="/blog/blog-01" class="blogs__boton">
                        <i class="fa-solid fa-angles-right"></i> Seguir Leyendo
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <aside class="blogs__sidebar">
            <?php include __DIR__ . '/../templates/sidebar-blog.php'; ?>
         </aside>
      </div>
   </div>




   <!-- <div class="main__contenedor">
      <h1 class="main__titulo"><?php echo $title; ?></h1>
      <div class="main__post">
         <div class="blogs">
            <div class="blogs__item">
               <img src="https://canto-wp-media.s3.amazonaws.com/app/uploads/2019/07/19194417/insert-image-html.jpg" alt="Iamgen" class="blogs__imagen">
               <div class="blogs__content">
                  <h3 class="blogs__h3">Ampliamente utilizado para el desarrollo web.</h3>
                  <ul class="tag">
                     <li class="tag__li">
                        <i class="fa-solid fa-calendar-days"></i>
                        12. Jul. 2024
                     </li>
                     <li class="tag__li">
                        <i class="fa-solid fa-tag"></i>
                        PHP
                     </li>
                  </ul>
                  <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                  <a href="/blog/blog-01" class="blogs__boton">
                     <i class="fa-solid fa-angles-right"></i>
                     Seguir Leyendo
                  </a>
               </div>
            </div>
            <div class="blogs__item">
               <img src="https://canto-wp-media.s3.amazonaws.com/app/uploads/2019/07/19194417/insert-image-html.jpg" alt="Iamgen" class="blogs__imagen">
               <div class="blogs__content">
                  <h3 class="blogs__h3">Ampliamente utilizado para el desarrollo web.</h3>
                  <ul class="tag">
                     <li class="tag__li">
                        <i class="fa-solid fa-calendar-days"></i>
                        12. Jul. 2024
                     </li>
                     <li class="tag__li">
                        <i class="fa-solid fa-tag"></i>
                        PHP
                     </li>
                  </ul>
                  <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                  <a href="/blog/blog-01" class="blogs__boton">
                     <i class="fa-solid fa-angles-right"></i>
                     Seguir Leyendo
                  </a>
               </div>
            </div>
            <div class="blogs__item">
               <img src="https://canto-wp-media.s3.amazonaws.com/app/uploads/2019/07/19194417/insert-image-html.jpg" alt="Iamgen" class="blogs__imagen">
               <div class="blogs__content">
                  <h3 class="blogs__h3">Ampliamente utilizado para el desarrollo web.</h3>
                  
                  
                  
               </div>
            </div>
            <div class="blogs__item">
               <img src="https://canto-wp-media.s3.amazonaws.com/app/uploads/2019/07/19194417/insert-image-html.jpg" alt="Iamgen" class="blogs__imagen">
               <div class="blogs__content">
                  <h3 class="blogs__h3">Ampliamente utilizado para el desarrollo web.</h3>
                  <ul class="tag">
                     <li class="tag__li">
                        <i class="fa-solid fa-calendar-days"></i>
                        12. Jul. 2024
                     </li>
                     <li class="tag__li">
                        <i class="fa-solid fa-tag"></i>
                        PHP
                     </li>
                  </ul>
                  <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                  <a href="/blog/blog-01" class="blogs__boton">
                     <i class="fa-solid fa-angles-right"></i>
                     Seguir Leyendo
                  </a>
               </div>
            </div>
            <div class="blogs__item">
               <img src="https://canto-wp-media.s3.amazonaws.com/app/uploads/2019/07/19194417/insert-image-html.jpg" alt="Iamgen" class="blogs__imagen">
               <div class="blogs__content">
                  <h3 class="blogs__h3">Ampliamente utilizado para el desarrollo web.</h3>
                  <ul class="tag">
                     <li class="tag__li">
                        <i class="fa-solid fa-calendar-days"></i>
                        12. Jul. 2024
                     </li>
                     <li class="tag__li">
                        <i class="fa-solid fa-tag"></i>
                        PHP
                     </li>
                  </ul>
                  <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                  <a href="/blog/blog-01" class="blogs__boton">
                     <i class="fa-solid fa-angles-right"></i>
                     Seguir Leyendo
                  </a>
               </div>
            </div>
            <div class="blogs__item">
               <img src="https://canto-wp-media.s3.amazonaws.com/app/uploads/2019/07/19194417/insert-image-html.jpg" alt="Iamgen" class="blogs__imagen">
               <div class="blogs__content">
                  <h3 class="blogs__h3">Ampliamente utilizado para el desarrollo web.</h3>
                  <ul class="tag">
                     <li class="tag__li">
                        <i class="fa-solid fa-calendar-days"></i>
                        12. Jul. 2024
                     </li>
                     <li class="tag__li">
                        <i class="fa-solid fa-tag"></i>
                        PHP
                     </li>
                  </ul>
                  <p class="blogs__texto">Ampliamente utilizado para el desarrollo web. Permite crear sitios web dinámicos e interactuar con bases de datos.</p>
                  <a href="/blog/blog-01" class="blogs__boton">
                     <i class="fa-solid fa-angles-right"></i>
                     Seguir Leyendo
                  </a>
               </div>
            </div>
         </div>
      </div>
      
   </div> -->
</main>