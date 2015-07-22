<?php

/*
 */
?>
<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
        <!-- ---------------Post starts ---------------- -->
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post-heading">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="post-meta">
                <ul>
                    <li class="meta-admin">by : <?php the_author_posts_link(); ?></li>
                    <li class="meta-date"><?php
                        $archive_year = get_the_time('Y');
                        $archive_month = get_the_time('m');
                        $archive_day = get_the_time('d');
                        ?>
						<a href="<?php the_permalink() ?>"> <?php echo esc_html( get_the_date() ) ?></a></li>
                    <li class="meta-cat">Category : <?php the_category(' ,'); ?></li>
                    <li class="meta-cat">Tags : <?php echo get_the_tag_list(); ?></li>
                    <li class="meta-comm">Comment : <?php comments_popup_link('0', '1', '%'); ?></li>
                </ul>
            </div>
            <div class="thumb clear">
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                    <a href="<?php the_permalink(); ?>">
						 <?php the_post_thumbnail( array(774, 350) );; ?>
                    </a>
                    <?php
                } else {
                  }
                ?>	
            </div>
            <div class="post-content clear">
                <?php echo the_excerpt(); ?>
                <?php wp_link_pages(); ?>
                <a href="<?php the_permalink() ?>" class="wpanch"><?php echo sprintf(
                    esc_html__( 'Continue reading . . . %s', 'indreams' ),
                    the_title( '<span class="screen-reader-text">', '</span>', false )
                   ) ; ?>
                </a>
            </div>
        </div>
        <?php
    endwhile;
else:
    ?>
    <div>
        <p>
            <?php _e('Sorry no post matched your criteria', 'indreams'); ?>
        </p>
    </div>
<?php endif; ?>
<!--End Loop-->
<!----------------------Post 2-------------------------->