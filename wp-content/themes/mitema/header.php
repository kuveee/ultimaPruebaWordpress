<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
	<!-- Header -->
  	<header id="header">
  		
			<!-- nav -->
        <nav id="menu" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?> /assets/images/logo.png" class="navbar-img" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#nosotros">nosotros</a>
            <a class="nav-item nav-link" href="#restaurant-menu">Menu</a>
            <a class="nav-item nav-link " href="#portfolio">Galería</a>
            <a class="nav-item nav-link " href="#footer">Contacto</a>
           
          </div>
        </div>
      </nav> <!-- fin navbar -->
      