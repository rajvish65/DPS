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

<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>

<!-----CSS------->
<link href="slider/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/animate.css">
<link href="css/dpscustom_style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/dpscustom_misc.css">
<link href="css/style.min.css" rel="stylesheet" media="screen"/>
<style>
.image_resize{
width:500px;
height:350px
}
</style>

<!-- JavaScripts -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.lightbox.js"></script>
<script src="js/dps_custom.js"></script>   	
<script type="text/javascript" src="js/jquery.vticker.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#news_ticker').vTicker();
});
</script>

<?php echo includeCSS();?>
</head>
<body>
<div id="home" class="wrap">
<?php echo topMenu();?>
   <!-------Image Slider------------->
  <div class="container" id="home">
    <div class="row">
      <div class="col col-md-12">        
        <div class="flexslider">
          <ul class="slides">
		     <li class="clone">
              <img class="image_resize" src="images/banner.jpg"  alt="slide 1" />
			
            </li> 
            <li class="clone">
              <img class="image_resize" src="images/rsz_dsc_0140_compressed.jpg" alt="slide 2" />
             
            </li>
            <li class="clone">
              <img class="image_resize" src="images/Product/TaperRollerBearing/rsz_taper_1.jpg" alt="slide 3" />
           
            </li>
			<li class="clone">
              <img class="image_resize" src="images/rsz_dsc_0204_compressed.jpg" alt="slide 4" />
              
            </li>
          </ul>
        </div>            
      </div>
    </div>
  </div>
 
  <section class="container cf"><!--container-->
    <article class="lhs cf">
      <div class="content_box cf">
        <h2>Welcome to our site</h2>
        <div class="thumb"> <img src="images/thumb.jpg" border="0" alt=""> </div>
        <div class="desc">
          <p style="text-align: justify;">DPS Bearings is the Established in 1980 by our Chairman Mr. Pukhraj Shah.  Manufacturing Unit is located in Chhatral GIDC , Dist Gandhinagar and Head Office is in Mumbai. 
 (DPS bearings, a name which spells respect and trust in the industry is itself a mere product of the honest and determined efforts of Mr.Pukhraj Shah* who is also the founding father of the company.</p>
          <p><a href="about-us.php" title="">Read more</a></p>
        </div>
      </div>

<div class="content_box cf">
 <h2>Our Products<span class="button">
 <a href="javascript:void(0);" title="" id="prev"><img src="images/left-arrow.jpg" width="30" height="31" align="absmiddle"></a><a href="javascript:void(0);" title=""  id="next"><img src="images/right-arrow.jpg" width="30" height="31" align="absmiddle"></a></span></h2>
    <div id="menu-container">
	<div class="divs">
<!-- product page 1 start -->
	<div class="content homepage" id="menu-1">
        <div class="product" >
          <div class="pro_box">
            <p class="title">Taper Roller Bearings</p>
            <div class="pro_thumb">
			<img src="images/ProductSlider/rsz_taper_bearing.jpg">
			</div>
            <div class="pro_desc">
              <p>It is best suited for use under heavy load and impact load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">Cylindrical Roller Bearings</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_cylinderical_bearing.jpg"></div>
            <div class="pro_desc">
              <p>It is best suited for applications where the radial load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">Steering Bearing</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_steering_bearing.jpg"></div>
            <div class="pro_desc">
              <p>Manufactured from high grades of hardened steel</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
        </div>
    </div>
<!-- product page 1 end -->

<!-- product page 2 start -->
	<div class="content homepage" id="menu-2">
        <div class="product" >
          <div class="pro_box">
            <p class="title">Ball Bearings</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_ball_bearing.jpg"></div>
            <div class="pro_desc">
              <p>It is best suited for use under heavy load and impact load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">Chain Bearings</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_chain_bearing.jpg"></div>
            <div class="pro_desc">
              <p>It is best suited for applications where the radial load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">Idler Pulley Bearing</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_idler_pulley_bearing.jpg"></div>
            <div class="pro_desc">
              <p>Manufactured from high grades of hardened steel</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
        </div> 
    </div>
<!-- product page 2 end -->

<!-- product page 3 start -->
<div class="content homepage" id="menu-3">
    <div class="product" >
          <div class="pro_box">
            <p class="title">Mass Bearings</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_mass_bearing.jpg"></div>
            <div class="pro_desc">
              <p>It is best suited for use under heavy load and impact load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">Needle Bearings</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_needle_bearing.jpg"></div>
            <div class="pro_desc">
              <p>It is best suited for applications where the radial load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">U C Bearings</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_uc_bearing.jpg"></div>
            <div class="pro_desc">
              <p>Manufactured from high grades of hardened steel</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
        </div>
  </div>
<!-- product page 3 end -->

<!-- product page 4 start -->
<div class="content homepage" id="menu-5">
   <div class="product" >
          <div class="pro_box">
            <p class="title">Water Pump Bearings</p>
            <div class="pro_thumb"><img src="images/ProductSlider/rsz_waterpump_bearing.jpg"></div>
            <div class="pro_desc">
              <p>It is best suited for use under heavy load and impact load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">Cylindrical Roller Bearings</p>
            <div class="pro_thumb"><img src="images/cylindrical_roller_bearing/20_resize_compressed.jpg"></div>
            <div class="pro_desc">
              <p>It is best suited for applications where the radial load.</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
          <div class="pro_box">
            <p class="title">Steering Bearing</p>
            <div class="pro_thumb"><img src="images/steering_bearing/DSC_0139_compressed.jpg"></div>
            <div class="pro_desc">
              <p>Manufactured from high grades of hardened steel</p>
              <p class="readmore"><a href="product.php" title="">Read more</a></p>
            </div>
          </div>
        </div>
  </div>
<!-- product page 4 end -->
</div>
</div>
</div>
    </article>
    <article class="rhs cf">
      <div class="rhs_box cf">
        <h2>Certificates <span>Click to enlarge</span></h2>
        <div class="row dps_certificate">
        	<div class="col-md-4 col-sm-12">
            	<div class="gallery-item">
							<img src="images/Certificate/certificate_temp01.jpg" alt="certificate 1">
							<div class="overlay">
								<a href="images/Certificate/certificate_temp01.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
							</div>
						</div>
          </div>
            <div class="col-md-4 col-sm-12">
            	<div class="gallery-item">
							<img src="images/Certificate/certificate_temp02.jpg" alt="certificate 2">
							<div class="overlay">
								<a href="images/Certificate/certificate_temp02.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
							</div>
						</div>
            </div>

            <div class="col-md-4 col-sm-12">
            	<div class="gallery-item">
							<img src="images/Certificate/certificate_temp03.jpg" alt="certificate 3">
							<div class="overlay">
								<a href="images/Certificate/certificate_temp03.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
							</div>
						</div>
            </div>
        </div>
      </div>
      <div class="rhs_box cf" style="height: 200px;">
        <h2>News & Events</h2>
        <div  id="news_ticker" style="overflow: hidden; position: relative; height=180px; padding-top: 20px;">
		
		<ul >
		<li style="padding-bottom: 10px;text-align:justify"><a href="news.php" title=""
		 
          <p class="news_title">News Article 1</p> <p class="news_desc">30-09-2012</p>
          <p class="news_desc">News Article 1 Description. <br/> hfsdflk sjdfjls djflkjsd ljfsdj fjsdjf </p><br/><br/>
        </li>	
		<li style="padding-bottom: 10px;text-align:justify" ><a href="news.php" title=""
		
          <p class="news_title">News Article 2</p>	<p class="news_desc">29-09-2012</p>
          <p class="news_desc">News Article 2 Description. <br/> jjsad dsajdkjas dsajd jdajd jdjasd djasdj </p><br/><br/>
      	</li>
		 <li style="padding-bottom: 10px;text-align:justify" ><a href="news.php" title=""
		
          <p class="news_title">News Article 3</p>	<p class="news_desc">28-09-2012</p>
          <p class="news_desc">News Article 3 Description. <br/> jjsad dsajdkjas dsajd jdajd jdjasd djasdj </p><br/>
      	</li>
		</ul>
		</div>
		
        <p class="news-link"><a href="news.php" title="">News Archive</a></p>
   
	  </div>
      <div class="rhs_box2 cf">
        <h2>Customize Bearings</h2>
        <p class="bdesc">makes your own customized bearings as per the requirment</p>
        <a href="javascript:void(0);" title=""><img src="images/barrow.jpg" width="32" height="33" border="0" alt=""/></a> </div>
    </article>
    <div class="cf"></div>
<?php echo footer()?>
  </section>
  <!--container-->
  <? echo footerText();?>
</div>
<?php echo includeJS();?>

<!-- JavaScripts -->  
<script defer src="slider/jquery.flexslider.js"></script>
<script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
          $('.menu').singlePageNav();
        }
      });
    });

    $('#go-top').click(function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, 1000);
      return false;
    });

  </script>

</body>
</html>
