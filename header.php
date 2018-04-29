<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="hfeed site" id="page">


	<!-- ******************* The Navbar Area ******************* -->
	<header>
		<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
			<nav class="nav navbar navbar-expand-md justify-content-between">

				<?php if ( 'container' == $container ) : ?>
					<div class="container">
				<?php endif; ?>
								<!-- Menú Social -->
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'secondary',
										'container_class' => '',
										'container_id'    => 'socialNav',
										'menu_class'      => 'nav',
										'fallback_cb'     => '',
										'menu_id'         => 'social-menu',
										'walker'          => new understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>								

								<!-- Menú de Registro -->
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'register',
										'container_class' => '',
										'container_id'    => 'registerNav',
										'menu_class'      => 'nav pull-right',
										'fallback_cb'     => '',
										'menu_id'         => 'register-menu',
										'walker'          => new understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>			
				<?php if ( 'container' == $container ) : ?>
					</div><!-- .container -->
				<?php endif; ?>

			</nav><!-- .site-navigation -->

			<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
			'understrap' ); ?></a>

			<nav class="navbar navbar-expand-md">

			<?php if ( 'container' == $container ) : ?>
				<div class="container">
			<?php endif; ?>

						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

							<?php if ( is_front_page() && is_home() ) : ?>

								<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
								
							<?php else : ?>

								<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
							
							<?php endif; ?>
							
						
						<?php } else {
							the_custom_logo();
						} ?><!-- end custom logo -->

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						 Menú <i class="fa fa-bars" aria-hidden="true"></i>
					</button>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse justify-content-end',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				<?php if ( 'container' == $container ) : ?>
				</div><!-- .container -->
				<?php endif; ?>

			</nav><!-- .site-navigation -->

			<form class="modal multi-step" id="demo-modal-3">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <h4 class="modal-title step-1" data-step="1">Step 1</h4>
			                <h4 class="modal-title step-2" data-step="2">Step 2</h4>
			                <h4 class="modal-title step-3" data-step="3">Final Step</h4>
			                <div class="m-progress">
			                    <div class="m-progress-bar-wrapper">
			                        <div class="m-progress-bar">
			                        </div>
			                    </div>
			                    <div class="m-progress-stats">
			                        <span class="m-progress-current">
			                        </span>
			                        /
			                        <span class="m-progress-total">
			                        </span>
			                    </div>
			                    <div class="m-progress-complete">
			                        Completed
			                    </div>
			                </div>
			            </div>
			            <div class="modal-body step-1" data-step="1">
			                This is step 1.
			            </div>
			            <div class="modal-body step-2" data-step="2">
			                This is the second step.
			            </div>
			            <div class="modal-body step-3" data-step="3">
			                This is the final step.
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent('#demo-modal-3', 2)">Continue</button>
			                <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 1)">Back</button>
			                <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 3)">Continue</button>
			            </div>
			        </div>
			    </div>
			</form>
			
		</div><!-- .wrapper-navbar end -->		
	</header>
