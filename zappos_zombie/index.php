<!DOCTYPE html>
<html lang="en">

<?php
 if(@$_GET['page'] == "")
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

 <head>
  <meta charset="utf-8" />
  <title>The Zombie Survival Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="style/style960min.css">
 </head>
 
 <body>
 
        <div class="container">
  <header id="header">
      <div class="grid_full"><img src="./style/banner.jpg" alt="The Zombie Survival Guide" /></div>
  </header>
  
  		<nav>
          <div class="grid_full">
          <ul id="navi">
            <li class="grid_1"><a href="./index.php">Home</a></li>
            <li class="grid_1"><a href="?page=tips">Survival Tips</a></li>
            <li class="grid_1"><a href="?page=weap">Weapons</a></li>
          </ul>
          </div>
        </nav>
        

        
        <section class="cf">
        <span class="navfix">&nbsp;</span>
        <hr class="divide" />  
		  	<?php  include($content); ?>
        </section>
        
         
              
        <section class="cf">
        <hr class="divide" /> 
        	<div class="grid_full disptab">
			<div class="grid_1">
                <strong>See Also:</strong><br />
                <hr />
                    <ul class="foot"><li>&sdot; <a href="http://www.amazon.com/Hostess-Twinkies-Sponge-Creamy-Filling/dp/B004ZXYH48/" target="_blank">Stock up on Twinkies</a></li>
                        <li>&sdot; <a href="http://zombietools.net/tools/" target="_blank">Zombie Blades</a></li>
                        <li>&sdot; <a href="http://www.zombieapocalypsestore.com/" target="_blank">Zombie Apocalypse Store</a></li>
                        <li>&sdot; <a href="http://www.zombiesurvivalwiki.com/" target="_blank">Zombie Survival Wiki</a></li>
                        <li>&sdot; <a href="http://www.zombiegames.net/" target="_blank">Zombie Games</a></li></ul>
            </div>
            <div class="grid_1 gray">
                <strong>Disclaimer</strong><br /><hr /><p>&nbsp;&nbsp;In the event of a real zombie apocalypse, The Zombie Survival Guide accepts no liability in the event of injury or death sustained by anyone following the advice on these pages. Thank you, and good luck.
                </p>
            </div>
			<div class="grid_1 grid_right">
                	<strong>Site Map</strong><br /><hr />
                    <ul class="foot"><li>&sdot; <a href="./#">Home</a></li>
                    <li>&sdot; <a href="./?page=tips">Survival Tips</a></li>
                    <li>&sdot; <a href="./?page=weap">Weapons</a></li></ul>
            </div>
            </div>
        </section>
       
        
        <section class="cf"> 
        <hr class="divide navfix" />
        	<div class="grid_full">
        		<p class="center">© 2012<?php
				 $d = date("Y");
				 if( $d > 2012){
					  echo(" - $d");
				 } ?> Michael Hedden</p>
            </div>
        </section>
        
      </div>
 </body>
</html>
