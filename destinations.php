<!DOCTYPE html>
<html>
	<head>
    
    	<?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
    	
    	<?php /*It inherit attribute variables*/ ?>
        <?php include 'includes/atr.php'; ?>
        
        <?php /*Meta tags common to all pages*/ ?>
		<?php include 'includes/meta.php'; ?>
       
        <meta name="Description" content="Delhi contains a lot of tourist places and attractions. Delhians.com provides you the list of all places in a categorized format. Add more categories and tourist places, conact us and send us your regards.">
        
        <meta name="Keywords" content="Delhi, delhians, we are delhians, attractions, travel, tourism, places, holidays, categories, list of tourist places, dilli">
        
        <?php /*JQuery Plugin*/ ?>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        
        <?php /*-----This is destinations-css file-----*/ ?>
       	<?php include 'css/destinations-css.php'; ?>
        
        <?php /*------This file will make the page responsive-----*/ ?>
		<link href="mobile-css/destinations_mobile-css.css" type="text/css" rel="stylesheet">
        
        <?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
        
    </head>
    <body>
    	<?php include 'includes/header.php'; ?>
        
        <?php /*Main Cover*/ ?>
        <div id="cover"  style="background-image:url(images/categories/cover.jpg)">
            <div id="tag-line">
                <div id="head-line"><h1 class="default-text-atr">Choose What You Like</h1></div>
                <div id="sub-line"><h3 class="default-text-atr">Here we've categorised places for your ease.</h3></div>
            </div>
        </div>
            
        <?php /*Destinations_lsit*/ ?>
        <div id="container" align="center">
        	<a href="destinations_list.php?ref=parks_and_gardens_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/parks_and_gardens.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Parks & Gardens</div>
                </div>
            </a>
            <a href="destinations_list.php?ref=monuments_in_delhi">
            	<div class="dest-card" style="background-image:url(images/categories/monuments.jpg)">
                	<div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Monuments</div>
                </div>
            </a>
             <a href="destinations_list.php?ref=places_of_worhip_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/holy_places.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Holy Places</div>
                </div>
            </a>
            <a href="destinations_list.php?ref=tombs_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/tombs.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Tombs</div>
                </div>
            </a>
            <a href="destinations_list.php?ref=forts_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/forts.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Forts</div>
                </div>
            </a>
            <a href="destinations_list.php?ref=world_heritage_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/world-heritage.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; World Heritages</div>
                </div>
            </a>
            <a href="destinations_list.php?ref=museums_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/museums.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Museums</div>
                </div>
            </a>
            <!--
            <a href="destinations_list.php?ref=foods_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/fooding.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Fooding</div>
                </div>
            </a>
            <a href="destinations_list.php?ref=shopping_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/shopping.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Shopping</div>
                </div>
            </a>
            <a href="destinations_list.php?ref=night_life_in_delhi">
                <div class="dest-card" style="background-image:url(images/categories/night_life.jpg)">
                    <div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Night Life</div>
                </div>
            </a>
            -->
        </div>
        
        <?php include 'includes/footer.php'; ?>
    </body>
</html>