<div id="topo-interno">
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Engitech
 */

get_header();

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Spectral:wght@300;400;600&display=swap" rel="stylesheet">

</div>

<?php


if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) { ?>
	<div class="entry-contents sing-blog">
		<div class="container">
			<div class="row">
				<div id="primary" class="content-area <?php engitech_content_columns(); ?>">
					<main id="main" class="site-main">
						
					<div class="title-sing">
						<h1>veja os nossos conteúdos criados</h1>
						<h2><?php the_title();?></h2>
					</div>

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content','single' );

						// If comments are open or we have at least one comment, load up the comment template.
						/*if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->
				
				<?php get_sidebar(); ?>
			</div>
		</div>	
	</div>
<?php }

get_footer();