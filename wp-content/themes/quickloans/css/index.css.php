<?php
    header("Content-type: text/css");
?>
html, body
{
	min-width: 960px;
	
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	border: 0;

	font-family: <?php echo QuickLoansCore::getOpt('theme-body-font','font-family'); ?>;
    font-size: <?php echo (QuickLoansCore::getOpt('theme-body-font','font-size')!='')?QuickLoansCore::getOpt('theme-body-font','font-size'):"inherit"; ?>;
    color: <?php echo QuickLoansCore::getOpt('theme-body-font','color'); ?>;

}

h1,h2,h3,h4,h5, p, ul
{
    padding: 0;
    margin: 0;
}
.wraper
{
	width: 100%;
    background: url("<?php echo get_stylesheet_directory_uri(); ?>/img/bg.png");
}
.wraper.head
{
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	z-index: 100;
	min-height: 80px;
	height: auto;
	background: <?php echo QuickLoansCore::getOpt('theme-colour',''); ?>;
	min-width: 960px;
}

.pattern{
	position: fixed;
	top: 0;
	left: 0;
	opacity: .8;
	background: url("<?php echo get_stylesheet_directory_uri(); ?>/img/pattern.png") repeat;
	height: 100%;
	width: 100%;
	z-index: 0;
}

body.admin-bar {
    margin-top: 32px;
}

body.admin-bar .wraper.head {
    top: 32px;
}

.wraper.head .head-els{
	margin-top: 18px;
}
.wraper p
{
	color: #bdc3c7;
/*	font-style: italic;*/
	font-size: 14px;
	line-height: 14px;
	font-family: 'Calibri',sans-serif;
}
.head-els
{
	max-width: 960px;
	margin: auto;
	line-height: 80px;
	position: relative;
}
.logo
{
	font-size: 26px;
	color: white;
	float: left;
	text-transform: uppercase;
	cursor: pointer;
}
.logo img
{
        vertical-align: middle;
        margin-right: 10px;
}
ul.menu
{
	padding: 0;
	float: right;
	line-height: 75px;
	max-width: 75%;
}
ul.menu li
{
	padding-top: 20px;
	position: relative;
	display: inline-block;
	list-style: none;
	padding: 0 6px;
	height: 100%;
}
ul.menu li a
{
	text-transform: uppercase;
	font-size: 14px;
	color: white;
	text-decoration: none;
	height: 100%;
	display: block;
	padding-top: 5px;
}
header.wraper ul.menu li a.selected, ul.menu li {
	paddiing-top: 0px;
}
header.wraper ul.menu li a.selected, ul.menu li a:hover
{
	border-top: 5px solid <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
	border-bottom: none;
	padding-top: 0px;
}
footer.wraper ul.menu.footer li a.selected, ul.menu.footer li a:hover
{
	border-bottom: 5px solid <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
	border-top: none;
	padding-top: 0px;
}

footer.wraper ul.menu li:hover ul.sub-menu {
	display: none;
}

footer.wraper ul.menu li a {
	padding-bottom: 5px;
	padding-top: 0px
}
footer.wraper ul.menu li a:hover {
	border-bottom: 0;	
	color:  <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}
ul.menu li:hover ul.sub-menu li a:hover {
	padding-top: 5px;
	border-top: 0;
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}

.cont
{
	margin: auto;
	max-width: 960px;
	height: 622px;
	position: relative;
}

.trial
{
		text-align: center;
		text-transform: uppercase;
		background-color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
		border: 0;
		border-radius: 3px;
		width: 220px;
		margin-bottom: 60px;
		margin-left: auto;
		margin-right: auto;
		font-weight: 400;
		cursor: pointer;
}
.trial:hover
{
		background-color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;

}
.trial a
{
		display: block;
		text-align: center;
        color: white;
        text-decoration: none;
		font-size: 14px;
		width: 220px;
		height: 40px; 
		line-height: 40px; 

}
.trial.trial-blog{
	background-color: #bdc3c7; 
	position: relative;
	z-index: 3;
}
.trial.trial-blog:hover{
	background-color: #7f8c8d; 
}
section.paging
{
	width: 100%;
	text-align: center;
}
section.paging-main
{
	height: 110px;
	line-height: 110px;
}
section.paging .dot
{
	display: inline-block;
	height: 10px;
	width: 10px;
	background-color: #c3c9cc;
	border-radius: 15px;
	cursor: pointer;
}
section.paging .dot.selected, section.paging .dot:hover
{
	background-color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}
.dot-cont
{
	width: auto;
	height: 10px;
	text-align: center;
	vertical-align: middle;
}
.wraper_bg-bright
{       
        background: #fcfcfc url("<?php echo get_stylesheet_directory_uri(); ?>/img/bg_bright.png") repeat;
        color: #37353a;
        text-align: center;
        position: relative;
		padding-top: 70px;
        font-family: <?php echo QuickLoansCore::getOpt('theme-body-font','font-family'); ?>;
        font-size: <?php echo QuickLoansCore::getOpt('theme-body-font','font-size'); ?>;
        color: <?php echo QuickLoansCore::getOpt('theme-body-font','color'); ?>;
		-moz-background-size: cover;
		-webkit-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
}        
.wraper_bg-bright h1
{
	padding: 70px 0px 10px 0px;
    font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	font-size: 46px;
	line-height: 50px;
	color: #2c3e50;
	text-transform: uppercase;
	font-weight: 300;
}
h1 span
{
	font-weight: bold;
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}
.wraper_bg-bright h3
{
	color: #7f8c8d;
    font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	font-size: 16px;
	line-height: 20px;
	padding: 0px 0px 30px 0px;
	font-weight: bold;
}
h3 span
{
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}
.wraper_bg-bright h3 span
{
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}
.packs-cont
{
	max-width: 880px;
	height: 330px;
	margin: auto;
	text-align: center;
}
.p_bottom
{
	color: #37353a;
	font-size: 14px;
	line-height: 20px;
	font-weight: bold;
	text-align: right;
	padding-bottom: 15px;
	text-transform: uppercase;
}
.p_bottom span
{
	color:<?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}
.wraper.bg-raw
{
        background: #1f2b38 url("<?php echo get_stylesheet_directory_uri(); ?>/img/bg.png") no-repeat;
		background-attachment: fixed;
		padding-top: 90px;
        color: white;
		overflow: hidden;
		-moz-background-size: cover;
		-webkit-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
}
.wraper.bg-raw h1
{
        font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
        text-align: center;
        padding:70px 0px 10px 0px;
		font-size: 46px;
		color: white;
}
.wraper.bg-raw h3
{
        font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
        text-align: center;
		font-size: 16px;
		color: white;
		line-height: 25px;
		max-width: 960px;
		margin: auto;
		padding: 0px 0px 30px 0px;
}
footer.wraper
{
 padding: 0px;
 background: #fbfafa;
}

footer.wraper ul li a
{
	color: #34495e;
}

footer.wraper .logo
{
	color: #34495e;
}
.head-els.footer
{
	height: 85px;
}
.map
{
		height: 790px;
		position: relative
}
.map h1
{
    font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	padding-bottom: 40px;
	font-size: 46px;
	line-height: 50px;
	color: #2c3e50;
	text-transform: uppercase;
	font-weight: 300;
}
.map h3
{
    font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	color: #2c3e50;
	font-size: 14px;
	line-height: 18px;
	padding: 0;
	text-transform: uppercase;
	font-weight: 400;
	
}
.location
{
	width: 32px;
	height: 57px;
	background: url("<?php echo get_stylesheet_directory_uri(); ?>/img/location_blue.png") no-repeat;
	position: absolute;
	top: 45%;
	right: 47%;
}
.polosochka2
{
		width: 100%;
		height: 26px;
		background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/divider_2.png");
		background-position: top center;
		background-repeat: no-repeat;
		margin-left: auto;
		margin-right: auto;
}

.map-mask
{
	background-color: rgba(220, 220, 220, 0.4);
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
}
.t-clear:after{
	clear: both;
	content: '';
	display: block;
	height: 0;
}
.l_form1
{
    width: 250px;
    height: 40px;
  padding-left: 15px;
  margin-bottom: 10px;
  border-radius: 3px;
  border: 0;
}
.nicescroll-rails{
	z-index: 1000 !important;
}

/*________________________________________________________________________________________*/

h2{
	font-size: 20px;
	color: #4b494f;
}
p{
	font-size: 14px;
	color: #7f8c8d;
	text-align: left;
}
.intro_block{
	margin-top: -10px;
	display: inline-block;
	width: 460px;
	height: 100%;
	background: url("<?php echo get_stylesheet_directory_uri(); ?>/img/paper_top.png") top no-repeat, url("<?php echo get_stylesheet_directory_uri(); ?>/img/paper_bottom.png") bottom no-repeat;
	
}
.intro_block .trial{
	width: 360px;
}
.intro_block .trial a{
	width: 360px;
}
.intro_block h1{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	color: #4b494f !important;
	padding-top: 55px !important;
}
.intro_block h1, h3{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	text-align: center !important;
	float: none !important;
}
.intro_h{
	float: right;
	width:500px;
	height: 100%;
}
.intro_h h1{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	margin-top: 190px;
	margin-left: 70px;
	padding-top: 0px !important;
}
.intro_h h3.special, .intro_block h3.special{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	color: #7f8c8d;
}
.intro_h h3.special{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	margin-left: 45px;
}
#services{
	margin-top: -25px;
}

#intro h1,#intro h3 {
	margin-left: 10px !important;
	text-align: center !important;
}
#map h1{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	padding-top: 0px;
}
.map_container{
/*	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/line.png");
	background-repeat: no-repeat;
	background-position: top;*/
	height: 460px;
	width: 900px;
	left: 0;
	right: 0;
	margin: auto;
	margin-bottom: 40px;
	margin-top:60px;
	position: relative;
	overflow: hidden;
}
.map_container img{
	z-index: 50;
	margin: 0px;
	padding: 0px;
	position: absolute;
	top: 0;
}
.map_container iframe{
	-webkit-filter: grayscale(1);
	width: 100%;
	height: 100%;
}
.middle_logo{
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png");
	background-repeat: no-repeat;
	height: 30px;
	width: 25px;
	position: absolute;
	left: 48.5%;
	/*left: 0;*/
	right: 0;
	display: block;
}
.address_cont{
	display: block;
	height: 85px;
	width: 900px;
	margin: auto;
	margin-bottom: 130px;
}
.address1, .address2, .address3{
	display: inline-block;
	width: 280px;
	vertical-align: top;
}
.address3 {
	width: 315px;
}
.address3 h1{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	padding: 0 !important;
}
.address_cont h3{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	margin:0px !important;
	padding:0px !important;
	font-size: 18px !important;
	color: white !important;
	text-align: left !important;
}
.address_cont p{
	margin-top: 15px;
	font-size: 14pt;
	line-height: 18pt;
	color: white;
}
.services_cont{
	display: block;
	height: 550px;
	width: 980px;
	margin: auto;
	margin-top: 40px;
	text-align: left;
	margin-bottom: 30px;
}
.services_cont p{
	font-size: 14px;
	color: #7f8c8d;
	margin-top: 20px;
	width: 230px;
	text-align: left;
	margin-left: 185px;

}
.services_cont h2{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	margin-left: 185px;
	margin-top: 15px;
}
.service_l, .service_r{
	display: inline-block;
	width: 450px;
	height: 185px;
	vertical-align: top;
}
/*.service_r{
	margin-left: 65px;
}*/
.service_l img, .service_r img{
	float: left;
	margin-left: 39px;
	margin-top: 25px;
}
/*.service_l h2, .service_r h2{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	margin-top: 25px;
}*/
.loan_l, .loan_m, .loan_r{
	display: inline-block;
	width: 300px;
	min-height: 840px;
	vertical-align: top;
}
.loan_r{
	width: 345px;
	margin-left: 15px;
}
.loan_r h1{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	padding-top: 5px;
	padding-bottom: 0px;
}
.loan_r .special{
	font-size: 12pt;
	line-height: 29pt;
	color: #4b494f;
	text-align: center;
	font-weight: bold;
	margin-top: 25px;
}
.loan_r .special span{
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
}
.loan_r a
{
	margin-left: -184px;
	margin-bottom: 40px;
	color: #43a4e2;
    font-family: <?php echo QuickLoansCore::getOpt('theme-body-font','font-family'); ?>;
    color: <?php echo QuickLoansCore::getOpt('theme-body-font','color'); ?>;
	height: 32px;
	line-height: 32px;
	font-size: 16px;
}
.loan_l p, .loan_m p{
	margin-left: 20px;
	margin-bottom: 10px;
	margin-top: 20px;
}
.loan_m textarea{
	width: 235px;
	height: 120px;
	padding-left: 15px;
	padding-right: 15px;
	padding-top: 10px;
	margin-bottom: 10px;
	border-radius: 3px;
	border: 0;
}
.loan_m select.l_form1 {
	width: 265px;
}
.loan_m .special{
	margin-top: 10px;
	margin-bottom: 39px;
}
.loan_l .trial{
	margin-left: 16px;
	margin-top: 30px;
}
.loan_l .l_form1, .loan_m .l_form1{
	margin-bottom: 0px;
}
.arrow_blue {
	position: relative;
	margin: auto;
	margin-left: 100px;
	background: #e74a03;
	width: 40px;
	height: 40px;
	border-radius: 20px;
	left: 0;
	right: 0;
	border: 0;
	cursor: pointer;
	z-index: 2;
	float: left;
}
.step{
	height: 102px;
	text-align: left;
	position: relative;
}
.step h2{
	margin-bottom: 10px;
}
.vertical{
	position: absolute;
	top: 82px;
	left: 60px;
	width: 1px;
	height: 40px;
	background-color: #bdc3c7;
}
.arrow_right {
	width: 0;
	height: 0;
	border-left: 12px solid white;
	border-top: 8px solid transparent;
	border-bottom: 8px solid transparent;
	position: absolute;
	top: 30%;
	left: 40%;
}
.icon_white {
	position: relative;
	margin: auto;
	margin-left: 30px;
	background: white;
	width: 40px;
	height: 40px;
	border-radius: 20px;
	left: 0;
	right: 0;
	border: 0;
	cursor: pointer;
	z-index: 2;
	float: left;
}
.icon_white img{
	position: absolute;
	left: 21%;
	top: 17%;
}
.intro_links{
	width: 600px;
	height: 50px;
	display: block;
}
.intro_links h3.ilink{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	color: white;
	margin-top: 8px;
	margin-left: 15px;
	font-size: 13px;
	float: left !important;
	padding: 0px;
}
.get_cont {
	display: block;
	height: 800px;
	width: 960px;
	margin: auto;
	margin-top: 40px;
	text-align: left;
}
.get_cont p, .js-animated-list{
	color: white;
	margin-bottom: 25px;
	font-size: 14pt;
	line-height: 18pt;
}
.get_left p{
	margin-left: -25px;
	padding-left: 25px;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/tick.png");
	background-position: top left;
	background-repeat: no-repeat;
	width: 410px;
}

p.ticklist{
    margin-left: -25px;
    padding-left: 25px;
    background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/tick.png");
    background-position: top left;
    background-repeat: no-repeat;
    width: 410px;
}

.animated-list-item{
	margin-bottom: 15px;
}
.animated-list-title{
	margin-bottom: 20px;
	padding-left: 20px;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/small_arrow.png");
	background-position: left;
	background-repeat: no-repeat;
}
.animated-list-item.selected .animated-list-title{
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/small_arrow_selected.png");
}
.animated-list-body{
	margin-bottom: 30px;
	padding-left: 20px;
}
.get_left, .get_right {
	display: inline-block;
	width: 445px;
	height: 680px;
	vertical-align: top;
}
.get_left{
	margin-right: 58px;
	height: 640px;
}
.get_left p{
	width: 385px;
}
.get_left h2, .get_right h2 {
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;
	font-size: 20pt;
	margin-bottom: 15px;
}
.note{
	height: 200px;
	width: 360px;
	margin: auto;
	padding-top: 80px;
	padding-left: 0px;
	padding-bottom: 35px;
	padding-left: 42px;
	padding-right: 42px;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/paper_middle.png");
	background-position: bottom;
	background-repeat: no-repeat;
}
.note .trial{
	height: 40px;
}
.note .trial a{
	line-height: 40px;
}
.note p{
	color: #e74a03;
	background: none;
	text-align: center;
	width: 360px;
}
.note .trial{
	width: 360px;
	margin-bottom: 0px;
}
.note .trial a{
	width: 360px;
}
.polosochka_3 {
		width: 355px;
		height: 1px;
		background-color: #b0b5bb;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 35px;
		margin-top: 5px;
}
.amount-cont {
	margin: auto;
	width: 370px;
	margin-bottom: 15px;
}
.minus {
	position: relative;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/minus.png");
	background-repeat: no-repeat;
	width: 20px;
	height: 20px;
	cursor: pointer;
	float: left;
}
.plus {
	position: relative;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/plus.png");
	background-repeat: no-repeat;
	width: 20px;
	height: 20px;
	cursor: pointer;
	float: left;
}
.load-line{
	width: 200px;
	height: 70%;
	background-color: white;
	border: 1px solid #e3e2e2;
	border-radius: 15px;
	float: left;
	margin: 2px 10px 0;
	box-shadow: inset 1px 1px 4px lightgray;
}
.load-inner-line{
	width: 100%;
	height: 100%;
	border-radius: 15px;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/stripe.png");
	box-shadow: inset 1px 1px 4px gray;
}
.amount{
	height: 20px;
	line-height: 20px;
	width: 265px;
	display: inline-block;
}
.animated-list-title{
	cursor: pointer;
	text-decoration: underline;
}
.animated-list-body{
	display: none;
}
.input-amount{
	width: 70px;
	height: 40px;
	border-radius: 5px;
	border: 1px solid #e3e2e2;
	border-top: 2px #c3c1c2 solid;
	color: #464646;
	font-size: 20px;
	text-align: center;
	margin-left: 20px;
}
.amount-message-main{
	color: #464646;
	margin-left: 30px;
}
.amount-message-sub{
	color: #b9b9b9;
	margin-left: 30px;
	margin-bottom: 20px;
}
.getaloan-cont{
	width: 960px;
	margin: auto;
}
.getaloan-cont .p_bottom{
	display: inline-block;
	width: 180px;
	padding: 0;
	margin: 0;
	margin-right: 30px;
	text-align: right;
}
.getaloan-cont .trial{
	display: inline-block;
	padding: 0;
	margin: 0;
	margin-left: 25px;
	vertical-align: top;
}
.getaloan-cont .counters{
	padding: 0px;
	display: inline-block;
	width: 28px;
	height: 40px;
	background: white;
	border: 1px solid #acacac;
	border-radius: 3px;
	vertical-align: top;
	line-height: 40px;
	font-size: 20px;
}
#services{
	padding-bottom: 90px;
}
.img_border2
{
	width: 60px;
	height: 60px;
	float: left;
	background-color: white;
	border: 1px #bdc3c7 solid;
	border-radius: 30px;
	margin-left: 30px;
	margin-right: 15px;
	margin-bottom: 20px;
	margin-top: 20px;
	text-align: center;
}
.img_border2 h2
{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	margin-top: 15px;
}


.super-circle{
	width: 169px;
	height: 177px;
	position: relative;
	float: left;
}
.super-circle1{
	width: 89px;
	height: 0;
	background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/circle.png') top left;
	position: absolute;
	top:0;
	left: 0;
}
.super-circle:hover .super-circle1{
	transition-property: height;
	transition-duration: .4s;
	height: 177px;
}
.super-circle2{
	width: 80px;
	height: 0;
	background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/circle.png') bottom right;
	position: absolute;
	bottom: 0;
	right: 0;
}
.super-circle:hover .super-circle2{
	transition-property: height;
	transition-delay: .3s;
	transition-duration: .4s;
	height: 177px;
}


.small_circle_cont{
	width: 960px;
	height: 96px;
	margin: auto;
}
.super-circle-small{
	width: 96px;
	height: 96px;
	position: relative;
	float: left;
	display: inline-block;
	z-index: 1;
}
.super-circle-small1{
	width: 48px;
	height: 0;
	background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/circle_2.png') top left;
	position: absolute;
	top:0;
	left: 0;
}
.super-circle-small:hover .super-circle-small1{
	transition-property: height;
	transition-duration: .4s;
	height: 96px;
}
.super-circle-small2{
	width: 48px;
	height: 0;
	background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/circle_2.png') bottom right;
	position: absolute;
	bottom: 0;
	right: 0;
}
.super-circle-small:hover .super-circle-small2{
	transition-property: height;
	transition-delay: .3s;
	transition-duration: .4s;
	height: 96px;
}
.super-circle-small1 .images1{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_1.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images1{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_1_w.png'); 
}

.super-circle-small1 .images2{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_2.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images2{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_2_w.png'); 
}

.super-circle-small1 .images3{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_3.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images3{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_3_w.png'); 
}

.super-circle-small1 .images4{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_4.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images4{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_4_w.png'); 
}

.super-circle-small1 .images5{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_5.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images5{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_5_w.png'); 
}

.super-circle-small1 .images6{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_6.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images6{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_6_w.png'); 
}

.super-circle-small1 .images7{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_7.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images7{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_7_w.png'); 
}

.super-circle-small1 .images8{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_8.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images8{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_8_w.png'); 
}

.super-circle-small1 .images9{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_9.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images9{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_9_w.png'); 
}

.super-circle-small1 .images10{
	background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_10.png') center no-repeat; 
	width: 96px;
	height: 96px;
	z-index: 3;
}
.super-circle-small:hover .images10{
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_10_w.png'); 
}
.loan_after{
	margin: auto;
	float: left;
}
.load_after_cont{
	width: 930px;
	margin: auto;
}
#loan{
	padding-bottom: 90px;
}
.mobile{
	display: none;
}

/** PARALLAX EFFECTS **/

.service_l:nth-child(1){
	-webkit-transition: -webkit-transform 1.1s, opacity 1.1s;
	-moz-transition: -moz-transform 1.1s, opacity 1.1s; 
	transition: transform 1.1s, opacity 1.1s;
	-webkit-transform: translateX(-200px);
	-moz-transform: translateX(-200px);
	transform: translateX(-200px);
}
.service_r:nth-child(2){
	-webkit-transition: -webkit-transform .4s, opacity .4s;
	-moz-transition: -moz-transform .4s, opacity .4s; 
	transition: transform .4s, opacity .4s;
	-webkit-transform: translateX(-200px);
	-moz-transform: translateX(-200px);
	transform: translateX(-200px);
}
.service_l:nth-child(3){
	-webkit-transition: -webkit-transform 2s, opacity 2s;
	-moz-transition: -moz-transform 2s, opacity 2s; 
	transition: transform 2s, opacity 2s;
	-webkit-transform: translateX(-200px);
	-moz-transform: translateX(-200px);
	transform: translateX(-200px);
}
.service_r:nth-child(4){
	-webkit-transition: -webkit-transform 1s, opacity 1s;
	-moz-transition: -moz-transform 1s, opacity 1s; 
	transition: transform 1s, opacity 1s;
	-webkit-transform: translateX(-200px);
	-moz-transform: translateX(-200px);
	transform: translateX(-200px);
}
.service_l:nth-child(5){
	-webkit-transition: -webkit-transform 3s, opacity 3s;
	-moz-transition: -moz-transform 3s, opacity 3s; 
	transition: transform 3s, opacity 3s;
	-webkit-transform: translateX(-200px);
	-moz-transform: translateX(-200px);
	transform: translateX(-200px);
}
.service_r:nth-child(6){
	-webkit-transition: -webkit-transform 2s, opacity 2s;
	-moz-transition: -moz-transform 2s, opacity 2s; 
	transition: transform 2s, opacity 2s;
	-webkit-transform: translateX(-200px);
	-moz-transform: translateX(-200px);
	transform: translateX(-200px);
}


.getaloan-cont .p_bottom, .getaloan-cont .counters{
	-webkit-transition: -webkit-transform 2s, opacity 2s;
	-moz-transition: -moz-transform 2s, opacity 2s; 
	transition: transform 2s, opacity 2s;
}
.getaloan-cont .trial{
	-webkit-transition: -webkit-transform 2.4s, opacity 2.4s;
	-moz-transition: -moz-transform 2.4s, opacity 2.4s; 
	transition: transform 2.4s, opacity 2.4s;
}
.get_left, .get_right{
	-webkit-transition: -webkit-transform 2.7s, opacity 2.7s;
	-moz-transition: -moz-transform 2.7s, opacity 2.7s; 
	transition: transform 2.7s, opacity 2.7s;
}
.get_left .note, .js-animated-list{
	-webkit-transition: -webkit-transform 3.2s, opacity 3.2s;
	-moz-transition: -moz-transform 3.2s, opacity 3.2s; 
	transition: transform 3.2s, opacity 3.2s;
}
.loan_l .cbp-so-side:nth-child(1),
.loan_m .cbp-so-side:nth-child(1){
	-webkit-transition: -webkit-transform .4s, opacity .4s;
	-moz-transition: -moz-transform .4s, opacity .4s; 
	transition: transform .4s, opacity .4s;
}
.loan_l .cbp-so-side:nth-child(2), .loan_m .cbp-so-side:nth-child(2){
	-webkit-transition: -webkit-transform .8s, opacity .8s;
	-moz-transition: -moz-transform .8s, opacity .8s; 
	transition: transform .8s, opacity .8s;
}
.loan_l .cbp-so-side:nth-child(3), .loan_m .cbp-so-side:nth-child(3), .loan_r img{
	-webkit-transition: -webkit-transform 1.2s, opacity 1.2s;
	-moz-transition: -moz-transform 1.2s, opacity 1.2s; 
	transition: transform 1.2s, opacity 1.2s;
}
.loan_l .cbp-so-side:nth-child(4), .loan_m .cbp-so-side:nth-child(4){
	-webkit-transition: -webkit-transform 1.6s, opacity 1.6s;
	-moz-transition: -moz-transform 1.6s, opacity 1.6s; 
	transition: transform 1.6s, opacity 1.6s;
}
.loan_l .cbp-so-side:nth-child(5), .loan_m .cbp-so-side:nth-child(5){
	-webkit-transition: -webkit-transform 2s, opacity 2s;
	-moz-transition: -moz-transform 2s, opacity 2s; 
	transition: transform 2s, opacity 2s;
}
.loan_l .cbp-so-side:nth-child(6), .loan_m .cbp-so-side:nth-child(6){
	-webkit-transition: -webkit-transform 2.4s, opacity 2.4s;
	-moz-transition: -moz-transform 2.4s, opacity 2.4s; 
	transition: transform 2.4s, opacity 2.4s;
}
.loan_l .cbp-so-side:nth-child(7){
	-webkit-transition: -webkit-transform 2.8s, opacity 2.8s;
	-moz-transition: -moz-transform 2.8s, opacity 2.8s; 
	transition: transform 2.8s, opacity 2.8s;
}
.loan_l .cbp-so-side:nth-child(8){
	-webkit-transition: -webkit-transform 3.2s, opacity 3.2s;
	-moz-transition: -moz-transform 3.2s, opacity 3.2s; 
	transition: transform 3.2s, opacity 3.2s;
}
.loan_l .cbp-so-side:nth-child(9), .loan_m .cbp-so-side:nth-child(7), .loan_r.div{
	-webkit-transition: -webkit-transform 3.6s, opacity 3.6s;
	-moz-transition: -moz-transform 3.6s, opacity 3.6s; 
	transition: transform 3.6s, opacity 3.6s;
}




.super-circle-small:nth-child(1){
	-webkit-transition: -webkit-transform .1s, opacity .1s;
	-moz-transition: -moz-transform .1s, opacity .1s; 
	transition: transform 3.8s, opacity 3.8s;
}
.super-circle-small:nth-child(2){
	-webkit-transition: -webkit-transform .3s, opacity .3s;
	-moz-transition: -moz-transform .3s, opacity .3s; 
	transition: transform .3s, opacity .3s;
}
.super-circle-small:nth-child(3){
	-webkit-transition: -webkit-transform .5s, opacity .5s;
	-moz-transition: -moz-transform .5s, opacity .5s; 
	transition: transform .5s, opacity .5s;
}
.super-circle-small:nth-child(4), div.address1{
	-webkit-transition: -webkit-transform .7s, opacity .7s;
	-moz-transition: -moz-transform .7s, opacity .7s; 
	transition: transform .7s, opacity .7s;
}
.super-circle-small:nth-child(5){
	-webkit-transition: -webkit-transform .9s, opacity .9s;
	-moz-transition: -moz-transform .9s, opacity .9s; 
	transition: transform .9s, opacity .9s;
}
.super-circle-small:nth-child(6){
	-webkit-transition: -webkit-transform 1.1s, opacity 1.1s;
	-moz-transition: -moz-transform 1.1s, opacity 1.1s; 
	transition: transform 1.1s, opacity 1.1s;
}
.super-circle-small:nth-child(7), div.address2{
	-webkit-transition: -webkit-transform 1.3s, opacity 1.3s;
	-moz-transition: -moz-transform 1.3s, opacity 1.3s; 
	transition: transform 1.3s, opacity 1.3s;
}
.super-circle-small:nth-child(8) {
	-webkit-transition: -webkit-transform 1.5s, opacity 1.5s;
	-moz-transition: -moz-transform 1.5s, opacity 1.5s; 
	transition: transform 1.5s, opacity 1.5s;
}
.super-circle-small:nth-child(9){
	-webkit-transition: -webkit-transform 1.7s, opacity 1.7s;
	-moz-transition: -moz-transform 1.7s, opacity 1.7s; 
	transition: transform 1.7s, opacity 1.7s;
}
.super-circle-small:nth-child(10), div.address3{
	-webkit-transition: -webkit-transform 1.9s, opacity 1.9s;
	-moz-transition: -moz-transform 1.9s, opacity 1.9s; 
	transition: transform 1.9s, opacity 1.9s;
}
.super-puper-mega-h{
	-webkit-transition: -webkit-transform .9s, opacity .9s;
	-moz-transition: -moz-transform .9s, opacity .9s; 
	transition: transform .9s, opacity .9s;
}
.intro_h h1{
font-family: <?php echo QuickLoansCore::getOpt('theme-heading-font','font-family'); ?>;
	-webkit-transition: -webkit-transform .1s, opacity .1s;
	-moz-transition: -moz-transform .1s, opacity .1s; 
	transition: transform 3.8s, opacity 3.8s;
}

/** DIAGONALS **/
#intro {
	margin-bottom: -20px;
}
#services{
	margin-top: -22px;
	margin-bottom: -20px;
}
#get{
	margin-top: -20px;
	margin-bottom: -20px;
	z-index: -1;
}
#loan{
	margin-top: -22px;
	margin-bottom: -21px;
}
#map{
	margin-top: -20px;
	z-index: -1;
}
.diagonal1{
	width: 100%;
	height: 47px;
	transform: rotate(1deg);
	-ms-transform:rotate(1deg); /* IE 9 */
	-webkit-transform:rotate(1deg); /* Safari and Chrome */
	background-color: white;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/bg_bright.png");
}
.diagonal2{
	width: 100%;
	height: 47px;
	transform: rotate(-1deg);
	-ms-transform:rotate(-1deg); /* IE 9 */
	-webkit-transform:rotate(-1deg); /* Safari and Chrome */
	background-color: white;
	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/bg_bright.png");
	background-position: bottom;
}


.super-circle-content{
	position: absolute;
	left: 0;
	right: 0;
	margin: auto;
	opacity: 0;
	top: 0;
	text-align: center;
	transition-property: opacity, top;
	transition-duration: .5s;
}
.super-circle-small:hover .super-circle-content{
	top: -40px;
	opacity: 1;
}

.super-circle-content{
	position: absolute;
	left: 0;
	right: 0;
	margin: auto;
	opacity: 0;
	top: 0;
	text-align: center;
	transition-property: opacity, top;
	transition-duration: .5s;
}
.super-circle-small:hover .super-circle-content{
	top: -40px;
	opacity: 1;
}

.super-circle-small1 .contacticon{
    background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/icon_1.png') center no-repeat;
    width: 96px;
    height: 96px;
    z-index: 3;
}

/* LOAN APP CHANGES */
div.loan_l,div.loan_m, div.loan_r {
    transition: 1s all;
    opacity: 1;
    overflow: hidden;
}

div.loan_l.fade {
    opacity: 0;
}
div.loan_m.fade {
    opacity: 0;
}
div.loan_r.fade {
    opacity: 0;
}

div#loan-app-complete {
    width: 100%;
    position: absolute;
    background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/loanAppCompleted.png');
    background-position: 50% 50%;
    background-repeat: no-repeat;
    display: none;
    height: 800px;
    background-color: white;
    z-index: 100;
}

input.ierror {
    border: 1px solid #ff7777;
}

div#fullwidthmap {
    width: 100%;
    height: 460px;
}


/* BLOG SECTION */
#category img,#category div,#category embed,#category video {
    max-width: 100%;
	height: auto;
}

#category .cat_left {
	float: left;
	width: 65%;
}

#category .cat_right {
	float: right;
	width: 30%;
}

@media screen and (max-width: 720px) {
#category .cat_right {
	float: none;
	width: 100%;
	clear: both;
}
#category .cat_left {
	float: none;
	width: 100%;
	clear: both;
}

    body,html {
        min-width: 0px !important;
        max-width: 100% !important;
     }
    #wpadminbar {
        position: fixed !important;
    }
	
	#category,#services,#loan {
		padding-top: 80px !important;
	}

    #category .services_cont {
        width: 100%;
        height: auto;
        padding-left: 20px;
        padding-right: 20px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;

    }
    #category .services_cont .cat_left,#category .services_cont .cat_right {
        float: none;
        width: 100%;
    }

    #category .services_cont .cat_left div.entry-left,#category .services_cont .cat_left div.entry-right {
        float: none;
        width: 100%;
    }
	
.get_left, .get_right {
	height: auto;
	padding-bottom: 20px;
	vertical-align: top;
}

.wraper_bg-bright h1 {
	padding-top: 20px;
}


#intro .cont {
	margin-bottom: 10px !important;
}

.intro_h h1 {
	margin-top: 0px !important;
}

.small_circle_cont {
	padding-top: 60px !important;
	margin-bottom: 270px !important;
}

#loanappform {
	padding-top: 40px;
}

}

.alignright { text-align: right; float: right; margin: 6px; }
.alignleft { text-align: left; float: left; margin: 6px; }
.aligncenter { text-align: center; margin-left: auto; margin-right: auto; float: none;}

.resulttext { color: black !important; }

.widget.widget_search #s {
	border: 0;
	padding: 8px;
}

.widget.widget_search input[type='submit'] {
	border: 1px solid #ccc;
	background-color: white;
	border-radius: 4px;
	box-shadow: 0px -1px 1px #ccc inset; 
	padding: 8px 16px;
}

.widget.widget_search label {
	font-family: "Lato";
	font-weight: 200;
	color: #222;
	font-size: 32px;
	display: block;
	float: none;
}

.widget {
	margin-bottom: 24px;
}

.widget .widget-title {
	font-family: "Lato";
	font-weight: 400;
	font-size: 24px;
	display: block;
	padding: 0;
	float: none;
	margin-bottom: 8px;
	color: #333;
}

.widget .widget-title:after {
	content: ' ';
	width: 50px;
	display: block;
	padding-top: 8px;
	border-bottom: 3px solid <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
}

.widget {
	font-size: 14px;
	font-family: "Open Sans";
}

.widget ul {
	list-style: circle inside;
	
	padding-left: 1px;
}

.widget a {
	font-size: 14px;
	font-family: "Open Sans";
	display: block;
	padding: 4px 0px;
	text-decoration: none;
	color: #222;
	transition: 0.3s all;
}

.widget a:hover {
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
	text-decoration: underline;
}

.widget li.recentcomments {
	display: block;
	margin-bottom: 14px;
}

.widget li.recentcomments a.url {
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
}

.hentry {
	margin-bottom: 60px !important;
}
body.single .hentry {
	margin-bottom: 20px !important;
}
.hentry .entry-title {
	padding-top: 0;
}
.hentry .entry-title a {
	font-family: "Lato";
	font-weight: 400;
	text-decoration: none;
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
	font-size: 32px;
	display: block;
	float: none;
	margin: 0;
}

.hentry p {
	font-family: "Open Sans";
	margin: 0;
	padding: 0;
	width: auto;
}

.hentry a {
	font-family: "Open Sans";
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
}

.hentry .comments-link {
	float: right;
}

.navigation {
	text-align: center;
}

.navigation a {
	text-decoration: none;
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
}

.navigation .nav-previous {
	float: left;
}

.navigation .nav-next {
	float: right;
}

.navigation .assistive-text {
	display: none;
}

#category h3 a {
	font-family: "Open Sans";
	color: #444;
	text-decoration: none;
}

#category h3.thedate {
	position: absolute;
	top: 100px;
	width: 100%;
	text-align: center;
	
}

#category h3.thecomments a{
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
}

.hentry.sticky {
	border: 2px solid #333;
	padding: 12px;
}

.widget.tagwidget {
	font-family: "Lato";
	font-weight: 400;
	font-size: 24px;
	display: block;
	padding: 0;
	float: none;
	margin-bottom: 8px;
	color: #333;	
}

.widget.tagwidget a {
	margin: 4px;
	background-color: #fff;
	color: #222;
	padding: 4px 12px;
	display: inline;
	text-transform: capitalize;
}

.entry-content {
	color: #2c3e50;
}

.entry-content p {
	color: #2c3e50;
	line-height: 1.5em;
	margin-bottom: 8px;
}

.entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6 {
	text-align: left !important;
	font-family: "Lato";
	font-weight: 600;
	margin-left: 0;
}

.entry-content ul {
	list-style: inside;
}
.entry-content ul ul{
	margin-left: 12px;
}

.widget a {
	display: inline !important;
}

#wp-calendar {
	width: 200px;
}

.widget.widget_rss li {
	margin-bottom: 14px;
}

.widget.widget_rss li a.rsswidget {
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
	display: block !important;
}

.widget.widget_text {
	overflow: hidden;
}
.widget.widget_text p {
	margin-left: 0;
}
.widget.widget_text div,.widget.widget_text image,.widget.widget_text video,.widget.widget_text embed, .widget.widget_text input, .widget.widget_text select{
	max-width: 100%;
	
}

.widget.widget_tag_cloud  {
	line-height: 3em;
}
.widget.widget_tag_cloud a {
	background-color: #ddd;
	padding: 4px;
	margin: 4px;
}

.entry-content .page-links a {
	padding: 4px;
	margin: 4px;
	background-color: #eee;
	text-decoration: none;
}

.comment-respond {
	padding: 0px;
	margin-top: 20px;
}

textarea#comment {
	width: 100% !important;
}

h3#reply-title {
	font-family: "Lato";
	font-weight: 400;
	font-size: 24px;
	display: block;
	padding: 0;
	margin: 0;
	text-align: left !important;
	float: none;
	margin-bottom: 8px;
	color: #333;
}

.comment-respond p {
	margin-left: 0;
	width: 100%;
}

.comment-respond input[type='submit'] {
	border: 1px solid #ccc;
	background-color: white;
	border-radius: 4px;
	box-shadow: 0px -1px 1px #ccc inset; 
	padding: 8px 16px;
}

.comment-body h1, .comment-body h2, .comment-body h3, .comment-body h4 {
	font-size: 18px;
	text-align: left !important;
	margin: 0;
	padding: 0;
	margin-bottom: 12px;
}

ol.commentlist {
	list-style: none;
}

ol.commentlist .vcard {
	padding-bottom: 12px;
}

ol.commentlist .vcard img {
	display: none;
}

ol.commentlist .vcard .fn a {
	font-size: 24px;
	font-style: normal;
	padding-right: 30px;
}

ol.commentlist li {
	border-radius: 6px;
	position: relative;
	background-color: #fff;
	padding: 12px;
	margin-bottom: 30px;
}

ol.commentlist li ol li, ol.commentlist li ul li{
	padding-top: 2px;
	padding-bottom: 2px;
	margin-bottom: 0px;
}

ol.commentlist .commentmetadata {
	position: absolute;
	top: 16px;
	right: 102px;
}

ol.commentlist .says {
	display: none;
}

ol.commentlist {
	padding-left: 0;
}

ol.commentlist .comment-reply-link {
	position: absolute;
	top: 12px;
	right: 12px;
	border: 1px solid #ccc;
	border-radius: 14px;
	padding: 4px 12px;
	color: <?php echo QuickLoansCore::getOpt('theme-colour2',''); ?>;	
}

ol.commentlist li p {
	margin-left: 0;
	width: 100%;
}

ol.commentlist .depth-2 .commentmetadata {
	position: static;
	
}

.comment-form-input input {
	width: 100%;
	border: 2px solid #ccc;
	border-radius: 6px;
	padding: 10px 16px;
	font-size: 13px;
	margin: 0;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

textarea#comment {
	border: 2px solid #ccc;
	border-radius: 6px;
	padding: 10px 16px;
	font-size: 13px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

.comment-form .comment-notes, .comment-form .form-allowed-tags {
	display: none;
}

#comments .comments-title {
	margin-left: 0px !important;
}

.widget_nav_menu ul.menu {
	display: block;
	float: none;
	height: auto;
	line-height: 1.5em !important;
}

.widget_nav_menu ul.menu li  {
	float: none;
	display: block;
	margin: 0;
	padding: 0;
	height: auto;
}
.widget_nav_menu ul.menu li a {
	border: 0 !important;
	color: #222 !important;
	float: none;
	margin: 0;
	padding: 0;
	display: block;
}

/* SUB MENU */
ul.menu li ul.sub-menu {
	display: none;
	z-index: 10;
	position: absolute;
	margin-top: 0px;
	padding-bottom: 4px;
	left: 0px;
	top: 58px;
	width: 220px;
	font-size: 14px;
	background: #172534;
	line-height: 18px;	
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

ul.menu li:hover ul.sub-menu {
	display: block;
}

ul.menu li ul.sub-menu li {
	padding-top: 7px;
	padding-bottom: 7px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	float: none;
}

.cat_left h2 {
	margin-left: 0;
}