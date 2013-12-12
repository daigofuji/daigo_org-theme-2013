	</div><!-- Row End -->
</section><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row full-width" role="contentinfo">
	<div class="small-12 pagination-centered 
columns ">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list centered')); ?>
	</div>
	
	<div class="small-12 columns pagination-centered site-footer">
		<hr/>
		<p class="copyright">&copy; 2002-<?php echo date('Y'); ?>. <strong>daigo.org</strong> by <em>Daigo Fujiwara</em></p>
  
		<ul class="inline-list find-me">
			<li class="quiet">Find me at:</li>
			<li><a href="https://twitter.com/daigofuji" title="Follow me @DaigoFuji"><i class="icon-twitter-sign icon-2x"></i></a> </li>
			<li><a href="https://github.com/daigofuji" title="Code on the github"><i class="icon-github-sign icon-2x"></i></a> </li>
			<li><a href="http://daigo.tumblr.com/" title="My food log"><i class="icon-tumblr-sign icon-2x"></i></a> </li>
			<li><a href="http://www.linkedin.com/in/daigo" title="Professional connections"><i class="icon-linkedin-sign icon-2x"></i></a> </li>
		</ul>

		<p>
			Powered by <a href="http://codex.wordpress.org/">WordPress</a>. Crafted on <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>. This child theme <a href="https://github.com/daigofuji/daigo_org-theme-2013">is on github</a>. </p> <?php wp_loginout(); ?>
	</div>
	

</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
	/* Google Analytics -- H5BP */
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-8418273-3');ga('send','pageview');
</script>
	
</body>
</html>