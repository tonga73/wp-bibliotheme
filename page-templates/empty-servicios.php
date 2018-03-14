<?php
/**
 * Template Name: Empty Servicios Template
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
		<h4 class="m-0 p-0">
			<!-- Breadcrumb -->
			<?php the_breadcrumb(); ?>
			<!-- Fin Breadcrumb -->			
		</h4>
	</div>
</div>
<div class="jumbotron-para paral page-servicios-generales">
	<div class="container">
		<h1 class="display-3"><?php single_post_title(); ?></h1>	
	</div>
</div>
<div class="container">
	<div class="row"
	>	<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<a target="_blank" title="Ir a Catálogo" href="http://2561.bepe.ar/">
				<div class="servicios-icon bg-info text-white">
					<i class="fa fa-archive"></i>
				</div>			
			</a>
			<div class="servicios-description bg-light">
				<h4>Catálogo en línea de acceso público</h4>		
			</div>
		</div>
		<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<div class="servicios-icon bg-info text-white">
				<i class="fa fa-user"></i>
			</div>
			<div class="servicios-description bg-light">
				<h4>Orienatación y referencias bibliográficas</h4>			
			</div>
		</div>
		<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<div class="servicios-icon bg-info text-white">
				<i class="fa fa-book"></i>
			</div>
			<div class="servicios-description bg-light">
				<h4>Consulta de materiales en sala</h4>			
			</div>
		</div>
		<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<div class="servicios-icon bg-info text-white">
				<i class="fa fa-file"></i>
			</div>
			<div class="servicios-description bg-light">
				<h4>Sala de lectura de acceso libre</h4>			
			</div>
		</div>
		<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<div class="servicios-icon bg-info text-white">
				<i class="fa fa-copy"></i>
			</div>
			<div class="servicios-description bg-light">
				<h4>Fotocopias</h4>			
			</div>
		</div>
		<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<div class="servicios-icon bg-info text-white">
				<i class="fa fa-wifi"></i>
			</div>
			<div class="servicios-description bg-light">
				<h4>Acceso libre a Internet</h4>			
			</div>
		</div>
		<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<div class="servicios-icon bg-info text-white">
				<i class="fa fa-users"></i>
			</div>
			<div class="servicios-description bg-light">
				<h4>Visitas guiadas</h4>			
			</div>
		</div>
		<div id="servicios-card" class="col-sm-6 col-md-4 col-lg-3 text-center">
			<div class="servicios-icon bg-info text-white">
				<i class="fa fa-newspaper-o"></i>
			</div>
			<div class="servicios-description bg-light">
				<h4>Hemeroteca</h4>			
			</div>
		</div>
	</div>
	
</div>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();
