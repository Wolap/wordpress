<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package renduIIM
 */

get_header();
?>

<main id="primary" class="site-main">

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1>Nos revêtements</h1>
	</header>

	<section class="container-revet">
	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post(); ?>

	<article class="card-revet"> 
		<?php the_post_thumbnail(); ?>
		<a href="<?php the_permalink(); ?>"> <?php the_title() ?></a>
	</article>

	<?php
	endwhile; ?>
	</section>

	<?php the_posts_navigation(); ?>

<?php else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->

<?php
get_footer();
