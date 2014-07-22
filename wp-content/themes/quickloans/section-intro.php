<?php
/**
 * Created by PhpStorm.
 * User: darrenc
 * Date: 02/06/14
 * Time: 14:14
 */
?>
<section class="wraper bg-raw  fbscroll_item cbp-so-scroller <?php if (QuickLoansCore::getOpt("intro-show-video",'')!=0) echo "video-bg"; ?>" id="intro">
	<?php if (QuickLoansCore::getOpt("intro-show-video",'')!=0) { ?><div class="pattern"></div><?php } ?>
    <article class="cont cbp-so-section">
        <div class="intro_h">
            <h1 class="cbp-so-side cbp-so-side-left"><?php echo QuickLoansCore::getOpt('intro-title',''); ?></h1>
            <h3 class="special"><?php echo QuickLoansCore::getOpt('intro-sub-title',''); ?></h3>
            <div class="intro_links">
                <a class="voverlay" href="http://www.youtube.com/v/<?php echo QuickLoansCore::getOpt('intro-video-id',''); ?>?autoplay=1&amp;rel=0&amp;enablejsapi=1&amp;playerapiid=ytplayer">
                    <div class="arrow_blue">?
                        <div class="arrow_right" style="display: none"></div>
                    </div>
                </a>
                <script src="<?php echo get_stylesheet_directory_uri(); ?>/videolb/jquery.tools.min.js" type="text/javascript"></script>
                <script src="<?php echo get_stylesheet_directory_uri(); ?>/videolb/videolightbox.js" type="text/javascript"></script>
                <h3 class="ilink"><?php echo QuickLoansCore::getOpt('intro-watch-video',''); ?></h3>
                <div class="icon_white">
                    <img src="<?php echo QuickLoansCore::getOpt("intro-special-icon","url"); ?>" alt="">
                </div>
				<a href="<?php echo QuickLoansCore::getOpt("intro-special-url",''); ?>" target="_blank"><h3 class="ilink"><?php echo QuickLoansCore::getOpt('intro-special-license',''); ?></h3></a>
            </div>
        </div>
        <div class="intro_block">
            <h1><?php echo QuickLoansCore::getOpt("intro-form-title",''); ?></h1>
            <h3 class="special"><?php echo QuickLoansCore::getOpt("intro-form-subtitle",''); ?></h3>
            <div class="polosochka_3"></div>
            <div class="cbp-so-section">
         
        <?php
        $out = QuickLoansCore::getOpt("loan-steps",'');
        if (!empty($out)) {
            $i = 0;
            $size = count($out);
            foreach($out as $item) {
                $i++;
                $first = $vertical = "";
                if ($i==1) {
                    $first = "first";
                }
                if ($i<$size) {
                    $vertical = '<div class="vertical"></div>';
                }
        ?>
        <div class="step <?php echo $first; ?>">
            <div class="img_border2"><h2><?php echo $i; ?></h2></div>
            <?php echo $vertical; ?>
            <h2><?php echo $item["title"]; ?></h2>
            <p><?php echo $item["description"]; ?></p>
        </div>
        <?php
            } // end foreach
        } // endif
        ?>
                <div class="trial" ><a href="#loan">SUBMIT YOUR APPLICATION NOW</a></div>
                <div class="bottom-label">
                    <p>Application Fee Only <span> $20.00 </span>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/paypal.png" class="paypal" alt=""></p></div>
               
    </div>
            <div class="amount-cont js-loader-line-init" style="display: none">
                <div class="amount">
                    <div class="minus"></div>
                    <div class="load-line">
                        <div class="load-inner-line"></div>
                    </div>
                    <div class="plus"></div>
                </div>
                <input class="input-amount" id="calcAmt" type="text" value="<?php echo QuickLoansCore::getOpt("loan-amt-min-max",1) + ((QuickLoansCore::getOpt("loan-amt-min-max",2) - QuickLoansCore::getOpt("loan-amt-min-max",1)) / 2); ?>" data-minval="<?php echo QuickLoansCore::getOpt("loan-amt-min-max",1); ?>" data-maxval="<?php echo QuickLoansCore::getOpt("loan-amt-min-max",2); ?>" data-valstep="10" data-round="10">
                <div class="amount-message">
                    <span class="amount-message-main"><?php echo QuickLoansCore::getOpt("intro-amount-query",''); ?></span><br>
                    <span class="amount-message-sub"><?php _e('Up to','quickloans_theme'); ?> <?php echo QuickLoansCore::getOpt("loan-cur",'') . QuickLoansCore::getOpt("loan-amt-min-max",2); ?></span>
                </div>
            </div>
            <div class="amount-cont js-loader-line-init" style="display: none">
                <div class="amount">
                    <div class="minus"></div>
                    <div class="load-line">
                        <div class="load-inner-line"></div>
                    </div>
                    <div class="plus"></div>
                </div>
                <input style="display: none" class="input-amount" id="calcPer" type="text" value="<?php echo QuickLoansCore::getOpt("loan-period-min-max",1) + ((QuickLoansCore::getOpt("loan-period-min-max",2) - QuickLoansCore::getOpt("loan-amt-min-max",1)) / 2); ?>" data-minval="<?php echo QuickLoansCore::getOpt("loan-period-min-max",1); ?>" data-maxval="<?php echo QuickLoansCore::getOpt("loan-period-min-max",2); ?>"  data-valstep="1" data-round="1">
                <div class="amount-message">
                    <span class="amount-message-main"><?php echo QuickLoansCore::getOpt("intro-period-query",''); ?></span><br>
                    <span class="amount-message-sub"><?php _e('Up to','quickloans_theme'); ?> <?php echo QuickLoansCore::getOpt("loan-period-min-max",2) . " " . (QuickLoansCore::getOpt("loan-period-type",'')==1?__("Days",'quickloans_theme'):__("Months",'quickloans_theme')); ?></span>
                </div>
            </div>
            <div class="trial" style="display: none"><a href="#loan" id="calc-loan" ><?php echo QuickLoansCore::getOpt("intro-action",''); ?></a></div>
        </div>
    </article>
</section>

<div class="diagonal1"></div>
