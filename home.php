<?php get_header(); ?>

<div id="posts">
    
	<?php 
	$query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '9' ) );
	if (have_posts()) : ?>
	
	    <div id="postsbox">
       	<?php 
		if ( wpmd_is_phone() == false) {
		get_sidebar(); } ?>
		<?php while ($query -> have_posts()) { 
		
		$query -> the_post(); ?>
		
		<?php get_template_part('content'); } ?>
		
		<?php // endwhile; ?>
		</div>
		<div class="navigation clearfix">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
<?php get_footer(); ?>