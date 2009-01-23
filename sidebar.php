<div class="blogSideinfo">
  <div class="module_title"><span>Linked, el blog de Linking Paths</span></div>
  <div class="module_content">
    <ul class="clearfix">
      <li class="search">
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      </li>
      <li class="about_linked">
        <div class="title">Sobre Linked</div>
        <div class="description">
          Linked es el blog de <a href="http://www.linkingpaths.com">Linking Paths</a>, la empresa aventurera e innovadora formada por <strong><a href="http://www.linkingpaths.com/nosotros/aitor">Aitor Garcia</a>, <a href="http://www.linkingpaths.com/nosotros/alberto">Alberto Molpeceres</a> y <a href="http://www.linkingpaths.com/nosotros/roberto">Roberto Salicio</a></strong>. En él hablamos de nuestros productos, ideas, y de compañías que nos sirven como guía y ejemplo. Si quieres conocernos un poco mejor puedes revisar lo que hemos escrito en los <a href="/the-index">archivos</a>. 
        </div>
        <div class="readers"><a href="http://feeds.feedburner.com/Linked"><img src="http://feeds.feedburner.com/~fc/Linked?bg=EAE5CE&amp;fg=333333&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a></div>
        <div class="linking_camp"><a href="http://aitor.campfirenow.com/room/93009"><strong>Linking Camp</strong> Nos encanta hablar con la gente que nos lee, nos apoya o critica.</a></div>
      </li>
      <li class="projects">
        <div class="title">Proyectos, ideas, etc.</div>
        <ul>
          <li><a href="http://www.stagehq.com"><img src="http://www.linkingpaths.com/images/_garbage/blog/stage.jpg" alt="" /></a></li>
          <!--<li><a href="http://www.thetabula.com/"><img src="http://www.linkingpaths.com/images/_garbage/blog/tabula.jpg" alt="" /></a></li>-->
          <li><a href="http://weblog.linkingpaths.com/vivir-del-software"><img src="http://www.linkingpaths.com/images/_garbage/blog/software.jpg" alt="" /></a></li>
        </ul>
      </li>
    </ul>
  </div>  <!--
  <ul>
    <?php   /* Widgetized sidebar, if you have the plugin installed. */
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
     Author information is disabled per default. Uncomment and fill in your details if you want to use it.
    <li><h2><?php _e('Author', 'kubrick'); ?></h2>
    <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
    </li>
    

    <?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?> 
      <li>
        <?php /* If this is a 404 page */ if (is_404()) { ?>
    <?php /* If this is a category archive */ } elseif (is_category()) { ?>
    <p><?php printf(__('You are currently browsing the archives for the %s category.', 'kubrick'), single_cat_title('', false)); ?></p>

    <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
    <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the day %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('l, F jS, Y', 'kubrick'))); ?></p>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('F, Y', 'kubrick'))); ?></p>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the year %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time('Y')); ?></p>

    <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
    <p><?php printf(__('You have searched the <a href="%1$s/">%2$s</a> blog archives for <strong>&#8216;%3$s&#8217;</strong>. If you are unable to find anything in these search results, you can try one of these links.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), wp_specialchars(get_search_query(), true)); ?></p>

    <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name')); ?></p>

    <?php } ?>
      </li> 
    <?php }?>


    <?php endif; ?>
  </ul>-->
</div>

