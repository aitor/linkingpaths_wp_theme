<?php
/*
Template Name: Archives
*/
?>
<?php /* Counts the posts, comments and categories on your blog */
  $numposts = $wpdb->get_var("SELECT COUNT(1) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type != 'page'");
  if (0 < $numposts) $numposts = number_format($numposts);

  $numcomms = $wpdb->get_var("SELECT COUNT(1) FROM $wpdb->comments WHERE comment_approved = '1'");
  if (0 < $numcomms) $numcomms = number_format($numcomms);

  $numcats = $wpdb->get_var("SELECT COUNT(1) FROM $wpdb->categories");
  if (0 < $numcats) $numcats = number_format($numcats);
?>

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
          
          <p><?php printf('Este es el archivo de articulos de %1$s. Actualmente existen %2$s artículos and %3$s comentarios, repartidos a lo largo de %4$s categorias. A traves de el podras revisar lo que hemos ido escribiendo a lo largo del tiempo. Y si estas buscando algo especifico puedes usar el cuadro de búsqueda de la barra lateral.', get_bloginfo('name'), $numposts, $numcomms, $numcats); ?></p>

          <div id="livearchives">
            <?php af_ela_super_archive('num_posts_by_cat=50&truncate_title_length=40&hide_pingbacks_and_trackbacks=1&num_entries=1&num_comments=1&number_text=<span>%</span>&comment_text=<span>%</span>&selected_text='.urlencode('')); ?>
            <div class="clear"></div>
          </div>
          
          
          
          
          <br/><br/>
          
          
          
          <?php include (TEMPLATEPATH . '/the_bloglast.php'); ?>
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
