<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<article id="post-<?php the_ID()?>">
		<p class="dateCategory"> <?php the_date();  ?> | <?php the_category( '&bull;' ); ?></p>
		<h3 class="entry-title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a></h3>
		
		
		<!-- Remove need to figure out how I want to display this
		<?php if ( has_post_thumbnail()) : ?> 
			<div id="fp_featuredImage">
			
				<a href="%3C?php%20the_permalink();%20?%3E" title="<?php the_title_attribute(); ?>">			
					<div id="overlay"></div>
					<span class="imagePlaceholder">
					<?php the_field('focal_point_featured_image'); ?>
					</span>
				</a> 
			</div>
		<?php endif; ?> 
		-->
		
		
		<?php if (is_search()) { // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<div class="clearfix"></div>
		</div><!-- .entry-summary -->
		<?php } else { ?>
		<div class="entry-content">
			<?php the_content(bootstrapBasicMoreLinkText()); ?>
			<div class="clearfix"></div><?php 
			        /**
			         * This wp_link_pages option adapt to use bootstrap pagination style.
			         * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
			         */
			        wp_link_pages(array(
			            'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			            'after'  => '</ul></div>',
			            'separator' => ''
			        ));
			        ?>
		</div><!-- .entry-content -->
		<?php } //endif; ?>
		<hr>
	</article><!-- #post-## -->
</body>
</html>