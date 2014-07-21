(function($){
	"use strict";
	try {
		if ($('.video-bg').length==1) {
			$(window).scroll(function(){
						var head = $('.head');
						var head_top = head.offset().top;
						var video = $('.video-bg');
						var video_from = video.offset().top;
						var video_to = video_from + video.height();
						if (head_top <= video_to && head_top >= video_from){
							$('#tubular-container').add('#tubular-shield').add('.pattern').show();
						}else{
							$('#tubular-container').add('#tubular-shield').add('.pattern').hide();
						}
						if (head_top === 0){
							head.addClass('head_on_video');
						}else{
							head.removeClass('head_on_video');
						}
					});
		
			$(function() {
					$('body').tubular({videoId: backgroundVideoID}); 
				});
		}
	
		/**
		 *  mobile menu
		 */
		
			$('.js-mbl-button').click(function(){
				if ($('.js-mbl-menu').is(':visible')){
					$('.js-mbl-menu').fadeOut();
				} else{
				$('.js-mbl-menu').fadeIn();
				}
			});
			$('.js-mbl-menu a').click(function(){
				$('.js-mbl-menu').fadeOut();
			});
		
		
		/**
		 *  nice scroll
		 */
		$("html").niceScroll();
		
		/**
		 * fixed background
		 */
		$('.cbp-so-scroller').each(function(){
			new cbpScroller( this );
		});
		
		/**
		 *  loader line
		 */
		$('.js-loader-line-init').each(function(){
			var plus = $(this).find('.plus').first();
			var minus = $(this).find('.minus').first();
			var line = $(this).find('.load-inner-line').first();
			var valDisplay = $(this).find('.input-amount');
			var maxVal = valDisplay.data('maxval');
			var valStep = valDisplay.data('valstep');

			valDisplay.val(valDisplay.val());
			line.css({width: '50%'});
			plus.click(function(){
				var nextVal = parseInt(valDisplay.val(),10) + parseInt(valStep, 10);
				if (nextVal > maxVal){
					nextVal = maxVal;
				}
				valDisplay.val(nextVal);
				line.css({
					width: Math.round((nextVal/maxVal)*100) + '%'
				});
			});
			minus.click(function(){
				var nextVal = parseInt(valDisplay.val(),10) - parseInt(valStep,10);
				if (nextVal < 0){
					nextVal = 0;
				}
				valDisplay.val(nextVal);
				line.css({
					width: Math.round((nextVal/maxVal)*100) + '%'
				});
			});

			valDisplay.on("change keyup paste", function(){
				var newValue = $(this).val();
				if (!(/^[0-9]+$/).test(newValue) || newValue > maxVal){
					newValue = maxVal;
					valDisplay.val(newValue);
				}
				if ((parseInt(newValue, 10) + '').length !== newValue.length){
					valDisplay.val(parseInt(newValue, 10));
				}
				line.css({
					width: Math.round((newValue/maxVal)*100) + '%'
				});
			});
			var round = parseInt(valDisplay.data('round'), 10);
			line.parent().click(function(event){
				var newValue = Math.round(maxVal * (event.offsetX/$(this).width()));
				if (round){
					newValue = Math.round(newValue / round)*round;
				}
				valDisplay.val(newValue);
				line.css({
					width: Math.round((newValue/maxVal)*100) + '%'
				});
			});
		});
		
		/**
		 *  animated list
		 */
		$('.js-animated-list').each(function(){
			var cont = $(this);
			var items = cont.children('.animated-list-item');
			items.each(function(){
				var item = $(this);
				item.children('.animated-list-title').click(function(){
					var itemHasClass= item.hasClass('selected');
					items.removeClass('selected');
					items.find('.animated-list-body').stop(true,true).hide();
					if (!itemHasClass){
						item.find('.animated-list-body').slideDown();
						item.addClass('selected');
					}
				});
			});
		});
		
		/**
		 *  mobile slider
		 */
		$(window).resize(function(){
			if ($(this).width() > 720){
			 $('.services_cont_slider').css('margin-left',0);
			 window.paralaxSliderDisable = true;
			}else{
			 window.paralaxSliderDisable = false;
			}
		   });
		$(function(){
			$(window).resize();
			$('.services_cont_slider').parallaxSlider({
				speed_cont: 800,
				SEL_paging: '#service_paging'
			});
		});
		
		/**
		 *  counters
		 */
		$(window).scroll( function(){
			$('.getaloan-cont').each( function(i){

				var bottom_of_object = $(this).offset().top;
				var bottom_of_window = $(window).scrollTop() + $(window).height();
				if( bottom_of_window > bottom_of_object ){

					$('#counter-1').countTo({
						from: 0,
						to: $('#counter-1').data('countto'),
						speed: 1500,
						refreshInterval: 30,
						onComplete: function(value) {
						}
					});
					$('#counter-2').countTo({
						from: 0,
						to: $('#counter-2').data('countto'),
						speed: 1500,
						refreshInterval: 30,
						onComplete: function(value) {
						}
					});
					$('#counter-3').countTo({
						from: 0,
						to: $('#counter-3').data('countto'),
						speed: 1500,
						refreshInterval: 30,
						onComplete: function(value) {
						}
					});
					$('#counter-4').countTo({
						from: 0,
						to: $('#counter-4').data('countto'),
						speed: 1500,
						refreshInterval: 30,
						onComplete: function(value) {
						}
					});

					$(this).find('[id*="counter-"]').attr('id', '');
				}
			}); 
		});
	} finally {
	}
})(jQuery);


jQuery(document).ready(function($) {
    "use strict";

	try {
		var doScroll = false;

		if ($("#calc-loan").length<1) return;

		$(document).on("click",".leaverequest",function() {
			$("input","section#loan").blur();

			if ($("input.ierror").length>0) {
				$("input.ierror:first").focus();
				return false;
			}

			if (extUrl!="") {
				// externally submit form
				$("form#loanappform").attr("method","post");
				$("form#loanappform").attr("action",extUrl);
				$("form#loanappform").submit();
				$("div.loan_l").addClass("fade");
				$("div.loan_m").addClass("fade");
				$("div.loan_r").addClass("fade");
			}
			var doForm = $("form#loanappform").serializeArray();

			var obj,output = {};
			for(var i in doForm) {
				obj = doForm[i];
				output[obj.name] = obj.value;
			}

			output["action"] = "ql_submit_loan";

			$.post(ajaxUrl,output,function(data) {
			},"json");

			$("div.loan_l").addClass("fade");
			$("div.loan_m").addClass("fade");
			$("div.loan_r").addClass("fade");
			$("div#loan-app-complete").fadeIn();

			setTimeout(function() {
				$("div#loan-app-complete").fadeOut(function() {
					$("input","div.loan_l").val("");
					$("input","div.loan_m").val("");
					$("div.loan_l").removeClass("fade");
					$("div.loan_m").removeClass("fade");
					$("div.loan_r").removeClass("fade");
				})
			},5000);
		});

		$(document).on("blur","input[data-required='1']",function(e) {
			var v = $(e.target).val();
			if (v=="") {
				$(e.target).addClass("ierror");
			} else {
				$(e.target).removeClass("ierror");
			}
		});

		$(document).on("click",'#calc-loan',function() {
			var calcAmt = parseFloat($("#calcAmt").val());
			var calcPer = parseFloat($("#calcPer").val());
			var calcInterest = performCalcAlgo(calcAmt,calcPer);
			var calc = calcInterest;
			$("#selectedCalcPeriod").html(calcPer);
			$("#selectedCalcTotal").html(loanCur + (Math.round(calc*100)/100));
			$("#selectedCalcAmt").html(loanCur + calcAmt);
			if (doScroll==true) {
				$("html, body").animate({ scrollTop: $('#loan').offset().top }, 1000);
			}
			$("input[name='loan_amount']").val(calcAmt);
			$("input[name='loan_term']").val(calcPer);
		});

		$("#calc-loan").click();
		doScroll = true;
	} finally {
	}
})

jQuery(document).ready(function($) {
    "use strict";
	try {
		$(window).trigger("scroll");	
		if ($("#fullwidthmap").length<1) return;
		google.maps.event.addDomListener(window, 'load', initialize);
	} finally {
	}
})

function initialize() {
	var geocoder = new google.maps.Geocoder();
	geocoder.geocode({'address': mapAddress}, function(results, status) {
		if(status == google.maps.GeocoderStatus.OK) {
			var result = results[0].geometry.location;

			var mapOptions = {
				center: result,
				zoom: 14
			};
			var map = new google.maps.Map(document.getElementById("fullwidthmap"),
				mapOptions);
		}
	});
}

