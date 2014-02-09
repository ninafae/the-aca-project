<?php get_header(); ?>
<div id="content" class="grid_8 <?php echo of_get_option('blog_sidebar_pos') ?>">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <article class="single-post">
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <?php if(has_post_thumbnail()) { ?>
					<?php
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'thumbnail'); //get img URL
					$image = aq_resize( $img_url, 138, 138, true ); //resize & crop img
					?>
					<figure class="featured-thumbnail">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
					</figure>
				<?php } ?>
				
        <div class="post-content extra-wrap">
          <?php the_content(); ?>
        </div><!--.post-content-->
      </article>

    </div><!-- #post-## -->

  <?php endwhile; /* end loop */ ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>