<?php /* Template Name: customWillkommen */ ?>
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


<div  class="headerImg">
	<?=header_img();?>
</div>
<div class="row willkommen">
	<div class="col-md-12">
				<h1><?php the_title() ;?></h1>
			<div class="zweispaltig">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php
					clean_text();

					 ;?>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div>
	</div>
</div>

<div class="coffeebeansborder"></div>

<div class="row sortiment">
	<div class="content">
	<div class="col-md-12">
		<h2>Unser Sortiment</h2>
	</div>
		<div class="col-md-4">
			<a href="<?php echo home_url('/produkt-kategorie/coffee');?>" class="imglink">
				<div class="frame">
					<img src="<?php echo get_template_directory_uri(); ?>/img/kaffee_onlineshop.jpg" />
					<div class="text">
						<span class="handmade">Handmade</span><span class="category">Coffee</span><span class="arrows"></span>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?php echo home_url('/produkt-kategorie/espresso');?>" class="imglink">
				<div class="frame">
					<img src="<?php echo get_template_directory_uri(); ?>/img/espresso.jpg" />
					<div class="text">
						<span class="handmade">Handmade</span><span class="category">Espresso</span><span class="arrows"></span>
					</div>
				</div>

		</div>
		<div class="col-md-4">
			<a href="<?php echo home_url('/produkt-kategorie/probierpakete');?>" class="imglink">
				<div class="frame">
				<img src="<?php echo get_template_directory_uri(); ?>/img/probierpaket.jpg" />
					<div class="text">
						<span class="category">Probierpakete</span><span class="arrows"></span>
					</div>
				</div>
			</a>
		</div>
		</div>
</div>

<?php
	// kaffeekunde post
$post = get_page_by_title('Kleine Kaffeekunde', OBJECT, 'post');
$title = $post->post_title;
$content = $post->post_content;
?>
<div class="row kaffekunde">
	<div class="col-md-6">
		<h2><?=$title;?></h2>
		<p>
			<?=$content;?>
		</p>
		<p>
 			<a class="forward" href="wissensdurst">weiterlesen </a>
 		</p>
	</div>
	<div class="col-md-2">
		<div class="frame">
				<img src="<?php echo get_template_directory_uri(); ?>/img/espressobar_paderborn.jpg" />
			</div>

	</div>
	<div class="col-md-2">
		<div class="frame">
				<img src="<?php echo get_template_directory_uri(); ?>/img/exclusive_kaffee_paderborn.jpg" />
			</div>

	</div>
	<div class="col-md-2">
		<div class="frame">
				<img src="<?php echo get_template_directory_uri(); ?>/img/kaffebohnen_gemahlen.jpg" />
			</div>

	</div>
</div>



<?php get_footer(); ?>
