<?php get_header(); ?> 


<div id="posts">

<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<p>back to gallery:<br /><a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a></p>
                <p><?php the_time('F jS, Y') ?> by <?php the_author() ?></p>

				<div class="entry clearfix">        
                        
                        <?php if (wp_attachment_is_image($post->id)) :
				$att_image = wp_get_attachment_image_src( $post->id, "medium"); ?>
				
				<p class="attachment">
					
					<img src="<?php echo $att_image[0];?>" 
					width="<?php echo $att_image[1];?>" 
					height="<?php echo $att_image[2];?>"
					class="attachment-medium" 
					alt="<?php $post->post_excerpt; ?>">
					
				</p>                        
				
                        <p><?php previous_image_link('','previous') ?> <?php next_image_link('','next') ?></p>
<?php else : ?>       
                        <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>       
<?php endif; ?>                      
                        <div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>
                     
<?php the_content( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' ); ?>
<?php wp_link_pages('before=<div class="page-link">' . 'Pages:', 'your-theme' . '&after=</div>') ?>
                    
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> <?php edit_post_link( 'edit post' , '(' , ')' ); ?> </p>
			</div></div>
		<?php endwhile; ?>

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
