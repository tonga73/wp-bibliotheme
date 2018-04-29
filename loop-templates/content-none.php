<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

?>

<section class="no-results not-found">

	<header class="page-header">

		<h1 class="page-title"><?php esc_html_e( 'No se ha encontrado nada.', 'understrap' ); ?></h1>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( '¿List@ para publicar tu primera entrada? <a href="%1$s">Empezá acá</a>.', 'understrap' ), array(
	'a' => array(
		'href' => array(),
	),
) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Disculpa, pero no han habido coincidencias entre los términos buscados. Procura intentarlo de nuevo con palabras claves diferentes.', 'understrap' ); ?></p>
			<hr>
			<?php
				get_search_form();
		else : ?>

			<p><?php esc_html_e( 'Parece que no pudimos encontrar lo que buscabas. Tal vez otra búsqueda ayude:', 'understrap' ); ?></p>
			<?php
				get_search_form();
		endif; ?>
	</div><!-- .page-content -->
	
</section><!-- .no-results -->
