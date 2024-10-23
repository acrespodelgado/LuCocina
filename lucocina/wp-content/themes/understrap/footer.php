<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<footer class="site-footer" id="colophon">
		<div class="green-background">
			<div class="img-background"></div>
			<!--<img src='<?php echo get_site_url();?>/img/Mapa_Jerez.svg' alt='<?php _e( 'Mapa Jerez', 'understrap-master' ); ?>' class="img-responsive img-background">-->
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="row">
							<div class="col-12 col-md-7">
								<span><?php _e( 'Our location & charm', 'understrap-master' ); ?></span>
								<h3><?php _e( 'Lorem Ipsum do Unit', 'understrap-master' ); ?></h3>
							</div>
							<div class="col-12 col-md-6">
								<p>
									<?php _e( 'Lú es un universo único donde la alta cocina fusiona con gusto Andalucía con las técnicas francesas clásicas.', 'understrap-master' ); ?>
								</p>
								<p>	
									<?php _e( 'En nuestro restaurante en Jerez, LÚ Cocina y Alma disfrutarás de un concepto Chefs Table, donde nuestro equipo de forma transparente y silenciosa cocinará ante tus ojos.', 'understrap-master' ); ?>
								</p>
								<a href="<?php echo get_site_url();?>/contacto" class="btn btn-gold"><?php _e( 'Contacto', 'understrap-master' ); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="blue-background">
			<div class="container">
				<div class="row social-networks">
					<div class="col-12 text-center">
						<p class="big"><?php _e( 'Síguenos', 'understrap-master' ); ?></p>
						<ul class="m-0 list-unstyled list-inline">
							<li class="list-inline-item">
								<a href="https://www.facebook.com/LuCocinayAlma/" target="_blank" title="<?php _e( 'Lu Facebook', 'understrap-master' ); ?>">
									<img src='<?php echo get_site_url();?>/img/facebook_icon.svg' alt='<?php _e( 'Lu Facebook', 'understrap-master' ); ?>' class="img-responsive icon">
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.instagram.com/lucocinayalma/" target="_blank" title="<?php _e( 'Lu Instagram', 'understrap-master' ); ?>">
									<img src='<?php echo get_site_url();?>/img/instagram_icon.svg' alt='<?php _e( 'Lu Instagram', 'understrap-master' ); ?>' class="img-responsive icon">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row bordered">
					<div class="col-12 col-md-6">
						<h3><a href="<?php echo get_site_url();?>/conocenos" title="<?php _e( 'Conócenos', 'understrap-master' ); ?>"><?php _e( 'Conócenos', 'understrap-master' ); ?></a></h3>
						<h4><a href="<?php echo get_site_url();?>/menu" title="<?php _e( 'Menú', 'understrap-master' ); ?>"><?php _e( 'Menú', 'understrap-master' ); ?></a></h4>
					</div>
					<div class="col-12 col-md-6">
						<h3><a href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Contacto', 'understrap-master' ); ?>"><?php _e( 'Contacto ', 'understrap-master' ); ?></a></h3>
						<div class="row">
							<div class="col-12 col-md-6">
								<h4><?php _e( 'Email', 'understrap-master' ); ?></h4>
								<span><a href="mailto:info@lucocinayalma.com" target="_blank"><?php _e( 'info@lucocinayalma.com', 'understrap-master' ); ?></a></span>
						</div>
							<div class="col-12 col-md-6">
								<h4><?php _e( 'Ubicación', 'understrap-master' ); ?></h4>
								<span><a href="https://maps.app.goo.gl/aLmM2hn2iF7bg47x8" target="_blank"><?php _e( 'C/Zaragoza, 2', 'understrap-master' ); ?></a></span><span><?php _e( 'Jerez De La Frontera', 'understrap-master' ); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row site-info">
					<div class="col-12 col-md-6">
						<ul class="m-0 list-unstyled list-inline float-md-left">
							<li class="list-inline-item"><a href="<?php echo get_site_url();?>/aviso-legal" title="<?php _e( 'Aviso legal', 'understrap-master' ); ?>"><?php _e( 'Aviso legal ', 'understrap-master' ); ?></a></li>
							<li class="list-inline-item"><a href="<?php echo get_site_url();?>/politica-privacidad" title="<?php _e( 'Política de privacidad', 'understrap-master' ); ?>"><?php _e( 'Política de privacidad', 'understrap-master' ); ?></a></li>
							<li class="list-inline-item"><a href="<?php echo get_site_url();?>/politica-cookies" title="<?php _e( 'Política de cookies', 'understrap-master' ); ?>"><?php _e( 'Política de cookies', 'understrap-master' ); ?></a></li>
						</ul>
					</div>
					<div class="col-12 col-md-6 text-right-md">
						<p><?php _e( 'LÚ ', 'understrap-master' ); ?><?php echo date("Y"); ?></p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

