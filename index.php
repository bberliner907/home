
<?php include("_global.php"); ?>

<?php include("_shell/_header.php"); ?>

<?php

foreach ($pages as $page => $data) {
	$style = (page_active($page)) ? "display: block;" : "";
  
?>

  <div class="page" 
  	id="<?php echo $page; ?>"
  	style="<?php echo $style; ?>">

<?php 

    if ($data->type == "links") echo "<h3>" . $data->headline . "</h3>";
    
    $load = "show_" . $data->type;
    $load($page);
    
?>

  </div>
    
<?php

}
  
?>

<?php include("_shell/_footer.php"); ?>
