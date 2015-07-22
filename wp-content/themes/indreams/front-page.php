<?php
/**
 * The template for displaying the front page
 *
 *
 * @package InDreams
 */
?>
<?php get_header(); ?>
<!-- slider start here --> 
<div class="slider slider-wrapper">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <?php if (indreams_get_option('indreams_slideimage1') != '') { ?>
                    <img src="<?php echo esc_url(indreams_get_option('indreams_slideimage1')); ?>" />
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" alt="" title="" />
                <?php } ?>
            
                <div class="flex-caption">
                <div class="container">
                    <div class="text-container">
				<?php if (indreams_get_option('indreams_sliderheading1') != '') { ?>
                        <h1><?php echo esc_html(indreams_get_option('indreams_sliderheading1')); ?></h1>
				<?php } else { ?> 
				<h1>ELEGANT & STYLISH THEME</h1>
				<?php } ?>
                        <div class="clearfix"></div>
				<?php if (indreams_get_option('indreams_sliderdes1') != '') { ?>
                        <h3><?php echo esc_html(indreams_get_option('indreams_sliderdes1')); ?></h3>
				<?php } else { ?>
				<h3>Showcase up to two images in the full-width slider. You can change the images that appear in the slider by going to the Theme Options Panel.</h3>
				<?php } ?>
                    </div>
                </div>
                <!-- ***Slide 1 Text end *** -->
                </div>       
            </li>
            
            
                <?php if (indreams_get_option('indreams_slideimage2') != '') { ?>
            <li>
                    <img src="<?php echo esc_url(indreams_get_option('indreams_slideimage2')); ?>" />
                    
                    <div class="flex-caption">
                <div class="container">
                    <div class="text-container">
				<?php if (indreams_get_option('indreams_sliderheading2') != '') { ?>
                        <h1><?php echo esc_html(indreams_get_option('indreams_sliderheading2')); ?></h1>
				<?php } else {?> 
				<h1>ELEGANT & STYLISH THEME</h1>
				<?php } ?>
                        <div class="clearfix"></div>
				<?php if (indreams_get_option('indreams_sliderdes2') != '') { ?>
                        <h3><?php echo esc_html(indreams_get_option('indreams_sliderdes2')); ?></h3>
				<?php } else { ?>
				<h3>Showcase up to two images in the full-width slider. You can change the images that appear in the slider by going to the Theme Options Panel.</h3>
				<?php } ?>
                    </div>
                </div>
                <!-- ***Slide 2 Text end *** -->
                </div>
            </li> 
                <?php } else { 
                    } ?>


        </ul>
    </div>
</div>
<!-- slider end here --> 

<!---------------------------------------------------->

<!-- slider Description start here --> 
<div class="slider-description">
    <div class="container">
        <div class="col-md-12">
            <div class='slider-content'>
                <?php if (indreams_get_option('indreams_punchline_heading') != '') { ?>
                    <h2><?php echo esc_html(indreams_get_option('indreams_punchline_heading')); ?></h2>
                <?php } else { ?>
                    <h2>Build Your Clean & Optimized Website Within Few Clicks</h2> <?php } ?>
<?php if (indreams_get_option('indreams_page_tagline_desc') != '') { ?>
                    <p><?php echo esc_html(indreams_get_option('indreams_page_tagline_desc')); ?></p>
<?php } else { ?>
                    <p>Creating your website with InDreams is completely easy. You just need to perform few tweaks in the theme option panel and your website will be ready to use. You can showcase all important aspects of your business here on home page.</p> <?php } ?>
            </div>

        </div>
    </div>
</div>
<!-- slider Description end here --> 

<!---------------------------------------------------->

<!-- three feature box start here --> 

    <div class="feature-box-wrapper">
        <div class="container">
            <div class="col-md-4">
                <div class='feature'>
                    
                    <div>
                    <?php if (indreams_get_option('indreams_threecolumn_fet_image1') != '') { ?>
                        <img src="<?php echo esc_url(indreams_get_option('indreams_threecolumn_fet_image1')); ?>">
                    <?php } else { ?>
                     <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg">
                    <?php } ?>
                    </div>
                    
                    <?php if (indreams_get_option('indreams_threecolumn_fet_title1') != '') { ?>
                        <h2><?php echo esc_html(indreams_get_option('indreams_threecolumn_fet_title1')); ?></h2>
                    <?php } else { ?>
                        <h2>Our First Service</h2>
                    <?php } ?>
                        
                    <?php if (indreams_get_option('indreams_threecolumn_fet_desc1') != '') { ?>
                        <p><?php echo esc_html(indreams_get_option('indreams_threecolumn_fet_desc1')); ?></p> 
                            <?php } else { ?>
                        <p>Showcase your best quality products on home page to grab visitor's attention. Nature is the world around us, except for human-made phenomena. As humans are the only animal species that consciously, powerfully manipulates the environment, we think of ourselves as exalted, as special. Survive outside of our natural world of air.</p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class='feature'>
                    
                    <div>
                    <?php if (indreams_get_option('indreams_threecolumn_fet_image2') != '') { ?>
                       <img src="<?php echo esc_url(indreams_get_option('indreams_threecolumn_fet_image2')); ?>">
                    <?php } else { ?>
                       <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg">
                    <?php } ?>
                    </div>
                      
                    <?php if (indreams_get_option('indreams_threecolumn_fet_title2') != '') { ?>
                        <h2><?php echo esc_html(indreams_get_option('indreams_threecolumn_fet_title2')); ?></h2>
                    <?php } else { ?>
                        <h2>Our Second Service</h2>
                    <?php } ?>
  
                    <?php if (indreams_get_option('indreams_threecolumn_fet_desc2') != '') { ?>
                        <p><?php echo esc_html(indreams_get_option('indreams_threecolumn_fet_desc2')); ?></p> 
                    <?php } else { ?>
                        <p>Showcase your best quality products on home page to grab visitor's attention. Nature is the world around us, except for human-made phenomena. As humans are the only animal species that consciously, powerfully manipulates the environment, we think of ourselves as exalted, as special. Survive outside of our natural world of air.</p>
                    <?php } ?>
                </div>

            </div>
            <div class="col-md-4">
                <div class='feature'>
                    <div>
                    <?php if (indreams_get_option('indreams_threecolumn_fet_image3') != '') { ?>
                       <img src="<?php echo esc_url(indreams_get_option('indreams_threecolumn_fet_image3')); ?>">      
                    <?php } else { ?>
                     <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg">
                    <?php } ?>
                    </div>
                    
                    <?php if (indreams_get_option('indreams_threecolumn_fet_title3') != '') { ?>
                        <h2><?php echo esc_html(indreams_get_option('indreams_threecolumn_fet_title3')); ?></h2>
                    <?php } else { ?>
                        <h2>Our Third Service</h2>
                    <?php } ?>

                    <?php if (indreams_get_option('indreams_threecolumn_fet_desc3') != '') { ?>
                        <p><?php echo esc_html(indreams_get_option('indreams_threecolumn_fet_desc3')); ?></p> 
                    <?php } else { ?>
                        <p>Showcase your best quality products on home page to grab visitor's attention. Nature is the world around us, except for human-made phenomena. As humans are the only animal species that consciously, powerfully manipulates the environment, we think of ourselves as exalted, as special. Survive outside of our natural world of air.</p>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
<!-- three feature box end here -->  
<!---------------------------------------------------->

<!--latest three blog start here --> 

<div class="blog-wrapper">
    <div class="container">
        <!-- Start the Loop. -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-md-6">
                    <div id="blog-<?php the_ID(); ?>" class="blog_post wow zoomIn">
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <div class="thumb_meta">
                            <div class="thumb clear">
                                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>

                                    <?php the_post_thumbnail( array(516, 210) );; ?>

                                    <?php
                                } else {
                                    ?><a href="<?php the_permalink(); ?>"><img src='<?php echo get_template_directory_uri(); ?>/images/bg.jpg' alt='feature3' width='516px' height="210px !important" ></a><?php
                                }
                                ?>	
                            </div>
                            <div class="post-meta">
                                <span class="meta-admin">Written by : <?php the_author_posts_link(); ?></span>
                                <span class="meta-date">Posted On :<?php
                                    $archive_year = get_the_time('Y');
                                    $archive_month = get_the_time('m');
                                    $archive_day = get_the_time('d');
                                    ?>
                                    <a href="<?php
                               echo get_day_link($archive_year, $archive_month, $archive_day);
                               ?>"> <?php echo esc_html(get_the_date()) ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        else:
            ?>
<?php endif; ?>
    </div>
</div>

<!-- latest three blog end here -->  
<!---------------------------------------------------->

<?php get_footer(); ?>