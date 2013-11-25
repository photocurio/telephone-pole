<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
	<title>
	<?php 
	if (is_home () ) { 
		bloginfo('name'); 
	} elseif (is_category() || is_tag()) { 
		single_cat_title(); echo ' &bull; ' ; bloginfo('name'); 
	} elseif (is_single() || is_page()) { 
		single_post_title(); } 
	else { 
		wp_title('',true); 
	} ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
	<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/print.css" media="print" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45220344-1', 'mumford-photo.com');
  ga('send', 'pageview');

</script>
<div id="page">
	<div id="header_img"></div>
<div id="content">
	<div class="clearfix">
	<h1 class="site-title"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
	<h2 class="site-title"><?php bloginfo('description'); ?></h2>
	</div>
	<p class="vcard">
	<span class="fn"><span class="n">
	<span class="given-name">Peter</span> <span class="family-name">Mumford</span><br>
	</span></span>
	<span class="adr">
	<span class="street-address">44 Sargent Avenue, #2</span><br>
	<span class="locality">Somerville</span>, 
	<span class="region">MA</span> 
	<span class="postal-code">02145</span><br>
	</span>
	<span class="tel">781 960 7049</span><br>
	<span class="email"><a href="mailto:sunraydust@gmail.com">sunraydust@gmail.com</a></span>
	</p>