<?php
 ?>
<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>

        <?php wp_head(); ?>
 
    </head>
    <body <?php body_class(); ?>>
        <div>
            <div class="header">
                <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'indreams' ); ?></a>    
            </div>
        <!-- header start here -->
       
            <div class="header-wrapper">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <div class="logo">
                        <?php if (indreams_get_option('indreams_logo') != '') { ?>
                                <a href="<?php echo home_url('/'); ?>">
                                    <img src="<?php echo indreams_get_option('indreams_logo'); ?>" alt="<?php bloginfo('name'); ?>">
				</a>
				<?php } else { ?> 
                                       <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
						<p><?php bloginfo('description'); ?></p>
				<?php } ?>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="contact" >
                        <?php if (indreams_get_option('indreams_rightside') != '') { ?>
                                <p><?php echo esc_html(indreams_get_option('indreams_rightside')); ?></p>
                        <?php } else { 
                             } ?> 
                    </div>
                </div>
            </div>
        </div>
        <!-- menu start here -->	
        <div class="menu-wrapper">
            <div class="container">
                <div class="col-md-12">          
                    <header>
                        <nav><?php indreams_mobile_nav(); ?>   </nav>                                           
                    </header>
                </div>
            
                <div class="col-md-12">
                    <div class='menu ' >
                       <?php indreams_nav(); ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- menu end here -->
        <!-- header end here --> 
        
         <!-- this code is used for a button that go to top of website --> 
        <div class="container">
            <p id="back-top" style="display: block;">
                            <a href="#top"><span><i class="fa fa-arrow-up"><span>Back to Top</span></i></span></a>
            </p>
        </div>
       

        <!---------------------------------------------------->
