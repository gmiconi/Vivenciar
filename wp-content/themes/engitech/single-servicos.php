
<?php

get_header();

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) { ?>
	<div class="entry-contents">
		<div class="container">
			<div class="row">
				<div id="primary" class="content-area <?php engitech_content_columns(); ?>">
					<main id="main" class="site-main">

						<div class="title-sing">
							<img src="<?php echo get_template_directory_uri(); ?>/images/tit-single-post-type.png" width="200">
						</div>
						
					<?php
					while ( have_posts() ) :
						the_post();

						?>

						<div class="row-h">
						  <div class="column-40">
						  	<div class="img-h">
						  	<?php the_post_thumbnail()?>
						  	</div>
						  </div>
						  <div class="column-60">
							<h1><?php the_title()?></h1>
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