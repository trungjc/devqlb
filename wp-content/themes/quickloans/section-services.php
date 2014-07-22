<?php
/**
 * Created by PhpStorm.
 * User: darrenc
 * Date: 02/06/14
 * Time: 14:14
 */
?>
<section class="wraper_bg-bright cbp-so-scroller" id="services" style="padding-top:20px;">


    <div class="services_cont">
        <h1 style="padding-top:0;margin-top:0"><span><?php echo QuickLoansCore::getOpt('services-title',''); ?></span></h1>
    <h3><?php echo QuickLoansCore::getOpt('services-sub-title',''); ?></h3>
        <div class="services_cont_slider cbp-so-section">
<?php
    $args = array("post_type" => "service");
    $myServices = new WP_Query($args);
    if ($myServices->have_posts()) {$i=1;
        while($myServices->have_posts()) {
            $myServices->the_post();
            $image = get_field('service_image');
            if($i==2){
                echo "<h2>Just follow the below simple steps to get your advice:</h2>";
                
                
            }
            $i++;
?><?php if( $i==6){ echo "<div style='clear:both'></div> "; } ?>
            <div class="service_<?php echo $i; ?>  <?php if($i==3 || $i==4 || $i==5){ echo " fl"; } ?>">
                <h2 class=" <?php if( $i==6){ echo "last-heading"; } ?> " style="display: none"><?php echo get_the_title(); ?></h2>
                <div class="image" >
                    <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["title"] ?>">
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
    <div class="getaloan-cont">
            <div class="  cbp-so-sections">
                <h2 style="text-align:left;" class="p_bottoms cbp-so-sides cbp-so-side-bottoms"><?php echo QuickLoansCore::getOpt('services-review-text',''); ?></h2>
               <p>
                  <span style="vertical-align: middle" class="trials cbp-so-side cbp-so-side-bottom">
                   <a href="#loan" ><?php echo QuickLoansCore::getOpt('services-action',''); ?></a>
                </span> 
                 <span><?php
                    $count = QuickLoansCore::getOpt("services-count",'');
                    echo $count;
                    $digit1 = floor($count/1000); $count = $count - ($digit1 * 1000);
                    $digit2 = floor($count/100);  $count = $count - ($digit2 * 100);
                    $digit3 = floor($count/10);  $count = $count - ($digit3 * 10);
                    $digit4 = floor($count/1);  $count = $count - ($digit4 * 1);
                ?>
                </span>  
               </p>
               
            </div>
    </div>

</section>

<div class="diagonal2"></div>
