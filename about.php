<!DOCTYPE html>
<html>
	<head>
   		
   		<title>About Us - delhians.com</title>
   		
    	<?php /*It inherit attribute variables*/ ?>
        <?php include 'includes/atr.php'; ?>
        
        <?php /*Meta tags common to all pages*/ ?>
		<?php include 'includes/meta.php'; ?>
        
        <?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
        
        <style>
			#body{
				background-color: white;	
			}
        	#outer-body{
				padding-top: 120px;	
				margin-top: 100px;
			}
			#ad-space{
				display: inline-block;
			}
			#about-body{
				vertical-align: top;
				width: 65%;
				display: inline-block;
			}	
			#about-body h1{
				line-height: 60px;
				margin-bottom: 20px;
			}
			#main-msg{
				color: #95979c;
				font-size: 24px;
				margin-bottom: 26px;
 			    font-weight: 300;
 	   			line-height: 35px;	
			}
			#about-body h2{
				color: #95979C;
				font-size: 23px;
				line-height: 32px;
				letter-spacing: 1px;
				font-weight: 500;
				margin-bottom: 20px;
			}
			#about-body .para{
				color: <?php echo $light_black; ?>;
				line-height: 24px;
			}
			
			<?php /*Header color do not change with the scroll*/ ?>
			#header{
				background-color: #363C48 !important;	
			}
			.about-us{
				padding: 20px;	
				display: inline-block;
			}
			#long-ad{
				width: 302px;
			}
			
			h1,
			h2,
			h3{
				font-family: <?php echo $cabin; ?>
			}
			
			li,
			p{
				font-family: <?php echo $lato; ?>;
				margin-bottom: 26px;  
			}
			
			h1{
				color: <?php echo $theme_black; ?>;
				font-size: 50px;	
				letter-spacing: 2px;
				word-spacing: 5px;
				font-weight:600;
			}
			
			@media only screen and (max-width: 990px){
				#ad-space{
					display: none;
				}
				#about-body{
					width: 90%;
					margin-left: 3%;
				}
			}
			@media only screen and (max-width: 700px){
				#outer-body{
					margin-top: 0;
				}
			}
			@media only screen and (max-width: 440px){
				#about-body h1{
					font-size: 40px;
				}
				#about-body{
					width: 100%;
					margin: 0;
				}
			}
			@media only screen and (max-width: 335px){
				#about-body h1{
					font-size: 35px;
				}
				#main-msg{
					font-size: 20px;
				}
			}
        </style>
    </head>
    <body id="body">
    	<?php /*----Header-----*/ ?>
        <?php include 'includes/header.php'; ?>
        	
            <div id="outer-body">
            	<div id="ad-space" class="about-us">
                	<div id="long-ad" style="border: 1px Solid Black;">
                   		<span style="display: inline-block;">Advertisement</span>
                    	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    	<!-- New-Long-Sidebar -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:300px;height:600px"
							 data-ad-client="ca-pub-2439489427213113"
							 data-ad-slot="9960116987"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
                    </div>
                </div>
                <div id="about-body" class="about-us">
                    <h1>About delhians</h1>
                    
                    <p id="main-msg">
                    
                    Being a delhian means you are not only from Delhi but also you love Delhi, live Delhi and even breath Delhi.
                    Delhi as a capital of India perfectly serves its purpose with its unique and attractive tourism places.
                    </p>
                    
                    <p class="para">You can contribute to delhians.com to make it better by sharing your ideas, experience, and other stuff with us. Soon we will be adding more features into this by which you can register yourself as a delhian
                    and you can also share your story in Delhi.</p>
                        
                    <p class="para"><b>Let's come to Delhi and make and share some memories with us and others.</b></p>
                    
                    <h3>Updated Informations</h3>
                    <p class="para">The information we provide about every place is totally updated with time. We keep eyes on timings and tariff plans of places and make a quick update on any change of any information of places. But we are also humans and have no superpowers, so there may be some chances that we may miss something, if you find any, please let us know. We wlcome your suggestions heartily and will correct it for you asap.</p>
                    
                    <h3>We are from You</h3>
                    <p class="para">We work as a team and everybody is part of this team. We have worked on every aspect which is required for any tourist but you can share any idea of yours as a participant of this team if you feel its suitable.
                    We are always adding places. If we missed something, please let us know, we will add it in our database.</p>
                </div>
            </div>
            
        <?php /*Footer*/ ?>
        <?php include 'includes/footer.php' ?>
    </body>
</html>