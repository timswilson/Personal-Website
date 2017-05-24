<?php
/**
 * The theme footer
 *
 * @package bootstrap-basic
 */
?>
</div> <!-- End Main Content  -->
			<footer  role="contentinfo">

				<div class="footerWrapper1">
					<div class="container">
					<div class="row">
					<div class="col-xs-12 text-center">
					<h2 class="lead">TL;DR</h2>
					<p>My name is Tim Wilson; I am a CRM & ERP Administrator & Developer.</p>
					</div>
					</div>
					</div>
				</div>

					<div class="footerWrapper2">
					<div class="container">
					<div class="row">
					<div class="col-xs-12 text-center">
					<p>Let's Keep in Touch</p>
					<div id="footerSocialIcons">
					<a href="http://www.linkedin.com/in/tim-s-wilson" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
					<a href="mailto:tim@timswilson.com"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
					<!-- <a href="https://github.com/timswilson" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a> -->
					<a href="http://codepen.io/timswilson/" target="_blank"><i class="fa fa-codepen fa-2x" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/tswilson21/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
					<!-- <a href="http://www.linkedin.com/in/tim-s-wilson" target="_blank"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a> -->
					</div>
					<br>
					<p>&copy; <?php echo date("Y") ?> Tim Wilson | Chattanooga, TN</p>
					</div>
					</div>
					</div>
				</div>


			</footer>

		<!--wordpress footer-->
		<?php wp_footer(); ?>

		<!-- add active class to navbar -->
		<script type="text/javascript">
		jQuery(function($) {
		$(document).ready(function() {
		$('#navbar .nav a[href="' + this.location.pathname + '"]').parent().addClass('active');

});
});
		</script>

		<script type="text/javascript">
		jQuery(function($) {



		$('body').scrollspy({
    target: '.bs-docs-sidebar',
    offset: 40
});

$("#sidebar").affix({
    offset: {
      top: 60
    }
});

});
		</script>

	</body>
</html>
