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
          <a href="#" class="on">español</a<!--| <a href="#">english</a>-->
        </div>
      </div>

      <?php include (TEMPLATEPATH . '/header_menu.php'); ?>

    </div> <!-- /#header -->
    <div id="pagebody">
      <div class="main2cols_sideright clearfix">
        <div class="main2cols_sideright_left">
          <?php include (TEMPLATEPATH . '/the_section_title.php'); ?>
          <?php if (have_posts()) : ?>
          
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
            <h2 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category', 'kubrick'), single_cat_title('', false)); ?></h2>
            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            <h2 class="pagetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;', 'kubrick'), single_tag_title('', false) ); ?></h2>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <h2 class="pagetitle"><?php printf(_c('Archive for %s|Daily archive page', 'kubrick'), get_the_time(__('F jS, Y', 'kubrick'))); ?></h2>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <h2 class="pagetitle"><?php printf(_c('Archive for %s|Monthly archive page', 'kubrick'), get_the_time(__('F, Y', 'kubrick'))); ?></h2>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <h2 class="pagetitle"><?php printf(_c('Archive for %s|Yearly archive page', 'kubrick'), get_the_time(__('Y', 'kubrick'))); ?></h2>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <h2 class="pagetitle"><?php _e('Author Archive', 'kubrick'); ?></h2>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h2 class="pagetitle"><?php _e('Blog Archives', 'kubrick'); ?></h2>
            <?php } ?>
            
            
            <?php include (TEMPLATEPATH . '/the_navigation.php'); ?>
            <div class="postList">
              <ul class="posts">
                <?php while (have_posts()) : the_post(); ?>
                  <?php include (TEMPLATEPATH . '/the_post.php'); ?>
                <?php endwhile; ?>
              </ul>
            </div> <!-- /.postList -->
            <?php include (TEMPLATEPATH . '/the_navigation.php'); ?>
          
          <?php else :
            if ( is_category() ) { // If this is a category archive
              printf("<h2 class='center'>".__("Sorry, but there aren't any posts in the %s category yet.", 'kubrick').'</h2>', single_cat_title('',false));
            } else if ( is_date() ) { // If this is a date archive
              echo('<h2>'.__("Sorry, but there aren't any posts with this date.", 'kubrick').'</h2>');
            } else if ( is_author() ) { // If this is a category archive
              $userdata = get_userdatabylogin(get_query_var('author_name'));
              printf("<h2 class='center'>".__("Sorry, but there aren't any posts by %s yet.", 'kubrick')."</h2>", $userdata->display_name);
            } else {
              echo("<h2 class='center'>".__('No posts found.', 'kubrick').'</h2>');
            }
            get_search_form();
          endif;?>
        </div> <!-- /.main2cols_sideright_left -->
        <div class="main2cols_sideright_right">
          <?php get_sidebar(); ?>
        </div> <!-- /.main2cols_sideright_right -->
      </div> <!-- /.main2cols_sideright -->
      <?php get_footer(); ?>
    </div>
  </div> <!-- #container_wrapper -->
</div> <!-- #container -->


  <!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->
  <?php /* "Just what do you think you're doing Dave?" */ ?>
  <?php wp_footer(); ?>
</body>
</html>

