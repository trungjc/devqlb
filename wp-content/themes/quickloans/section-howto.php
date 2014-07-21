<?php
/**
 * Created by PhpStorm.
 * User: darrenc
 * Date: 02/06/14
 * Time: 14:14
 */
?>
<section class="wraper bg-raw  fbscroll_item cbp-so-scroller" id="get">
    <h1><?php echo QuickLoansCore::getOpt("howto-title",''); ?></h1>
    <div class="polosochka2"></div>
    <h3><?php echo QuickLoansCore::getOpt("howto-sub-title",''); ?></h3>

    <div class="get_cont cbp-so-section">
        <div class="get_left cbp-so-side cbp-so-side-top">
            <h2><?php echo QuickLoansCore::getOpt("howto-left-header",''); ?></h2>
            <?php
				$out = QuickLoansCore::getOpt("howto-left-bullet",'');
                if (!empty($out)) {
                    foreach($out as $bullet) {
                        echo "<p>" . $bullet . "</p>";
                    }
                }
            ?>

            <div class="note cbp-so-side cbp-so-side-top">
                <p><?php echo QuickLoansCore::getOpt("howto-left-paper",'') ?></p>
                <div class="trial"><a href="#loan" ><?php echo QuickLoansCore::getOpt("howto-left-action",''); ?></a></div>
            </div>
        </div>
        <div class="get_right cbp-so-side cbp-so-side-top">
            <h2><?php echo QuickLoansCore::getOpt("howto-right-header",''); ?></h2>
            <p><?php echo QuickLoansCore::getOpt("howto-right-text",''); ?></p>
            <h2><?php echo QuickLoansCore::getOpt("howto-faq-heading",''); ?></h2>
            <div class="js-animated-list cbp-so-side cbp-so-side-top">
                <?php
					$out = QuickLoansCore::getOpt("howto-faq",'');
                    if (!empty($out)) {
                        foreach($out as $item) {
?>
                            <div class="animated-list-item">
                                <div class="animated-list-title"><?php echo $item["title"]; ?></div>
                                <div class="animated-list-body"><?php echo $item["description"]; ?></div>
                            </div>
<?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<div class="diagonal1"></div>
