<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php reverie_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content('Continue reading...'); ?>
	</div>
	<footer>
		<p>
			<i class="icon-folder-open"></i> Filed under: <?php the_category(', ') ?> <?php $tag = get_the_tags(); if (!$tag) { } else { ?> | <i class="icon-tags"></i> Tagged: <?php the_tags('', ', ', '');  } ?> | <i class="icon-comments"></i> <?php comments_popup_link('Leave a reply »', '1 reply »', '% replies »'); ?> <?php edit_post_link(); ?> 
		</p>
	</footer>
	<hr />
</article>