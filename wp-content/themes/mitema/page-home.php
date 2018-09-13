<?php get_header(); ?>
<img src=" <?php echo get_template_directory_uri(); ?> /assets/images/pizza.jpg" data-speed="-1" class="img-header">
      <div class="container-fluid">
        <div class="row">
          <div class="intro-text">
            <h1>Il Fonti</h1>
            <p>Restaurant</p>
            <a href="#nosotros" class="btn btn-custom btn-lg page-scroll">Navega con nosotros</a> </div>
        </div>
      </div>
 </header>
<!-- About Section -->
<div id="nosotros">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="nosotros-img"><img src=" <?php echo get_template_directory_uri(); ?> /assets/images/cena.jpeg" class="img-responsive nosotros-img_tamaño" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Nuestro restaurant</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <h3>Reconocido por sus mejores chef</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurante menu sección -->
<div id="restaurant-menu">
	<img src="<?php echo get_template_directory_uri(); ?> /assets/images/oliva.jpg" data-speed="-1" class="img-parallax">
  <div class="restaurant-menu__inner text-center center">
     <h2>Menu</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
   </div>
 </div>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">ANTIPASTOS</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('antipastos_name_1') ?></div>
            <div class="menu-item-price"> <?php the_field('antipastos_precio_1') ?> </div>
            <div class="menu-item-description"> <?php the_field('antipastos_descripcion_1') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php the_field('antipastos_name_2') ?> </div>
            <div class="menu-item-price"> <?php the_field('antipastos_precio_2') ?> </div>
            <div class="menu-item-description"><?php the_field('antipastos_descripcion_2') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php the_field('antipastos_name_3') ?> </div>
            <div class="menu-item-price"> <?php the_field('antipastos_precio_3') ?> </div>
            <div class="menu-item-description"><?php the_field('antipastos_descripcion_3') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('antipastos_name_4') ?> </div>
            <div class="menu-item-price"> <?php the_field('antipastos_precio_4') ?></div>
            <div class="menu-item-description"><?php the_field('antipastos_descripcion_4') ?> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">ENSALADAS</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> <?php the_field('ensaladas_name_1') ?></div>
            <div class="menu-item-price"> <?php the_field('ensaladas_precio_1') ?> </div>
            <div class="menu-item-description"> <?php the_field('ensaladas_descripcion_1') ?> </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php the_field('ensaladas_name_2') ?></div>
            <div class="menu-item-price"><?php the_field('ensaladas_precio_2') ?> </div>
            <div class="menu-item-description"> <?php the_field('ensaladas_descripcion_2') ?> </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php the_field('ensaladas_name_3') ?> </div>
            <div class="menu-item-price"> <?php the_field('ensaladas_precio_3') ?> </div>
            <div class="menu-item-description"> <?php the_field('ensaladas_descripcion_3') ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">SOPAS</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> ZUPPA DI CHEF </div>
            <div class="menu-item-price"> $5.300 </div>
            <div class="menu-item-description"> Sopa del día seleccionada por el chef. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> MINISTRONE GENOVESE </div>
            <div class="menu-item-price"> $5.300 </div>
            <div class="menu-item-description"> Sopa tradicional italiana a base de verduras, porotos blancos y pesto de albahaca.</div>
          </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">PIZZA TRADICIONAL</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> <?php the_field('pizzatradi_name_1') ?></div>
            <div class="menu-item-price"> <?php the_field('pizzaTradi_precio_1') ?> </div>
            <div class="menu-item-description"><?php the_field('pizzaTradi_descrip_1')?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizzatradi_name_2') ?></div>
            <div class="menu-item-price"> <?php the_field('pizzaTradi_precio_2') ?> </div>
            <div class="menu-item-description"> <?php the_field('pizzaTradi_descrip_2') ?> </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizzatradi_name_3') ?></div>
            <div class="menu-item-price"><?php the_field('pizzaTradi_precio_3') ?> </div>
            <div class="menu-item-description"> <?php the_field('pizzaTradi_descrip_3') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php the_field('pizzaTradi_name_4') ?> </div>
            <div class="menu-item-price"><?php the_field('pizzaTradi_precio_4') ?> </div>
            <div class="menu-item-description"> <?php the_field('pizzaTradi_descrip_4') ?> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">PIZZAS</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizza_name_1') ?></div>
            <div class="menu-item-price"> $6.200 </div>
            <div class="menu-item-description"><?php the_field('pizza_descripcion_1') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizza_name_2') ?></div>
            <div class="menu-item-price"> $6.500 </div>
            <div class="menu-item-description"><?php the_field('pizza_descripcion_2') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizza_name_3') ?></div>
            <div class="menu-item-price"> $7.000 </div>
            <div class="menu-item-description"><?php the_field('pizza_descripcion_3') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizza_name_4') ?></div>
            <div class="menu-item-price"> $5.300 </div>
            <div class="menu-item-description"><?php the_field('pizza_descripcion_4') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizza_name_5') ?></div>
            <div class="menu-item-price"> $5.300 </div>
            <div class="menu-item-description"><?php the_field('pizza_descripcion_5') ?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizza_name_6') ?></div>
            <div class="menu-item-price"> $7.000 </div>
            <div class="menu-item-description"><?php the_field('pizza_descripcion_6') ?> </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php the_field('pizza_name_7') ?></div>
            <div class="menu-item-price"> $7.000 </div>
            <div class="menu-item-description"><?php the_field('pizza_descripcion_7') ?></div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">POSTRES</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> GELATO </div>
            <div class="menu-item-price"> $.2.500 </div>
            <div class="menu-item-description"> 3 bolas de helado. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> GELATO DE CIOCCOLATO </div>
            <div class="menu-item-price"> $2.500 </div>
            <div class="menu-item-description"> 3 bolas de helado. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> PANNA COTTA </div>
            <div class="menu-item-price"> $3.500 </div>
            <div class="menu-item-description"> Postre de crema y manjar. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> TIRAMISU </div>
            <div class="menu-item-price"> $3.500 </div>
            <div class="menu-item-description"> Tradicional tiramisú cremoso de mascarpone con base de galletas maceradas en licor de café. </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">INFUSIONES</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> INFUSIONES </div>
            <div class="menu-item-price"> $1.100 </div>
           </div>
          <div class="menu-item">
            <div class="menu-item-name"> CAFFE ESPRESSO </div>
            <div class="menu-item-price"> $1.200 </div>
           </div>
          <div class="menu-item">
            <div class="menu-item-name"> LATTE </div>
            <div class="menu-item-price"> $2.100 </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> MOCCACCINO </div>
            <div class="menu-item-price"> $2.000 </div>
           </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">BEBIDAS</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> AGUA MINERAL </div>
            <div class="menu-item-price"> $900 </div>
           </div>
          <div class="menu-item">
            <div class="menu-item-name"> BEBIDA </div>
            <div class="menu-item-price"> $1.200 </div>
           </div>
        </div>
      </div>
    </div>
  </div>
<!-- comienzo portfolio -->
<div id="portfolio"> 
	<img src="<?php echo get_template_directory_uri(); ?> /assets/images/mesas.jpg" data-speed="-1" class="img-parallax">
  <div class="galeria-menu__inner text-center center">
     <h2>Galería</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
   </div>
 </div>
 
 <div class="container-fluid tips">
      <div class="row"> <!-- comienzo primera fila -->
        <div class="offset-md-1 offset-lg-1"></div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
            <!-- llamando imagen con custom field -->
        <?php 
        $imagen_1 = get_field('imagen_1');
        if( !empty($imagen_1) ): ?>
          <img src="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_1['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2><?php the_field('imagen_1_descripcion') ?></h2>
            <p>1</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_2 = get_field('imagen_2');
        if( !empty($imagen_2) ): ?>
          <img src="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>2</h2>
            <p><?php the_field('imagen_2_descripcion') ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_3 = get_field('imagen_3');
        if( !empty($imagen_3) ): ?>
          <img src="<?php echo $imagen_3['url']; ?>" alt="<?php echo $imagen_3['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>3</h2>
            <p><?php the_field('imagen_3_descripcion') ?></p>
          </div>
        </div>
      </div>      
      <div class="row"><!-- comienzo segunda fila -->
        <div class="offset-md-1 offset-lg-1"></div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_4 = get_field('imagen_4');
        if( !empty($imagen_4) ): ?>
          <img src="<?php echo $imagen_4['url']; ?>" alt="<?php echo $imagen_4['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>4</h2>
            <p><?php the_field('imagen_4_descripcion') ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_5 = get_field('imagen_5');
        if( !empty($imagen_5) ): ?>
          <img src="<?php echo $imagen_5['url']; ?>" alt="<?php echo $imagen_5['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>5</h2>
            <p><?php the_field('imagen_5_descripcion') ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_6 = get_field('imagen_6');
        if( !empty($imagen_6) ): ?>
          <img src="<?php echo $imagen_6['url']; ?>" alt="<?php echo $imagen_6['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>6</h2>
            <p><?php the_field('imagen_6_descripcion') ?></p>
          </div>
        </div>
      </div><!-- Fin segunda fila-->
      <div class="row"><!-- comienzo tercera fila -->
        <div class="offset-md-1 offset-lg-1"></div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_7 = get_field('imagen_7');
        if( !empty($imagen_7) ): ?>
          <img src="<?php echo $imagen_7['url']; ?>" alt="<?php echo $imagen_7['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>7</h2>
            <p><?php the_field('imagen_7_descripcion') ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_8 = get_field('imagen_8');
        if( !empty($imagen_8) ): ?>
          <img src="<?php echo $imagen_8['url']; ?>" alt="<?php echo $imagen_8['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>8</h2>
            <p><?php the_field('imagen_8_descripcion') ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_9 = get_field('imagen_9');
        if( !empty($imagen_9) ): ?>
          <img src="<?php echo $imagen_9['url']; ?>" alt="<?php echo $imagen_9['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>9</h2>
            <p><?php the_field('imagen_9_descripcion') ?></p>
          </div>
        </div>
      </div><!-- Fin tercera fila-->
      <div class="row"><!-- comienzo tercera fila -->
        <div class="offset-md-1 offset-lg-1"></div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_10 = get_field('imagen_10');
        if( !empty($imagen_10) ): ?>
          <img src="<?php echo $imagen_10['url']; ?>" alt="<?php echo $imagen_10['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>10</h2>
            <p><?php the_field('imagen_10_descripcion') ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_11 = get_field('imagen_11');
        if( !empty($imagen_1) ): ?>
          <img src="<?php echo $imagen_11['url']; ?>" alt="<?php echo $imagen_11['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>11</h2>
            <p><?php the_field('imagen_11_descripcion') ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 tips__img">
          <div class="imgBox">
          <!-- llamando imagen con custom field -->
        <?php 
        $imagen_12 = get_field('imagen_12');
        if( !empty($imagen_12) ): ?>
          <img src="<?php echo $imagen_12['url']; ?>" alt="<?php echo $imagen_12['alt']; ?>" />
        <?php endif; ?>
        <!-- Fin llamando imagen con custom field -->
          </div>
          <div class="content">
            <h2>12</h2>
            <p><?php the_field('imagen_12_descripcion') ?></p>
          </div>
        </div>
      </div><!-- Fin tercera fila-->
<?php get_footer(); ?>