<?php get_header(); ?>

<div id="posts_wide">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> <span style="font-size:24px;padding:0 10px;">☞</span> <span><?php the_title(); ?></span></h2>
			<div class="entry">
				<p class="attachment">
		<?php 	$post_id = get_post($post->ID);
			$parent_post_id = $post_id->post_parent;
			if (in_category( 'client', $parent_post_id )) { echo '<a href="', wp_get_attachment_url($post->ID),'">' ; } ?>
			<?php echo wp_get_attachment_image( $post->ID, 'large' ); ?>
			<?php $post_id = get_post($post->ID);
			$parent_post_id = $post_id->post_parent;
			if (in_category( 'client', $parent_post_id )) { echo '</a>'; } ?>
				</p>
				<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<div class="navigation">
					<div class="alignleft"><?php previous_image_link('', 'previous image') ?> | <?php next_image_link('', 'next image') ?></div>
				</div>
			</div>
		</div>
	<?php endwhile; else: ?>
		<p>Sorry, no images matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>
