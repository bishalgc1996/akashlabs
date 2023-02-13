<!-- sidebar.php -->
<aside class="sidebar">
  <div class="widget">
    <ul>
      <?php
      $args = array(
        'title_li' => '',
        'depth' => 1
      );
      wp_list_pages($args);
      ?>
    </ul>
  </div>
</aside>