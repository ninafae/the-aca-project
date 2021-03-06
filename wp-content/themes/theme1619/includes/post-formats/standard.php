			<article id="post-<?php the_ID(); ?>" <?php post_class('post-holder clearfix'); ?>>
			
				<?php if(is_singular()) : ?>
				
				<h2 class="entry-title"><?php the_title(); ?></h2>
				
				<?php get_template_part('includes/post-formats/post-meta'); ?>
				
				<?php endif; ?>
				
				
				<?php get_template_part('includes/post-formats/post-thumb'); ?>
				
				
				<?php if(!is_singular()) : ?>
				
				<header class="entry-header">
				
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php _e('Permalink to:', 'theme1619');?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<?php get_template_part('includes/post-formats/post-meta'); ?>
				
				</header>
				
				<?php endif; ?>
				
				
				<?php if(!is_singular()) : ?>
				
				<div class="post-content">
					<?php $post_excerpt = of_get_option('post_excerpt'); ?>
					<?php if ($post_excerpt=='true' || $post_excerpt=='') { ?>
						<div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,32);?></div>
					<?php } ?>
					<a href="<?php the_permalink() ?>" class="button"><?php _e('more', 'theme1619'); ?></a>
				</div>
				
				<?php else :?>
				
				<div class="content">
				
					<?php the_content(''); ?>
					
				<!--// .content -->
				</div>
				
				<?php endif; ?>
				
			 
			</article>