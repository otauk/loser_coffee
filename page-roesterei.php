<?php /* Template Name: customRoesterei */ ?>
<?php
/**
 * @package losercoffee
 */

get_header(); ?>
	<div class="row roesterei">
		<div class="col-md-6">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title() ;?></h1>
				<?php the_content(); ?>

			<?php endwhile; else: ?>

			<p>Tut uns leid, diese Seite existiert nicht.</p>

			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<div class="maschine">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
