<?php

function topMenu($page=""){


	$homeAct = empty($page) ? ' class="act" ' : "";;
	$aboutAct =  ($page=="about") ? ' class="act" ' : "";;
	$companyAct = ($page=="company") ? ' class="act" ' : "";;
	$productAct = ($page=="product") ? ' class="act" ' : "";;
	$contactAct = ($page=="contact") ? ' class="act" ' : "";;
	$galleryAct = ($page=="gallery") ? ' class="act" ' : "";;

  $topMenu = '<header class="cf"><!--header-->
    <p class="tagline">ISO 9001:2000 Certified Company</p>
    <a  title=""  href="index.php"  class="logo"><img src="images/logo.png" width="67" height="71" border="0" alt=""/></a>
    <nav class="cf">
      <ul class="cf">
        <li><a href1="javascript:void(0);" href="index.php" title="" $homeAct >HOME</a></li>
        <li><span class="sep">|</span></li>
        <li><a href1="javascript:void(0);"  href="about-us.php"  title="" $aboutAct >ABOUT US</a></li>
        <li><span class="sep">|</span></li>
        <li><a href1="javascript:void(0);"  href="company-profile.php"  title="" $companyAct >COMPANY PROFILE</a></li>
        <li><span class="sep">|</span></li>
        <li><a href1="javascript:void(0);"  href="product.php"  title="" $productAct >PRODUCT</a></li>
        <li><span class="sep">|</span></li>
        <li><a href1="javascript:void(0);"  href="contact-us.php"  title="" $contactAct >CONTACT US</a></li>
        <li><span class="sep">|</span></li>
        <li><a href1="javascript:void(0);"  href="gallery.php"  title="" $galleryAct>INFRASTRUCTURE GALLERY</a></li>
      </ul>
    </nav>
  </header>
  <!--header-->';

  return $topMenu;


}

function footer() {
 $footer = ' <footer class="cf">
      <div class="f-left">
        <p><a  href="about-us.php"  title="">About us</a> | <a  href="company-profile.php"  title="">Company profile</a> | <a  href="product.php"  title="">Product</a> | <a  href="contact-us.php"  title="">Contact US</a> | <a  href="gallery.php"   title="">Gallery</a></p>
        <p><a href="product.php" title="">Ball Bearing</a> | <a href="product.php" title="">Toll Bearing</a> | <a href="product.php" title="">X Bearing</a> | <a href="product.php" title="">Y Bearing</a> | <a href="product.php" title="">Z Bearing</a> </p>
      </div>
      <div class="f-right">
        <p>Follow Us</p>
        <p><a href=""><img src="images/facebook.jpg" border="0" alt=""/></a><a href=""><img src="images/gplus.jpg" border="0" alt=""/></a><a href=""><img src="images/twitter.jpg" border="0" alt=""/></a><a href=""><img src="images/in.jpg" border="0" alt=""/></a></p>
        <p>Copyright @ '.date('Y').' DPS bearing. All rights reserved.</p>
      </div>
    </footer>';


	return $footer;
}

function includeJS() {
	return '<script src="js/modernizr.js"></script>';

}
function includeCSS() {
	return '<link href="css/style.min.css" rel="stylesheet" media="screen"/>';
}

function footerText() {
	return '<p class="disclam">DPS Bearings Pvt.Ltd, Formerly Known as SKM Bearings Pvt.Ltd, Incorporated under the companies Act, 1956,<br>
    Change of name approved by Central Govt wef 28 March, 2007</p>';
}

?>