<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/universal.css?v=1.0">
	<link rel="stylesheet" href="<?php perch_page_attribute('css', array('template' => 'bits.html')) ;?>?v=1.0">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400,700|Asap:400,700|Crimson+Text:400,400i,700,700i&display=swap" rel="stylesheet">
	<!-- Perch Meta -->
	<?php
	$domain        = 'https://'.$_SERVER["HTTP_HOST"];
	$mainurl           = perch_page_url(array(
										    'hide-extensions'    => true,
										    'hide-default-doc'   => true,
										    'add-trailing-slash' => false,
										    'include-domain'     => true,
										), true);
	$mainsitename      = "Premier Window Cleaning";
	$pagetitlename = " - Premier Window Cleaning";
	$sharing_image = '/images/default_fb_image.jpg';

	PerchSystem::set_var('domain',$domain);
	PerchSystem::set_var('mainurl',$mainurl);
	PerchSystem::set_var('mainsitename',$mainsitename);
	PerchSystem::set_var('pagetitlename',$pagetitlename);
	PerchSystem::set_var('sharing_image',$sharing_image);

	perch_page_attributes(array(
		'template' => 'default.html'
	));
	?>
<!-- Google Analytics -->
<?php perch_content('Analytics'); ?>

<!-- Cookie Consent -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
		"palette": {
			"popup": {
				"background": "#000"
			},
			"button": {
				"background": "transparent",
				"text": "#fff",
				"border": "#fff"
			}
		},
		"content": {
			"href": "/privacy-and-cookie-policy"
		}
	})});
	</script>

</head>
	<body class="<?php perch_page_attribute('bodyClass', array('template' => 'bits.html' )); ?>">
		<div itemscope itemtype="http://schema.org/LocalBusiness" class="site-wrapper <?php perch_page_attribute('wrapperClass', array('template' => 'bits.html'));?>">
			<header class="main-header">
			<div class="top-header-div">
				<?php perch_content("Header Logo"); ?>
				<?php perch_content("Header Contact"); ?>
			</div>
				<nav class="main-nav">
					<?php perch_pages_navigation(array(
							'hide-extensions' => true,
					)); ?>
				</nav>
			</header>
