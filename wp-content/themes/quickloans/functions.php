<?php
    if ( ! isset( $content_width ) ) $content_width = 940;

// include redux
	// include_once dirname(__FILE__) . "/tgm-plugin-activation.php";
    include_once dirname(__FILE__) . "/redux-framework/redux-framework.php";
    include_once dirname(__FILE__) . "/theme-config.php";
    include_once dirname(__FILE__) . "/advanced-custom-fields/acf.php";

add_action( 'init', array('QuickLoansCore','register_menus') );
add_action( 'wp_ajax_ql_submit_loan', array('QuickLoansCore','submit_loan') );
add_action( 'wp_ajax_nopriv_ql_submit_loan', array('QuickLoansCore','submit_loan') );
add_action( 'wp_ajax_ql_stylesheet', array('QuickLoansCore','stylesheet') );
add_action( 'wp_ajax_nopriv_ql_stylesheet', array('QuickLoansCore','stylesheet') );

add_action( 'widgets_init', array('QuickLoansCore','init_widgets'));
add_action('admin_footer-post.php', array('QuickLoansCore','post_status_list'));

add_action( 'wp_enqueue_scripts', array('QuickLoansCore','load_scripts') );

add_action( 'manage_loan_application_posts_custom_column' , array('QuickLoansCore','custom_columns'), 10, 2 );

// add_action( 'tgmpa_register', array('QuickLoansCore','register_plugins') );

add_filter( 'manage_loan_application_posts_columns', array('QuickLoansCore','edit_columns') );
add_filter( 'manage_edit-loan_application_sortable_columns', array('QuickLoansCore','sort_columns') );
add_filter( 'excerpt_length', array('QuickLoansCore','custom_excerpt_length'), 999 );
add_filter('excerpt_more', array('QuickLoansCore','custom_excerpt_more'));
add_shortcode('ql_intro',array('QuickLoansCore','sc_intro'));
add_shortcode('ql_services',array('QuickLoansCore','sc_services'));
add_shortcode('ql_howto',array('QuickLoansCore','sc_howto'));
add_shortcode('ql_loanapp',array('QuickLoansCore','sc_loanapp'));
add_shortcode('ql_contacts',array('QuickLoansCore','sc_contacts'));

class QuickLoansCore {
	static public function getOpt($key,$subKey='') {
		global $kn_quickLoansOptions;

		if ( !empty( $kn_quickLoansOptions[$key] ) ) {
			if ($subKey!='') {
				if (isset($kn_quickLoansOptions[$key][$subKey])) {
					return $kn_quickLoansOptions[$key][$subKey];
				} else {
					return false;
				}
			}
			return $kn_quickLoansOptions[$key];
		}

		return false;
	}
	static public function register_plugins() {
		$plugins = array(
			array(
				'name'               => 'Redux Framework', // The plugin name.
				'slug'               => 'redux-framework', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			),
		);
		
		$config = array(
			'id'           => 'quickloans_tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to pre-packaged plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
				'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
				'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
				'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'tgmpa' ), // %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'tgmpa' ), // %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'tgmpa' ), // %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'tgmpa' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'tgmpa' ),
				'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
				'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
				'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
				'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);

		tgmpa( $plugins, $config );		
	}

	static public function stylesheet() {
		include_once dirname(__FILE__) . "/css/index.css.php";
		exit();
	}
	
	static public function custom_excerpt_more( $more ) {
		global $post;
		return " <a href='" . get_permalink() . "'>[&hellip;]</a>";
	}
	static public function custom_excerpt_length( $length ) {
		return 90;
	}

    static public function load_scripts() {

        wp_enqueue_style( 'google-font-lato', 'http://fonts.googleapis.com/css?family=Lato:300,400' );
        wp_enqueue_style( 'google-font-belgrano', 'http://fonts.googleapis.com/css?family=Belgrano' );
        wp_enqueue_style( 'google-font-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans' );

        wp_enqueue_style( 'ql-normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
        wp_enqueue_style( 'ql-index', admin_url('admin-ajax.php').'?action=ql_stylesheet' );
        wp_enqueue_style( 'ql-parallax', get_stylesheet_directory_uri() . '/css/parallax.css' );
        wp_enqueue_style( 'ql-mobilereset', get_stylesheet_directory_uri() . '/css/mobile-reset.css' );
        wp_enqueue_style( 'ql-mobile', get_stylesheet_directory_uri() . '/css/mobile.css' );
        wp_enqueue_style( 'ql-videolightbox', get_stylesheet_directory_uri() . '/videolb/videolightbox.css' );
        wp_enqueue_style( 'ql-vlboverlay', get_stylesheet_directory_uri() . '/videolb/overlay-minimal.css' );

        // now the scripts

        wp_enqueue_script('ql-classie',get_stylesheet_directory_uri() . '/js/classie.js',array( 'jquery','jquery-ui-core' ));
        wp_enqueue_script('ql-modernizr',get_stylesheet_directory_uri() . '/js/modernizr.custom.js',array( 'jquery','jquery-ui-core' ));
        wp_enqueue_script('ql-swfobject',get_stylesheet_directory_uri() . '/videolb/swfobject.js',array( 'jquery','jquery-ui-core' ));
        wp_enqueue_script('ql-tubular',get_stylesheet_directory_uri() . '/js/jquery.tubular.1.0.js',array( 'jquery','jquery-ui-core' ));

        // now footer scripts

        wp_enqueue_script('ql-gmaps','http://maps.google.com/maps/api/js?sensor=false',array(),'', true);
        wp_enqueue_script('ql-scroll2',get_stylesheet_directory_uri() . '/js/scroll2.js?' . time(),array('jquery-effects-core'),'', true);
        wp_enqueue_script('ql-nicescroll',get_stylesheet_directory_uri() . '/js/niceScroll.js',array(),'', true);
        wp_enqueue_script('ql-cbpscroller',get_stylesheet_directory_uri() . '/js/cbpScroller.js',array(),'', true);
        wp_enqueue_script('ql-init',get_stylesheet_directory_uri() . '/js/init.js?2',array(),'', true);
        wp_enqueue_script('ql-jquery-counters',get_stylesheet_directory_uri() . '/js/jquery.counters.js',array(),'', true);
        wp_enqueue_script('ql-jquery-slider',get_stylesheet_directory_uri() . '/js/jquery.slider.min.js',array(),'', true);
		
        if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	}

    static public function post_status_list(){
        global $post;
        $completeA = $completeD = '';
        $label = '';
        if($post->post_type == 'loan_application'){
            if($post->post_status == 'approved'){
                $completeA = ' selected=\"selected\"';
                $label = '<span id=\"post-status-display\"> ' . __('Approved','quickloans_theme') . '</span>';
            }
            if($post->post_status == 'declined'){
                $completeD = ' selected=\"selected\"';
                $label = '<span id=\"post-status-display\"> ' . __('Declined','quickloans_theme') . '</span>';
            }

            $approvedText =  __('Approved','quickloans_theme');
            $declinedText =  __('Declined','quickloans_theme');
            echo <<<EOF
<script>
jQuery(document).ready(function($){
   $("select#post_status").append("<option value='approved' {$completeA}>{$approvedText}</option>");
   $("select#post_status").append("<option value='declined' {$completeD}>{$declinedText}</option>");
   $(".misc-pub-section label").append("{$label}");
});
</script>
EOF;
        }
    }

    static public function sort_columns($columns) {
        $columns["full_name"] = 'full_name';
        $columns["email"] = 'email';
        $columns["phone"] = 'phone';
        $columns["loan_amount"] = 'loan_amount';
        $columns["loan_term"] = 'loan_term';
        return $columns;
    }
    static public function edit_columns($columns) {
        $columns['full_name'] = __('Full Name','quickloans_theme');
        $columns['email'] = __('Email','quickloans_theme');
        $columns['phone'] = __('Phone','quickloans_theme');
        $columns['loan_amount'] = __('Amount','quickloans_theme');
        $columns['loan_term'] = sprintf(__("Period in %s",'quickloans_theme'),((QuickLoansCore::getOpt("loan-period-type",'')==1)?__('Days','quickloans_theme'):__('Months','quickloans_theme')));
        return $columns;
    }

    static public function custom_columns($column, $post_id) {
        $output = get_field($column,$post_id);
        if ($output) {
            echo $output;
            return;
        }
        echo __("N/A",'quickloans_theme');
    }

    static public function init_widgets() {
        register_sidebar( array(
            'name' => __("Category Right",'quickloans_theme'),
            'id' => 'ql-sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ) );
        register_sidebar( array(
            'name' => __("Post Right",'quickloans_theme'),
            'id' => 'ql2-sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ) );
    }

    static public function sc_intro() {
        get_template_part('section','intro');
    }

    static public function sc_services() {
        get_template_part('section','services');
    }

    static public function sc_howto() {
        get_template_part('section','howto');
    }

    static public function sc_loanapp() {
        get_template_part('section','loanapp');
    }

    static public function sc_contacts() {
        get_template_part('section','contacts');
    }

    static public function register_menus() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
        register_nav_menu('main-menu',__( 'Main Menu' ));

        register_post_type('loan_application',
            array(
                'label' => __('Loan Apps','quickloan_themes'),
                'description' => __('A customers loan application','quickloan_themes'),
                'public' => false,
                'show_ui' => true,
                'show_in_menu' => true,
                'capability_type' => 'post',
                'map_meta_cap' => true,
                'hierarchical' => false,
                'rewrite' => array('slug' => 'loan_application', 'with_front' => true),
                'query_var' => false,
                'exclude_from_search' => true,
                'menu_icon' => get_stylesheet_directory_uri() . '/img/coin11.png',
                'supports' => array('revisions'),
                'labels' => array (
                    'name' => __('Loan Apps','quickloan_themes'),
                    'singular_name' => __('Loan App','quickloan_themes'),
                    'menu_name' => __('Loan Apps','quickloan_themes'),
                    'add_new' => __('Add Loan App','quickloan_themes'),
                    'add_new_item' => __('Add New Loan App','quickloan_themes'),
                    'edit' => __('Edit','quickloan_themes'),
                    'edit_item' => __('Edit Loan App','quickloan_themes'),
                    'new_item' => __('New Loan App','quickloan_themes'),
                    'view' => __('View Loan App','quickloan_themes'),
                    'view_item' => __('View Loan App','quickloan_themes'),
                    'search_items' => __('Search Loan Apps','quickloan_themes'),
                    'not_found' => __('No Loan Apps Found','quickloan_themes'),
                    'not_found_in_trash' => __('No Loan Apps Found in Trash','quickloan_themes'),
                    'parent' => __('Parent Loan App','quickloan_themes'),
                )
            )
        );

        register_post_type('contact_icon', array(
            'label' => __('Contact Icons','quickloan_themes'),
            'description' => __('The icons at the top of the contact us section','quickloan_themes'),
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => 'themes.php',
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'contact_icon', 'with_front' => true),
            'query_var' => false,
            'exclude_from_search' => true,
            'supports' => array('title'),
            'labels' => array (
                'name' => __('Contact Icons','quickloan_themes'),
                'singular_name' => __('Contact Icon','quickloan_themes'),
                'menu_name' => __('Edit Contact Icons','quickloan_themes'),
                'add_new' => __('Add Contact Icon','quickloan_themes'),
                'add_new_item' => __('Add New Contact Icon','quickloan_themes'),
                'edit' => __('Edit','quickloan_themes'),
                'edit_item' => __('Edit Contact Icon','quickloan_themes'),
                'new_item' => __('New Contact Icon','quickloan_themes'),
                'view' => __('View Contact Icon','quickloan_themes'),
                'view_item' => __('View Contact Icon','quickloan_themes'),
                'search_items' => __('Search Contact Icons','quickloan_themes'),
                'not_found' => __('No Contact Icons Found','quickloan_themes'),
                'not_found_in_trash' => __('No Contact Icons Found in Trash','quickloan_themes'),
                'parent' => __('Parent Contact Icon','quickloan_themes'),
            )
        ));

        register_post_type('service', array(
            'label' => __('Services','quickloan_themes'),
            'description' => '',
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => 'themes.php',
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'service', 'with_front' => true),
            'query_var' => true,
            'exclude_from_search' => true,
            'supports' => array('title'),
            'labels' => array (
                'name' => __('Services','quickloan_themes'),
                'singular_name' => __('Service','quickloan_themes'),
                'menu_name' => __('Edit Services','quickloan_themes'),
                'add_new' => __('Add Service','quickloan_themes'),
                'add_new_item' => __('Add New Service','quickloan_themes'),
                'edit' => __('Edit','quickloan_themes'),
                'edit_item' => __('Edit Service','quickloan_themes'),
                'new_item' => __('New Service','quickloan_themes'),
                'view' => __('View Service','quickloan_themes'),
                'view_item' => __('View Service','quickloan_themes'),
                'search_items' => __('Search Services','quickloan_themes'),
                'not_found' => __('No Services Found','quickloan_themes'),
                'not_found_in_trash' => __('No Services Found in Trash','quickloan_themes'),
                'parent' => __('Parent Service','quickloan_themes'),
            )
        ) );

        register_field_group(array (
            'id' => 'acf_contact-icon-fields',
            'title' => __('Contact Icon Fields','quickloan_themes'),
            'fields' => array (
                array (
                    'key' => 'field_538c773652b3a',
                    'label' => __('Icon Inactive','quickloan_themes'),
                    'name' => 'icon_inactive',
                    'type' => 'image',
                    'required' => 1,
                    'save_format' => 'object',
                    'preview_size' => 'thumbnail',
                    'library' => 'uploadedTo',
                ),
                array (
                    'key' => 'field_538c77795acad',
                    'label' => __('Icon Active','quickloan_themes'),
                    'name' => 'icon_active',
                    'type' => 'image',
                    'required' => 1,
                    'save_format' => 'object',
                    'preview_size' => 'thumbnail',
                    'library' => 'uploadedTo',
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'contact_icon',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array (
                'position' => 'normal',
                'layout' => 'default',
                'hide_on_screen' => array (
                ),
            ),
            'menu_order' => 0,
        ));

        register_field_group(array (
            'id' => 'acf_services',
            'title' => __('Services','quickloan_themes'),
            'fields' => array (
                array (
                    'key' => 'field_538c6e17daf25',
                    'label' => __('Service Description','quickloan_themes'),
                    'name' => 'service_description',
                    'type' => 'textarea',
                    'instructions' => __('Enter the description for your service here','quickloan_themes'),
                    'required' => 1,
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'formatting' => 'br',
                ),
                array (
                    'key' => 'field_538c6e3e65931',
                    'label' => __('Service Image','quickloan_themes'),
                    'name' => 'service_image',
                    'type' => 'image',
                    'required' => 1,
                    'save_format' => 'object',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'service',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array (
                'position' => 'normal',
                'layout' => 'default',
                'hide_on_screen' => array (
                ),
            ),
            'menu_order' => 0,
        ));

        $args = array(
            'label'                     => _x( 'Approved', 'Status General Name', 'quickloan_themes' ),
            'label_count'               => _n_noop( 'Approved (%s)',  'Approved (%s)', 'quickloan_themes' ),
            'public'                    => false,
            'show_in_admin_all_list'    => true,
            'show_in_admin_status_list' => true,
            'exclude_from_search'       => true,
        );
        register_post_status( 'Approved', $args );

        $args = array(
            'label'                     => _x( 'Declined', 'Status General Name', 'quickloan_themes' ),
            'label_count'               => _n_noop( 'Declined (%s)',  'Approved (%s)', 'quickloan_themes' ),
            'public'                    => false,
            'show_in_admin_all_list'    => true,
            'show_in_admin_status_list' => true,
            'exclude_from_search'       => true,
        );
        register_post_status( 'Declined', $args );
    }

    static public function submit_loan() {
        // Create post object
        $my_post = array(
            'post_status'   => 'publish',
            'post_type'     => 'loan_application',
            'post_title'    => $_POST["full_name"] . " " . date("Y-m-d")
        );

        // Insert the post into the database
        $postID = wp_insert_post( $my_post );

        unset($_POST["action"]);

        $args = array("post_type" => "acf");
        $args["name"] = 'acf_loan-app-form';
        $acfGroups = new WP_Query($args);
        if ($acfGroups->have_posts()) {
            $acf_meta = get_post_custom_keys( $acfGroups->post->ID );
            $fields = array();
            foreach($acf_meta as $fieldID) {
                if (!preg_match("/^field_.*/ims",$fieldID)) continue;
                $field = get_field_object($fieldID);
                $fields[$field["order_no"]] = $field;
            }
            ksort($fields);
        }

        foreach($fields as $orderID => $field) {
            $key = $field["key"];
            $fieldName = $field["name"];
            $value = "";
            if (isset($_POST[$fieldName])) {
                $value = $_POST[$fieldName];
            }
            add_post_meta($postID,$fieldName,$value,true);
            add_post_meta($postID,'_' . $fieldName,$key,true);
        }

        echo "{}";
        exit();
    }
}
