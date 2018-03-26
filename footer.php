<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<button onclick="topFunction()" id="myBtn" title="Subir">
<i class="fa fa-arrow-up"></i>
</button> 

<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div id="footer-contact" class="col-sm-12 col-md-6 col-lg-4 text-center">
				<hr/>
				<h5 class="text-muted">Medios de contacto</h5>
				
					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'secondary',
							'container_class' => '',
							'container_id'    => 'socialNav',
							'menu_class'      => 'nav navbar-expand-lg',
							'fallback_cb'     => '',
							'menu_id'         => 'social-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
					
					<a href="http://bibliotecasobera.org/contacto/" class="btn btn-block btn-secondary text-light">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</a>
			</div><!--col end -->

			<div class="col-sm-12 col-md-6 col-lg-8 text-center">
			<hr/>
			<h5 class="text-muted">Enlaces relacionados</h5>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<a target="_blank" href="http://www.conabip.gob.ar/">
							<img src="http://www.conabip.gob.ar/sites/default/files/logoConabip_color.png" alt="">
						</a>
					</div>					
					<div class="col-sm-12 col-md-6">
						<a target="_blank" href="https://www.cultura.gob.ar/">
							<img src="https://static.cultura.gob.ar/img/logo-mcn.6cb13ca1ecf0.png" alt="">
						</a>
					</div>
				</div>
			</div>
					

		</div><!-- row end -->

	<hr>

	<!-- Desarrolla gastoire -->
	<!-- <div id="g" class="col-sm-4 offset-sm-4 text-center pt-2"><a target="_blank" href="http://gastoire.com"><span>gastoire <small>empowering ideas</small></span><cite>desarrolla</cite><img src="http://bibliotecasobera.org/wp-content/uploads/2018/03/logo-borde1.png" alt="" width="23"></a></div> -->
	
	</div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script>
/**
 * UP TO TOP BUTTON
 */
// ===== Scroll to Top ==== 
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
</script>
</body>

</html>

