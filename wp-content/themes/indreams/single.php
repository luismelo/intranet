<?php
/**
 * The template for displaying all single posts.
 *
 * @package InDreams
 */

get_header(); ?>

	<div id="primary" class="content-area">
             <div class="container">
            <div class="col-md-8">
                <div class="content-bar" id="content">
		 <!-- Start the Loop. -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                        <!-- ---------------Post starts ---------------- -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="post-heading">
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="post-meta">
                                <ul>
                                    <li class="meta-admin">By : <?php the_author_posts_link(); ?></li>
                                    <li class="meta-date"><?php
                        $archive_year = get_the_time('Y');
                        $archive_month = get_the_time('m');
                        $archive_day = get_the_time('d');
                        ?>
				    <a href="<?php the_permalink() ?>"> <?php echo esc_html( get_the_date() ) ?></a></li>
                                    <li class="meta-cat">Category : <?php the_category(', '); ?></li>
				    <li class="meta-cat">Tags : <?php echo get_the_tag_list(); ?></li>
                                    <li class="meta-comm">Comment : <?php comments_popup_link('0', '1', '%'); ?></li>
                                </ul>
                            </div>
                            <div class="post-content clear">
                                <?php the_content(); ?>
                                
                                <?php wp_link_pages( ); ?>
                                
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    ?>
                    <div>
                        <p>
                            <?php echo INDREAMS_SORRY_NO_POST_MATCHED_YOUR_CRETERIA; ?>
                        </p>
                    </div>
                <?php endif; ?>
                        <nav id="nav-single"> <span class="nav-previous">
                        <?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous Post <span class="post-title">%title</span>', 'Next post link', 'indreams')); ?>
                    </span> <span class="nav-next">
                        <?php next_post_link('%link', __('Next Post <span class="meta-nav">&rarr;</span><span class="post-title">%title</span>', 'Next post link', 'indreams')); ?>
                    </span> </nav>
                        <!----------------------Post Single Ends -------------------------->
                <!-- ------------------Comment starts ----------------------- -->
                <?php comments_template(); ?>
                <!-- ------------------Comment Ends----------------------- -->
                </div>
                 </div>
                 <div class="col-md-4">
                    
                     <?php get_sidebar(); ?>
                         
                 </div>
                 
                 </div><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>