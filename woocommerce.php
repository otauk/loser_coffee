<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package losercoffee
 */

get_header();
?>
<div class="row zubereitung">
	<div class="col-md-12">
			<h1>Bevorzugte Zubereitungsart</h1>
			<ul>
				<?php
					$sortBy = array("alle", "filter", "herdkanne", "frenchpress", "siebtraeger", "vollautomat");
					foreach ($sortBy as $sortAs) {
						// Zeige Alle
						if ($sortAs == $sortBy[0]) {
							echo "<li><a class='$sortAs' href='".home_url('/shop/')."'></a></li>";
						}
						// Filter anwenden
						else echo "<li><a class='$sortAs' href='".home_url('/produkt-kategorie/'.$sortAs.'')."'></a></li>";
					}
					?>
			</ul>
	</div>
</div>

<div class="row shopItems">
	<div class="col-md-12">
		<?php woocommerce_content(); ?>
	</div>
</div>
<?php get_footer(); ?>