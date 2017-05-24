<?php get_header(); ?>
<div class="container">

   <div class="row">

   <div class="col-md-3 col-md-offset-2 hidden-sm hidden-xs text-right">
   <h2 style="margin-top:0px">Let's Chat</h2>
   <a class="noBorder"  href="http://www.linkedin.com/in/tim-s-wilson" target="_blank"><i class="fa fa-linkedin-square fa-1x" aria-hidden="true"></i></a>
	<a  class="noBorder"  href="mailto:tim@timswilson.com"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></a>
   </div>

      <div class="col-sm-12 hidden-md hidden-lg text-center">
   <h2 style="margin-top:0px">Let's Chat</h2>
   <a class="noBorder"  href="http://www.linkedin.com/in/tim-s-wilson" target="_blank"><i class="fa fa-linkedin-square fa-1x" aria-hidden="true"></i></a>
	 <a class="noBorder"  href="mailto:tim@timswilson.com"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></a>
   </div>

   <div class="col-md-5">
   <?php echo do_shortcode( '[contact-form-7 id="32" title="Contact form"]' ); ?>
   </div>
 </div>
</div>
   <?php get_footer(); ?>
