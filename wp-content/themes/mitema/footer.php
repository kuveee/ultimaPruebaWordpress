<div id="footer" class="mt-5 container-fluid">
	<div class="col-md-12">
		<div class="row">
	    	<div class="col-md-4">
	      		<h3>Dirección</h3>
	      	<div class="contact-item">
	       		<p>Av. Colón 161,</p>
	        	<p>Providencia</p>
	      	</div>
	    	</div>
		    <div class="col-md-4">
		      <h3>Horarios</h3>
		      <div class="contact-item">
		        <p>L-J: 10:00 AM - 11:00 PM</p>
		        <p>V-S: 11:00 AM - 02:00 AM</p>
		      </div>
		    </div>
		    <div class="col-md-4">
		      <h3>Teléfono</h3>
		      <div class="contact-item">
		        <p>+56 2 2345 4653</p>
		        <p>Email: info@restraurant.com</p>
		      </div>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-5 offset-md-5">
				<?php
				 echo do_shortcode('[booking nummonths=2]');
				?>	
			</div>
		</div>
		<div class="row copyrights">
			<div class="col-md-4 offset-md-4">
				<?php if ( is_active_sidebar( 'widget_footer') ){
				dynamic_sidebar('widget_footer'); 
				}; ?>
			</div>
			<div class="col-md-12 ">
				<p class="mt-5">&copy; 2018 All rights reserved. </p>
			</div>
		</div>
	</div>
</div>

<?php wp_footer() ?>

</html>

