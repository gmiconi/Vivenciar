<div id="topo-interno">
<?php

/**
* Template Name: Quem Somos
*
*/

get_header();

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Spectral:wght@300;400;600&display=swap" rel="stylesheet">

</div>

<?php

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) { ?>
	<div class="entry-contents">
		<div class="container">
			<div class="row">
				<div id="primary" class="content-area <?php engitech_content_columns(); ?>">
					<main id="main" class="site-main">

						<div class="title-sing">
							<h1>aranda consultoria empresarial</h1>
							<h2>Quem Somos</h2>
						</div>
						
					<?php
					while ( have_posts() ) :
						the_post();

						?>

						<div class="row-h">
						  
						  <div class="column-100">
						  	<?php the_content()?>
						  </div>
						</div>
						<?php 
						//if( engitech_get_option('post_nav') ) engitech_single_post_nav(); ?>
						<?php

						//get_template_part( 'template-parts/content','single' );


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