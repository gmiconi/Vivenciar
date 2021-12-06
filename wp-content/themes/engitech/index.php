<div id="topo-interno">
<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Engitech
 */

get_header();

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Spectral:wght@300;400;600&display=swap" rel="stylesheet">

</div>



<div class="entry-content">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area <?php engitech_content_columns(); ?>">
				<main id="main" class="site-main">

					<div class="title-sing">
						<h1>veja os nossos conteúdos criados</h1>
						<h2>Nosso Blog</h2>
					</div>

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					engitech_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>
		</div>
	</div>	
</div>

<?php
get_footer();