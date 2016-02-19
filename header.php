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
		<a href="willkommen"><div class="navLogo"></div></a>
<div class="non-semantic-protector">
	<div class="ribbon">
		<div class="ribbon-fold">
			<nav id="site-navigation" class="mainNavigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'losercoffee' ); ?></button>
					<ul>
						<li><a href="ueber-uns">über uns</a></li>
						<li><a href="die-roesterei">die rösterei</a></li>
						<li><a href="shop">shop</a></li>
						<li class="logoSpacer"></li>
						<li><a href="wissensdurst">wissensdurst</a></li>
						<li><a href="kontakt">kontakt</a></li>
						<li class="checkout">
							<span class="icon-warenkorb"></span>
							<span class="">[$items]</span>
							<span class="icon-geld"></span>
							[$amount]
						</li>
					</ul>
			</nav>
		</div>
	</div>
</div>

<div class="wrapper">
	<div id="content" class="content">