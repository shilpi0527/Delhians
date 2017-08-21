<!DOCTYPE html>
<html>
	<head>
    	<title>Contact - delhians.com</title>
       
        <?php /*It inherit attribute variables*/ ?>
        <?php include 'includes/atr.php'; ?>
        
        <?php /*Meta tags common to all pages*/ ?>
		<?php include 'includes/meta.php'; ?>
        
        <?php /*Those properties which are common to all pages*/ ?>
        <link type="text/css" href="css/default.css" rel="stylesheet">
        
        <style>
			<?php /*Space between header and the content*/ ?>
			#body{
				padding-top: 120px;	
				background-color: #E9EBEE !important;
				margin-top: 100px;
			}
			
			<?php /*Header color do not change with the scroll*/ ?>
			#header{
				background-color: #363C48 !important;	
			}
			
			.head h1{
				font-size: 58px;
				letter-spacing: 6px;
				color: #8C8C8E;
				margin-top: 0;
				margin-bottom: 0;
				font-family:'Segoe UI Light', 'Segoe UI', Segoe, Verdana;
				text-align: center;
				padding-top: 30px;
				padding-bottom: 30px;
			}
			@media only screen and (max-width: 300px){
				.head p{
					font-size: 40px;
				}
			}
			.active-three{
				box-shadow: inset 0 -5px #4b4f56;		
			}
        </style>
    </head>
    <body>
    	<div id="body">
        	<?php include 'includes/header.php' ?>
            <div class="head"><h1>We Are Listening</h1></div>
            <?php include 'includes/mail.php' ?>
            <?php include 'includes/footer.php' ?>
        </div>
    </body>
</html>