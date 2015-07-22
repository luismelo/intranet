<?php
/**
 * The template for displaying Tags pages.
 *
 */
get_header();
?>
<!-- *** Single Post Starts *** -->

<div id="primary" class="content-area">
<div class="container">
    <div class="row">
        <div class="page-post-container-wrapper">
            <div class="col-md-8">
                <div class="content">
                       <!-- *** Tag loop starts *** -->
                    <?php if (have_posts()): ?>

                        <?php
                        /* Since we called the_post() above, we need to
                         * rewind the loop back to the beginning that way
                         * we can run the loop properly, in full.
                         */
                        rewind_posts();
                        /* Run the loop for the archives page to output the posts.
                         * If you want to overload this in a child theme then include a file
                         * called loop-archives.php and that will be used instead.
                         */
                        get_template_part('loop',
                                'tag');
                        ?>

                        <!-- *** Tag loop ends*** --><?php wp_link_pages(); ?>
                        
<?php endif; ?>

                    <!-- *** Post loop ends*** -->
                    </div><?php indreams_numeric_posts_nav() ?>
                    </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
				
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
