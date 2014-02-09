  </div><!--.container-->
</div><!--#main-->
<footer id="footer">
	<div class="indent">
		<div id="back-top-wrapper">
			<p id="back-top">
				<a href="#top"><?php _e('Top', 'theme1619'); ?></a>
			</p>
		</div>
		<div class="container_12 clearfix">
			<div class="grid_12">
				<div id="footer-text">
					<?php $myfooter_text = of_get_option('footer_text'); ?>
					
					<?php if($myfooter_text){?>
						<?php echo of_get_option('footer_text'); ?>
					<?php } else { ?>

						<?php if(of_get_option('logo_type_footer') == 'text_logo'){?>
							<span class="site-name"><?php bloginfo('name'); ?></span>
						<?php } else { ?>
							<?php if(of_get_option('logo_footer_url') != ''){ ?>
								<a href="<?php bloginfo('url'); ?>/" class="site-name"><img src="<?php echo of_get_option('logo_footer_url', "" ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
							<?php } else { ?>
								<a href="<?php bloginfo('url'); ?>/" class="site-name"><img src="<?php bloginfo('template_url'); ?>/images/logo-footer.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
							<?php } ?>
						<?php }?> &copy; <?php echo date("Y"); ?> &nbsp; | &nbsp; <a href="<?php bloginfo('url'); ?>/privacy-policy/" title="Privacy Policy"><?php _e('Privacy Policy', 'theme1619'); ?></a>
						
						
						
						
						
					<?php } ?>
					<?php if( is_front_page() ) { ?>
					<!-- {%FOOTER_LINK} -->
					<?php } ?>
				</div>
				
				<div id="widget-footer" class="clearfix">
					<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
						<!--Widgetized Footer-->
					<?php endif ?>
				</div>
				
			</div>
		</div><!--.container-->
	</div>
</footer>
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>