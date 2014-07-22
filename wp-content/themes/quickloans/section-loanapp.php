<?php
/**
 * Created by PhpStorm.
 * User: darrenc
 * Date: 02/06/14
 * Time: 14:14
 */
?>
<form method="post" id="loanappform">
<section class="wraper_bg-bright wraper_bg-bright-search t-clear cbp-so-scroller" id="loan" style="position: relative;">
    <h1><span><?php echo QuickLoansCore::getOpt("loanapp-title",''); ?></span></h1>
    <h3><?php echo QuickLoansCore::getOpt("loan-sub-title",''); ?></h3>
    <div id="loan-app-complete">
        <h1><span><?php _e('Thank you. We will be in touch shortly.','quickloans_theme'); ?></span></h1>
    </div>
    <div class="loan_l cbp-so-section">
        <?php
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
                foreach($fields as $field) {
                    $req = "";
                    $reqH = "";
                    if ($field["required"]==1) {
                        $req = "*";
                        $reqH = "data-required='1'";
                    }
                    switch($field["type"]) {
                        case "message": {
?>
    </div>
    <div class="loan_m cbp-so-section">
<?php
                            break;
                        }
                        case "text": {
?> <?php echo $field["prepend"]  ?>
        <div class="cbp-so-side cbp-so-side-top">
            <p><?php echo $field["label"] . $req; ?></p>
            <input class="l_form1" name="<?php echo $field["name"]; ?>"  <?php echo $reqH; ?>>
            <?php echo $field["append"]  ?>
        </div>
<?php
                            break;
                        }
                        case "number": {
?>
        <div class="cbp-so-side cbp-so-side-top">
            <p><?php echo $field["label"] . $req; ?></p>
            <input class="l_form1" name="<?php echo $field["name"]; ?>"  <?php echo $reqH; ?> type="number" min="<?php echo $field["min"]; ?>" max="<?php echo ($field["max"]?$field["max"]:999999); ?>" step="<?php echo $field["step"]; ?>">
        </div>
<?php
                            break;
                        }
                        case "textarea": {
?>
        <div class="cbp-so-side cbp-so-side-top">
            <p><?php echo $field["label"] . $req; ?></p>
            <textarea name="<?php echo $field["name"]; ?>"  <?php echo $reqH; ?>></textarea>
        </div>
<?php
                            break;
                        }
                        case "select": {
                            $options = "";
                            if (!empty($field["choices"])) {
                                foreach($field["choices"] as $option) {
                                    $diff = explode(":",$option);
                                    $val = trim($diff[0]);
                                    $lbl = trim($diff[1]);
                                    $options .= "<option value='{$val}'>{$lbl}</option>";
                                }
                            }
?>
        <div class="cbp-so-side cbp-so-side-top">
            <p><?php echo $field["label"] . $req; ?></p>
            <select class="l_form1" name="<?php echo $field["name"]; ?>" <?php echo $reqH; ?>>
                <?php echo $options; ?>
            </select>
        </div>
<?php
                        break; }
                             case "file": {
?>
        <div class="cbp-so-side cbp-so-side-top">
            <p><?php echo $field["label"] . $req; ?></p>
            <input class="l_form1" type="file" <?php echo $reqH; ?> name="<?php echo $field["name"];  ?>">
        </div>
<?php
                            break;
                        } ?>
                       <?php  
                        default :{
                            echo $field["type"] . "<br />";
                        }
                    }
                } // end foreach
            } // endif
        ?>
    </div>
    <div class="load_after_cont mobile t-clear">
        <div class="loan_after trial"><a class="leaverequest"><?php _e('LEAVE LOAN REQUEST','quickloans_theme'); ?></a></div>
    </div>
    <div class="loan_r cbp-so-section">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/loan.png" class="loan_r_image cbp-so-side cbp-so-side-top" alt="">
        <div class="div cbp-so-side cbp-so-side-top">
            <p class="special">after <span id="selectedCalcPeriod">1</span> <?php echo (QuickLoansCore::getOpt("loan-period-type",'')==1?"Days":"Months"); ?> you pay back: <span id="selectedCalcTotal"><?php echo QuickLoansCore::getOpt("loan-cur",''); ?>100</span></p>
            <h1><span><span id="selectedCalcAmt"><?php echo QuickLoansCore::getOpt("loan-cur",''); ?>100</span> TOTAL</span></h1>
          
        </div>
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
    </div>
    <div class="load_after_cont pc t-clear">
        <div class="loan_after trial"><a class="leaverequest"><?php _e('LEAVE LOAN REQUEST','quickloans_theme'); ?></a></div>
    </div>
</section>
</form>
<div class="diagonal2"></div>
<script>
    <?php if (QuickLoansCore::getOpt("loan-ext-link",'')==true) { ?>
        var extUrl = "<?php echo QuickLoansCore::getOpt("loan-ext-url",''); ?>";
    <?php } else { ?>
        var extUrl = "";
    <?php } // endif ?>
</script>
