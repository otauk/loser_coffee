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


<div  class="headerImg"></div>

<div class="row">
	<div class="col-md-12">
		<div class="spacing">
			<h1>Herzlich willkommen</h1>
			<div class="zweispaltig">
				Heutzutage existieren Geräte welche wesentlich kleinere Bildpunkte darstellen können (auch wenn Sie wohl eine Lupe brauchen um sie zu erkennen). Aber Dokumente aus dem letzten Jahrhundert welche px in CSS nutzten sehen noch immer gleich aus, unabhängig vom verwendeten Gerät. Drucker im Speziellen können Linien, wesentlich kleiner als 1px, darstellen, eine 1px Linie sieht aber ziemlich genauso aus wie auf dem Monitor. Geräte ändern sich, aber px besitzt immer das gleiche Aussehen.
			</div>
		</div>
	</div>
</div>

<div class="coffeebeansborder"></div>

<div class="row sortiment">
	<div class="col-md-12">
		<h2>Unser Sortiment</h2>
	</div>
		<div class="col-md-4">
			<a href="" class="imglink">
				<div class="frame">
					<img src="<?php echo get_template_directory_uri(); ?>/img/kaffeebohnen_frisch.jpg" />
					<div class="text">
						<span class="handmade">Handmade</span><span class="category">Coffee</span><span class="arrows"></span>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="" class="imglink">
				<div class="frame">
					<img src="<?php echo get_template_directory_uri(); ?>/img/kaffeebohnen_frisch.jpg" />
					<div class="text">
						<span class="handmade">Handmade</span><span class="category">Espresso</span><span class="arrows"></span>
					</div>
				</div>

		</div>
		<div class="col-md-4">
			<a href="" class="imglink">
				<div class="frame">
				<img src="<?php echo get_template_directory_uri(); ?>/img/kaffeebohnen_frisch.jpg" />
					<div class="text">
						<span class="category">Probierpakete</span><span class="arrows"></span>
					</div>
				</div>
			</a>
		</div>
</div>

<div class="row kaffekunde">
	<div class="col-md-6">
		<h2>Kleine Kaffeekunde</h2>
		Heutzutage existieren Geräte welche wesentlich kleinere Bildpunkte darstellen können (auch wenn Sie wohl eine Lupe brauchen um sie zu erkennen). Aber Dokumente aus dem letzten Jahrhundert welche px in CSS nutzten sehen noch immer gleich aus, unabhängig vom verwendeten Gerät. Drucker im Speziellen können Linien, wesentlich kleiner als 1px, darstellen, eine 1px Linie sieht aber ziemlich genauso aus wie auf dem Monitor. Geräte ändern sich, aber px besitzt immer das gleiche Aussehen.
		<p>
			<a href="">weiterlesen </a>
		</p>
	</div>
	<div class="col-md-2">
		<div class="frame">
				<img src="" />
			</div>

	</div>
	<div class="col-md-2">
		<div class="frame">
				<img src="" />
			</div>

	</div>
	<div class="col-md-2">
		<div class="frame">
				<img src="" />
			</div>

	</div>
</div>



<?php get_footer(); ?>
