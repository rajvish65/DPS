<?php

include_once "common.php";

?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>::: DPS :::</title>
<link href="images/favicon.ico" rel="shortcut icon" />

<link href="css/aboutUsCss.css" rel="stylesheet" />
<style>
.boldtext{font-weight:bold;}
.semibold{font-weight:600;}
</style>

<?php echo includeCSS();?>
</head>
<body>
<div id="home" class="wrap">
<?php echo topMenu("about");?>
  <section class="container cf"><!--container-->
    <div class="aboutus-content" id="aboutus-content">
		
			<section id="about-text" class="inactive active" style="display: block; left: 0px;">
                 <div class="col-sm-6 col-md-6">
                    <p>
						News Article 1
					</p>
				</div>
					<br>
				<div class="col-sm-6 col-md-6">
                   <p>
						News Article 2
				   </p>
                </div>
                            
           </section>
						
						
						
			<section id="about-text" class="inactive active" style="display: block; left: 0px;">
				<div class="col-sm-6 col-md-6">
					<p>
						News Article 3
					</p>
				</div>
			</section>
			
			<section id="about-text" class="inactive active" style="display: block; left: 0px;">
				<div class="col-sm-6 col-md-6">
					<p>
						News Article 4
			
					</p>
				</div>
			</section>
			
			
			
</div>
<?php echo footer()?>
  </section>
  <!--container-->
  <? echo footerText();?>
</div>
<?php echo includeJS();?>
</body>
</html>
