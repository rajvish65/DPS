<?php
$arrBooks = array(
'1' => array(
'ProductName'=>'Taper Roller Bearings',
'ProductDesc'=>'Taper Roller Bearings Description',
'Images' => array('1'=>'images/Product/TaperRollerBearing/rsz_taper_1.jpg','2'=>'images/Product/TaperRollerBearing/rsz_taper_2.jpg','3'=>'images/Product/TaperRollerBearing/rsz_taper_3.jpg')
),

'2' => array(
'ProductName'=>'U C Bearings',
'ProductDesc'=>'U C Bearings Description',
'Images' => array('1'=>'images/Product/UCBearingCompressed/rsz_dsc_0169_compressed.jpg','2'=>'images/Product/UCBearingCompressed/rsz_dsc_0172_compressed.jpg')
),

'3' => array(
'ProductName'=>'Cylindrical Roller Bearings',
'ProductDesc'=>'Cylindrical Roller Bearings Description',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'4' => array(
'ProductName'=>'Idley Pulley Bearings',
'ProductDesc'=>'Idley Pulley Bearings Description',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'5' => array(
'ProductName'=>'Needle Bearings',
'ProductDesc'=>'Needle Bearings Description',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'6' => array(
'ProductName'=>'Thrust Roller Bearings',
'ProductDesc'=>'Thrust Roller Bearings Description',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'7' => array(
'ProductName'=>'Steering Bearings',
'ProductDesc'=>'Steering Description',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
)

);

$prodId = $_POST['productId'];
 $foo = $arrBooks[$prodId]; 
 echo json_encode($foo);
?>

















