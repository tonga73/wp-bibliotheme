<?php
/**
 * Template Name: Empty Inicio Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();
?>
<div class="breadcrumb m-0 bg-dblue text-light active">
	<div class="container">
		<h4 class="m-0 p-0">
			<!-- Breadcrumb -->
			<?php single_post_title(); ?>
			<!-- Fin Breadcrumb -->			
		</h4>
	</div>
</div>
<div class="jumbotron-para paral page-inicio">
	<div class="container">
		<h1 class="display-3 pb-3">
			<?php single_post_title(); ?>
			<p class="text-light text-right pr-3">1947 - 
				<?php
				echo date('Y');
				?>
			 · 
			<?php
				echo date('y', strtotime("-1947 year"));
			?>
			  AÑOS</p>			
		</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<!-- Frontpage Featured Links -->
		<div class="col-lg-6">
			<h3 class="p-3">Citas</h3>
			<hr/>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'loop-templates/content', 'empty' );
			endwhile;
			?>
		</div>
		<div class="col-lg-6">
			<h3 class="p-3 text-right">Enlaces Útiles</h3>
			<hr/>
			<h5 class="text-muted">Información General</h5>
			<div class="list-group text-center">
			  <a href="http://bibliotecasobera.org/servicios/informacion-al-ciudadano/" class="list-group-item list-group-item-action list-group-item-dark bg-dblue text-light font-weight-bold text-uppercase">
			    Información al Ciudadano
			  </a>
			  <a target="_blank" href="http://2561.bepe.ar/" class="list-group-item list-group-item-action list-group-item-dark bg-dblue text-light font-weight-bold text-uppercase">Catálogo</a>
			  <a href="http://bibliotecasobera.org/blog/" class="list-group-item list-group-item-action list-group-item-dark bg-dblue text-light font-weight-bold text-uppercase">Novedades</a>
			</div>
			<hr>
			<h5 class="text-muted">Conocé la Biblioteca</h5>
			<div class="list-group text-center">
			  <a href="http://bibliotecasobera.org/nosotros/" class="list-group-item list-group-item-action list-group-item-dark bg-dblue text-light font-weight-bold text-uppercase">
			    La Biblioteca Popular
			  </a>
			  <a href="http://bibliotecasobera.org/nosotros/galeria/" class="list-group-item list-group-item-action list-group-item-dark bg-dblue text-light font-weight-bold text-uppercase">Galería de Imágenes</a>
			  <a href="http://bibliotecasobera.org/contacto/" class="list-group-item list-group-item-action list-group-item-dark bg-dblue text-light font-weight-bold text-uppercase">Contacto</a>
			  <a href="http://bibliotecasobera.org/servicios/asociarse/" class="list-group-item list-group-item-action list-group-item-dark bg-dblue text-light font-weight-bold text-uppercase">Hacerse Socio</a>
			</div>
			
		</div>
		<!-- Frontpage Entry Section -->
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="p-3">Entradas Recientes</h3>
					<hr/>					
				</div>
					<ul style="list-style: none; cursor: default;" class="nav">
					<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
					 
					<?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
					<div class="col-lg-6">
						<li class="p-3 bg-dblue text-light"><h4 class="m-0"><?php the_title(); ?></h4></li>
						 
						<li class="list-group-item list-group-item-action mb-2">
							<form class="text-center p-2">
								<?php the_post_thumbnail( 'thumbnail' ); ?>
							</form>
							<small><?php the_excerpt(__('(more…)')); ?></small></li>
					</div>
					 	
					<?php 
					endwhile;
					?>
					<?php
					wp_reset_postdata();
					?>				 
					</ul>					
				
			</div>
		</div>
		<!-- Frontpage Contact Section -->
		<div class="col-sm-2 offset-sm-5">
			<hr>
		</div>
		<div class="col-sm-12 text-center p-5">
			<span>
				<h1 class="text-muted p-3">
					¿Querés saber más?
				</h1>
				<hr>
				<h1 class="p-3">Contactanos.</h1>	
			</span>
			<span>
				<a target="_blank" class="btn btn-info btn-lg" href="https://www.facebook.com/Biblioteca-158738764835656/">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
  <i class="fa fa-phone" aria-hidden="true"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Número telefónico</h5>
      </div>
      <div class="modal-body">
        <h2>(+54) 03755 - 425832</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>
				<a target="_blank" class="btn btn-info btn-lg" href="https://www.google.com/maps/place/Biblioteca+Domingo+Faustino+Sarmiento/@-27.4829777,-55.1210606,17z/data=!3m1!4b1!4m5!3m4!1s0x94f8f53f7aea882d:0xe15219d842246b9c!8m2!3d-27.4829777!4d-55.1188719">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</a>
				<a class="btn btn-info btn-lg" href="mailto:info@bibliotecasobera.org">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</a>
			</span>
		</div>
	</div>
</div>


<?php
get_footer();
