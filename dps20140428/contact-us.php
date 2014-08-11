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

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/dpscustom_style.css" rel="stylesheet" type="text/css">

<?php echo includeCSS();?>

<!--JavaScript--->
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$().ready(function(){
$("#industry_name").hide();

$("#contact_form").submit(
	function()
	{
		alert("Form Submitted");
		var form = $("#contact_form");
		if(form.valid())
		{
			alert("Valid Form");
		}
		else
		{
			alert("Invalid");
		}
	}
);


$("#businessExperience").change(function()
	{
	
		if($(this).val() === 'Select')
		{
			$("#industry_name").hide();
			alert('Please Select a Value');
		}
		if($(this).val() === 'Yes')
		{
			$("#industry_name").show();
		}
		if($(this).val() === 'No' )
		{
			$("#industry_name").hide();
		}
	}
);
});

</script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	
</head>
<body>
<div id="home" class="wrap">
<?php echo topMenu("contact");?>
  <section class="container cf"><!--container-->
    <div class="cf" style="height: 1245px;">
	
	<div>
		<h2 align="center" style="font-size: 32px;padding-top: 20px;font-family: tahoma;color: grey;padding-bottom:10px;">Contact Us</h2>
			</div>
	  <section id="contact">
	   	
    <div >
      <div class="container" style="height: 950px;">
        <div class="row" style="padding-top: 20px;">
          <div class="col col-md-7 col-sm-12 col-xs-12 center-row" id="contact_content" style="left: 100px;">
            <form  action="#" method="post" class="center" id="contact_form">
             <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="font-size: 16px;">Company Details</label>
						</div>
					</div>
				</div>


			<div class="row">
                <div class="col-md-6">
                  <div class="form-group" style="width: 700px;">
                    <input name="companyName" type="text" class="form-control" id="companyName" required placeholder="Company Name...">
                  </div>
                </div>
			 </div>
			 <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="address" rows="3" class="form-control" id="address" required placeholder="Address..."></textarea>
                  </div>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="phone" type="text" pattern="[0-9]{10}" class="form-control" id="phone" required placeholder="Phone...">
                  </div>                
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="fax" type="text" class="form-control" pattern="[0-9]*" id="fax" required placeholder="Fax...">
                  </div>                
                </div>				
              </div>
			  <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" id="email" required placeholder="Email...">
                  </div>                
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="website" type="url" class="form-control" id="website" required placeholder="Website...eg:http://www.google.com">
                  </div>                
                </div>				
              </div>
			  
			   <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="font-size: 16px;">Contact Person Details</label>
						</div>
					</div>
				</div>
				
			  <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="contactPerson" type="text" class="form-control" id="contactPerson" required placeholder="Contact Person...">
                  </div>
                </div>
			 </div>
			 <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="contactNo" type="text" pattern="[0-9]{10}" class="form-control" id="contactNo" required placeholder="Contact No...">
                  </div>                
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="contactEmail" type="email" class="form-control" id="contactEmail" required placeholder="Email ID...">
                  </div>                
                </div>				
              </div>
			   <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="font-size: 16px;">Business Experience</label>
						</div>
					</div>
				</div>
			  
			  <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="legalStatus" type="text" class="form-control" id="legalStatus" required placeholder="Legal Status of the Firm...">
                  </div>
                </div>
			 </div>
			 <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="totalExp" type="text" class="form-control" id="totalExp" required placeholder="Total Experience in the Business...">
                  </div>
                </div>
			 </div>
			  <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <p>Do you have experiences in  running a Distribution business</p>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control" id="businessExperience">
						<option value="Select">Select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
                  </div>
                </div>
			 </div>
			 <div class="row" id="industry_name" style="width: 700px;">
				<div class="col-md-6">
                  <div class="form-group">
                   <input name="industryName" type="text" class="form-control" id="industryName" required placeholder="Please Provide Industry Name...">
                </select>
                  </div>
                </div>
			 </div>
			 <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="details" rows="3" class="form-control" id="details" required placeholder="More Details..."></textarea>
                  </div>
                </div>
              </div>
			   <div class="row">
			   <div class="col-md-12">
                  <div class="form-group">
                    <p>Attachments</>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="" type="file" class="browse" size="150px"/>
					<input type="submit" class="btn btn-primary pull-right" value="SEND">
                  </div>
                </div>
              </div>

            </form>          
          </div>
		  
        </div>
      </div>
    </div>
  </section>
	 
	 <section class="section_padding">
	<table  class="table_hw">
	<tr>
        <td width="20%" valign="top">
		<div class="desc_table_left">
           <strong> Registered Office </strong><br/><br/>
           <strong>DPS Bearings Pvt Ltd</strong><br />
           457, S.V.P. Road, Prarthana Samaj,<br />
           Phoenix Building , 6th Floor , Office No 6 ,<br />
           Andheri West, Mumbai,Mumbai – 400 004<br /> 
		   Tel Fax : +91 22 2382 132-23<br />
           Tel : +91 22 66151894 , 67437107<br />
    
           Email :-<a href="mailto:rajsharma9870@gmail.com"> dpsbearing@gmail.com</a><br />
           Website :- <a href="http://www.dpsbearings.com/">www.dps.com</a><br />
		   </div>
        </td>
       
		<td width="20%" valign="top">
		<div class="desc">
            <strong> Sales Office </strong><br/><br/>       
           <strong>DPS Bearings Pvt Ltd</strong><br />
           Block –C, 508B, Ganesh Meridian,<br />
           Opp. Amiraj Farm, S. G. Highway,<br />
           Nr New Gujarat High Court,<br /> 
		   Ahmedabad - 380060 ( Gujarat )<br />
           Tel : +91 79 40322371<br />
    
           Email :-<a href="mailto:rajsharma9870@gmail.com">dpsbearings@live.com</a><br />
           Website :- <a href="http://www.dpsbearings.com/">www.dps.com</a><br />
		   </div>
        </td>
		
		 <td width="20%" valign="top">
		<div class="desc_table_right">
           <strong> Factory Address </strong><br/><br/>
           <strong>DPS Bearings Pvt Ltd</strong><br />
           Plot No 101, Bileshwarpura,<br />
           Chhatral, Opp. Navkar Jain Temple,<br />
           Tal : Kalol, <br /> 
		   Dist Gandhinagar ( Guj ) – 382729<br/>
		   Tel Fax : 91 2764 233023-233392<br />
           Website :- <a href="http://www.dpsbearings.com/">www.dps.com</a><br/>
		   <br/>
		   
		   </div>
        </td>
 </table>
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
