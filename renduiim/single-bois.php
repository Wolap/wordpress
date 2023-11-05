<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package renduIIM
 */

$dataRevetement = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<header class="page-header">
			<h1> <?php the_title(); ?> </h1>
		</header>

		<?php
		while ( have_posts() ) :
			the_post(); ?>
		<section class="infos-bois">
		
			<?php the_post_thumbnail(); ?>

            <div class="bois-info-txt">
                <div>
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p>
                </div>
                
            </div>


		</section>	

		<?php
		endwhile; 
		?>

	</main>

<?php
get_footer();