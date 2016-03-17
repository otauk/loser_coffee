<?php /* Template Name: customKontakt */ ?>
<?php
/**
 * @package losercoffee
 */

get_header(); ?>
<div  class="headerImg">
	<?=header_img();?>
</div>
	<div class="row kontakt">
		<div class="col-md-6">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title() ;?></h1>
				<?php the_content(); ?>

			<?php endwhile; else: ?>

			<p>Tut uns leid, diese Seite existiert nicht.</p>

			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2472.014169174792!2d8.749601316342055!3d51.7144833033607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ba4cbdaa08b2cb%3A0x28cedad173bab0b!2sKilianstra%C3%9Fe+2%2C+33098+Paderborn!5e0!3m2!1sde!2sde!4v1455873189226" width="600" height="450" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
	</div>
<?php get_footer(); ?>