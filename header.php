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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
						<li><a href="<?php echo home_url('/ueber-uns/');?>">über uns</a></li>
						<li><a href="<?php echo home_url('/die-roesterei/');?>">die rösterei</a></li>
						<li ><a href="<?php echo home_url('/shop/');?>">shop</a></li>
						<li class="logoSpacer"><a href="<?php echo home_url('/wissensdurst/');?>">wissensdurst</a></li>
						<li><a href="<?php echo home_url('/kontakt/');?>">kontakt</a></li>
					</ul>

						<div class="checkout">
							<a href="<?php echo home_url('/my-account/');?>"><i class="fa fa-user faicon-login"></i>LOGIN</a>
							<span class="icon-warenkorb"></span>
							<span class="">
								<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
									<?php echo sprintf (_n( '%d',WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>

								</a>
							</span>
							<span class="icon-geld"></span>
							<?php echo WC()->cart->get_cart_total(); ?>
						</div>

			</nav>
		</div>
	</div>
</div>

<div class="wrapper">
	<a href="willkommen"><div class="navLogo"></div></a>
	<div id="content" class="content">