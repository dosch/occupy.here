<div class="sequence">
  <?php if (!empty($prev_page)) { ?>
    <p class="pagination">
      <a href="<?php echo $prev_page; ?>" class="button">Go to previous page</a>
    </p>
  <?php } ?>
  <?php foreach ($posts as $item) {
    $type = $item->get_table();
    $this->partial('post', array(
      'post' => $item,
      'class' => "summary user_{$item->user_id}"
    ));
  } ?>
  <p class="pagination">
    <?php
    
    if (empty($posts)) {
      echo '<em>There is nothing here yet</em>';
    } else if (!empty($end_of_items)) {
      echo '<em>You have reached the end</em>';
    }
    
    if (!empty($next_page)) {
      echo "<a href=\"$next_page\" class=\"button\">Go to next page</a>";
    }
    
    ?>
  </p>
</div>
