    <?php $post_meta = of_get_option('post_meta'); ?>
		<?php if ($post_meta=='true' || $post_meta=='') { ?>
			<div class="post-meta">
				<span class="ico date"><time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('d-m-Y'); ?></time></span>
				<span class="ico author"><?php the_author_posts_link() ?></span>
				<span class="ico comments"><?php comments_popup_link('0', '1', '%', 'comments-link', '-'); ?></span>
			</div><!--.post-meta-->
		<?php } ?>		
