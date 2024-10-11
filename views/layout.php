<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title><?php echo $title ?? ''; ?> | Nelson</title>
   <meta name="description" content="<?php echo $description ?? ''; ?>">
   <link rel="canonical" href="https://nelsondev.info/" >

   <meta property="og:type" content="website">
   <meta property="og:site_name" content="Nelson">
   <meta property="og:title" content="<?php echo $title ?? ''; ?> | Nelson">
   <meta property="og:description" content="<?php echo $description ?? ''; ?>">
   <meta property="og:image" content="<?php echo $image ?? ''; ?>">
   <meta property="og:url" content="https://nelsondev.info<?php echo $slug ?? ''; ?>">

   <link rel="icon" type="image/svg+xml" href="/build/img/isotipo.svg">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="/build/css/app.css">

   <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-P2NZ9ZLJ');</script>
   <!-- End Google Tag Manager -->
</head>
<body>

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2NZ9ZLJ"
   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->

   <?php
      include_once __DIR__ . '/templates/header.php';
      echo $contenido;
      include_once __DIR__ . '/templates/footer.php';
   ?>
   
   <script src="/build/js/app.min.js"></script>
   
</body>
</html>