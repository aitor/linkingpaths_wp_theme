<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>


<link rel="icon" href="http://www.linkingpaths.com/images/favicon.ico" />

<link rel="stylesheet" href="http://www.linkingpaths.com/css/template.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://www.linkingpaths.com/css/common.css" type="text/css" media="screen" />

<!--[if IE 7]>
  <link rel="stylesheet" href="http://www.linkingpaths.com/css/ie7.css" type="text/css" media="screen" />
<![endif]-->

<!--[if lt IE 7.]>
  <link rel="stylesheet" href="http://www.linkingpaths.com/css/ie6.css" type="text/css" media="screen" />
  <script type="text/javascript" src="http://www.linkingpaths.com/javascripts/IE7.js"></script>  
<![endif]--> 

<link rel="stylesheet" href="http://www.linkingpaths.com/css/blog.css" type="text/css" media="screen" />









<!--<div id="header">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>
<hr />-->
