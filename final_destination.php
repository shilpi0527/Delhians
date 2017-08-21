<?php session_start(); ?>
<?php include 'fetching/fetch_4_final_destination.php'; ?>
<!DOCTYPE html>
<html>
	<head>
    
    	<title><?php echo $FullName.' - delhians.com'; ?></title>
    	
    	<?php /*It inherit attribute variables*/ ?>
        <?php include 'includes/atr.php'; ?>
      
        <meta name="Description" content="<?php echo $Description ?>">
        <meta name="Keywords" content="<?php echo $Keywords ?>">
          
        <?php /*Meta tags common to all pages*/ ?>
		<?php include 'includes/meta.php'; ?>
      
       
        <?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
        
        <?php /*-----This is destinations-css file-----*/ ?>
       	<?php include 'css/final_destination-css.php'; ?>
        
        <?php /*JQuery Plugin*/ ?>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

        
        <style>
			a{
				text-decoration: none;	
			}
			#outer-container{
				margin: 30px 0px;	
			}
			#inner-container{
				width: 70%;
				vertical-align:top;
				padding: 20px;
			}
        	#main-container{
				width: 60%;
				vertical-align: top;
			}
			#place-name h1{
				font-family: <?php echo $cabin ?>;
				font-size: 48px;
				color: <?php echo $theme_black ?>;
			}
			#site-thumb{
				width: 100%;
                max-height: 300px;
                overflow: hidden;
			}
			#right-bar{
				width: 35%;
				margin: 0px 2%;
			}
			#information{
				width: 100%;
				padding: 5px 20px;
				background-color: <?php echo $lightest_gray ?>;
			}
			#right-ad{
				width: 302px;
				margin: 2%;
			}
			.site-info{
				margin: 12px 0px;	
			}
			.site-info h2{
				font-size: 15px;
				color: <?php echo $darkest_gray ?>;
				font-family: <?php echo $cabin ?>;
			}
			.site-info p,
			.site-info li{
				font-family: <?php echo $cabin ?>;
				color: <?php echo $dark_gray ?>;
				font-size: 14px;
			}
			#site-content p{
				font-family: <?php echo $lato ?>;
				font-size: 16px;
				word-spacing:2px;
				color: <?php echo $black; ?>;
				padding: 10px 0px;
				line-height: 26px;
				text-align:justify;
			}
			#site-content h2{
				font-family: <?php echo $cabin; ?>;
				color: <?php echo $black; ?>;
				font-size: 23px;
				line-height: 28px;
				margin-top: 20px;
			}
			#site-content h3{
				font-family: <?php echo $lato; ?>;
				font-size: 18px;
				color: <?php echo $darkest_gray; ?>;
				padding: 13px 0px 0px 0px;
			}
			#site-content ul{
				padding: 10px 5px;	
			}
			#site-content li{
				font-family: <?php echo $lato; ?>;
				color: <?php echo $darkest_gray; ?>;
				font-size: 16px;
				word-spacing:2px;
				line-height: 22px;
			}
			.fa-eye{
				color: <?php echo $dark_gray; ?>;	
			}
			
			#info-wrapper{
				display: none;	
			}
			
			#info-wrapper p{
				text-decoration: none;
				font-family: <?php echo $cabin; ?>;
				color: <?php echo $black; ?>;
				font-size: 22px;
				line-height: 40px;
				margin-top: 30px;
				height: 40px;
				background-color: <?php echo $gray ?>;
			}	
			
			#mobile-information{
				height: 0px;
				padding: 0px 20px;
				transition-duration: 1s;
				overflow: hidden;
				display: none;
				text-align:left;
				background-color: <?php echo $lightest_gray ?>;
			}
			
			@media only screen and (max-width: 1280px){
				#right-ad{
					margin: 2%;	
				}
			}
			@media only screen and (max-width: 1180px){
				#right-ad{
					margin: 1%;	
				}
			}
			@media only screen and (max-width: 1090px){
				#right-ad{
					display: none;	
				}
				
				#inner-container{
					width: 100%;	
				}
				
				#cover{
					height: 360px;	
				}
			}
			@media only screen and (max-width: 700px){
				#main-container{
					width: 78%;	
				}
				#right-bar{
					display: none;	
				}
				
				#info-wrapper,
				#mobile-information{
					display: block;	
				}
				
				#cover{
					height: 300px;	
				}
				#head-line h1{
					font-size: 40px;
					line-height:45px;	
				}
			}
			@media only screen and (max-width: 450px){
				#main-container{
					width: 95%;	
				}
				#place-name h1{
					font-size: 35px;	
				}
				#cover{
					height: 260px;	
				}
				#head-line h1{
					font-size: 36px;
					line-height:40px;	
				}
			}
			@media only screen and (max-width: 340px){
				#main-container{
					width: 100%;	
				}
			}
			@media only screen and (max-width: 280px){
				#place-name h1{
					font-size: 30px;
				}
				#head-line h1{
					font-size: 33px;
					line-height:38px;	
				}
			}
            #site-thumb img{
                width: 100%;
                object-fit: contain;
            }
        </style>
		
    </head>
    <body>
		<?php /*----Header-----*/ ?>
		<?php include 'includes/header.php'; ?>

		<?php /*Main Cover*/ ?>
		<div id="cover" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/cover/<?php echo $CoverPhoto; ?>);">
			<div id="tag-line">
				<div id="head-line"><h1 class="default-text-atr"><?php echo $Category?></h1></div>
<!--                <div id="sub-line"><h3 class="default-text-atr">Places Of Worship <i class="fa fa-angle-right"></i> <?php echo $Location; ?></h3></div>
-->            </div>
		</div>

		<?php /*Main Container*/ ?>
		<div id="outer-container" align="center">
			<div id="inner-container" class="inline" align="center">
				<div id="container-heading" align="left">
					<div id="place-name"><h1><?php echo $FullName?></h1></div>
					<div id="views"><i class="fa fa-eye">&nbsp; <?php echo $Views ?></i></div>
				</div>
				<div id="container">
					<div id="main-container" class="inline">
						<div id="site-thumb" class="cover-prop">
							 <img src="images/profile/<?php echo $ProfilePhoto; ?>" alt="<?php echo $FullName.', '.$Location.', New Delhi'; ?>" /> 
						</div>
						<div id="large-mobile-banner">
							<hr>
							<span style="display: block">Advertisement</span>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Large-Mobile-Banner -->
							<ins class="adsbygoogle"
								 style="display:inline-block;width:320px;height:100px"
								 data-ad-client="ca-pub-2439489427213113"
								 data-ad-slot="5149529388"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							<hr>							
						</div>
						<a href="javascript:void(0);" onClick="showinfo()">
							<div id="info-wrapper">
								<p>
									<span style="float:left; padding-left: 9px">Place Information</span>
									<span style="float:right; padding-right: 9px" id="tog">+</span>
								</p>
							 </div>
						</a>
						<div id="mobile-information">
							<div class="site-info">
								<h2>Address</h2>
								<p><?php echo $Address ?></p>
							</div>
							<div class="site-info">
								<h2>Nearest Metro Station</h2>
								<p>
									<?php 
										if ($MetroFound)
											 echo $MetroName.' in '.$MetroColor;
										else
											echo 'No metro station found near <b>'.$ShortName.'</b>. If You found one, please let us know.';

									?>
								</p>
							</div>
							<div class="site-info">
								<h2>Timing</h2>
								<p><?php echo $Timing; ?></p>
							</div>
							<div class="site-info">
								<h2>Days</h2>
								<p><?php echo $OpeningDays; ?></p>
							</div>
							<div class="site-info">
								<h2>Bus Stand</h2>
								<p><?php echo $BusStandName; ?></p>
							</div>
							<div class="site-info">
								<h2>Bus Numbers</h2>
								<p><?php echo $BusNumbers; ?></p>
							</div>
							<div class="site-info">
								<h2>Tariff</h2>
								<p><?php echo $Fees; ?></p>
							</div>
							<div class="site-info">
								<h2>Facilities</h2>
								<p>
									<?php
										if($Parking)
											echo 'Parking: Yes<br>';
										if($DrinkingWater)
											echo 'Drinking Water: Yes<br>';
										if($Toilets)
											echo 'Toilets: Yes<br>';
										if($Library)
											echo 'Library: Yes<br>';
										if($Shops)
											echo 'Shops: Yes<br>';
										if($CloakRoom)
											echo 'Cloak Room: Yes<br>';
										if($Photography)
											echo 'Photography: Yes<br>';
										if($Canteen)
											echo 'Canteen: Yes<br>';
										if($FoodAllowed)
											echo 'Food Allowed: Yes<br>';
										if($Vehicle)
											echo 'Vehicle: Yes<br>';
									?>
								</p>
							</div>
							<div class="site-info">
								<h2>Places Nearby</h2>
								<p>
									<?php
										if(!$present)
											echo 'No tourist places found near <b>'.$ShortName.'</b> if you found one, please let us know. Contact us.';
										else{
											$j = 0;
											while($nearby[$j] != -1){
												$sql = "SELECT ShortName FROM destinations WHERE Id = '$nearby[$j]'";
												$res = $conn->query($sql);
												$row = $res->fetch_assoc();
												$name = $row['ShortName'];

												echo '<a href="final_destination.php?id='.$nearby[$j].'">'.$name.'</a><br>';
												$j++;
											}
										}
									?>
								</p>
							</div>
							<div class="site-info">
								<h2>Contact</h2>
								<p>
									<?php 
										if($OfficialLink)
											echo '<a href="'.$OfficialLink.'" target="_blank"><b>'.$OfficialLink.'</b><i class="fa fa-external-link"></i></a><br>';
										if($ContactMail)
											echo 'E-Mail: '.$ContactMail.'<br>';
										if($ContactNumber)
											echo 'Number: '.$ContactNumber.'<br>'; 
									 ?>
								</p>
							</div>
						</div>
						<?php /*Main Text Content */ ?>
						<div id="site-content" align="left">                 
							 <?php echo $LongAbout; ?>
							 <hr>
							 <div id="large-rectangle-ad" align="center">
							 	<span style="display: block">Advertisement</span>
							 	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- Large-Rectangle -->
								<ins class="adsbygoogle"
									 style="display:inline-block;width:336px;height:280px"
									 data-ad-client="ca-pub-2439489427213113"
									 data-ad-slot="9858930585"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>							 	
							 </div>
						</div>
					</div>
					<div id="right-bar" class="inline" align="left">
						<div id="information">
							<div class="site-info">
								<h2>Address</h2>
								<p><?php echo $Address ?></p>
							</div>
							<div class="site-info">
								<h2>Nearest Metro Station</h2>
								<p>
									<?php 
										if ($MetroFound)
											 echo $MetroName.' in '.$MetroColor;
										else
											echo 'No metro station found near <b>'.$ShortName.'</b>. If You found one, please let us know.';

									?>
								</p>
							</div>
							<div class="site-info">
								<h2>Timing</h2>
								<p><?php echo $Timing; ?></p>
							</div>
							<div class="site-info">
								<h2>Days</h2>
								<p><?php echo $OpeningDays; ?></p>
							</div>
							<div class="site-info">
								<h2>Bus Stand</h2>
								<p><?php echo $BusStandName; ?></p>
							</div>
							<div class="site-info">
								<h2>Bus Numbers</h2>
								<p><?php echo $BusNumbers; ?></p>
							</div>
							<div class="site-info">
								<h2>Tariff</h2>
								<p><?php echo $Fees; ?></p>
							</div>
							<div class="site-info">
								<h2>Facilities</h2>
								<p>
									<?php
										if($Parking)
											echo 'Parking: Yes<br>';
										if($DrinkingWater)
											echo 'Drinking Water: Yes<br>';
										if($Toilets)
											echo 'Toilets: Yes<br>';
										if($Library)
											echo 'Library: Yes<br>';
										if($Shops)
											echo 'Shops: Yes<br>';
										if($CloakRoom)
											echo 'Cloak Room: Yes<br>';
										if($Photography)
											echo 'Photography: Yes<br>';
										if($Canteen)
											echo 'Canteen: Yes<br>';
										if($FoodAllowed)
											echo 'Food Allowed: Yes<br>';
										if($Vehicle)
											echo 'Vehicle: Yes<br>';
									?>
								</p>
							</div>
							<div class="site-info">
								<h2>Places Nearby</h2>
								<p>
									<?php
										if(!$present)
											echo 'No tourist places found near <b>'.$ShortName.'</b> if you found one, please let us know. Contact us.';
										else{
											$j = 0;
											while($nearby[$j] != -1){
												$sql = "SELECT ShortName FROM destinations WHERE Id = '$nearby[$j]'";
												$res = $conn->query($sql);
												$row = $res->fetch_assoc();
												$name = $row['ShortName'];

												echo '<a href="final_destination.php?id='.$nearby[$j].'">'.$name.'</a><br>';
												$j++;
											}
										}
									?>
								</p>
							</div>
							<div class="site-info">
								<h2>Contact</h2>
								<p>
									<?php 
										if($OfficialLink)
											echo '<a href="'.$OfficialLink.'" target="_blank"><b>'.$OfficialLink.'</b><i class="fa fa-external-link"></i></a><br>';
										if($ContactMail)
											echo 'E-Mail: '.$ContactMail.'<br>';
										if($ContactNumber)
											echo 'Number: '.$ContactNumber.'<br>'; 
									 ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style>
				#right-ad{
					border: 1px Solid Black;
				}
			</style>
			<div id="right-ad" class="inline">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Medium-Rectange -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:300px;height:250px"
					 data-ad-client="ca-pub-2439489427213113"
					 data-ad-slot="9181387785"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<!-- New-Long-Sidebar -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:300px;height:600px"
					 data-ad-client="ca-pub-2439489427213113"
					 data-ad-slot="9960116987"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<!-- Medium-Rectangle-2 -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:300px;height:250px"
					 data-ad-client="ca-pub-2439489427213113"
					 data-ad-slot="8382197388"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>

		<?php include 'includes/footer.php'; ?>

		<script type="text/javascript">

			function showinfo(){
				var el = document.getElementById("mobile-information");
				var ht = el.scrollHeight;
				if(el.style.height == "0px" || el.style.height == 0){
					el.style.height = ht +"px";
				}
				else{
					el.style.height = "0px";
				}

				var tog = document.getElementById("tog");
				if(tog.innerHTML == "-")
					tog.innerHTML = "+";
				else
					tog.innerHTML = "-";
			}
		</script>
    </body>
</html>