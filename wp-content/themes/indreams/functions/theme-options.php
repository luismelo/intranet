<?php

add_action('init', 'of_options');
if (!function_exists('of_options')) {

    function of_options() {
        // VARIABLES
        $themename = 'InDreams Theme';
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = indreams_get_option('of_options');
        //Front page on/off
        $file_rename = array("on" => "On", "off" => "Off");
        $showhide_sections = array("Show" => "Show", "Hide" => "Hide");
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        
        $lan_stylesheets = array("Default" => "Default");
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }

        // Populate OptionsFramework option in array for use in theme
        $contact_option = array("on" => "On", "off" => "Off");
        $captcha_option = array("on" => "On", "off" => "Off");
        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }
        // If using image radio buttons, define a directory path
        $imagepath = get_template_directory_uri() . '/images/';

        $options = array();
        $options[] = array("name" => "General Settings",
            "type" => "heading");

        $options[] = array("name" => "Custom Logo",
            "desc" => "Upload a logo for your Website. The recommended size for the logo is 250px width x 50px height.",
            "id" => "indreams_logo",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => "Custom Favicon",
            "desc" => "Here you can upload a Favicon for your Website. Specified size is 16px x 16px.",
            "id" => "indreams_favicon",
            "std" => "",
            "type" => "upload");

        
        $options[] = array("name" => "Right Side Content In Header",
            "desc" => "Here you can add your email or address.",
            "id" => "indreams_rightside",
            "std" => "",
            "type" => "textarea");  
        //=========================================================================
        ////Home Page Slider Setting
        $options[] = array("name" => "Slider Settings",
            "type" => "heading");

        $options[] = array("name" => "First Slider Image Setting",
            "type" => "saperate",
            "class" => "saperator");
        
        $options[] = array("name" => "First Slider Image",
            "desc" => "The optimal size of the image is 1600 px wide x 750 px height, but it can be varied as per your requirement.",
            "id" => "indreams_slideimage1",
            "std" => "",
            "type" => "upload");
        
        $options[] = array("name" => "First Slider Image Heading",
            "desc" => "Mention the heading for your First Slider Image here.",
            "id" => "indreams_sliderheading1",
            "std" => "",
            "type" => "text");
        
        $options[] = array("name" => "First Slider Image Description",
            "desc" => "Mention the description for your First Slider Image here.",
            "id" => "indreams_sliderdes1",
            "std" => "",
            "type" => "text");
     
        $options[] = array("name" => "Second Slider Image Setting",
            "type" => "saperate",
            "class" => "saperator");
        
        $options[] = array("name" => "Second Slider Image",
            "desc" => "The optimal size of the image is 1600 px wide x 750 px height, but it can be varied as per your requirement.",
            "id" => "indreams_slideimage2",
            "std" => "",
            "type" => "upload");
        
        $options[] = array("name" => "Second Slider Image Heading",
            "desc" => "Mention the heading for your Second Slider Image here.",
            "id" => "indreams_sliderheading2",
            "std" => "",
            "type" => "text");
        
        $options[] = array("name" => "Second Slider Image Description",
            "desc" => "Mention the description for your Second Slider Image here.",
            "id" => "indreams_sliderdes2",
            "std" => "",
            "type" => "text");
        
        //****=============================================================================****//
        //Homepage Feature Tagline
        $options[] = array("name" => "Featured Punchline",
            "type" => "heading");

        $options[] = array("name" => "Featured Punchline Heading",
            "desc" => "Mention the punch line heading for your business here.",
            "id" => "indreams_punchline_heading",
            "std" => "",
            "type" => "textarea");

        $options[] = array("name" => "Featured Tagline Description",
            "desc" => "Mention the tagline for your business here that will complement the punch line.",
            "id" => "indreams_page_tagline_desc",
            "std" => "",
            "type" => "textarea");
	        
        //****=============================================================================****//
        //HomePage four column feature		
        $options[] = array("name" => "Three column Feature",
            "type" => "heading");


        // 3 Column Feature block 1

        $options[] = array("name" => "First Column",
            "type" => "saperate",
            "class" => "saperator");

        $options[] = array("name" => "Image 1",
            "desc" => "The optimal size of the image is 264 px wide x 264 px height, but it can be varied as per your requirement.",
            "id" => "indreams_threecolumn_fet_image1",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => "Title 1",
            "desc" => "Here you can mention a suitable title that will display the title in services section.",
            "id" => "indreams_threecolumn_fet_title1",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Description 1",
            "desc" => "Here you can mention a suitable title that will display the small description in services section.",
            "id" => "indreams_threecolumn_fet_desc1",
            "std" => "",
            "type" => "textarea");


        // 3 Column Feature block 2

        $options[] = array("name" => "Second Block",
            "type" => "saperate",
            "class" => "saperator");

        $options[] = array("name" => "Image 2",
            "desc" => "The optimal size of the image is 264 px wide x 264 px height, but it can be varied as per your requirement.",
            "id" => "indreams_threecolumn_fet_image2",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => "Title 2",
            "desc" => "Here you can mention a suitable title that will display the title in services section.",
            "id" => "indreams_threecolumn_fet_title2",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Description 2",
            "desc" => "Here you can mention a suitable title that will display the small description in services section.",
            "id" => "indreams_threecolumn_fet_desc2",
            "std" => "",
            "type" => "textarea");


        // 3 Column Feature block 3

        $options[] = array("name" => "Third block",
            "type" => "saperate",
            "class" => "saperator");

        $options[] = array("name" => "Image 3",
            "desc" => "The optimal size of the image is 264 px wide x 264 px height, but it can be varied as per your requirement.",
            "id" => "indreams_threecolumn_fet_image3",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => "Title 3",
            "desc" => "Here you can mention a suitable title that will display the title in services section.",
            "id" => "indreams_threecolumn_fet_title3",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Description 3",
            "desc" => "Here you can mention a suitable title that will display the small description in services section.",
            "id" => "indreams_threecolumn_fet_desc3",
            "std" => "",
            "type" => "textarea");
					
//****=============================================================================****//
//****=============================================================================****//
//****-----------This code is used for creating color styleshteet options----------****//							
//****=============================================================================****//				
        $options[] = array("name" => "Styling Options",
            "type" => "heading");

        $options[] = array("name" => "Custom CSS",
            "desc" => "Quickly add your custom CSS code to your theme by writing the code in this block.",
            "id" => "indreams_customcss",
            "std" => "",
            "type" => "textarea");

//****=============================================================================****//
//****-------------This code is used for creating Bottom Footer Setting options-------------****//					
//****=============================================================================****//			
        $options[] = array("name" => "Footer Settings",
            "type" => "heading");
        $options[] = array("name" => "Footer Text",
            "desc" => "Write the text here that will be displayed on the footer i.e. at the bottom of the Website.",
            "id" => "indreams_footertext",
            "std" => "",
            "type" => "textarea");
        //------------------------------------------------------------------//
        
//****=============================================================================****//
//****-------------This code is used for creating social logos options-------------****//					
//****=============================================================================****//

        $options[] = array("name" => "Social Icons",
            "type" => "heading");

        $options[] = array("name" => "Facebook URL",
            "desc" => "Mention the URL of your Facebook here.",
            "id" => "indreams_facebook",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Twitter URL",
            "desc" => "Mention the URL of your Twitter here.",
            "id" => "indreams_twitter",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Google+ URL",
            "desc" => "Mention the URL of your Google+ here.",
            "id" => "indreams_google",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Rss Feed URL",
            "desc" => "Mention the URL of your Rss Feed here.",
            "id" => "indreams_rss",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Pinterest URL",
            "desc" => "Mention the URL of your Pinterest here.",
            "id" => "indreams_pinterest",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => "Linkedin",
            "desc" => "Mention the URL of your Linkedin here.",
            "id" => "indreams_linkedin",
            "std" => "",
            "type" => "text");        

        indreams_update_option('of_template', $options);
        indreams_update_option('of_themename', $themename);
        indreams_update_option('of_shortname', $shortname);
    }

}
?>
