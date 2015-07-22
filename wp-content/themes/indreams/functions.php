<?php
/**
	 * Register Arvo Google font for InDreams.	 
	 *
	 * @return string
	 */
	function indreams_font_url() {
        $font_url = '';
	        /*
	         * Translators: If there are characters in your language that are not supported
	         * by Arvo, translate this to 'off'. Do not translate into your own language.
	         */
	        if ( 'off' !== _x( 'on', 'Arvo font: on or off', 'indreams' ) ) {
	                $font_url = add_query_arg( 'family', urlencode( 'Arvo:300,400,700,900,300italic,400italic,700italic' ), "//fonts.googleapis.com/css" );
	        }
	        return $font_url;
	}
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */
//Load languages file
$locale = get_locale();
$locale_file = get_template_directory() . "/languages/$locale.php";
if (is_readable($locale_file))
    require_once($locale_file);
load_theme_textdomain('indreams', get_template_directory() . '/languages');
$functions_path = get_template_directory() . '/functions/';
require_once ($functions_path . 'define_template.php'); // language
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces 
require_once ($functions_path . 'class-options-sanitization.php');
require_once ($functions_path . 'theme-options.php');
require_once ($functions_path . 'dynamic-image.php');

register_nav_menu('custom_menu', 'Main Menu');

function indreams_wp_enqueue_styles() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );	
	wp_enqueue_style( 'indreams-Arvo', indreams_font_url(), array(), null );
	wp_enqueue_style('indreams-flexslider-css', get_template_directory_uri() . '/css/flexslider.css');
        wp_enqueue_style('indreams-font-awesome-css', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style('indreams-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('indreams-superfish-css', get_template_directory_uri() . '/css/superfish.css');
	wp_enqueue_style('indreams-animate-css', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('indreams-prettyPhoto-css', get_template_directory_uri() . '/css/prettyPhoto.css');
	wp_enqueue_style('indreams-meanmenu-css', get_template_directory_uri() . '/css/meanmenu.css');
}
add_action('wp_enqueue_scripts', 'indreams_wp_enqueue_styles');
        
function indreams_wp_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('indreams-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'));
        wp_enqueue_script('indreams-superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'));
        wp_enqueue_script('indreams-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));
        wp_enqueue_script('indreams-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
        wp_enqueue_script('indreams-prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'));
        wp_enqueue_script('indreams-meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array('jquery'));
        wp_enqueue_script('indreams-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'));
    }
}

add_action('wp_enqueue_scripts', 'indreams_wp_enqueue_scripts');
/* ----------------------------------------------------------------------------------- */
/* Custom Jqueries Enqueue */
/* ----------------------------------------------------------------------------------- */

function indreams_setup() {
    
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "custom-background"  ) ;
    load_theme_textdomain('indreams', get_template_directory() . '/languages');
  
}
add_action( 'after_setup_theme', 'indreams_setup' );

//Menu for desktop view
function indreams_nav() {
    if (function_exists('wp_nav_menu')){
        wp_nav_menu(array('theme_location' => 'custom_menu', 'menu_class' => 'sf-menu', 'menu_id' => 'menu', 'fallback_cb' => 'indreams_nav_fallback'));
    }else{
        indreams_nav_fallback();
    }
}

function indreams_nav_fallback() {
    ?>

    <ul class="sf-menu" id="menu">
        <?php
        wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
        ?>
    </ul>

    <?php
}

//Menu for mobile view
function indreams_mobile_nav() {
    if (function_exists('wp_nav_menu')){
        wp_nav_menu(array('theme_location' => 'custom_menu', 'menu_class' => '', 'menu_id' => '', 'fallback_cb' => 'indreams_mobile_nav_fallback'));
    }else{
        indreams_nav_fallback();
    }
}

function indreams_mobile_nav_fallback() {
    ?>

    <ul>
        <?php
        wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
        ?>
    </ul>

    <?php
}

function indreams_admin_fonts() {
        wp_enqueue_style( 'indreams-Arvo', indreams_font_url(), array(), null );
}
	add_action( 'admin_print_scripts-appearance_page_custom-header', 'indreams_admin_fonts' );
/**
 * This function gets image width and height and
 * Prints attached images from the post        
 */
function indreams_get_image($width, $height) {
    $w = $width;
    $h = $height;
    global $post, $posts;
//This is required to set to Null
    $img_source = '';
	$id="";
    $permalink = get_permalink($id);
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if (isset($matches [1] [0])) {
        $img_source = $matches [1] [0];
    }
    if($img_source){
    $img_path = regalway_image_resize($img_source, $w, $h);
    if (!empty($img_path['url'])) {
        print "<a href='$permalink' class='rbh-post-thumbnail'><img src='$img_path[url]' class='post-thumb postimg' alt='Post Image'/></a>";
    }
    }
}

/**
 * This function thumbnail id and
 * returns thumbnail image
 * @param type $iw
 * @param type $ih 
 */
function indreams_get_thumbnail($iw, $ih) {
	$id="";
    $permalink = get_permalink($id);
    $thumb = get_post_thumbnail_id();
    if($thumb){
    $image = indreams_thumbnail_resize($thumb, '', $iw, $ih, true, 90);
    if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
        print "<a href='$permalink' class='rbh-post-thumbnail'><img class='postimg post-thumb' src='$image[url]' width='$image[width]' height='$image[height]' /></a>";
    }
    }
}

function indreams_widgets_init() {
// Area 1, located at the top of the sidebar.
    register_sidebar(array(
        'name' => 'My First Widget',
        'id' => 'primary-widget-area',
        'description' => 'My First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    
    // Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
    register_sidebar(array(
        'name' => 'My Second Widget',
        'id' => 'secondary-widget-area',
        'description' => 'My second widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    
    // Area 3, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => INDREAMS_FIRST_FOOTER_WIDGET,
        'id' => 'first-footer-widget-area',
        'description' => INDREAMS_THE_FIRST_FOOTER_WIDGET,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    // Area 4, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => INDREAMS_SECONDRY_FOOTER_WIDGET,
        'id' => 'second-footer-widget-area',
        'description' => INDREAMS_THE_SECONDRY_FOOTER_WIDGET,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    // Area 5, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => INDREAMS_THIRD_FOOTER_WIDGET,
        'id' => 'third-footer-widget-area',
        'description' => INDREAMS_THE_THIRD_FOOTER_WIDGET,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    // Area 6, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => INDREAMS_FOURTH_FOOTER_WIDGET,
        'id' => 'fourth-footer-widget-area',
        'description' => INDREAMS_THE_FOURTH_FOOTER_WIDGET,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

/** Register sidebars by running indreams_widgets_init() on the widgets_init hook. */
add_action('widgets_init', 'indreams_widgets_init');

/**
 * Pagination for blog page
 *
 */
function indreams_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>←</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>→</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}



function indreams_get_option($name) {
    $options = get_option('indreams_options');
    if (isset($options[$name]))
        return $options[$name];
}

//
function indreams_update_option($name, $value) {
    $options = get_option('indreams_options');
    $options[$name] = $value;
    return update_option('indreams_options', $options);
}

//
function indreams_delete_option($name) {
    $options = get_option('indreams_options');
    unset($options[$name]);
    return update_option('indreams_options', $options);
}


/* ----------------------------------------------------------------------------------- */
/* Custom CSS Styles */
/* ----------------------------------------------------------------------------------- */

function indreams_of_head_css() {
    $output = '';
    $custom_css = indreams_get_option('indreams_customcss');
    if ($custom_css <> '') {
        $output .= $custom_css . "\n";
    }
// Output styles
    if ($output <> '') {
        $output = "<!-- Custom Styling -->\n<style type=\"text/css\">\n" . $output . "</style>\n";
        echo $output;
    }
}

add_action('wp_head', 'indreams_of_head_css');


/* ----------------------------------------------------------------------------------- */
/* Add Favicon
  /*----------------------------------------------------------------------------------- */
function indreams_favicon() {
    if (indreams_get_option('indreams_favicon') != '') {
        echo '<link rel="shortcut icon" href="' . indreams_get_option('indreams_favicon') . '"/>' . "\n";
    } else {
        ?>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />
        <?php
    }
}

add_action('wp_head', 'indreams_favicon');

if ( ! isset( $content_width ) ) $content_width = 900;

if ( is_singular() ) wp_enqueue_script( "comment-reply" );