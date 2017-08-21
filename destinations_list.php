<!DOCTYPE html>
<html>
	<head>
    
    	<?php include 'fetching/fetch_4_destinations_list.php'; ?>
    
    	<?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
    	
    	<?php /*It inherit attribute variables*/ ?>
        <?php include 'includes/atr.php'; ?>
        
        <?php /*Meta tags common to all pages*/ ?>
		<?php include 'includes/meta.php'; ?>
        
        <?php /*JQuery Plugin*/ ?>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        
        <?php /*-----This is destinations-css file-----*/ ?>
       	<?php include 'css/destinations_list-css.php'; ?>
        
        <?php /*------This file will make the page responsive-----*/ ?>
		<link href="mobile-css/destinations_list_mobile-css.css" type="text/css" rel="stylesheet">
        
        <?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
        
    </head>
    <body>
    	<?php include 'includes/header.php'; ?>
        
        <?php /*Main Cover*/ ?>
        <div id="cover" style="background-image:url(images/cover/<?php echo $cover; ?>)">
            <div id="tag-line">
                <div id="head-line"><h1 class="default-text-atr"><?php echo $cat ?> in Delhi</h1></div>
                <div id="sub-line"><h3 class="default-text-atr">Let's explore the delhi deeply</h3></div>
            </div>
        </div>
            
        <?php /*Destinations_lsit*/ ?>
        <div id="container" align="center">
        	
            <?php 
				$sql = "SELECT * FROM destinations WHERE Category = '$cat'";
				$res = $conn->query($sql);
				while($row = $res->fetch_assoc()){
					$Id = $row['Id'];
					
					$sql = "SELECT ProfilePhoto FROM destinations WHERE Id = '$Id'";
					$result = $conn->query($sql);
					$row2 = $result->fetch_assoc();
					$name_for_link = preg_replace("/.jpg/", "", $row2['ProfilePhoto']);
					
					$ShortName = $row['ShortName'];
					$Location = $row['Location'];
					$ProfilePhoto = $row['ProfilePhoto'];
					
					echo '
					<a href="final_destination.php?id='.$Id.'&ref='.$ref.'&name='.$name_for_link.'">
						<div class="dest-card" style="background-image:url(images/profile/'.$ProfilePhoto.')">
							<div class="dest-name">&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; '.$ShortName.', '.$Location.'</div>
						</div>
					</a>
					';
						
				}
			?>
         </div>
        
        <?php include 'includes/footer.php'; ?>
    </body>
</html>