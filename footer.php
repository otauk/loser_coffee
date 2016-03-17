<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package losercoffee
 */
?>

</div>

<div class="footer_bg">
	<div class="row footer">
		<div class="col-md-2 footerBorder noshow">
			<h2>Allgemein</h2>
			<a href="<?php echo home_url('/ueber-uns/');?>">Über uns</a><br/>
			<a href="<?php echo home_url('/die-roesterei/');?>">Die Rösterei</a><br/>
			<a href="<?php echo home_url('/wissensdurst/');?>">Wissensdurst</a><br/>
			<a href="<?php echo home_url('/kontakt/');?>">Kontakt</a><br/>
			<a href="<?php echo home_url('/impressum/');?>">Impressum</a><br/>
			<a href="<?php echo home_url('/datenschutzbelehrung/');?>">Datenschutz</a><br/>
		</div>
		<div class="col-md-2 footerBorder noshow">
			<h2>Shop</h2>
			<a href="<?php echo home_url('/shop/');?>">Produkte</a><br/>
			<a href="<?php echo home_url('/versandarten/');?>">Versand</a><br/>
			<a href="<?php echo home_url('/zahlungsarten/');?>">Zahlungsarten</a><br/>
			<a href="<?php echo home_url('/agb/');?>">AGB</a><br/>
		</div>
		<div class="col-md-2 col-xs-6">
			<h2>Kontakt</h2>
			Loser Coffee<br/>
			Kilianstr. 2<br/>
			33098 Paderborn<br/>
			05251 | 2 07 53 21<br/>
			<a href="mailto:info@loser-coffee.de">info@loser-coffee.de</a>
		</div>
		<div class="col-md-2 noshow">

		</div>
		<div class="col-md-2 noshow">
			<div class="footerLogo"></div>
		</div>
		<div class="col-md-2 col-xs-6">
			<div class="footerBanner">

					<h2>Mein<br/> Warenkorb</h2>
					<div class="icon-warenkorb">
					</div>
					<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d', WC()->cart->get_cart_contents_count(), '' ), WC()->cart->get_cart_contents_count() ); ?> Artikel</a>
					<hr/>
					<div class="icon-geld">
					</div>
					<?php echo WC()->cart->get_cart_total(); ?>
					<hr/>
					<h2 class="white">
						<?php global $woocommerce; ?>
						<a href="<?php echo $woocommerce->cart->get_checkout_url();?>">
						>> Kasse
						</a></h2>

			</div>

		</div>
	</div>


</div><!-- .wrapper -->
</div>

<?php wp_footer(); ?>

</body>
</html>
