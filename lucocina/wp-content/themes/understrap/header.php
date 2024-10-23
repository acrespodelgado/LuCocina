<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
	<link href="<?php echo get_site_url();?>/wp-content/themes/understrap/css/hamburgers.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar" class="fixed-top transparent">
	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
	<nav id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" id="closeNav">
			<img src="<?php echo get_site_url();?>/img/icon_close.svg" alt="<?php _e( 'Close icon', 'understrap-master' ); ?>">
		</a>
		<!-- The WordPress Menu goes here -->
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'overlay-content',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		); ?>
	</nav>

	<nav id="main-nav" class="navbar" aria-labelledby="main-nav-label">
		<div class="fixed-action-btn">
			<!--
			<button class="btn-floating hamburger hamburger--collapse" type="button" id="openNav" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			-->
			<button class="btn-floating btn-lg gold" id="openNav" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<span class="lnr lnr-menu"><img src="<?php echo get_site_url();?>/img/menu.svg" alt="<?php _e( 'Menu icon', 'understrap-master' ); ?>"></span>
			</button>
		</div>

		<!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ): ?>
			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="logo logo-text" src="<?php echo get_site_url() . (get_page_template_slug() == 'page-templates/page-concepto.php' ? 
				'/img/logo_white.svg' : '/img/logo_gold.svg'); ?>" alt="<?php _e('Lú Cocina', 'understrap-master'); ?>">
			</a>
		<?php endif; ?>
		<div class="button-block text-right">
			<div class="d-none d-md-block">
				<a href="<?php echo get_site_url(); ?>/reservas" title= "<?php _e( 'Reserva', 'understrap-master' ); ?>" class="btn btn-gold"><?php _e( 'Reserva', 'understrap-master' ); ?></a>
				<a href="/tienda" title= "<?php _e( 'Tienda', 'understrap-master' ); ?>" class="btn btn-gold"><?php _e( 'Tienda', 'understrap-master' ); ?></a>
			</div>
			<div class="d-block d-md-none">
				<a href="<?php echo get_site_url(); ?>/reservas"  title= "<?php _e( 'Reserva', 'understrap-master' ); ?>" ><img src="<?php echo get_site_url();?>/img/reserva_icon.svg" alt="<?php _e( 'Reservas icon', 'understrap-master' ); ?>"></a>
				<a href="/tienda" title= "<?php _e( 'Tienda', 'understrap-master' ); ?>"><img src="<?php echo get_site_url();?>/img/tienda_icon.svg" alt="<?php _e( 'Tienda icon', 'understrap-master' ); ?>"></a>
			</div>
		</div>
	</nav><!-- .navbar -->
</div><!-- #wrapper-navbar end -->
