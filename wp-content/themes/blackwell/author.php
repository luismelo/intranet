<?php
/**
 * The template for displaying Author pages.
 *
 */
?>
<?php get_header(); ?>
<div class="page_heading_container">
  <div class="container_24">
   <div class="grid_24">
<div class="page_heading_content">
<?php if (have_posts()): ?>
<h1><?php printf(AUTHOR_ARCHIVES, "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url(get_the_author_meta('ID')) . "' title='" . esc_attr(get_the_author()) . "' rel='me'>" . get_the_author() . "</a></span>"); ?></h1>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="page-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page-content">
                <div class="grid_17 alpha"> 
                <div class="content-bar gallery">
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
                            get_template_part('loop', 'archive');
                            ?>
                            <div class="clear"></div>
                            <nav id="nav-single"> <span class="nav-previous">
                                    <?php blackwell_pagination(); ?>
                                </span> </nav>
                        <?php endif; ?>
                    </div>
                </div>
				<div class="grid_7 omega">
		<!--Start Sidebar-->
		<?php get_sidebar(); ?>
		<!--End Sidebar-->
		</div> 
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>