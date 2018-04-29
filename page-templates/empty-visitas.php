<?php
/**
 * Template Name: Empty Visitas Guiadas Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();
?>
<div class="breadcrumb m-0 bg-dblue text-light">
	<div class="container">
		<h5 class="m-0 p-0">
			<!-- Breadcrumb -->
			<?php the_breadcrumb(); ?>
			<!-- Fin Breadcrumb -->			
		</h5>
	</div>
</div>
<div class="jumbotron-para paral page-servicios-visitas-guiadas">
	<div class="container">
		<h1 class="display-3"><?php single_post_title(); ?></h1>	
	</div>
</div>
<div class="container">
	<div id="servicio-ciudadano" class="row">
		<div class="col-sm-12 col-md-6 p-5">
			<h5>
				La <strong>Biblioteca Popular Domingo Faustino Sarmiento</strong> organiza <i>visitas guiadas</i> destinadas a promocionar sus servicios, difundir su patrimonio y acercar nuevos usuarios, con propuestas diversas para diferentes públicos.
				<br /><br />
				Se realizan <strong>visitas especiales</strong> para instituciones y establecimientos educativos de nivel inicial (sala de 4 años en adelante), primario, secundario y terciarios o universitarios de carreras de bibliotecología.
				<br /><br />
				La visita  tiene un cupo de 30 alumnos. 
			</h5>		
		</div>
		<div class="col-sm-12 col-md-6">
			<ul class="p-0">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'loop-templates/content', 'empty' );
				endwhile;
				?>				
			</ul>
				
		</div>
	</div>
	
</div>

<?php

get_footer();
