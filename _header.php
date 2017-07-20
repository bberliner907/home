
<!DOCTYPE html>

<html>
  <head>
  
    <title>Brenn Berliner</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="static/styles.css" />
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="static/scripts.js"></script>
    
    <?php ga("UA-102812269-1"); ?>
    
  </head>
  
  <body>
  
    <div class="background"></div>
  
    <div class="wrapper">
      <div id="left">
        <img src="images/profile.png">
      
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
      
      </div>

      <div id="right">
        <h1>Brenn Berliner</h1>
        
        <div id="pages">
          