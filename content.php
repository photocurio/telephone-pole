			<div <?php post_class('brick clearfix') ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
			<?php 
			if ( wpmd_is_notphone() ) { 
			get_the_image( array( 'size'=>'desktop-thumbnail' ) );
			} else { 
			get_the_image( array( 'size'=>'mobile-thumbnail' ) );
	        } ?>
				
				<span class="date"><?php the_time('F jS, Y') ?></span>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', ') ?> <?php edit_post_link('edit post', '(', ') '); ?> </p>
			</div>