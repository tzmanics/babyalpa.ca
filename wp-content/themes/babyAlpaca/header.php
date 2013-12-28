<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="baby alpaca, band, Chris Kittrell" />
	<meta name="title" content="Baby Alpaca | Official Site" />
	<meta name="description" content="The Official website of Baby Alpaca" />
	<meta property="og:title" content="Baby Alpaca Official "/>
	<meta property="og:description" content="The Official website of Baby Alpaca"/>
	<meta property="og:type" content="website"/>

	<meta property="og:url" content="http://www.babyalpa.ca/"/>
	<meta property="og:site_name" content="Baby Alpaca"/>
	<meta property="og:type" content="website"/>

<title>Baby Alpaca</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Abel|Six+Caps' rel='stylesheet' type='text/css'/>
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen" /><![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

<?php wp_head(); ?>

</head>

<body>

<div id="wrapper">
	<div id="Title"><h1>Baby Alpaca</h1></div>
	<div id="header">
		<div id="logo">
		<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<a href="http://www.babyalpa.ca" title="Baby Alpaca"><img src="https://dl.dropbox.com/u/3061181/BA_white.png"/></a>
		</div>
		<div id="nav">
		<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Top Navigation') ) : ?>
			<ul>
				<?php wp_list_pages('title_li='); ?>
				<li><a href="http://www.facebook.com/babyalpacalove" target="_blank" title="Baby Alpaca on Facebook"><img src="https://dl.dropbox.com/u/3061181/fb.png"/></a></li>
				<li><a href="https://soundcloud.com/babyalpaca" target="_blank" title="Baby Alpaca on Soundcloud"><img src="https://dl.dropbox.com/u/3061181/soundcloud.png"/></a></li>
				<li><a href="https://twitter.com/babyalpacalove" target="_blank" title="Baby Alpaca on Twitter"><img src="https://dl.dropbox.com/u/3061181/twitter.png"/></a></li>
				<li><a href="http://vimeo.com/20819533" target="_blank" title="Baby Alpaca on Vimeo"><img src="https://dl.dropbox.com/u/3061181/vimeo.png"/></a></li>
				<li><a href="http://www.youtube.com/user/babyalpacalove" target="_blank" title="Baby Alpaca on Youtube"><img src="https://dl.dropbox.com/u/3061181/youtube.png"/></a></li>
				<li><a href="http://instagram.com/babyalpaca" target="_blank" title="Baby Alpaca on Instagram"><img src="https://dl.dropbox.com/u/3061181/instagram.png"/></a></li>
			</ul>
		<?php endif; ?>
		</div>
	</div>