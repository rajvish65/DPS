<?php
$arrBooks = array(
'1' => array(
'ProductName'=>'Taper Roller Bearings',
'ProductDesc'=>'It is best suited for use under <b>Heavy and Impact load</b>. They have tapered inner and outer ring raceways between which tapered rollers are arranged. The Thrust load carrying capacity is largely determined by the contact angle, i.e. the larger the contact angle, the greater the suitability of the bearing to carry higher axial loads. These bearings are mainly used in <b> Wheels, Transmissions and Axle Centres of Passenger Cars, MUVs, Trucks, Tractors, Earthmovers, etc. </b> where RPM is moderate and combination loads (i.e. simultaneously both axial and radial loads) are prevalent.
<br> <br> <b> 30200, 30300, 31300,32200,32300,33000,33100,33200 & Inch Series</b>.',
'Images' => array('1'=>'images/Product/TaperRollerBearing/rsz_taper_1.jpg','2'=>'images/Product/TaperRollerBearing/rsz_taper_2.jpg','3'=>'images/Product/TaperRollerBearing/rsz_taper_3.jpg')
),

'2' => array(
'ProductName'=>'U C Bearings',
'ProductDesc'=>'We manufacturer all series of UC Bearings. <br>These bearings are 
available in <b>UCT UC FL or UCHB</b> . <br>Entire ranges of these bearings are 
durable. <br> Used in <b>Automobile industries</b>.<br> These bearings have <b>High Load 
bearing</b> capacities .',
'Images' => array('1'=>'images/Product/UCBearingCompressed/rsz_dsc_0169_compressed.jpg','2'=>'images/Product/UCBearingCompressed/rsz_dsc_0172_compressed.jpg')
),

'3' => array(
'ProductName'=>'Cylindrical Roller Bearings',
'ProductDesc'=>'It is best suited for applications where the <b>radial load and impact load is heavy, as well at a high speed</b>.
<br><br>
There are different types designated as <b>NU, NJ, NUP, N, NF (for single-row bearings),<br> NNU, and NN (for double-row bearings depending on the design or absence of side ribs)</b>.',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'4' => array(
'ProductName'=>'Idley Pulley Bearings',
'ProductDesc'=>'It is a combination of <b>precision ball bearing with rubber seal</b> to create a 
self contained unit.<br><b> Mainly applied in Agriculture</b>.',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'5' => array(
'ProductName'=>'Needle Bearings',
'ProductDesc'=>'They can be an ideal choice because of their ability to handle a given
level of <b>Speed and Load capacity</b>, yet have the smallest cross section of 
all roller bearing types.<br> Being used in <b>Transmission and Engine systems</b>.',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'6' => array(
'ProductName'=>'Thrust Roller Bearings',
'ProductDesc'=>'No Description Available',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
),
'7' => array(
'ProductName'=>'Steering Bearings',
'ProductDesc'=>'Manufactured from high grades of <b>Hardened Steel</b>.<br> We are capable of producing various ranges of steering bearings as per customer requirements.',
'Images' => array('1'=>'images/Product/no_products_found.jpg')
)

);

$prodId = $_POST['productId'];
 $foo = $arrBooks[$prodId]; 
 echo json_encode($foo);
?>

















