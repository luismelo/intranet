<!-- Start the Loop. -->
<?php
global $post;
if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <!--Start post-->
        <div id="post-<?php the_ID(); ?>" <?php post_class('animated'); ?>>		
            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h1>		  
            <div class="post_content">
				<ul class="post_meta">				
                    <li class="posted_by"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?><span></span><?php the_author_posts_link(); ?></li>
                    <li class="posted_on"><i class="fa fa-calendar-o"></i><span></span><?php echo get_the_time('M, d, Y') ?></li>
                    <li class="posted_in"><i class="fa fa-folder-o"></i><span></span><?php the_category(', '); ?></li>
					<li class="post_comment"><i class="fa fa-comments-o"></i><?php comments_popup_link(NO_CMNT, ONE_CMNT, '% ' . CMNT); ?></li>
					</ul>	
                    <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                    </a>
                    <?php
                } else {
                    echo blackwell_main_image();
                }
                ?>           
                <?php the_excerpt(); ?>               
            </div>
			<?php  if (blackwell_get_option('blackwell_read_more_link') != '') { ?>
			<a class="read_more" href="<?php the_permalink() ?>"><?php echo esc_attr(blackwell_get_option('blackwell_read_more_link')); ?></a>
			<?php } else { ?>
			<a class="read_more" href="<?php the_permalink() ?>"><?php echo READ_MORE; ?></a>
			<?php } ?>
			<div class="clear"></div>
			</div>
			<?php
		endwhile;
	else:
    ?>
    <div class="post">
        <p>
            <?php echo SORRY_NO_POSTS_MATCHED_YOUR_CRITERIA; ?>
        </p>
    </div>
<?php endif; ?>
<div class="clear"></div>
<!--End post-->