<?php
/**
 * Template Name: Empty Asociarse Template
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
<div class="jumbotron-para paral page-servicios-hacerse-socio">
	<div class="container">
		<h1 class="display-3"><?php single_post_title(); ?></h1>	
	</div>
</div>
<div class="container">
	<div id="asociarse-requisitos" class="row">
		<div class="col-sm-12 col-md-6 p-5">
			<h4>
			<u>El ingreso a la Biblioteca es libre y gratuito</u>

			<br/><br/>

			Para <strong>ASOCIARSE</strong> a la Biblioteca y retirar material de lectura, deberá abonar la cuota societaria correspondiente, otorgar datos de identificación al personal de mesa de entrada y presentar alguno de los documentos requeridos
			</h4>	
		</div>
		<div class="col-sm-12 col-md-6">
			<h3>Requisitos</h3>
			<ul>
				<li>
					<p>
						Fotocopia de DNI
					</p>
				</li>
				<li>
					<p>
						Boleta de servicio
					</p>
				</li>
				<li>
					<p>
						Certificado de residencia <br/><small class="text-muted">(Indispensable contar con domicilio en Oberá)</small>
					</p>
				</li>	
			</ul>	
		</div>	
	</div>
	<hr>
	<div id="asociarse-table" class="row text-center">
	<div class="col-sm-12">
		<h3>Abonos *</h3>
	</div>
		<div id="estudiante" class="col-sm-12 col-md-8 offset-md-2 col-lg-4 offset-lg-0">
			<h4>Socio Estudiante</h4>
			<span>Inscipción</span>
			<p>40</p>
			<span>Cuota Mensual</span>
			<p>20</p>
		</div>
		<div id="comun" class="col-sm-12 col-md-8 offset-md-2 col-lg-4 offset-lg-0">
			<h4>Socio Común</h4>
			<span>Inscipción</span>
			<p>80</p>
			<span>Cuota Mensual</span>
			<p>40</p>
		</div>
		<div id="protector" class="col-sm-12 col-md-8 offset-md-2 col-lg-4 offset-lg-0">
			<h4>Socio Protector</h4>
			<span>Inscipción</span>
			<p>160</p>
			<span>Cuota Mensual</span>
			<p>80</p>
		</div>
		<div id="precios-info" class="col-sm-12">
			<small class="text-center">* Precios de abonos en PESOS ARGENTINOS. Los montos actuales están sujetos a modificaciones sin previo aviso.</small>	
		</div>
	</div>
	
</div>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();
