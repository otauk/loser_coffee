<?php /* Template Name: 2spaltig_mit_Slider */ ?>
<?php
/**
 * @package losercoffee
 */

get_header(); ?>
<div  class="headerImg">
	<?=header_img();?>
</div>
	<div class="row ueberuns">
		<div class="col-md-6">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title() ;?></h1>
				<?php the_content(); ?>

			<?php endwhile; else: ?>

			<p>Tut uns leid, diese Seite existiert nicht.</p>

			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<div class="teamfoto">
				<?php
					$page = get_page_by_title( 'About' );
					if (is_page('die-roesterei')) {
						echo do_shortcode('[smartslider3 slider=2]');
					}
					else echo do_shortcode('[smartslider3 slider=3]');

?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
