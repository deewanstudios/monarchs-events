<?php
	ob_start  (  );
	$m_navigation_class  =  new Navigation  (  );
	$m_header  =  $m_navigation_class  ->  PageHeader  (  );
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Site Title-->
		<title>
			<?php echo $this  ->  m_page_title; ?>
		</title>


		<meta name="description" content="<?php echo $this  ->  m_page_description; ?>">
		<meta name="keywords" content="<?php echo $this  ->  m_page_keywords; ?>">
		<meta name="author" content="<?php echo $this  ->  m_page_author; ?>">
		<link rel="canonical" href="<?php echo $this  ->  m_page_url; ?>" />
		<meta property="og:title" content="<?php echo $this  ->  m_open_graph_title; ?>">
		<meta property="og:description" content="<?php echo $this  ->  m_open_graph_description; ?>">
		<meta property="og:keywords" content="<?php echo $this  ->  m_open_graph_keywords; ?>">
		<meta property="og:type" content="<?php echo $this  ->  m_open_graph_type; ?>">
		<meta property="og:url" content="<?php echo $this  ->  m_open_graph_url; ?>">
		<meta property="og:site_name" content="<?php echo $this  ->  m_open_graph_site_name; ?>">

		<meta name="website developed by" content="<?php echo $this  ->  m_page_developed_by; ?>">
		<meta name="developer website" content="<?php echo $this  ->  m_page_developer_website; ?>">


		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">


		<link rel="apple-touch-icon" sizes="57x57" href="href="<?php echo URL; ?>images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL; ?>images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL; ?>images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL; ?>images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL; ?>images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL; ?>images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL; ?>images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL; ?>images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL; ?>images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo URL; ?>images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL; ?>images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL; ?>images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL; ?>images/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo URL; ?>images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo URL; ?>images/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">


		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/camera.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/touchTouch.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/form.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/stuck.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/monarchs-events.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/rd-google-map.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/masonry.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/mediaqueries/mobile-phones.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/mediaqueries/tablets.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/mediaqueries/laptops.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/media-query.css">



	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
		<a
		href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		<img
		src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg"
		border="0" height="42" width="820" alt="You are using an outdated browser. For a
		faster, safer browsing experience, upgrade for free today." />
		</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">

		<![endif]-->


	</head>



	<body id="top">
		<!-- Page-->
		<div class="main">
			<?php echo $m_header; ?>
			<!-- Page Header-->
