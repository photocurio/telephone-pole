<ul  id="sidebar" class="column brick">

	<?php if ( ! dynamic_sidebar( 'main sidebar' ) ) : ?>

<ul  id="sidebar" class="column brick">
		<li id="search">		
			<h3><?php _e("Search"); ?></h3>
			<?php get_search_form(); ?>
		</li>
		<li id="tag_cloud">
			<h3><?php  _e("Tags"); ?></h3>
			<?php wp_tag_cloud('smallest=100&largest=100&unit=%'); ?>
		</li>
		<?php wp_list_categories( 'exclude=25&title_li=<h3>' .__('Categories') . '</h3>'); ?> 
		<?php wp_list_pages('title_li=<h3>' .__('Pages') . '</h3>'); ?>
		<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>'); ?>
		<li><h3><?php wp_loginout(); ?></h3></li>
</ul>

<?php endif; // end sidebar widget area ?>

</ul>