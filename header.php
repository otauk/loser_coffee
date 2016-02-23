<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package losercoffee
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'losercoffee' ); ?></a>
<div class="non-semantic-protector">
	<div class="ribbon">
		<div class="ribbon-fold">
			<nav id="site-navigation" class="mainNavigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'losercoffee' ); ?></button>
					<ul>
						<li><a href="<?php echo esc_url( get_permalink(6));?>">über uns</a></li>
						<li><a href="<?php echo esc_url( get_permalink(40));?>">die rösterei</a></li>
						<li><a href="<?php echo esc_url( get_permalink(12));?>">shop</a></li>
						<li class="logoSpacer"></li>
						<li><a href="<?php echo esc_url( get_permalink(30));?>">wissensdurst</a></li>
						<li><a href="<?php echo esc_url( get_permalink(37));?>">kontakt</a></li>
						<li class="checkout">
							<span class="icon-warenkorb"></span>
							<span class="">
								<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
									<?php echo sprintf (_n( '%d',WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>

								</a>
							</span>
							<span class="icon-geld"></span>
							<?php echo WC()->cart->get_cart_total(); ?>
						</li>
					</ul>
			</nav>
		</div>
	</div>
</div>

<div class="wrapper">
	<a href="willkommen"><div class="navLogo"></div></a>
	<div id="content" class="content">