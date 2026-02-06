$(document).ready(function () {
	"use strict";
	var w = 0;

	// Responsive menu 
	/*
	$('#btnNavi').click(function () {
		whn = $(window).height();
		th = $('.top-header').height();
		if ($('#menuLightBox').hasClass('open')) {
			$('#wrapper').css('height', '');
			$('#menuLightBox+#wrapper #headerMenu > ul').css('height', '');
		} else {
			$('#wrapper').css('height', whn);
			$('#menuLightBox+#wrapper #headerMenu > ul').css('height', whn - th);
		}
		$('#menuLightBox').toggleClass('open').fadeToggle("slow");
		$('#headerMenu ul').slideToggle(function() {
			if ($('#menuLightBox').hasClass('open')) {
				$(this).css('display', 'block');
			} else {
				$(this).css('display', '');
			}
		});
		$('#btnNavi').toggleClass('open');
	});
	$('.nav-sp-open').click(function () {
		$(this).toggleClass('open');
		$(this).next().slideToggle();
	});
	$('#navClose').click(function () {
		$('#menuLightBox').removeClass('open').fadeOut("slow");
		$('#headerMenu ul').slideUp();
		$('#btnNavi').removeClass('open');
		$('#wrapper').css('height', '');
		$('#menuLightBox+#wrapper #headerMenu > ul').css('height', '');
	}); */


	// Responsive menu
	$('#btnNavi, #btnNavi2').click(function () {
		$('#menuLightBox').toggleClass('open');
	});

	// FAQ
	$('.faqlist > div:first-child').click(function(){
		$(this).next().slideToggle();
		$(this).toggleClass('passive');
		$(this).toggleClass('active');
		$(this).next().toggleClass('active');
	});

	$('#imgLink').hover(function () {
		$(this).toggleClass('active');
	});

	$(window).resize(function () {
		w = $(window).width();
		if (w > 991) {
			$('#menuLightBox, #subMenu, #headerMenu > ul, .nav-dropdown-box, .nav-dropdown-box ul').css('display', '');
			$('#wrapper, #menuLightBox+#wrapper #headerMenu > ul').css('height', '');
			$('#menuLightBox, #btnNavi, .nav-sp-open').removeClass('open open2');
		}
		if (w < 977) {
			$('#page .scrollTo').css('display', '');
		}
	});

	// Page Top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#pageTop .scrollTo').fadeIn();
		} else {
			$('#pageTop .scrollTo').fadeOut();
		}
	});

	// Scroll
	$('a[href^="#"]').click(function () {
		// スクロールの速度
		var speed = 500; // ミリ秒
		// アンカーの値取得
		var href = $(this).attr("href");
		// 移動先を取得
		var target = $(href === "#" || href === "" ? 'html' : href);
		// 移動先を数値で取得
		var position = target.offset().top;
		// スムーススクロール
		$('body,html').animate({
			scrollTop: position
		}, speed, 'swing');
		return false;
	});

});