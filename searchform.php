<form method="get" name="f_blog_search" id="f_blog_search" action="<?php bloginfo('url'); ?>/">
  <input type="text" name="s" id="s" class="fieldbox" size="26" value="<?php the_search_query(); ?>"/>
  <input type="submit" id="searchsubmit" value="<?php _e('Search', 'kubrick'); ?>" />
</form>
