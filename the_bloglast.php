<div class="blogLast">
  <div class="module_title">LO ÚLTIMO DE LINKED</div>
  <div class="module_content clearfix">
    <div class="content clearfix">
      <div class="lastEntries">
        <ul>
          <?php wp_get_archives('type=postbypost&limit=10'); ?>
        </ul>
        <a class="rss" href="http://feeds.feedburner.com/Linked"><img src="http://www.linkingpaths.com/images/blog/rss.gif" alt="" /> RSS de los últimos artículos</a>
      </div> <!-- /.lastEntries -->
      <div class="lastPosts">
        <ul>
          <?php get_recent_comments(); ?>
        </ul>
        <a class="rss" href="http://feeds.feedburner.com/LinkedComments"><img src="http://www.linkingpaths.com/images/blog/rss.gif" alt="" /> RSS de los últimos comentarios</a>
      </div> <!-- /.lastEntries -->      
    </div>
  </div>
</div> <!-- /.blogLast -->