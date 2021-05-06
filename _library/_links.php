
<?php

function show_links($page) {
  $result = query("SELECT * FROM links WHERE page='" . $page . "' ORDER BY updated DESC, id");

  while ($row = query_next($result)) {

?>

    <div class="line">
      <div class="item">
      
<?php

        if ($row->link) echo '<a href="' . $row->link .'" target="_blank">' . $row->title . '</a>';
        else echo $row->title;
        
        if ($row->updated) echo '<span>' . $row->updated . '</span>';
        
?>

      </div>
      <div class="desc"><?php echo $row->body; ?></div>
    </div>
    
<?php

  }
}

?>
