<?php
/**
 * @package WordPress
 * @subpackage theme1601
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
  	<?php echo '<p class="nocomments">' . __('This post is password protected. Enter the password to view comments.', 'theme1601') . '</p>'; ?>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h2 class="space" id="comments"><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'theme1601' ),
			number_format_i18n( get_comments_number() ), '<span class="normal">&quot;'.get_the_title().'&quot;</span>' );?></h2>

	<ol class="commentlist">
		<?php wp_list_comments(array('avatar_size' => 98)); ?>
	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
    <?php echo '<p class="nocomments">' . __('No Comments Yet.', 'theme1601') . '</p>'; ?>
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
    <?php echo '<p class="nocomments">' . __('Comments are closed.', 'theme1601') . '</p>'; ?>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

<h2><?php comment_form_title( _e('Leave a Comment','theme1601')); ?></h2>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php _e('You must be', 'theme1601'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('logged in', 'theme1601'); ?></a> <?php _e('to post a comment.', 'theme1601'); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php _e('Logged in as', 'theme1601'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'theme1601'); ?>"><?php _e('Log out &raquo;', 'theme1601'); ?></a></p>

<?php else : ?>

<p class="field"><input type="text" name="author" id="author" onblur="if(this.value=='')this.value='<?php _e('Name', 'theme1601'); ?><?php if ($req) _e('*', 'theme1601'); ?>'" onclick="if(this.value=='<?php _e('Name', 'theme1601'); ?><?php if ($req) _e('*', 'theme1601'); ?>')this.value=''" value="<?php _e('Name', 'theme1601'); ?><?php if ($req) _e('*', 'theme1601'); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /></p>

<p class="field"><input type="text" name="email" id="email" onblur="if(this.value=='')this.value='<?php _e('Email', 'theme1601'); ?> <?php _e('(will not be published)', 'theme1601'); ?> <?php if ($req) _e('*', 'theme1601'); ?>'" onclick="if(this.value=='<?php _e('Email', 'theme1601'); ?> <?php _e('(will not be published)', 'theme1601'); ?> <?php if ($req) _e('*', 'theme1601'); ?>')this.value=''" value="<?php _e('Email', 'theme1601'); ?> <?php _e('(will not be published)', 'theme1601'); ?> <?php if ($req) _e('*', 'theme1601'); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /></p>

<p class="field"><input type="text" name="url" id="url" onblur="if(this.value=='')this.value='<?php _e('Website', 'theme1601'); ?>'" onclick="if(this.value=='<?php _e('Website', 'theme1601'); ?>')this.value=''" value="<?php _e('Website', 'theme1601'); ?>" size="22" tabindex="3" /></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" onblur="if(this.value=='')this.value='<?php _e('Your comment', 'theme1601'); ?>'" onclick="if(this.value=='<?php _e('Your comment', 'theme1601'); ?>')this.value=''" value="<?php _e('Your comment', 'theme1601'); ?>"><?php _e('Your comment', 'theme1601'); ?></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'theme1601'); ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>