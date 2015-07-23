<?php
/**
* The template for displaying front page pages.
*
* */
?>
<?php get_header(); ?> 
	 <div id="top_image_full" class="blackwell_top_image">
		<ul class="top_image_container">
      <li>
        <?php if ( blackwell_get_option('blackwell_topimage') !='' ) {  ?>
	   <a href="<?php if ( blackwell_get_option('blackwell_top_imagelink') !='' ) { echo esc_url(blackwell_get_option('blackwell_top_imagelink')); }  ?>" >
		<img  src="<?php echo esc_url(blackwell_get_option('blackwell_topimage')); ?>" /></a>
        <?php } else {  ?>
        <img  src="<?php echo get_template_directory_uri(); ?>/images/top_image.jpg"/>
        <?php } ?>
        <div class="container">
		<?php if ( blackwell_get_option('blackwell_top_imageheading') !='' ) {  ?>
		 <h1><a href="<?php if ( blackwell_get_option('blackwell_top_imagelink') !='' ) { echo esc_url(blackwell_get_option('blackwell_top_imagelink')); } ?>"><?php echo esc_attr(blackwell_get_option('blackwell_top_imageheading')); ?></a></h1>
		  <?php }  else {  ?>
        <h1><?php _e('Business theme composed of many features.', 'blackwell'); ?></h1>
		<?php } ?> 
		<?php if (blackwell_get_option('blackwell_top_image_desc') !='') {  ?>
		   <p>					   
	   <?php echo esc_attr(blackwell_get_option('blackwell_top_image_desc')); ?>
		</p>
	   <?php }  else {  ?>
		<p><?php _e('Premium WordPress Themes with Single Click Installation, Just a Click and your website is ready for use.Premium WordPress Themes.', 'blackwell'); ?></p>
		<?php } ?>
        </div>
      </li>
	  </ul>
  </div>
		<div class="wrap_content">
        <div class="section" id="section1">
		<div class="container_24">
		<div class="grid_24">		
	<div class="feature_content">
	<div class="page_info animated">
	<?php if (blackwell_get_option('blackwell_feature_heading') != '') { ?>
	<h1><?php echo esc_attr(blackwell_get_option('blackwell_feature_heading')); ?></h1>
	<?php } else { ?>
		<h1><?php _e('Our best features coming with theme.', 'blackwell'); ?></h1>
	<?php } ?>
	<?php if (blackwell_get_option('blackwell_feature_desc') != '') { ?>
	<p><?php echo esc_attr(blackwell_get_option('blackwell_feature_desc')); ?></p>
	<?php } else { ?>
		<p><?php _e('Proin vel diam id dui pharetra commodo. Praesent commodo enim non molestie varius.<br/> Phasellus elementum odio faucibus diam sollicitudin, in bibendum quam feugiat.', 'blackwell'); ?></p>
	<?php } ?>
	</div>
            <div class="grid_8 alpha">
               <div class="feature_content_inner first animated" style="-webkit-animation-delay: .2s; -moz-animation-delay: .2s;  -o-animation-delay: .2s;  -ms-animation-delay: .2s;">
                    <!-- *** Three column Box 2 *** -->
				   <p class="font_icon"><i class="<?php
		if (blackwell_get_option('blackwell_font_icon1') != '') {
			echo esc_attr(blackwell_get_option('blackwell_font_icon1'));
		} else {
			?> fa-microphone <?php } ?> fa"></i></p>	
		<?php if (blackwell_get_option('blackwell_feature_head1') != '') { ?>
		<a href="<?php
		if (blackwell_get_option('blackwell_feature_link1') != '') {
			echo esc_url(blackwell_get_option('blackwell_feature_link1'));
		} else {
			echo "#";
		}
		?>"><h2><?php echo esc_attr(blackwell_get_option('blackwell_feature_head1')); ?></h2></a>
	   <?php } else { ?>
		<a href="#"><h2><?php _e('Font Awesome Icons', 'blackwell'); ?></h2></a>
	<?php } if (blackwell_get_option('blackwell_feature_desc1') != '') { ?>
		<p><?php echo esc_attr(blackwell_get_option('blackwell_feature_desc1')); ?></p>
	<?php } else { ?>
		<p><?php _e('There are a lot of ways that you can look at people and a lot of characteristics that you can choose to expect people to have. ', 'blackwell'); ?></p>				
	<?php } ?>
				</div>
                </div>
                <div class="grid_8 alpha">
				<div class="feature_content_inner second animated" style="-webkit-animation-delay: .5s; -moz-animation-delay: .5s; -o-animation-delay: .5s; -ms-animation-delay: .5s;">
	<!-- *** Three column Box 2 *** -->
	<p class="font_icon"><i class="<?php
		if (blackwell_get_option('blackwell_font_icon2') != '') {
			echo esc_attr(blackwell_get_option('blackwell_font_icon2'));
		} else {
			?> fa-rocket <?php } ?> fa"></i></p>
		<?php if (blackwell_get_option('blackwell_feature_head2') != '') { ?>
		<a href="<?php
		if (blackwell_get_option('blackwell_feature_link2') != '') {
			echo esc_url(blackwell_get_option('blackwell_feature_link2'));
		} else {
			echo "#";
		}
		?>"><h2><?php echo esc_attr(blackwell_get_option('blackwell_feature_head2')); ?></h2></a>
	   <?php } else { ?>
		<a href="#"><h2><?php _e('your embed videos', 'blackwell'); ?></h2></a>
	<?php } if (blackwell_get_option('blackwell_feature_desc2') != '') { ?>
		<p><?php echo esc_attr(blackwell_get_option('blackwell_feature_desc2')); ?></h2>
		<?php } else { ?>
		<p><?php _e('There are a lot of ways that you can look at people and a lot of characteristics that you can choose to expect people to have. ', 'blackwell'); ?></p>				
	<?php } ?>
</div>
                </div>
                <div class="grid_8 alpha">
				<div class="feature_content_inner third animated" style="-webkit-animation-delay: .9s; -moz-animation-delay: .9s; -o-animation-delay: .9s;  -ms-animation-delay: .9s;">
	<!-- *** Three column Box 3 *** -->
	<p class="font_icon"><i class="<?php
		if (blackwell_get_option('blackwell_font_icon3') != '') {
			echo esc_attr(blackwell_get_option('blackwell_font_icon3'));
		} else {
			?>fa-signal <?php } ?> fa"></i></p>
							<?php if (blackwell_get_option('blackwell_feature_head3') != '') { ?>
		<a href="<?php
		if (blackwell_get_option('blackwell_feature_link3') != '') {
			echo esc_url(blackwell_get_option('blackwell_feature_link3'));
		} else {
			echo "#";
		}
		?>"><h2><?php echo esc_attr(blackwell_get_option('blackwell_feature_head3')); ?></h2></a>
	   <?php } else { ?>
		<a href="#"><h2><?php _e('Completely responsive', 'blackwell'); ?></h2></a>
	<?php } if (blackwell_get_option('blackwell_feature_desc3') != '') { ?>
		<p><?php echo esc_attr(blackwell_get_option('blackwell_feature_desc3')); ?></h2>
		<?php } else { ?>
		<p><?php _e('There are a lot of ways that you can look at people and a lot of characteristics that you can choose to expect people to have.', 'blackwell'); ?></p>				
	<?php } ?>
</div>
				</div>
        </div>
		</div>
		<div class="clear"></div>
			</div>
    </div>
	<div class="section" id="section7">
		<div class="container_24">
		<div class="grid_24">
		 <div class="home_blog_wrapper">	
		<div class="page_info animated">
		<?php if (blackwell_get_option('blackwell_blog_heading') != '') { ?>
		<h1><?php echo esc_attr(blackwell_get_option('blackwell_blog_heading')); ?></h1>
		<?php } else { ?>
		<h1><?php _e('Our Featured Blog', 'blackwell'); ?></h1>
		<?php } ?>
		<?php if (blackwell_get_option('blackwell_blog_desc') != '') { ?>
		<p><?php echo esc_attr(blackwell_get_option('blackwell_blog_desc')); ?></p>
		<?php } else { ?>
		<p><?php _e('Proin vel diam id dui pharetra commodo. Praesent commodo enim non molestie varius.<br/> Phasellus elementum odio faucibus diam sollicitudin, in bibendum quam feugiat.', 'blackwell'); ?></p>
		<?php } ?>
		</div>
		<div class="clear"></div>
		<div class="grid_17 alpha">
			<div class="content-bar gallery"> 
				<?php the_content(); ?>
				<!--Start Post-->
				<?php get_template_part('loop', 'home'); ?>   
				<div class="clear"></div>
				<nav id="nav-single"> <span class="nav-previous">
					<?php next_posts_link(NEWER_POSTS); ?>
				</span> <span class="nav-next">
					<?php previous_posts_link(OLDER_POSTS); ?>
				</span></nav> 
			</div>
		</div>
		<div class="grid_7 omega animated">
		<!--Start Sidebar-->
		<?php get_sidebar(); ?>
		<!--End Sidebar-->
		</div> 
		</div>
		</div>
		<div class="clear"></div>
		</div>
		</div>
		</div>
		<div class="clear"></div>
	<?php get_footer(); ?>