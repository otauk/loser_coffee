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

get_header(); ?>
<div class="row zubereitung">
	<div class="col-md-12">
			<h1>Bevorzugte Zubereitungsart</h1>
			<ul>
				<li>
					<a class="vollautomat" href="/loser_coffee/shop/"></a>
				</li>
				<li>
					<a class="filterkaffee" href="/loser_coffee/produkt-kategorie/filter/"></a>
				</li>
				<li>
					<a class=" herdkanne" href="/loser_coffee/produkt-kategorie/herdkanne/"></a>
				</li>
				<li>
					<a class=" frenchpress" href="/loser_coffee/produkt-kategorie/frenchpress"></a>
				</li>
				<li>
					<a class=" siebträger" href="/loser_coffee/produkt-kategorie/siebtraeger"></a>
				</li>
				<li>
					<a class=" vollautomat" href="/loser_coffee/produkt-kategorie/vollautomat"></a>
				</li>
			</ul>
	</div>
</div>

<div class="row shopItems">
	<div class="col-md-12">
		<?php woocommerce_content(); ?>
	</div>
</div>
<?php get_footer(); ?>