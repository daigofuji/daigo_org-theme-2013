<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-9 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p class="post-metadata"><?php /* post meta stuff added by Daigo Aug. 2013 */ ?>
					This post was published on <i class="icon-calendar"></i> <?php the_time('l, F jS, Y') ?> at <i class="icon-time"></i> <?php the_time() ?>. Written <i class="icon-pencil"></i> by me, <?php the_author_posts_link() ?>. The post is filed <i class="icon-folder-open"></i> under <?php the_category(' and ') ?> categories. Comments <i class="icon-comments"></i> are welcome below, and they can be followed with this <?php comments_rss_link('RSS 2.0'); ?> <i class="icon-rss"></i> feed.<br/> 
					<i class="icon-tags"></i> Tags: <?php the_tags(); ?>
				</p>
				<?php edit_post_link('Edit this', '<p class="byline author editthis">','</p>'); ?>

			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>