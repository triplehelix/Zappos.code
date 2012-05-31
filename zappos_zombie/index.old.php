<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<?php
 if($_GET['page'] == "")
 {
	$content = "./content/main.php";
 }
  else
 {
	$content = './content/' . $_GET['page'] . '.php';
	if(!file_exists($content)){
	  $content = "./content/404.php";
	}
 }
?>

<html>
 <head>
  <title>The Zombie Survival Guide</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="style/style960min.css">
 </head>
 
 <body>
  <div id="container">  
      <div id="banner"><img src="./style/banner.jpg" /></div>
      <div id="navigation"><?php include("./inc/nav.php"); ?></div>
      <div id="content"><?php  include($content); ?></div>
      <div id="footer"><?php include("./inc/footer.php"); ?></div>
      <div id="copyfoot"><?php include("./inc/2footer.php"); ?></div>
  </div>
 </body>
</html>
