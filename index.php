<!DOCTYPE html>
<html>
	<head>
       
       <title>Delhians - A website for delhians</title>        
        
        <?php /*It inherit attribute variables*/ ?>
        <?php include 'includes/atr.php'; ?>
              
        <?php /*Meta tags common to all pages*/ ?>
		<?php include 'includes/meta.php'; ?>
       
        <meta name="Description" content="Delhians.com is a tourism and information website that will give you the updated information about timings, nearest metro station and other things for a tourist place in delhi. You can also suggest us places in delhi.">
        
        <meta name="Keywords" content="delhi, delhians, tourism, travel, best places, holidays, places, india gate, humayun's tomb, attractions.">
        
        <?php /*JQuery Plugin*/ ?>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        
        <?php /*Owl Carousel Plugin*/ ?>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
            
        <?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
        
        <?php /*-----This is home-css file-----*/ ?>
       	<?php include 'css/home-css.php'; ?>
        
        <?php /*------This file will make the page responsive-----*/ ?>
		<link href="mobile-css/home-mobile-css.css" type="text/css" rel="stylesheet">
        
        <?php /*This is home-js file*/ ?>	
        <?php include 'js/home-js.php' ?>
    	    
    </head>
    <body>
    	<div id="body">
        	
            <?php /*----Header-----*/ ?>
            <?php include 'includes/header.php'; ?>
        	
        	<?php /*Main Cover*/ ?>
        	<div id="cover">
            	<div id="tag-line">
                	<div id="head-line"><h1 class="default-text-atr">We Are Delhians</h1></div>
                    <div id="sub-line"><h3 class="default-text-atr">Let's explore every corner of the Delhi</h3></div>
                </div>
            </div>
            
            <?php /*Featured Panel*/ ?>
            <div id="featured-panel">
            	<div id="fp-upper">
                	<div id="featured-text"><h3 class="default-text-atr">FEATURED DESTINATIONS</h3></div>
                    <div id="find-more-button"><p class="default-text-atr"><?php /*Find More*/?>Must Visit &nbsp; <i class="fa fa-chevron-right" aria-hidden="true"></i></p></div>
                </div>
                <div id="fp-lower" align="center">
                	<a href="final_destination.php?id=7">
                        <div class="featured-cards">
                            <div class="card-cover" style="background-image: url('images/profile/lotus_temple.jpg');"></div>
                            <div class="card-text">
                                <div class="card-place-name"><span class="default-text-atr">Lotus Temple</span></div>
                                <div class="card-place-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Nehru Place</span></div>
                            </div>
                        </div>
                    </a>
                    <a href="final_destination.php?id=25">
                        <div class="featured-cards">
                            <div class="card-cover" style="background-image: url('images/profile/garden_of_five_senses.jpg');"></div>
                            <div class="card-text">
                                <div class="card-place-name"><span class="default-text-atr">Garden of Five Senses</span></div>
                                <div class="card-place-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Saket</span></div>
                            </div>
                        </div>
                    </a>
                    <a href="final_destination.php?id=9">
                        <div class="featured-cards">
                            <div class="card-cover" style="background-image: url('images/profile/humayuns_tomb.jpg');"></div>
                            <div class="card-text">
                                <div class="card-place-name"><span class="default-text-atr">Humayun's Tomb</span></div>
                                <div class="card-place-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Nizamuddin</span></div>
                            </div>
                        </div>
                    </a>
                    <a href="final_destination.php?id=37">
                        <div class="featured-cards">
                            <div class="card-cover" style="background-image: url('images/profile/national_museum_of_india.jpg');"></div>
                            <div class="card-text">
                                <div class="card-place-name"><span class="default-text-atr">National Museum</span></div>
                                <div class="card-place-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Janpath</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <?php /*Search Bar*/ ?>
            
            <!--
            <div id="search-bar" align="center">
            	<div id="sb-left">
                	<img src="logo/logo_220.png"/>
                </div>
                <div id="sb-right">
                	<div id="sb-text">Be more than just another traveler when you GoExplore!</div>
                    <div id="sb-bar" class="clearfix">
                    	<form style="padding: 10px;">
                           		<input type="text" placeholder="Find Your Destination" id="search">
                           		<a href="#" id="search-icon"><i class="fa fa-search"></i></a>
                           		
                           	
                           	<script>
							/* Google Custom Search */
							  (function() {
								var cx = '018094332778084930383:k9szbmkb-9u';
								var gcse = document.createElement('script');
								gcse.type = 'text/javascript';
								gcse.async = true;
								gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(gcse, s);
							  })();
							</script>
							<gcse:search></gcse:search>
                         </form>
                    </div>
                </div>
            </div>
            -->
            
            
            <?php /*Type of people*/ ?>
            <div id="places-by-people" align="center">
            	<div class="multi-cards" id="one">
                	<div class="text">
                    	<div class="card-text-head">History Lovers</div>
                        <p>These are some places that brings you to the history of delhi.</p>
                    </div>
                    <div class="card-places">
                    	<div class="place" style="background-image: url(images/profile/national_museum_of_india.jpg)">
                        	<div class="image in clearfix">
                            	<a href="final_destination.php?id=37">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
                            	</a>	
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">National Museum</div>
                                    <div class="place-location">Janpath</div>
                                </div>
                            </div>
                         </div>
                        <div class="place" style="background-image: url(images/profile/qutub_minar.jpg)">
                        	<div class="image clearfix">
                           		<a href="final_destination.php?id=33">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Qutub Minar</div>
                                    <div class="place-location">Mehrauli</div>
                                </div>
                            </div>
                        </div>
                        <div class="place" style="background-image: url(images/profile/red_fort.jpg)">
                        	<div class="image clearfix">
                           		<a href="final_destination.php?id=34">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Red Fort</div>
                                    <div class="place-location">Chandni Chowk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="find-more-link"><!-- Find More--> Let's Explore &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                </div>
                <div class="multi-cards" id="two">
                	<div class="text">
                    	<div class="card-text-head">Peace Seekers</div>
                        <p>Visit these places for have some mental peace after rush of Delhi.</p>
                    </div>
                    <div class="card-places">
                    	<div class="place" style="background-image: url(images/profile/lotus_temple.jpg)">
                        	<div class="image in clearfix">
                           		<a href="final_destination.php?id=7">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Lotus Temple</div>
                                    <div class="place-location">Nehru Place</div>
                                </div>
                            </div>
                         </div>
                        <div class="place" style="background-image: url(images/profile/laxminarayan_temple.jpg)">
                        	<div class="image clearfix">
                           		<a href="final_destination.php?id=2">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Birla Mandir</div>
                                    <div class="place-location">Connaught Place</div>
                                </div>
                            </div>
                        </div>
                        <div class="place" style="background-image: url(images/profile/malai_mandir.jpg)">
                        	<div class="image clearfix">
                           		<a href="final_destination.php?id=8">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Malai Mandir</div>
                                    <div class="place-location">R.K. Puram</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="find-more-link"><!-- Find More--> Let's Explore &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                </div>
                <div class="multi-cards" id="three">
                	<div class="text">
                    	<div class="card-text-head">Greenery Of Delhi</div>
                        <p>These are some popular places of delhi known for their greenery.</p>
                    </div>
                    <div class="card-places">
                    	<div class="place" style="background-image: url(images/profile/garden_of_five_senses.jpg)">
                        	<div class="image in clearfix">
                           		<a href="final_destination.php?id=25">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Gardens of Five Senses</div>
                                    <div class="place-location">Saket</div>
                                </div>
                            </div>
                         </div>
                        <div class="place" style="background-image: url(images/profile/aastha_kunj_park.jpg)">
                        	<div class="image clearfix">
                           		<a href="final_destination.php?id=26">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Astha Kunj</div>
                                    <div class="place-location">Nehru Place</div>
                                </div>
                            </div>
                        </div>
                        <div class="place" style="background-image: url(images/profile/deer_park.jpg)">
                        	<div class="image clearfix">
                           		<a href="final_destination.php?id=28">
                            		<div class="details-button">DETAILS &nbsp;<i class="fa fa-arrow-right"></i></div>
								</a>
                            </div>
                            <div class="captions">
                            	<div class="left-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="right-text">
                                    <div class="place-name">Deer Park</div>
                                    <div class="place-location">Hauz Khas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="find-more-link">Let's Explore &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                </div>
                
            </div>
            
            <?php /*Owl Carousel Slideshow*/ ?>
            <div id="owl-carousel" class="owl-carousel">
            	<div class="slides" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/cover/parks_and_gardens.jpg);">
                	<div class="ss-container">
                        <div class="ss-name">Garden Of Five Senses</div>
                        <div class="ss-about">The Garden Of Five Senses is not just a park, it is a space with a variety of fun and activities. </div>
                        <a href="final_destination.php?id=25">
                        	<div class="ss-read-more-button">Read More &nbsp; <i class="fa fa-angle-right"></i></div>
						</a>
                    </div>
                </div>
                <div class="slides" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/cover/places_of_worship.jpg">
                	<div class="ss-container">
                        <div class="ss-name">Akshardham Temple</div>
                        <div class="ss-about">Akshardham Temple is a traditional temple that reflects the culture, art and beauty of India.</div>
                        <a href="final_destination.php?id=1">
                        	<div class="ss-read-more-button">Read More &nbsp; <i class="fa fa-angle-right"></i></div>
						</a>
                    </div>
                </div>
                <div class="slides" style=" background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/cover/forts.jpg);">
                	<div class="ss-container">
                        <div class="ss-name">Tughlakabad Fort</div>
                        <div class="ss-about">Tughlaqabad Fort is the ruined fort present in south Delhi area.</div>
                        <a href="final_destination.php?id=9">
                        	<div class="ss-read-more-button">Read More &nbsp; <i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="slides" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/cover/world_heritage.jpg">
                	<div class="ss-container">
                        <div class="ss-name">Humayun's Tomb</div>
                        <div class="ss-about">Humayun's Tomb is a Mughal architecture built in the Delhi by his wife Haji Begum.</div>
                        <div class="ss-read-more-button">Read More &nbsp; <i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
            <?php /*New Articles*/ ?>
            <!--
            <div id="stories">
            	<div id="stories-head">
                	<div id="stories-heading">New Articles & Stories</div>
                    <div id="stories-more-button">Find More &nbsp; <i class="fa fa-angle-right"></i></div>
                </div>
                <div id="stories-body" align="center">
                	<div class="main-card">
                        <div class="story-card" style="background-image: url(images/thumb-1.jpg)">
                            <div class="card-captions"><h2>Hello World Hello World Hello World Hello World</h2></div>
                        </div>
                        <div class="card-info clearfix">
                        	<div class="story-author"><i class="fa fa-user"></i> &nbsp; Author Name</div>
                            <div class="story-date">11/12/2016</div>
                        </div>
                    </div>
                    <div class="main-card">
                        <div class="story-card" style="background-image: url(images/thumb-1.jpg)">
                            <div class="card-captions"><h2>Hello World</h2></div>
                        </div>
                        <div class="card-info clearfix">
                        	<div class="story-author"><i class="fa fa-user"></i> &nbsp; Author Name</div>
                            <div class="story-date">11/12/2016</div>
                        </div>
                    </div>	
                    <div class="main-card">
                        <div class="story-card" style="background-image: url(images/thumb-1.jpg)">
                            <div class="card-captions"><h2>Hello World</h2></div>
                        </div>
                        <div class="card-info clearfix">
                        	<div class="story-author"><i class="fa fa-user"></i> &nbsp; Author Name</div>
                            <div class="story-date">11/12/2016</div>
                        </div>
                    </div>	
                    <div class="main-card">
                        <div class="story-card" style="background-image: url(images/thumb-1.jpg)">
                            <div class="card-captions"><h2>Hello World</h2></div>
                        </div>
                        <div class="card-info clearfix">
                        	<div class="story-author"><i class="fa fa-user"></i> &nbsp; Author Name</div>
                            <div class="story-date">11/12/2016</div>
                        </div>
                    </div>
				</div>
            </div>
            -->
            
            
            <?php /*Footer*/ ?>
            <?php include 'includes/footer.php' ?>
            
        </div>      
    </body>
</html>