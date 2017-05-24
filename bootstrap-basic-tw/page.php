<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

?> 
<div class="container">
<div class="row">
 
				<div class="col-xs-12 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php 
						
						while (have_posts()) {
							the_post();

							get_template_part('content', 'page');

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
				</div>
				</div>
<?php get_footer(); ?> 