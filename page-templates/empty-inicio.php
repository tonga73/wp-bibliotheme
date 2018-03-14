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
				// imprime algo como: Wednesday the 15th
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
			<h3 class="p-3">Enlaces Útiles</h3>
			<hr/>
			<h5 class="text-muted">Información General</h5>
			<hr>
			<h5 class="text-muted">Conocé la Biblioteca</h5>
			<hr>
			
		</div>
		<!-- Frontpage Entry Section -->
		<div class="col-lg-6">
			<h3 class="p-3 text-right">Entradas Recientes</h3>
			<hr/>
			<ul style="list-style: none; cursor: default;" class="list-group">
			<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
			 
			<?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
			 
			<li class="p-3 bg-dblue text-light"><h4 class="m-0"><?php the_title(); ?></h4></li>
			 
			<li class="list-group-item list-group-item-action mb-2">
				<form class="text-center p-2">
					<?php the_post_thumbnail( 'thumbnail' ); ?>
				</form>
				<small><?php the_excerpt(__('(more…)')); ?></small></li>
			 
			<?php 
			endwhile;
			wp_reset_postdata();
			?>
			</ul>
		</div>
		<!-- Frontpage Contact Section -->
		<div class="col-sm-12 text-center p-5">
			<span>
				<h1 class="text-muted p-3">
					¿Querés saber más?
				</h1>
				<hr>
				<h1 class="p-3">Contactanos.</h1>	
			</span>
			<span>
				<button class="btn btn-info btn-lg">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</button>
				<button class="btn btn-info btn-lg">
					<i class="fa fa-phone" aria-hidden="true"></i>
				</button>
				<button class="btn btn-info btn-lg">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</button>
				<button class="btn btn-info btn-lg">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</button>
			</span>
		</div>
	</div>
</div>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();
