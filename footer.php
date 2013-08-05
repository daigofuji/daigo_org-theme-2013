	</div><!-- Row End -->
</section><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row full-width" role="contentinfo">
	<div class="small-12 large-4 columns">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
	
	<div class="small-12 columns">
		<p class="site-footer">&copy; 2002-<?php echo date('Y'); ?>. daigo.org by Daigo Fujiwara</p>
		<p>
			Powered by WordPress. Crafted on <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>. This theme can be found on github. </p> <?php wp_loginout(); ?>
	</div>
	

</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>