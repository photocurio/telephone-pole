<?php get_header(); ?>


<div id="posts">
<?php
	if (is_category()) {
   		echo '<h2 class="listhead">Category: ';
   		single_cat_title();
   		echo '</h2>';
   	} if (is_tag()) {
   		echo '<h2 class="listhead">Tag: ';
   		single_tag_title();
   		echo '</h2>';
   	} if (is_search()) {
   		echo '<h2 class="listhead">Your search result';
   		echo '</h2>';
   	}
   	?>
    
	<?php 
	if (have_posts()) : ?>
	    <div id="postsbox">
       	<?php if ( wpmd_is_phone() == false) { get_sidebar(); } ?>
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class('brick clearfix') ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php 
		if ( wpmd_is_phone() == false ) { 
			get_the_image( array( 'size'=>'desktop-thumbnail' ) );
			} else { 
			get_the_image( array( 'size'=>'mobile-thumbnail' ) );
            } ?>
				<span class="date"><?php the_time('F jS, Y') ?></span>

				<div class="entry">
					
					<?php the_excerpt('see the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> <?php edit_post_link('edit post', '(', ') '); ?> </p>
			</div>

		<?php endwhile; ?>
		    </div>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
<?php get_footer(); ?>