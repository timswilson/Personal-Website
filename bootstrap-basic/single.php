<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<div class="container">
<div class="row">
				<div class="col-xs-12 col-md-9 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', get_post_format());

							echo "\n\n";
							
							bootstrapBasicPagination();

							echo "\n\n";
							
							/*
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";
							*/
						} //endwhile;
						?> 
					<p class="text-center backToBlog"><a href="/blog"> Back to Blog </a></p>
					</main>
				</div>
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="instaSidebarLogo"><a href="https://www.instagram.com/tswilson21/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></div>
					<?php echo do_shortcode( '[instagram-feed id="222701849"]' ); ?>
					</div>
				</div>
</div>
</div>
<?php get_footer(); ?> 
