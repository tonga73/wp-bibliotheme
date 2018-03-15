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
					<!-- Link IMAGENES -->
				  <a href="http://localhost/proj/wordpressBIB/inicio/galeria/" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><strong><i class="fa fa-picture-o" aria-hidden="true"></i> Imágenes</strong></h5>
				    </div>
				    <p class="mb-1">Imágenes de la comisión directiva, las instalaciones y enventos realizados en los espacios de la Biblioteca.</p>
				    <small class="pull-right text-muted">ver galería</small>
				  </a>
				  <!-- Link HISTORIAS (modal)-->
				  <a href="#" type="button" data-toggle="modal" data-target="#exampleModalLong" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><strong><i class="fa fa-history" aria-hidden="true"></i> Historia</strong></h5>
				    </div>
				    <p class="mb-1">Creada por resolución Nº 39 de la Comisión de Fomento de Oberá, con la firma de su presidente Dr. Gil Navarro, en Oberá el 9 de Septiembre de 1946, comenzó a prestar servicios al público el 30 de noviembre de 1947 en Villa Svea, sector oeste de la ciudad donde ésta fue fundada. (...) </p>
				    <small class="pull-right text-muted">seguir leyendo</small>
					
				  </a>
					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div style="background-color:#333;min-width: 100%; height:100%; margin:0; padding:0;" class="modal-dialog bg-body" role="document">
					    <div style="height: auto; min-height:100%; border-radius:0;" class="modal-content bg-body">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Historia · <small class="text-muted">Biblioteca Popular Sarmiento | Oberá</small></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-12 col-md-8 offset-md-2">
										<hr>
										<h5>											
											Creada por resolución Nº 39 de la Comisión de Fomento de Oberá, con la firma de su presidente Dr. Gil Navarro, en Oberá el 9 de Septiembre de 1946, comenzó a prestar servicios al público el 30 de noviembre de 1947 en Villa Svea, sector oeste de la ciudad donde ésta fue fundada.<br/><br/>

											Al poco tiempo, recibió el nombre de “Eva Perón”, el que mantuvo hasta 1955 en que pasó a denominarse “Domingo Faustino Sarmiento”.-<br/><br/>

											La Biblioteca mantuvo siempre una estructura jurídica autónoma, si bien durante todos los años de su existencia fue ayudada por gobiernos nacionales, provinciales, municipales y personas jurídicas y físicas de la ciudad.-<br/><br/>

											También ha recibido mucha ayuda y colaboración de la Comisión Nacional Protectora de Bibliotecas Populares.-
											En cuanto a la colaboración de la Municipalidad de Oberá, ella consiste principalmente en la prestación de personal técnico y de servicios que queda afectada al funcionamiento de la entidad.-
											La biblioteca funciona durante todo el año y durante los días hábiles en un horario corrido de 7 a 19 hs.-<br/><br/>

											A través de las distintas etapas ha tenido su sede primero en Villa Svea, luego en Calle Gobernador Barreyro, donde ahora funcional el Honorable Concejo Deliberante de la ciudad, para trasladarse hasta su sede actual de calles Chaco y Gobernador Barreyro, en pleno centro de Oberá.-<br/>
										</h5>
									</div>
									<div class="col-sm-12 col-md-8 offset-md-2">
										<h5>											
											En ese lugar se levanta su actual magnífico edificio propio, construcción aun parcial. Este edificio fue construido mediante grandes sacrificios y durante varios años de labor, constantemente para ello con la colaboración de los gobiernos provinciales y municipales y especialmente de los socios y de la comunidad toda de Oberá. Es un edificio de dos plantas. En la actualidad se hallan totalmente terminados 544 metros cuadrados de superficie, que incluyen la amplia sala central, salas especiales y oficina. Una vez terminado todo el proyecto edilicio, la biblioteca va a contar con una superficie cubierta cercana a los 1000 metros cubiertos.<br/><br/>

											Cabe destacar también que la Biblioteca Popular Domingo Faustino Sarmiento de Oberá posee actualmente unos 30.000 libros, que comprenden todos los tópicos o materias. Asimismo reciben diariamente todos los principales diarios de la Provincia y los periódicos locales, como revistas y folletos literarios de todo tipo, los que están permanentemente a disposición de los lectores.-<br/><br/>

											La entrada a la biblioteca y la utilización de los textos es totalmente libre y gratuita para todos y los socios pueden retirar por tiempo determinado, novelas, textos de información general y libros varios, no así aquellos afectados al estudio. <br/><br/>

											Tal la historia resumida de uno de los baluartes culturales de la ciudad, orgullo de la misma y de toda la Provincia de Misiones, a través de sus 
												<?php
													echo date('y', strtotime("-1947 year"));
												?>
											largos años de vida.<br/><br/>
										</h5>
										<hr>
									</div>
								</div>
							</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- Link INSTITUCIONAL (modal) -->
				  <a href="#" type="button" data-toggle="modal" data-target="#exampleModalLong2" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><strong><i class="fa fa-sitemap" aria-hidden="true"></i> Organigrama Institucional</strong></h5>
				    </div>
				    <p class="mb-1">Conocé a la comisión directiva de la Biblioteca Popular Domingo Faustino Sarmiento.</p>
				    <small class="pull-right">ver</small>
				  </a>
					<!-- Modal 2-->
					<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div style="background-color:#333;min-width: 100%; height:100%; margin:0; padding:0;" class="modal-dialog" role="document">
					    <div style="height: auto; min-height:100%; border-radius:0;" class="modal-content bg-body">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Organigrama Institucional · <small class="text-muted">Biblioteca Popular Sarmiento | Oberá</small></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-12 text-center">
								       <h2>COMISIÓN DIRECTIVA  
											<?php
											echo date('Y');
											?>
								       </h2>
								       <hr>									
									</div>
									<div class="col-md-6">
							        	<ul class="list-group">
							        		<li class="list-group-item bg-body">
							        			<h4 class="list-group-item bg-main text-light">Presidente</h4>
							        			<h3 class="p-3 text-center"> Hugo Daniel Mitoire</h3>
							        		</li>
							        		<li class="list-group-item bg-body">
							        			<h4 class="list-group-item bg-main text-light">Vice - Presidenta</h4>
							        			<h3 class="p-3 text-center"> María Amelia Ponce</h3>
							        		</li>
							        		<li class="list-group-item bg-body">
							        			<h4 class="list-group-item bg-main text-light">Secretaria</h4>
							        			<h3 class="p-3 text-center"> Blanca Rios</h3>
							        		</li>
							        		<li class="list-group-item bg-body">
							        			<h4 class="list-group-item bg-main text-light">Pro - Secretaria</h4>
							        			<h3 class="p-3 text-center"> Susana Tröndle</h3>
							        		</li>
							        		<li class="list-group-item bg-body">
							        			<h4 class="list-group-item bg-main text-light">Tesorera</h4>
							        			<h3 class="p-3 text-center"> Mirtha Haydee Petry</h3>
							        		</li>
							        		<li class="list-group-item bg-body">
							        			<h4 class="list-group-item bg-main text-light">Pro - Tesorera</h4>
							        			<h3 class="p-3 text-center"> Elva Alicia Tatarinöf</h3>
							        		</li>
							        	</ul>							        
									</div>
									<div class="col-md-6">
										<ul class="list-group">
								        	<h4 class="list-group-item bg-dblue text-light">Vocales Titulares:</h4>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Primera</h5> <h3>Isolina Dos Santos</h3></li>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Segunda</h5> <h3>Susana Hortensia Guzmán</h3></li>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Tercera</h5> <h3>Ana María Grosco</h3></li>
								        	<h4 class="list-group-item bg-dblue text-light">Vocales Suplentes:</h4>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Primera</h5> <h3>Rosa E. Peruzzo</h3></li>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Segunda</h5> <h3>Rossana Szaban</h3></li>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Tercero</h5> <h3>Horacio Wall</h3></li>
								        	<h4 class="list-group-item bg-dblue text-light">Revisores de cuenta: </h4>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Primero</h5> <h3>Ernesto Rubén Maletti</h3></li>
								        		<li class="list-group-item bg-body"> <h5 class="list-group-item bg-main p-1 text-light">Segunda</h5> <h3>Graciela Esther Villanueva</h3></li>
							        	</ul>
									</div>
								</div>
								<hr>
							</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
				</div>
						
		</div>
		</div>
	</div>
</div>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();
