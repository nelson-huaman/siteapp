<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title><?php echo $page_name ?? ''; ?> | Nelson</title>
   <meta name="description" content="<?php echo $page_description ?? ''; ?>">
   <link rel="canonical" href="https://nelsondev.info/" >

   <meta property="og:type" content="website">
   <meta property="og:site_name" content="Nelson">
   <meta property="og:title" content="<?php echo $page_name ?? ''; ?> | Nelson">
   <meta property="og:description" content="<?php echo $page_description ?? ''; ?>">
   <meta property="og:image" content="<?php echo $page_image ?? ''; ?>">
   <meta property="og:url" content="https://nelsondev.info/<?php echo $page_slug ?? ''; ?>">

   <link rel="icon" type="image/svg+xml" href="/build/img/isotipo.svg">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

   <?php
      include_once __DIR__ . '/templates/header.php';
      echo $contenido;
      include_once __DIR__ . '/templates/footer.php';
   ?>
   
   <script src="/build/js/app.min.js"></script>
   
</body>
</html>