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

<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

<!--CSS-->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/dpsProductSlide_style.css">

<!--JavaScript--->
<script src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var clickedId = localStorage.getItem("clickedId");

    $("#next").click(function(){
	
	clickedId = localStorage.getItem("clickedId");
	
	$.post('product-details.php', 'productId='+clickedId, function(data){
var parsed = JSON.parse(data);

$("#productDescription").empty().append(parsed.ProductDesc);
$("#productName").empty().append(parsed.ProductName);

var lastImageId = Number(1);

 $('ul.slides').find('li').each(function(j, li)
 {
    $('li.clone').find('img').each(function(j, li)
	{
		  lastImageId = Number($(this).attr('id'));
    });      
 });
 
var newImageId = Number(lastImageId) + Number(1);		

	var imageArrayLength = Number(Object.keys(parsed.Images).length);
	lastImageId = Number(lastImageId);
	
	if( +imageArrayLength >  +lastImageId)
	{
		newImageId = Number(newImageId);
	}
	else
	{
		newImageId = Number(1);
	}
	
	var i = Number(newImageId);
		for(i = newImageId ;i <= newImageId; i++)
		{
			var imgLoc = parsed.Images[i].trim();
			$("#image_slider").empty().append("<li class='clone'><img id="+newImageId+" src="+imgLoc+"><li>");
		}
});
			//loadScript();
        if ($(".divs div.content:visible").next().length != 0)
	    {		
            $(".divs div.content:visible").next().addClass("animated fadeInLeft").show().prev().hide() ;
        }
		else {
            $(".divs div.content:visible").hide();
            $(".divs div.content:first").addClass("animated fadeInLeft").show() ;
			
        }
        return false;
    });

    $("#prev").click(function(){
	
	clickedId = localStorage.getItem("clickedId");
	$.post('product-details.php', 'productId='+clickedId, function(data){
var parsed = JSON.parse(data);

$("#productDescription").empty().append(parsed.ProductDesc);
$("#productName").empty().append(parsed.ProductName);

var lastImageId = Number(1);

 $('ul.slides').find('li').each(function(j, li)
 {
    $('li.clone').find('img').each(function(j, li)
	{
         // alert($(this).attr('id'));
		  lastImageId = Number($(this).attr('id'));
    });      
 });

var newImageId = Number(lastImageId) + Number(1);		

	var imageArrayLength = Number(Object.keys(parsed.Images).length);
	lastImageId = Number(lastImageId);
	
	if( +imageArrayLength >  +lastImageId)
	{
		newImageId = Number(newImageId);
	}
	else
	{
		newImageId = Number(1);
	}
	
	var i = Number(newImageId);
		for(i = newImageId ;i <= newImageId; i++)
		{
			var imgLoc = parsed.Images[i].trim();
			$("#image_slider").empty().append("<li class='clone'><img id="+newImageId+" src="+imgLoc+"><li>");
		}
});
	        //loadScript();				  
        if ($(".divs div.content:visible").prev().length != 0)
		{
		   
            $(".divs div.content:visible").prev().addClass("animated fadeInRight").show().next().hide();
        }
		else {
		   
            $(".divs div.content:visible").hide();
            $(".divs div.content:last").addClass("animated fadeInRight").show();
			
        }
        return false;
    });

	showDiv(1);
});


function isArray(obj) {
return obj.constructor == Array;
}

function showDiv(clickedId)
{
localStorage.setItem("clickedId",clickedId);

$.post('product-details.php', 'productId='+clickedId, function(data) {
var parsed = JSON.parse(data);

$("#productDescription").empty().append(parsed.ProductDesc);
$("#productName").empty().append(parsed.ProductName);

$("#image_slider").empty();
for(var i =1 ;i<=1;i++)
{
	var imgLoc = parsed.Images[i].trim();
	$("#image_slider").empty().append("<li class='clone'><img class='imageclass' id="+i+" src="+imgLoc+"><li>");
}
});

	$("a.act").removeClass('act');
	$("a#"+clickedId).addClass('act');
}
</script>

<?php echo includeCSS();?>
</head>
<body>
<div id="home" class="wrap">
<?php echo topMenu("product");?>
    <section class="container cf"><!--container-->
    <article class="breadcrumb" style="padding-bottom: 10px;">
	<!-- <a href="index.php" title="">Home</a>/<a href="javascript:void(0);" title="">Products</a>/&nbsp;Taper Roller Bearings   -->
    </article>
    <article class="product_rhs">
    <ul>
    <li>
    <a href="javascript:showDiv(1);" title="" class="act"  id="1">
    <span class="pthumb"><img src="images/Product/Taper Roller Bearing Compressed/13_compressed.jpg"></span>
    <span class="pdesc">Taper Roller Bearings</span>
    </a>
    </li>
    <li >
    <a href="javascript:showDiv(2);" title="" id="2">
    <span class="pthumb"><img src="images/Product/UCBearingCompressed/DSC_0171_compressed.jpg"></span>
    <span class="pdesc">U C Bearings</span>
    </a>
    </li>
    <li >
    <a href="javascript:showDiv(3);" title="" id="3">
    <span class="pthumb"><img src="images/Product/CylindricalRollerBearingCompressed/21_resize_compressed.jpg"></span>
    <span class="pdesc">Cylindrical roller bearings</span>
    </a>
    </li>
    <li>
    <a href="javascript:showDiv(4);" title="" id="4">
    <span class="pthumb"><img src="images/Product/Idler Pulley Bearing Compressed/DSC_0196_compressed.jpg"></span>
    <span class="pdesc">Idley Pulley Bearings</span>
    </a>
    </li>
    <li>
    <a href="javascript:showDiv(5);" title="" id="5">
    <span class="pthumb"><img src="images/Product/Needle Bearing Compressed/DSC_0113_compressed.jpg"></span>
    <span class="pdesc">Needle bearings</span>
    </a>
    </li>
    <li>
    <a href="javascript:showDiv(6);" title="" id="6">
    <span class="pthumb"><img src="images/prthumb.png"></span>
    <span class="pdesc">Thrust Roller bearings</span>
    </a>
    </li>
    <li>
    <a href="javascript:showDiv(7);" title="" id="7">
    <span class="pthumb"><img src="images/Product/Steering Bearing Compressed/DSC_0143_compressed.jpg"></span>
    <span class="pdesc">Steering Bearings</span>
    </a>
    </li>
    </ul>
    <div class="rhs_box2 cf">
        <h2>Customize Bearings</h2>
        <p class="bdesc">makes your own customized bearings as per the requirment</p>
        <a href="javascript:void(0);" title=""><img src="images/barrow.jpg" width="32" height="33" border="0" alt=""/></a> </div>
    </article>
	
	
	
    <article class="product_lhs cf" id="1">
    <div id="tab1" class="content">
    <h1 id="productName"></h1>
 
	
	
	
	<div class="container" id="home">
    <div class="row">
      <div class="col col-md-12">        
        <div class="flexslider">
          <ul class="slides" id="image_slider">
		     
          </ul>
        </div>            
      </div>
    </div>
  </div>
  
  <span class="button">

 <a href="javascript:void(0);" title="" id="prev"><img src="images/PrevProd.jpg"  align="absmiddle" style="position: absolute;top: 510px; left: 985px;"></a>
 <a href="javascript:void(0);" title=""  id="next"><img src="images/NextProd.jpg"  align="absmiddle"style="position: absolute;top: 510px; left: 1028px;" ></a>

 </span
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <p class="heading">Description</p>
    <p id="productDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    <div class="table">
     <p class="heading">Range</p>
     <table width="600" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>09067/95</td>
    <td>32015</td>
    <td>409022 [Double Row]</td>
  </tr>
  <tr>
    <td>09067/95</td>
    <td>32015</td>
    <td>409022 [Double Row]</td>
  </tr>
  <tr>
    <td>09067/95</td>
    <td>32015</td>
    <td>409022 [Double Row]</td>
  </tr>
    <tr>
    <td>09067/95</td>
    <td>32015</td>
    <td>409022 [Double Row]</td>
  </tr>
    <tr>
    <td>09067/95</td>
    <td>32015</td>
    <td>409022 [Double Row]</td>
  </tr>
    <tr>
    <td>09067/95</td>
    <td>32015</td>
    <td>409022 [Double Row]</td>
  </tr>
</table>

    </div>
    </div>
    </article>    
	
	 
    <div class="cf"></div>



<?php echo footer()?>
  </section>
  <!--container-->
  <? echo footerText();?>
</div>
<?php echo includeJS();?>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
