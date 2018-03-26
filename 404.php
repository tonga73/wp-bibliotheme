<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">
						<header class="page-header">

							<h1 class="page-title p-5 text-muted"><i class="fa fa-times" aria-hidden="true"></i> <?php esc_html_e( 'Disculpa, no se pudo encontrar la página que buscas.',
							'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">
							<div class="row">
								<div class="col-sm-12">
									<p class="text-right p-3"><?php esc_html_e( 'Al parecer no hay nada en esta ubicación. ¿Tal vez probando con alguno de estos enlaces o una búsqueda?',
									'understrap' ); ?></p>

									<div class="col-sm-10 offset-md-1">
										<?php get_search_form(); ?>
									</div>									
								</div>
								<!-- HR Small Down -->
								<div class="col-sm-4 offset-sm-4"><hr></div>

								<div class="col-sm-12 col-md-6">
									<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
								</div>
								<!-- HR Small Down -->
								<div class="col-sm-4 offset-sm-4 d-sm-block d-md-none"><hr></div>

								<div class="col-sm-12 col-md-6">
									<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

										<div class="widget widget_categories">

											<h2 class="widget-title"><?php esc_html_e( 'Categorías Destacadas', 'understrap' ); ?></h2>

											<ul>
												<?php
												wp_list_categories( array(
													'orderby'    => 'count',
													'order'      => 'DESC',
													'show_count' => 1,
													'title_li'   => '',
													'number'     => 10,
												) );
												?>
											</ul>

										</div><!-- .widget -->

									<?php endif; ?>									
								</div>
								<!-- HR Small Down -->
								<div class="col-sm-4 offset-sm-4 d-sm-block d-md-none"><hr></div>
								<!-- HR Medium Up -->
								<div class="col-sm-12 col-md-6 d-sm-none d-md-block">
									<hr>
								</div>
								<div class="col-sm-12 col-md-6 d-sm-none d-md-block">
									<hr>
								</div>

								<div class="col-sm-12 col-md-6">
									<?php

									/* translators: %1$s: smiley */
									$archive_content = '<p>' . sprintf( esc_html__( 'Intenta buscando en los archivos mensuales. %1$s', 'understrap' ), convert_smilies( ':)' ) ) . '</p>';
									the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );?>				
								</div>
								<!-- HR Small Down -->
								<div class="col-sm-4 offset-sm-4 d-sm-block d-md-none"><hr></div>

								<div class="col-sm-12 col-md-6">
									<?php
									the_widget( 'WP_Widget_Tag_Cloud' );
									?>									
								</div>
							</div>
						<div class="col-sm-4 offset-sm-4"><hr></div>
						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
