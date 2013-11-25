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
       	<?php 
		if ( wpmd_is_notphone()) {
		get_sidebar(); } ?>
		<?php while ( have_posts() ) { 
		the_post(); ?>
		
		<?php get_template_part('content'); } ?>
		
		<?php // endwhile; ?>
		</div>
		<div class="navigation clearfix">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here..</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
<?php get_footer(); ?>