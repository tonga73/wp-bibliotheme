<?php
/**
 * Template Name: Empty Nosotros Template
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
<div class="jumbotron-para paral page-nosotros">
	<div class="container">
		<h1 class="display-3"><?php single_post_title(); ?></h1>	
	</div>
</div>
<div id="nosotros" class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<h3 class="p-3 text-secondary"><strong><i>Una biblioteca popular</i></strong><h3>
				<hr>
			<h5>
				es una <strong>asociación civil autónoma</strong> creada por la iniciativa de un grupo de vecinos de una comunidad. Ofrece servicios y espacios de <strong>consulta</strong>, <strong>expresión</strong> y <strong>desarrollo</strong> de actividades culturales, de la lectura y de extensión bibliotecaria en forma amplia, libre y pluralista.<br/><br/>

				<strong>Las bibliotecas populares</strong> son dirigidas y sostenidas principalmente por sus socios y brindan información, educación, recreación y animación socio-cultural, por medio de una colección bibliográfica y multimedial general y abierta al público.
			</h5>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="list-group">
			  <a href="http://localhost/proj/wordpressBIB/inicio/galeria/" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
			    <div class="d-flex w-100 justify-content-between">
			      <h5 class="mb-1"><strong>Imágenes</strong></h5>
			    </div>
			    <p class="mb-1">Imágenes de la comisión directiva, las instalaciones y enventos realizados en los espacios de la Biblioteca.</p>
			    <small class="pull-right text-muted">ver galería</small>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
			    <div class="d-flex w-100 justify-content-between">
			      <h5 class="mb-1"><strong>Historia</strong></h5>
			    </div>
			    <p class="mb-1">Creada por resolución Nº 39 de la Comisión de Fomento de Oberá, con la firma de su presidente Dr. Gil Navarro, en Oberá el 9 de Septiembre de 1946, comenzó a prestar servicios al público el 30 de noviembre de 1947 en Villa Svea, sector oeste de la ciudad donde ésta fue fundada. (...) </p>
			    <small class="pull-right text-muted">seguir leyendo</small>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
			    <div class="d-flex w-100 justify-content-between">
			      <h5 class="mb-1"><strong>Organigrama Institucional</strong></h5>
			    </div>
			    <p class="mb-1">Conocé a la comisión directiva de la Biblioteca Popular Domingo Faustino Sarmiento.</p>
			    <small class="pull-right">ingresar</small>
			  </a>
			</div>
					
	</div>
	</div>
</div>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();
