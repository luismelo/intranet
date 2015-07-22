<?php
/*
  Template name: Blog
 */

get_header(); ?>

<div id="primary" class="content-area">
<div class="container">
    <div class="row">
        <div class="page-post-container-wrapper">
            <div class="col-md-8">
                <div class="content">
                <!-- ----------------Post loop starts --------------------- -->
                <?php
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $wp_query->query('showposts=' . $limit . '&paged=' . $paged);
                $wp_query->is_archive = true;
                $wp_query->is_home = false;
                ?>
                <?php get_template_part('loop', 'index'); ?> 

                <!-- ------------------Post loop ends----------------------- -->
                </div><?php indreams_numeric_posts_nav() ?>
              
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
