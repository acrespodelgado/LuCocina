<?php
/**
 * Template Name: Concepto Page
 *
 * Template para Página Concepto
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="green-background" id="concepto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 content-area" id="primary">
					<main class="site-main" id="main" role="main">
						<div class="row">
							<div class="col-12 col-md-6">
								<p class="extra-big"><?php _e( 'En nuestro restaurante en Jerez LÚ disfrutarás de un concepto Chefs Table, 
								donde nuestro equipo de forma transparente y silenciosa cocinará ante tus ojos.', 'understrap-master' ); ?></p>
								<img src="<?php echo get_site_url();?>/img/concepto_2.png" alt="<?php _e( 'Concepto 2', 'understrap-master' ); ?>" class="img-responsive" />
							</div>
							<div class="col-12 col-md-6">
								<img src="<?php echo get_site_url();?>/img/concepto_1.png" alt="<?php _e( 'Concepto 1', 'understrap-master' ); ?>" class="img-responsive" />
								<p><?php _e( 'El prestigioso arquitecto mexicano Jean Porsche ha querido crear este ambiente único e inmersivo para que disfrutes al máximo de nuestra experiencia gastronómica. 
								Una decoración sutil que acompaña a cada plato sin robarle su protagonismo. Una estructura que te invita a recorrer el espacio hasta descubrir que te has colado en nuestra cocina.'
								, 'understrap-master' ); ?></p>
								<p><?php _e( '“La cocina tiene que ir acompañada de una experiencia global, y en ello se incluye el ambiente y la decoración.”', 'understrap-master' ); ?></p>
								<p><?php _e( 'Jean Porsch', 'understrap-master' ); ?></p>
							</div>
						</div>
					</main>
				</div><!-- #primary -->
			</div><!-- .row -->
		</div><!-- #content -->
	</div>
</div>

<?php
get_footer();
