<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	
	<style type="text/css" media="all">
		@import url("<?php bloginfo( 'url' ); ?>/css/basic.css");
	</style>
	
	<style type="text/css" media="screen">
		@import url("<?php bloginfo( 'url' ); ?>/css/screen.css");
	</style>
	
	<style type="text/css" media="print">
		@import url("<?php bloginfo( 'url' ); ?>/css/print.css");
	</style>

	<script type="text/javascript" src="<?php bloginfo( 'url' ); ?>/js/swfobject.js"></script>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="container"> 

<div id="top">
<img src="<?php bloginfo( 'url' ); ?>/images/top_<?php
global $wp_query;
$postid = $wp_query->post->ID;
$theCurrentSection = get_post_meta($postid, 'currentSection', true);

//echo $theCurrentSection;

if ($theCurrentSection) {
	
	echo $theCurrentSection;
}

else {
	
	echo "home";
}

?>.gif" width="775" height="217" alt="utau inu" usemap="#mainNav" />
<map name="mainNav" id="mainNav">
<area shape="poly" alt="links" coords="665,95, 744,101, 744,122, 664,129" href="<?php bloginfo( 'url' ); ?>/links/" />
<area shape="poly" alt="pics" coords="587,96, 642,98, 645,122, 584,137" href="<?php bloginfo( 'url' ); ?>/pics/" />
<area shape="poly" alt="projects" coords="456,101, 557,98, 561,141, 457,150" href="<?php bloginfo( 'url' ); ?>/projects/" />
<area shape="poly" alt="works" coords="332,124, 426,106, 429,144, 340,154" href="<?php bloginfo( 'url' ); ?>/works/" />
<area shape="poly" alt="bio" coords="266,133, 302,122, 316,153, 270,164" href="<?php bloginfo( 'url' ); ?>/bio/" />
<area shape="poly" alt="blog" coords="186,150, 234,147, 237,172, 186,172" href="<?php bloginfo( 'url' ); ?>" />
</map>

</div>


<!-- end header -->
