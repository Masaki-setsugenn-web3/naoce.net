<head>
<?php include("common/module/head.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/single.css">
<?php include("common/module/header.php"); ?>	
</head>


<body class="front">
	<main class="main" role="main">
		<h2 class="title02" style="padding-top: 20px;"><span>News</span></h2>
						<div class="article" style="margin-left: 10%;margin-right:10%;">
							<div class="photo" style="text-align: center;"><p class="img fit_image"> <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></p></div>
							<div class="head">
								<p class="date" style="font-size: 14px;color:#3A6934; font-weght:bold;"><?php echo the_time('Y.m.d'); ?></p>
								<h3 style="font-size: 22px;"><?php the_title(); ?></h3>
							</div>
							<div class="body">
								<div class="text" style="font-size: 16px;word-wrap: break-word;" >
									<?php remove_filter ('the_content', 'wpautop'); ?>
									<?php the_content(); ?>
								</div>
						</div> 
	</main>
</body>

<footer id="footer" role="contentinfo">
			<?php include("common/module/footer.php"); ?>
		</footer>
	</div>
	<?php include("common/module/script.php"); ?>
