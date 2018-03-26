<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */

?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="assistive-text" for="s">
		<h4 class="m-0">
			<?php esc_html_e( 'Búsqueda', 'understrap' ); ?>				
		</h4>
	</label>
	<div class="input-group">
		<input class="field form-control mr-1" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Encontrar &hellip;', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
		<span class="input-group-btn">
			<input class="submit btn btn-secondary" id="searchsubmit" name="submit" type="submit"
			value="<?php esc_attr_e( 'Buscar', 'understrap' ); ?>">
	</span>
	</div>
</form>
