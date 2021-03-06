<?php
/**
 * Created by PhpStorm.
 * User: darrenc
 * Date: 02/06/14
 * Time: 14:14
 */
?>
<section class="wraper bg-raw fbscroll_item cbp-so-scroller" id="map">
    <div class="small_circle_cont cbp-so-section" style="display: none">

<?php
$args = array("post_type" => "contact_icon");
$myServices = new WP_Query($args);
if ($myServices->have_posts()) {
    while($myServices->have_posts()) {
        $myServices->the_post();
        $inactiveImage = get_field('icon_inactive');
        $activeImage = get_field('icon_active');
?>
        <div class="super-circle-small cbp-so-side cbp-so-side-bottom">
            <div class="super-circle-content"><?php echo get_the_title(); ?></div>
            <div class="super-circle-small1">
                <div id="contact-icon-<?php echo get_the_ID(); ?>" class="contacticon"></div>
            </div>
            <div class="super-circle-small2">
            </div>
        </div>
<?php
    } // end while for posts
} // endif have_posts for services
?>
    </div>
    <div class="cbp-so-section">
        <div class="address_cont" style="margin-bottom:40px" >
            <h1 class="super-puper-mega-h cbp-so-side cbp-so-side-top alignleft"><?php echo QuickLoansCore::getOpt("contact-title",''); ?></h1>
      
        </div>
        
    </div>
    <div class="address3 mobile">
        <h3><?php _e('Call Now to Speak with an Agent','quickloans_theme'); ?></h3>
        <h1><span><?php echo QuickLoansCore::getOpt("contact-phone",''); ?></span></h1>
    </div>
    <div class="address_cont cbp-so-section" style="padding-left: 100px">
        <div class="address1 cbp-so-side cbp-so-side-top">
            <h3><?php _e('Contact Details ','quickloans_theme'); ?></h3>
            <p><?php echo nl2br(QuickLoansCore::getOpt("contact-street-address",'')); ?></p>
        </div>
        <div class="address2 cbp-so-side cbp-so-side-top">
            <h3><?php _e('Postal Address','quickloans_theme'); ?></h3>
            <p><?php echo nl2br(QuickLoansCore::getOpt("contact-postal-address",'')); ?></p>
        </div>
        <div class="address3 pc cbp-so-side cbp-so-side-top">
            <h3><?php _e('Call Us Now','quickloans_theme'); ?></h3>
            <h1><span><?php echo QuickLoansCore::getOpt("contact-phone",''); ?></span></h1>
        </div>
    </div>
</section>
