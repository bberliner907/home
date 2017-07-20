
<?php

function show_links($page) {
  global $mysql_link;
  
  $sql = "SELECT * FROM links WHERE page='" . $page . "' ORDER BY id";
  $result = mysql_query($sql, $mysql_link);

  while ($row = mysql_fetch_object($result)) {

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
