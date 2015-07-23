<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
?>
<?php get_header(); ?>
<div class="page_heading_container">
  <div class="container_24">
   <div class="grid_24">
<div class="page_heading_content">
<h1><?php printf(TAG_ARCHIVES, '' . single_cat_title('', false) . ''); ?></h1>
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
                        <?php get_template_part('loop', 'index'); ?>
                        <div class="clear"></div>
                        <?php blackwell_pagination(); ?>
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