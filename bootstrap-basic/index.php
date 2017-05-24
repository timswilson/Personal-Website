<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

?>
<div class="container">
<div class="row">
				<div class="col-xs-12 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
					
						<?php if (have_posts()) { ?> 
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', get_post_format());
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
				</div>
				</div>
<?php get_footer(); ?> 