<?php
/**
 * Template Name: Empty Información Ciudadana Template
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
<div class="jumbotron-para paral page-servicios-servicio-ciudadano">
	<div class="container">
		<h1 class="display-3"><?php single_post_title(); ?></h1>	
	</div>
</div>
<div class="container">
	<div id="servicio-ciudadano" class="row">
		<div class="col-sm-12 col-md-6 p-5">
			<h5>
				Contamos con servicio de <strong>Información al Ciudadano</strong>, el cual está destinado a brindar información de todo tipo y orientación en general. <br/><br/>

				Este servicio brinda el acceso a información del ámbito Municipal, Provincial y Nacional contando con el apoyo y asistencia técnica de la <a target="_blank" href="http://conabip.gob.ar/"><button class="btn btn-sm btn-outline-secondary"><i class="fa fa-external-link"></i> CONABIP</button></a> <br/><br/>

				Para nosotros es fundamental apoyar y fortalecer el rol de la <strong>Biblioteca Popular como Centro de Información</strong> en el cual todo ciudadano pueda acceder al conocimiento de sus derechos y encontrar respuestas a sus inquietudes. <br/><br/>
				A través de este servicio podrán realizar los <i>trámites</i> listados.
			</h5>		
		</div>
		<div class="col-sm-12 col-md-6">
			<h3>Trámites</h3>
			<ul>
			    <li>
			        Turnos en ANSES y PAMI
			    </li>
			    <li>
			        Constancia de CUIL y CUIT
			    </li>
			    <li>
			        Certificado de Negativa <small>(ANSES)</small>
			    </li>
			    <li>
			        CODEM <small>(ANSES)</small>
			    </li>
			    <li>
			        Seguimiento de Expediente <small>(ANSES)</small>
			    </li>
			    <li>
			        Formulario de Asignación Universal por hijo, presentación de libreta <small>(ANSES)</small>
			    </li>
			    <li>
			        Formulario Asignación por Ayuda Escolar Anual <small>(ANSES)</small>
			    </li>
			    <li>
			        Formularios Plan Progresar <small>(ANSES)</small>
			    </li>
			    <li>
			        Inscripciones al Boleto Estudiantil Gratuito
			    </li>
			    <li>
			        Teléfonos y direcciones de servicio públicos, privados e instituciones de la ciudad
			    </li>
			    <li>
			        Impresión de Curriculum
			    </li>
			    <li>
			        Búsqueda de información en general en linea
			    </li>
			    <li>
			        Redacción de notas
			    </li>
			</ul>
		</div>
	</div>
	
</div>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();
