
<?php

function show_links($page) {
  $result = query("SELECT * FROM links WHERE page='" . $page . "' ORDER BY id");

  while ($row = query_next($result)) {

?>

    <div class="line">
      <div class="item">
      
<?php

        if ($row->link) echo '<a href="' . $row->link .'" target="_blank">' . $row->title . '</a>';
        else echo $row->title;
        
?>

      </div>
      <div class="desc"><?php echo $row->body; ?></div>
    </div>
    
<?php

  }
}

?>
