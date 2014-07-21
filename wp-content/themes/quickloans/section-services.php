<?php
/**
 * Created by PhpStorm.
 * User: darrenc
 * Date: 02/06/14
 * Time: 14:14
 */
?>
<section class="wraper_bg-bright cbp-so-scroller" id="services">

    <h1><span><?php echo QuickLoansCore::getOpt('services-title',''); ?></span></h1>
    <div class="polosochka2"></div>
    <h3><?php echo QuickLoansCore::getOpt('services-sub-title',''); ?></h3>

    <div class="services_cont">
        <div class="services_cont_slider cbp-so-section">
<?php
    $args = array("post_type" => "service");
    $myServices = new WP_Query($args);
    if ($myServices->have_posts()) {
        while($myServices->have_posts()) {
            $myServices->the_post();
            $image = get_field('service_image');
?>
            <div class="service_l cbp-so-side cbp-so-side-left">
                <div class="super-circle">
                    <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["title"] ?>">
                    <div class="super-circle1"></div>
                    <div class="super-circle2"></div>
                </div>
                <h2><?php echo get_the_title(); ?></h2>
                <p><?php echo get_field('service_description'); ?></p>
            </div>
<?php
        } // end while for posts
    } // endif have_posts for services
?>
        </div> <!-- END services slider -->
    </div> <!-- END services_cont -->

    <section class="paging paging-main mbl-paging" id="service_paging">
        <div class="dot selected"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </section>

    <div class="getaloan-cont cbp-so-section">
        <p class="p_bottom cbp-so-side cbp-so-side-bottom"><?php echo QuickLoansCore::getOpt('services-review-text',''); ?></p>
<?php
	$count = QuickLoansCore::getOpt("services-count",'');
	$digit1 = floor($count/1000); $count = $count - ($digit1 * 1000);
	$digit2 = floor($count/100);  $count = $count - ($digit2 * 100);
	$digit3 = floor($count/10);  $count = $count - ($digit3 * 10);
	$digit4 = floor($count/1);  $count = $count - ($digit4 * 1);
?>
        <div class="counters cbp-so-side cbp-so-side-bottom" id="counter-1" data-countto="<?php echo $digit1; ?>">0</div>
        <div class="counters cbp-so-side cbp-so-side-bottom" id="counter-2" data-countto="<?php echo $digit2; ?>">0</div>
        <div class="counters cbp-so-side cbp-so-side-bottom" id="counter-3" data-countto="<?php echo $digit3; ?>">0</div>
        <div class="counters cbp-so-side cbp-so-side-bottom" id="counter-4" data-countto="<?php echo $digit4; ?>">0</div>
        <div class="trial cbp-so-side cbp-so-side-bottom"><a href="#loan" ><?php echo QuickLoansCore::getOpt('services-action',''); ?></a></div>
    </div>
</section>

<div class="diagonal2"></div>
