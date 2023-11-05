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
		<section class="infos-revet">
		
			<?php the_post_thumbnail(); ?>

            <div class="revet-info-txt">
                <div>
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p>
                </div>
                
				<h2> Informations revêtement</h2>
                <div class="caracteristiques">
					<div>
						<p>Rapidité : <?= $dataRevetement['rapidite'] ?></p>
						<p>Contrôle : <?= $dataRevetement['controle'] ?></p>
					</div>
					<div>
						<p>Adhérence : <?= $dataRevetement['adherence'] ?> </p>

						<p>Epaisseur : <?= $dataRevetement['epaisseur']['value'] ?></p>
					</div>
                </div>
            </div>


		</section>	

		<?php
		endwhile; 
		?>

	</main>

<?php
get_footer();