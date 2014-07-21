<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <!-- BASE -->
<?php
	global $indexPageOverride;
	if ($indexPageOverride) {
?>
    <title><?php bloginfo('name'); ?> &raquo; <?php bloginfo('description')?></title>
<?php
	} else {
?>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<?php
	}
?>
    <meta name="viewport" content="width=520, user-scalable=no">
	<link rel="icon" type="image/png" href="<?php echo QuickLoansCore::getOpt('theme-favicon','url'); ?>">
    <style>
        #intro.wraper.bg-raw {
            background-image: url('<?php echo QuickLoansCore::getOpt('intro-background','url'); ?>');
        }
        <?php
$args = array("post_type" => "contact_icon");
$myServices = new WP_Query($args);
if ($myServices->have_posts()) {
	while($myServices->have_posts()) {		
        $myServices->the_post();
        $inactiveImage = get_field('icon_inactive');
        $activeImage = get_field('icon_active');
?>
#contact-icon-<?php echo get_the_ID(); ?> {
    background-image: url('<?php echo $inactiveImage['url']; ?>');
}
.super-circle-small:hover #contact-icon-<?php echo get_the_ID(); ?> {
    background-image: url('<?php echo $activeImage['url']; ?>');
}
<?php
} // end while
} // endif
?>

    </style>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- JS -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="cbp-fbscroller">
    <header class="wraper head">
        <div class="mask" style="opacity: 0.5; margin-top: -20px;"></div>
        <section class="head-els">
		<a href="<?php echo home_url(); ?>">
            <div class="logo">
                <img src="<?php echo QuickLoansCore::getOpt("header-logo","url"); ?>" alt="">
                <?php echo QuickLoansCore::getOpt("header-title",''); ?>
            </div>
		</a>
		
            <?php 
			
			if ( has_nav_menu( 'main-menu' ) ) {
				wp_nav_menu( array( 'theme_location' => 'main-menu',
					'container' => false,
					'menu_class' => 'menu js-menu h-pc',
				)); 
			} else {
?>
<ul id="menu-one-page-menu" class="menu js-menu h-pc menu-no-scroll"><li id="menu-item-2097" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2097"><a href="<?php echo admin_url('nav-menus.php?action=locations'); ?>" class="selected">Please set a menu for this space.</a></li>
</ul>
<?php
			}
			?>

            <div class="mbl-menu js-mbl-button" id="mbl-button">
                <div class="mbl_menu_el"></div>
                <div class="mbl_menu_el"></div>
                <div class="mbl_menu_el"></div>
            </div>

			<?php
				if ( has_nav_menu( 'mobile-menu' ) ) {
					wp_nav_menu( array( 'theme_location' => 'mobile-menu',
						'container' => false,
						'menu_class' => 'mbl_menu_cont mbl-menu js-mbl-menu',
					)); 
				} else {
?>
<ul id="menu-one-page-menu" class="mbl_menu_cont mbl-menu js-mbl-menu"><li id="menu-item-2097" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2097"><a href="<?php echo admin_url('nav-menus.php?action=locations'); ?>" class="selected">Please set a menu for this space.</a></li>
</ul>
<?php
				} // endif ?>

            <div style="clear: both;"></div>
        </section>
    </header>
<?php
    wp_reset_postdata();
