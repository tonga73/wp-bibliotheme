<?php
/**
 * Template Name: Empty Contacto Template
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
<div class="jumbotron-para paral page-contacto">
	<div class="container">
		<h1 class="display-3"><?php single_post_title(); ?></h1>	
	</div>
</div>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
                <div class="medium-12 cell">
                    <iframe allowfullscreen="" frameborder="0" height="230" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.5544982584456!2d-55.11882105517452!3d-27.48312565022307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f8f53f7aea882d%3A0xe15219d842246b9c!2sBiblioteca+Domingo+Faustino+Sarmiento!5e0!3m2!1ses-419!2sar!4v1509654140992" style="border:0" width="100%">
                    </iframe>
                </div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div id="servicios-card" class="col-sm-12 col-md-6 text-center">
							<a target="_blank" title="Ir a Catálogo" href="http://2561.bepe.ar/">
								<div class="servicios-icon bg-dblue text-white">
									<i class="fa fa-map-marker"></i>
								</div>			
							</a>
							<div class="servicios-description bg-light">
								<h4>Gobernador Barreyro 610</h4>		
							</div>
						</div>
						<div id="servicios-card" class="col-sm-12 col-md-6 text-center">
							<div class="servicios-icon bg-dblue text-white">
								<i class="fa fa-phone"></i>
							</div>
							<div class="servicios-description bg-light">
								<h4>03755 - 425832</h4>			
							</div>
						</div>
						<div id="servicios-card" class="col-sm-12 col-md-6 text-center">
							<div class="servicios-icon bg-dblue text-white">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="servicios-description bg-light">
								<h4><a href="mailto:info@bibliotecasobera.org">info@bibliotecasobera.org</a></h4>			
							</div>
						</div>
						<div id="servicios-card" class="col-sm-12 col-md-6 text-center">
							<div class="servicios-icon bg-dblue text-white">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="servicios-description bg-light">
								<h4>Lunes a Viernes 07:00 a 19:00 hs.</h4>			
							</div>
						</div>						
				</div>
			</div>
		</div>
	</div>


<?php
get_footer();
