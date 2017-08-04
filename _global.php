
<?php include("../_auth.php"); ?>

<?php include("_library/_page.php"); ?>
<?php include("_library/_query.php"); ?>
<?php include("_library/_ga.php"); ?>
<?php include("_library/_date.php"); ?>

<?php

auth("brennberliner");

$site = "home";

$assets = "2017-08-03-01";

$pages = array();

$result = query("SELECT * FROM pages WHERE site='" . $site . "' ORDER BY id");

while ($row = query_next($result)) {
  $pages[$row->page] = $row;
}

?>

<?php include("_library/_blurbs.php"); ?>
<?php include("_library/_links.php"); ?>
