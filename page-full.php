<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php 
					/* reverie_entry_meta(); 
						Removing everything but the title! This page is a free reign!
					*/
					/* edit link */ 
				echo edit_post_link('Edit this', '<p class="byline author editthis">','</p>');
				?>
			</header>
			<div class="page-content"> <?php /* no longer entry content */ ?>
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<?php /* removed tags */ ?>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>