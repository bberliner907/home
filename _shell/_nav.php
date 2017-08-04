
<div id="nav">
        
<?php
          
  foreach ($pages as $page => $data) {
    $pageClass = (page_active($page)) ? "selected" : "";

?>

    <h2 id="<?php echo $page; ?>Link" class="page-link <?php echo $pageClass; ?>">
      <a href="?page=<?php echo $page; ?>" 
        onclick="toggle('<?php echo $page; ?>'); return false;"><?php echo $data->title; ?></a>
    </h2>
  
<?php

  }
          
?>

</div>
