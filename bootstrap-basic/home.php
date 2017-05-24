<?php
/**
 * The main template file
 * sftp://timswils:@ftp.timswilson.com//home/timswils/public_html/timswilson/wp-content/themes/bootstrap-basic/css/timswilson.css
 * @package bootstrap-basic
 */

get_header();

?>
<div class="container">
<div class="row">
				<div class="col-xs-12 col-md-9 content-area" id="main-column">
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
				<div class="col-md-3 hidden-xs hidden-sm">
				<div class="instaSidebarLogo"><a href="https://www.instagram.com/tswilson21/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></div>
				<?php echo do_shortcode( '[instagram-feed id="222701849"]' ); ?>
				</div>
				</div>
				</div>
<?php get_footer(); ?>
