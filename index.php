<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ながの表参道セントラルスクゥエア（長野市）公式Webサイト</title>
	<meta name="keywords" content="ながの表参道セントラルスクゥエア,セントラルスクエア">
	<meta name="description" content="長野市、善光寺表参道沿いのオープンスペース「セントラルスクゥエア」は、市民や観光に訪れた皆さんの憩いの場であるとともに、さまざまなイベントの会場として活用いただけます。">
	<meta name="twitter:title" content="ながの表参道セントラルスクゥエア（長野市）公式Webサイト">
	<meta name="twitter:description" content="長野市、善光寺表参道沿いのオープンスペース「セントラルスクゥエア」は、市民や観光に訪れた皆さんの憩いの場であるとともに、さまざまなイベントの会場として活用いただけます。">
	<meta name="twitter:card" content="summary">
	<?php include("common/module/head.php"); ?>
</head>
<body class="front">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSKBXTD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
	<div id="menuLightBox"></div>
	<div id="wrapper">
		<div class="top-header-pic">
			<?php include("common/module/header.php"); ?>
			<div id="topBanner" class="top-header-pic-inner">
				<div class="top-title-text">
					<h2 class="title02">善光寺表参道<br>ここから始まる、<br>つながる、生まれる</h2>
				</div>
			</div>
		</div>

		<!-- content -->
		<main class="main" role="main">
			<div class="top-about-wrapper">
				<section class="top-about-section">
					<h2 class="title02"><span>About</span></h2>
					<h3 class="title03">セントラルスクゥエアは<br>長野市街地中心部、善光寺表参道沿いの<br>新たな憩いのオープンスペースです</h3>
					<p>かつて長野冬季五輪の歓喜に沸いたメモリアルな地が2020年5月、ステージのある公園として生まれ変わりました。<br>
						植栽と噴水で、まちなかに憩いとうるおいの空間を創出。<br>
						さまざまなイベントに、ステージや広場をお使いいただけます。</p>
				</section>
			</div>
			<div class="top-news-wrapper">
				<section class="top-news-section">
					<h2 class="title02"><span>News</span></h2>
				<!-- <section class="section section_cont" rel="news">
					<div class="section_title_wrap box_wrap">
						<div class="title_deco_wrap dh_center tc"><h2 class="title02">NEWS</h2><span class="gothic fixed_center"></span></div> -->
			<!-- </div> -->
					<div class="section_body_wrap box_wrap_minimum" style="display: flex;">
					  <div class="left-box" style="margin: auto;"></div>
						<ul class="list_wrap list_news_wrap" style="margin:auto;">
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li class="list_news" style="display:flex;margin-right:auto;margin-left:auto;border-bottom:dotted 2px #C0C0C0;"><a href="<?php the_permalink(); ?>" class="a">
									<div class="date" style="display: inline;padding-right:3em;"><?php echo the_time('Y.m.d'); ?></div>
									<div class="cont" style="display: inline;"><?php the_title(); ?></div>
								</a>
							</li>
							<?php endwhile; ?>
							<?php endif; ?>
						</ul>
						<div class="right-box" style="margin: auto;"></div>
					</div>
        </section>
			</div>
			<div class="top-features-wrapper">
				<section class="top-features-section">
					<div class="row row-20 top-feature-links-row">
						<div class="col-sm-6 col-md-4">
							<a href="<?php echo get_template_directory_uri(); ?>./about/#stageFountain">
								<figure class="image-box">
									<img class="img-responsive" srcset="<?php echo get_template_directory_uri(); ?>/common/images/front/stage@2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/common/images/front/stage.jpg" alt="" width="340" height="340">
								</figure>
								<figcaption class="caption">
									<h4 class="title04">セントラルステージ</h4>
									<p>前面に階段、両サイドにスロープのある広々した屋根付きステージです。さまざまなイベントにお使いいただけます。</p>
									<p class="more-link-read"><span>Read More</span></p>
								</figcaption>
							</a>
						</div>
						<div class="col-sm-6 col-md-4">
							<a href="<?php echo get_template_directory_uri(); ?>./about/#stageFountain">
								<figure class="image-box">
									<img class="img-responsive" srcset="<?php echo get_template_directory_uri(); ?>/common/images/front/fountain@2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/common/images/front/fountain.jpg" alt="" width="340" height="340">
								</figure>
								<figcaption class="caption">
									<h4 class="title04">噴水（ステージ前広場）</h4>
									<p>プログラム運転により、いく通りもの噴水パターンがお楽しみいただける、涼とうるおいのスポットです。</p>
									<p class="more-link-read"><span>Read More</span></p>
								</figcaption>
							</a>
						</div>
						<div class="col-sm-6 col-md-4">
							<a href="<?php echo get_template_directory_uri(); ?>./about/#openSpaceKids">
								<figure class="image-box">
									<img class="img-responsive" srcset="<?php echo get_template_directory_uri(); ?>/common/images/front/trampoline@2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/common/images/front/trampoline.jpg" alt="" width="340" height="340">
								</figure>
								<figcaption class="caption">
									<h4 class="title04">ちびっこ広場</h4>
									<p>ふわふわドーム、ちびっこマウンテン、スイング遊具。お子さまが安全に楽しく遊べるものを設置しました。</p>
									<p class="more-link-read"><span>Read More</span></p>
								</figcaption>
							</a>
						</div>
					</div>
				</section>
			</div>
			<div class="top-park-wrapper">
				<figure class="image-box">
					<img class="img-responsive" srcset="<?php echo get_template_directory_uri(); ?>/common/images/front/park@2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/common/images/front/park.jpg" alt="" width="1366" height="528">
				</figure>
			</div>
			<div class="top-social-wrapper">
				<div class="top-social-block">
					<div class="row top-social-row">
						<div class="col-md-6 top-sm-access-box">
							<h2 class="title02"><span>Access</span></h2>
							<div class="embed-responsive embed-responsive-100by100">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3200.9654911387684!2d138.187608!3d36.6512808!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d86efb13fe44b%3A0xca4d47e4e34657e3!2z44K744Oz44OI44Op44Or44K544Kv44Kl44Ko44Ki!5e0!3m2!1sen!2sjp!4v1592291214483!5m2!1sen!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
							<h4 class="title04">セントラルスクゥエア</h4>
							長野市大字鶴賀問御所町1307-1<br>
							<br>
							併設駐車場有り（24時間営業／7：00～19：00は30分100円、19:00～翌7：00は60分100円／入庫台数21台／入庫後12時間(昼夜問わず)最大料金800円）<br>
							※長野まちなかパーキング共通サービス券、セントラルスクゥエア専用駐車場サービス券がご利用いただけます。<br>
							長野駅まで徒歩14分<br>
							善光寺まで徒歩14分
							<blockquote>
								<h2 class="title02"><span>お問い合わせ先</span></h2>
								<h3 class="title03">一般社団法人<br>ながの表参道セントラルシティ</h3>
								〒380-0845　長野市西後町1580<br>
								TEL:026-217-2546　FAX:026-217-2547<br>
								e-mail:info@naoce.net<br>
								（お電話受付は平日10：00～17：00）
							</blockquote>
						</div>
						<div class="col-md-6 top-sm-facebook-box">
							<h2 class="title02"><span>Calendar</span></h2>
							<div>
							<iframe src="https://calendar.google.com/calendar/embed?height=470&wkst=1&bgcolor=%2333B679&ctz=Asia%2FTokyo&showNav=1&showTitle=0&showDate=1&showPrint=0&showTabs=0&showCalendars=0&src=aW5mb0BuYW9jZS5uZXQ&color=%23039BE5" style="border-width:0" width="95%" height="470" frameborder="0" scrolling="no"></iframe><br>
							<a class="icon" href="https://www.facebook.com/n.cent.s/" target="_blank"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/common/images/ico-facebook2.png" alt="facebookロゴ"  style="min-width: 43px;height: 43px;"></span></a>
							<a class="icon" href="https://www.instagram.com/n.cent.square/" target="_blank"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/common/images/ico-instagram.png" alt="instagramロゴ"  style="min-width: 43px;height: 43px;"></span></a>
							<!-- <a class="icon" href="https://www.instagram.com/n.cent.square/" target="_blank"><span class="icon icon-instagram"></span></a> -->
							<div>
							<h2 class="title02" style="padding-top: 30px;"><span>Live Camera</span></h2>
							<div style="margin-left: 16px"> 
							<iframe width="416" height="234" src="https://www.youtube.com/embed/QSkKxQqhswM?si=xkpHWpkR85Lsj0Tu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="top-banner-area" style="padding-top: 40px;width: 85%;text-align: center;padding-left:40px;">
								<a href="https://nagano-omotesando.com" target="_blank">
									<img src="http://naoce.net/wp/wp-content/uploads/2023/10/ながの表参道shopポータル_logov4.png" alt="ながの表参道商店街">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer id="footer" role="contentinfo">
			<?php include("common/module/footer.php"); ?>
		</footer>
	</div>
	<?php include("common/module/script.php"); ?>

	<!-- Initialize Custom Javascript -->
	<script>

		/* Top Banner */
		$(document).ready(function() {
			var w = $(window).width();
			var wh = $(window).height();

			$('#topBanner').css('height', wh  + 'px');
		});
	</script>
</body>
</html>
