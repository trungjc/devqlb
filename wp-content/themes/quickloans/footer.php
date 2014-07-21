<footer class="wraper">
    <section class="head-els footer">
        <div class="logo" onclick="$('.menu li a').first().click();">
            <img src="<?php echo QuickLoansCore::getOpt("header-logo","url"); ?>" alt="">
            <?php echo QuickLoansCore::getOpt("header-title",''); ?>
        </div>

<?php
		if ( has_nav_menu( 'main-menu' ) ) {
			wp_nav_menu( array( 'theme_location' => 'main-menu',
				'container' => false,
				'menu_class' => 'menu js-menu footer h-pc',
			));
		} else { ?>
<ul id="menu-one-page-menu" class="menu js-menu footer h-pc"><li id="menu-item-2097" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2097"><a href="<?php echo admin_url('nav-menus.php?action=locations'); ?>" class="selected">Please set a menu for this space.</a></li>
</ul>	
<?php } // endif  ?>
        <div style="clear: both;"></div>
    </section>
</footer>
</div>

<?php
    $algo = QuickLoansCore::getOpt("loan-calculation",'');
    $algo = str_replace("%M%",'calcAmt',$algo);
    $algo = str_replace("%P%",'calcPer',$algo);
    $algo = str_replace("%R%",QuickLoansCore::getOpt("loan-apr",''),$algo);
    $algo = str_replace("%F%",QuickLoansCore::getOpt("loan-fee",''),$algo);
?>
<script>
var ajaxUrl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
var loanCur = "<?php echo QuickLoansCore::getOpt("loan-cur",''); ?>";
var mapAddress = '<?php echo str_replace("\r\n",",",QuickLoansCore::getOpt("contact-street-address",'')); ?>';
var backgroundVideoID = '<?php echo QuickLoansCore::getOpt("intro-back-video",''); ?>';
function performCalcAlgo(calcAmt,calcPer) {
	try {
		return <?php echo $algo; ?>
	} finally {
		return 0;
	}
}
</script>
<?php echo QuickLoansCore::getOpt("theme-tracking",''); ?>
<?php wp_footer(); ?>
</body>
</html>
