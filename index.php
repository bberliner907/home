
<?php include("_global.php"); ?>

<?php include("_shell/_header.php"); ?>

<?php

foreach ($pages as $page => $data) {
  
?>

  <div class="page" id="<?php echo $page; ?>">

<?php 

    if ($data->type == "links") echo "<h3>" . $data->headline . "</h3>";
    
    $func = "show_" . $data->type;
    $func($page);
      
?>

  </div>
    
<?php

}
  
?>

<?php include("_shell/_footer.php"); ?>
