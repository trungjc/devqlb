<?php
/**
ReduxFramework Sample Config File
For full documentation, please visit: https://docs.reduxframework.com
 * */

if (!class_exists('Redux_Framework_sample_config')) {

    class Redux_Framework_sample_config {

        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }

        }

        public function initSettings() {

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        public function setSections() {

            // ACTUAL DECLARATION OF SECTIONS
            $this->sections[] = array(
                'title'     => __('General Settings','quickloans_theme'),
                'desc'      => __('Configure the general options','quickloans_theme'),
                'icon'      => 'el-icon-random',
                'fields'    => array(
                    array(
                        'id'       => 'theme-colour',
                        'type'     => 'color',
                        'title'    => __('Main Colour','quickloans_theme'),
                        'transparent' => false,
                        'default' => '#273544'
                    ),

                    array(
                        'id'       => 'theme-colour2',
                        'type'     => 'color',
                        'title'    => __('Secondary Colour','quickloans_theme'),
                        'transparent' => false,
                        'default' => '#5dade2'
                    ),
                    array(
                        'id'       => 'theme-sidebar-layout',
                        'type'     => 'image_select',
                        'title'    => __('Sidebar Position','quickloans_theme'),
                        'description' => __('Select sidebar position for blog pages. Choose between right and left','quickloans_theme'),
                        'options'  => array(
                            '1'      => array(
                                'alt'   => 'Right',
                                'img'   => get_stylesheet_directory_uri() .'/img/sidebar_right.png'
                            ),
                            '2'      => array(
                                'alt'   => 'Left',
                                'img'   => get_stylesheet_directory_uri() .'/img/sidebar_left.png'
                            ),
                        ),
                        'default' => '1'
                    ),

                    array(
                        'id'       => 'theme-favicon',
                        'type'     => 'media',
                        'title'    => __('Custom Favicon','quickloans_theme'),
                        'description' => __('Upload a 16px x 16px PNG/GIF image that will represent your website\'s favicon','quickloans_theme')
                    ),

                    array(
                        'id'       => 'theme-tracking',
                        'type'     => 'ace_editor',
                        'title'    => __('Tracking Code','quickloans_theme'),
                        'description' => __('Paste your Google Analytics or other tracking code here.','quickloans_theme')
                    ),

                    array(
                        'id'       => 'theme-body-font',
                        'type'     => 'typography',
                        'title'    => __('Body Font','quickloans_theme'),
                        'description' => __('Specify the body font properties.','quickloans_theme'),
                        'google'        => true,
                        'font-backup'   => true,
                        'font-style'    => false,
                        'font-weight'   => false,
                        'line-height'   => false,
                        'text-align'    => false,
                        'update_weekly' => true
                    ),

                    array(
                        'id'       => 'theme-heading-font',
                        'type'     => 'typography',
                        'title'    => __('Heading H1-H6 Font','quickloans_theme'),
                        'description' => __('Specify the heading font properties.','quickloans_theme'),
                        'google'        => true,
                        'font-backup'   => true,
                        'font-style'    => false,
                        'font-weight'   => true,
                        'line-height'   => false,
                        'text-align'    => false,
                        'update_weekly' => true
                    ),
                )
            );


            $this->sections[] = array(
                'title'     => __('Header Settings','quickloans_theme'),
                'desc'      => __('The settings here will affect the header menu','quickloans_theme'),
                'icon'      => 'el-icon-website',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields'    => array(

                    array(
                        'id'       => 'header-logo',
                        'type'     => 'media',
                        'url'      => false,
                        'title'    => __('Header Logo','quickloans_theme'),
                        'desc'     => __('Please select the logo for the header','quickloans_theme'),
                    ),

                    array(
                        'id'       => 'header-title',
                        'type'     => 'text',
                        'title'    => __('Header Title','quickloans_theme')
                    ),

                )
            );

            $this->sections[] = array(
                'title'     => __('Loan Calculator','quickloans_theme'),
                'desc'      => __('The settings here affect the top of page loan calculator','quickloans_theme'),
                'icon'      => 'el-icon-website',
                'fields'    => array(

                    array(
                        'id'       => 'loan-amt-min-max',
                        'type'     => 'slider',
                        'title'    => __('Loan Amount Range','quickloans_theme'),
                        'default' => array( 1=> 0, 2 => 10000),
                        'min'      => '0',
                        'max'      => '100000',
                        'handles'   => '2'
                    ),

                    array(
                        'id'       => 'loan-period-min-max',
                        'type'     => 'slider',
                        'title'    => __('Loan Period','quickloans_theme'),
                        'default' => array( 1=> 0, 2 => 6),
                        'min'      => '0',
                        'max'      => '120',
                        'handles'   => '2'
                    ),

                    array(
                        'id'       => 'loan-apr',
                        'type'     => 'text',
                        'title'    => __('Loan APR Rate','quickloans_theme'),
                        'default' => 20,
                    ),

                    array(
                        'id'       => 'loan-fee',
                        'type'     => 'text',
                        'title'    => __('Loan Fee','quickloans_theme'),
                        'default' => 5,
                    ),
					
                    array(
                        'id'       => 'loan-cur',
                        'type'     => 'text',
                        'title'    => __('Currency Symbol','quickloans_theme'),
                        'default' => '$',
                    ),

                    array(
                        'id'       => 'loan-period-type',
                        'type'     => 'select',
                        'title'    => __('Loan Period Type','quickloans_theme'),
                        'options'  => array(
                            '1' => __('Days','quickloans_theme'),
                            '2' => __('Months','quickloans_theme')
                        ),
                        'default'  => '2'
                    ),

                    array(
                        'id'       => 'loan-calculation',
                        'type'     => 'text',
                        'title'    => __('Loan Calculation','quickloans_theme'),
                        'description' => __('Use %M% for AMOUNT, %P% for Period, %R% or APR amount, and %F% for Initial Fee.<br />* for Multiple.<br />/ for Divide.<br />Math.POW(4,3) = (4*4*4)','quickloans_theme'),
                        'default'   => '(%M%) * (1 + %P%*(%R%/100)/365)+%F%'
                    ),

                )
            );

            $this->sections[] = array(
                'title'     => __('Intro Settings','quickloans_theme'),
                'desc'      => __('The settings here affect the "intro" area','quickloans_theme'),
                'icon'      => 'el-icon-website',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields'    => array(

                    array(
                        'id'       => 'intro-title',
                        'type'     => 'text',
                        'title'    => __('Intro Title','quickloans_theme')
                    ),

                    array(
                        'id'       => 'intro-sub-title',
                        'type'     => 'text',
                        'title'    => __('Intro Subtitle','quickloans_theme')
                    ),

                    array(
                        'id'       => 'intro-video-id',
                        'type'     => 'text',
                        'title'    => __('Youtube Video ID','quickloans_theme')
                    ),

                    array(
                        'id'       => 'intro-background',
                        'type'     => 'media',
                        'title'    => __('Intro Background Image','quickloans_theme')
                    ),

                    array(
                        'id'       => 'intro-show-video',
                        'type'     => 'switch',
                        'title'    => __('Show video background','quickloans_theme'),
                        'subtitle' => __('Selecting this display a video (chosen below) over the background','quickloans_theme'),
                        'default'  => false,
                    ),

                    array(
                        'id'       => 'intro-back-video',
                        'type'     => 'text',
                        'title'    => __('Background Video','quickloans_theme'),
                        'subtitle' => __('This needs to be the youtube video ID only','quickloans_theme'),
                    ),

                    array(
                        'id'       => 'intro-watch-video',
                        'type'     => 'text',
                        'title'    => __('Watch Video Label','quickloans_theme'),
						'default'	=> __('WATCH VIDEO','quickloans_theme')
                    ),
					
                    array(
                        'id'       => 'intro-special-license',
                        'type'     => 'text',
                        'title'    => __('Special License Label','quickloans_theme'),
						'default'	=> __('SPECIAL LICENSE','quickloans_theme')
                    ),

                    array(
                        'id'       => 'intro-special-url',
                        'type'     => 'text',
                        'title'    => __('Special License Link','quickloans_theme')
                    ),

                    array(
                        'id'       => 'intro-special-icon',
                        'type'     => 'media',
						'title'		=> 'Special License Icon'
                    ),
					
                    array(
                        'id'       => 'intro-form-title',
                        'type'     => 'text',
                        'title'    => __('Form Heading','quickloans_theme'),
						'default'	=> __('HOW MUCH?','quickloans_theme')
                    ),
					
                    array(
                        'id'       => 'intro-form-subtitle',
                        'type'     => 'text',
                        'title'    => __('Form Subtitle','quickloans_theme'),
						'default'	=> __('Quick loan in 15 minutes!','quickloans_theme')
                    ),
					
                    array(
                        'id'       => 'intro-amount-query',
                        'type'     => 'text',
                        'title'    => __('Amount Query Label','quickloans_theme'),
						'default'	=> __('How much would you like?','quickloans_theme')
                    ),
					
                    array(
                        'id'       => 'intro-period-query',
                        'type'     => 'text',
                        'title'    => __('Period Query Label','quickloans_theme'),
						'default'	=> __('How long for?','quickloans_theme')
                    ),

                    array(
                        'id'       => 'intro-action',
                        'type'     => 'text',
                        'title'    => __('Intro Action Label','quickloans_theme'),
						'default'	=> __('GET YOUR LOAN NOW','quickloans_theme')
                    ),
				)
            );

            $this->sections[] = array(
                'title'     => __('Services Settings','quickloans_theme'),
                'desc'      => __('Services section','quickloans_theme'),
                'icon'      => 'el-icon-website',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields'    => array(

                    array(
                        'id'       => 'services-title',
                        'type'     => 'text',
                        'title'    => __('Services Title','quickloans_theme')
                    ),

                    array(
                        'id'       => 'services-sub-title',
                        'type'     => 'text',
                        'title'    => __('Services Subtitle','quickloans_theme')
                    ),

                    array(
                        'id'       => 'services-review-text',
                        'type'     => 'text',
                        'title'    => __('Services Review Number Label','quickloans_theme')
                    ),

                    array(
                        'id'       => 'services-count',
                        'type'     => 'text',
                        'title'    => __('Serviced Loans Count','quickloans_theme')
                    ),
					
                    array(
                        'id'       => 'services-action',
                        'type'     => 'text',
                        'title'    => __('Services Action Button','quickloans_theme')
                    ),

                )
            );

            $this->sections[] = array(
                'title'     => __('How-to Settings','quickloans_theme'),
                'desc'      => __('How-to section','quickloans_theme'),
                'icon'      => 'el-icon-website',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields'    => array(

                    array(
                        'id'       => 'howto-title',
                        'type'     => 'text',
                        'title'    => __('How-to Title','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-sub-title',
                        'type'     => 'text',
                        'title'    => __('How-to Subtitle','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-left-header',
                        'type'     => 'text',
                        'title'    => __('How-to Left Column Heading','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-left-bullet',
                        'type'     => 'multi_text',
                        'title'    => __('How-to Bullet Points','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-left-paper',
                        'type'     => 'textarea',
                        'title'    => __('How-to Left Lower Text','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-left-action',
                        'type'     => 'text',
                        'title'    => __('How-to Action Button','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-right-header',
                        'type'     => 'text',
                        'title'    => __('How-to Right Column Heading','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-right-text',
                        'type'     => 'textarea',
                        'title'    => __('How-to Right Top Text','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-faq-heading',
                        'type'     => 'text',
                        'title'    => __('How-to FAQ Heading Text','quickloans_theme')
                    ),

                    array(
                        'id'       => 'howto-faq',
                        'type'     => 'slides',
                        'title'    => __('How-to FAQ','quickloans_theme'),
                        'subtitle' => __('Please only fill in title and description fields.','quickloans_theme')
                    ),

                )
            );

            $this->sections[] = array(
                'title'     => __('Loan App Settings','quickloans_theme'),
                'desc'      => __('Loan application section','quickloans_theme'),
                'icon'      => 'el-icon-website',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields'    => array(

                    array(
                        'id'       => 'loanapp-title',
                        'type'     => 'text',
                        'title'    => __('Loan Application Title','quickloans_theme')
                    ),

                    array(
                        'id'       => 'loan-sub-title',
                        'type'     => 'text',
                        'title'    => __('Loan Application Subtitle','quickloans_theme')
                    ),

                    array(
                        'id'       => 'loan-ext-link',
                        'type'     => 'switch',
                        'title'    => __('Submit to external site','quickloans_theme'),
                        'subtitle' => __('Selecting this will submit the form to an external link set below.','quickloans_theme'),
                        'default'  => false,
                    ),

                    array(
                        'id'       => 'loan-ext-url',
                        'type'     => 'text',
                        'title'    => __('Loan External URL','quickloans_theme')
                    ),

                    array(
                        'id'       => 'loan-steps',
                        'type'     => 'slides',
                        'title'    => __('Loan Steps','quickloans_theme'),
                        'subtitle' => __('This slider contains the steps the loan will take. Note, only title and description are used','quickloans_theme'),
                    ),

                )
            );

            $this->sections[] = array(
                'title'     => __('Contact Settings','quickloans_theme'),
                'desc'      => __('Contact Us Section','quickloans_theme'),
                'icon'      => 'el-icon-website',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields'    => array(
                    array(
                        'id'       => 'contact-title',
                        'type'     => 'text',
                        'title'    => __('Contact Us Title','quickloans_theme')
                    ),

                    array(
                        'id'       => 'contact-street-address',
                        'type'     => 'textarea',
                        'title'    => __('Street Address','quickloans_theme')
                    ),

                    array(
                        'id'       => 'contact-postal-address',
                        'type'     => 'textarea',
                        'title'    => __('Postal Address','quickloans_theme')
                    ),

                    array(
                        'id'       => 'contact-phone',
                        'type'     => 'text',
                        'title'    => __('Phone Number','quickloans_theme')
                    ),
                )
            );

        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-1',
                'title'     => __('Theme Information 1', 'redux-framework-demo'),
                'content'   => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
            );

            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-2',
                'title'     => __('Theme Information 2', 'redux-framework-demo'),
                'content'   => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');
        }

        /**

        All the possible arguments for Redux.
        For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

         * */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name'          => 'kn_quickLoansOptions',            // This is where your data is stored in the database and also becomes your global variable name.
                'display_name'      => $theme->get('Name'),     // Name that appears at the top of your panel
                'display_version'   => $theme->get('Version'),  // Version that appears at the top of your panel
                'menu_type'         => 'menu',                  //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu'    => true,                    // Show the sections below the admin menu item or not
                'menu_title'        => __('Theme Options','quickloans_theme'),
                'page_title'        => __('Quick Loans Theme Options','quickloans_theme'),

                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => 'AIzaSyAXjOGAdu4-BfDW5v-pvemXsgN2b4_MO2o', // Must be defined to add google fonts to the typography module

                'async_typography'  => false,                    // Use a asynchronous font on the front end or font string
                'admin_bar'         => true,                    // Show the panel pages on the admin bar
                'global_variable'   => '',                      // Set a different name for your global variable other than the opt_name
                'dev_mode'          => true,                    // Show the time the page took to load, etc
                'customizer'        => true,                    // Enable basic customizer support

                // OPTIONAL -> Give you extra features
                'page_priority'     => null,                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent'       => 'themes.php',            // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions'  => 'manage_options',        // Permissions needed to access the options panel.
                'menu_icon'         => '',                      // Specify a custom URL to an icon
                'last_tab'          => '',                      // Force your panel to always open to a specific tab (by id)
                'page_icon'         => 'icon-themes',           // Icon displayed in the admin panel next to your menu_title
                'page_slug'         => '_options',              // Page slug used to denote the panel
                'save_defaults'     => true,                    // On load save the defaults to DB before user clicks save or not
                'default_show'      => false,                   // If true, shows the default value next to each field that is not the default value.
                'default_mark'      => '',                      // What to print by the field's title if the value shown is default. Suggested: *
                'show_import_export' => true,                   // Shows the Import/Export panel when not used as a field.

                // CAREFUL -> These options are for advanced use only
                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => true,                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag'        => true,                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database'              => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'system_info'           => false, // REMOVE

                // HINTS
                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                )
            );


            // Panel Intro text -> before the form
            $this->args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo');

            // Add content after the form.
            $this->args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo');
        }

    }

    global $reduxConfig;
    $reduxConfig = new Redux_Framework_sample_config();
}