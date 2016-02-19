<?php /* Template Name: 1spaltig */ ?>
<?php
/**
 * @package losercoffee
 */

get_header(); ?>
<div  class="headerImg">
	<?=header_img();?>
</div>
	<div class="row ueberuns">
		<div class="col-md-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title() ;?></h1>
				<?php the_content(); ?>

			<?php endwhile; else: ?>

			<p>Tut uns leid, diese Seite existiert nicht.</p>

			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
