
<div id="nav">
        
<?php
          
  $p = 0;
  foreach ($pages as $page => $data) {
    $p++;

?>

    <h2 id="<?php echo $page; ?>Link" class="page-link <?php if ($p == 1) echo "selected"; ?>">
      <a href="#" onclick="toggle('<?php echo $page; ?>'); return false;"><?php echo $data->title; ?></a>
    </h2>
  
<?php

  }
          
?>

</div>
