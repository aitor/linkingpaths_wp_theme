<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></div>
  <div class="metainfo">
    <span class="meta author">por <a href="#"><?php the_author() ?></a></span> -
    <span class="meta date"><strong><?php the_time(__('F jS, Y', 'kubrick')) ?></strong></span>
    <span class="meta tags"><?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?></span> 
  </div> <!-- /.metainfo -->
  <span class="comments_link"><?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></span>
  <?php if (function_exists('sharethis_button')) { sharethis_button(); } ?>          
  
  <div class="description">
    <?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
  </div>

  <!--<p class="postmetadata"><?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', '<br />'); ?> <?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></p>-->
</li>