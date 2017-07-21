
<?php include("../_auth.php"); ?>

<?php include("_library/_ga.php"); ?>

<?php

auth("brennberliner");

$site = "home";

$pages = array();

$sql = "SELECT * FROM pages WHERE site='" . $site . "' ORDER BY id";
$result = mysql_query($sql, $mysql_link);

while ($row = mysql_fetch_object($result)) {
  $pages[$row->page] = $row;
}

?>

<?php include("_library/_blurbs.php"); ?>

<?php include("_library/_links.php"); ?>
