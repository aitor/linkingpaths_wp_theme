<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
<body class="blog">
<!--<div id="page">-->
<div id="container">
  <div id="container_wrapper">
  
    <div id="header" class="clearfix">
      <h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><img src="http://www.linkingpaths.com/images/template/logo.gif" alt="" /></a></h1>
      <div id="header_langs">
        <div class="content">
          <a href="#" class="on">español</a>| <a href="#">english</a>
        </div>
      </div>

      <?php include (TEMPLATEPATH . '/header_menu.php'); ?>

    </div> <!-- /#header -->
    <div id="pagebody">
      <div class="main2cols_sideright clearfix">
        <div class="main2cols_sideright_left">
          <h2 class="center"><?php _e('Error 404 - Not Found', 'kubrick'); ?></h2>
        </div> <!-- /.main2cols_sideright_left -->
        <div class="main2cols_sideright_right">
          <?php get_sidebar(); ?>
        </div> <!-- /.main2cols_sideright_right -->
    <!--</div>-->
      </div> <!-- /.main2cols_sideright -->
      <?php get_footer(); ?>
    </div> <!-- /#pagebody --> 
  </div> <!-- #container_wrapper -->
</div> <!-- #container -->


  <!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->
  <?php /* "Just what do you think you're doing Dave?" */ ?>
  <?php wp_footer(); ?>
</body>
</html>
