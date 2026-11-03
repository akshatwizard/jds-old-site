<?php 
$msgdisp = false;
if(isset($_POST['studentname']))
{
	$studentname = $_POST['studentname'];
	$aadhaar = $_POST['aadhaar'];
	$dob = $_POST['dob'];
	$category = $_POST['category'];
	$fname = $_POST['fname'];
	$foccupation = $_POST['foccupation'];
	$fmobile = $_POST['fmobile'];
	$femail = $_POST['femail'];
	$moccupation = $_POST['moccupation'];
	$mname = $_POST['mname'];
	$mmobile = $_POST['mmobile'];
	$memail = $_POST['memail'];
	$address = $_POST['address'];
	$paddress = $_POST['paddress'];
	$inclass = $_POST['inclass'];
	$preclass = $_POST['preclass'];
	$percent = $_POST['percent'];
	
	$headers = "From: info@jdspublicschool.co.in" . "\r\n";
	
	$message = "
	Student Name : $_POST[studentname]
	Aadhaar : $_POST[aadhaar]
	Date Of Birth : $_POST[dob]
	Category : $_POST[category]
	Father's Name : $_POST[fname]
	Father Occupation : $_POST[foccupation]
	Father Mobile : $_POST[fmobile]
	Father Email : $_POST[femail]
	Mother's Name : $_POST[mname]
	Mother Occupation : $_POST[moccupation]
	Mother Mobile : $_POST[mmobile]
	Mother Email : $_POST[memail]
	Address for Correspondence : $_POST[address]
	Permanent Address : $_POST[paddress]
	Admission in Class : $_POST[inclass]
	Year of Last Class : $_POST[preclass]
	Percentage in Last Class : $_POST[percent]
	";
	
	mail("akshat.gd@gmail.com", "JDS Public School New Enquiry", $message, $headers);
	mail("ssr.singh@gmail.com", "JDS Public School New Enquiry", $message, $headers);
	$msgdisp = true;
}
// echo $inclass;
?>
<style>
.errorstatus
{
	background:red;
	color:#fff;
	border-redious:3px;
	padding:0 3px;
}
.cal{
    font-family: FontAwesome, "Open Sans", Verdana, sans-serif;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
}
.form-group {
    width: 50%;
    float: left;
    padding: 0 15px;
}
.form-group-1 {
    width: 100%;
	padding: 15px;
	display: inline-block;
}
.captcha-input
{
	width: 100%;
}
select
{
	width:100%;
	height:25px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/captcha.css">

<section id="captcha">
<div class="block">
	<div class="entry">
		<?php
		if($msgdisp)
		{
		?>
		<h4 class="alert alert-danger"><strong>Thank You! We have received your Request.<br>Some one from our Team will contact you<br>For any queries, Please call on : 9918800397 OR 8299496308</strong></h4>
		<?php
		}
		?>
		<h2>Admission Form</h2>
		<form action="" method="POST">
			
			<div class="form-group">
			  <input type="text" class="form-control" id="studentname" placeholder="Student Name *" name="studentname">
			  <span id="errorstudent"></span>
			</div>
						
			<div class="form-group">
			  <input type="text" class="form-control" id="aadhaar" placeholder="Aadhaar *" name="aadhaar">
			  <span id="erroraadhaar"></span>
			</div>
						
			<div class="form-group">
			    <select id="category" name="category" placeholder="Category *">
					<option value="">Category *</option>
					<?php
					$products = array("General", "OBC", "SC", "ST");
					foreach($products as $item){
					?>
					<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
					<?php
					}
					?>
				</select>
				<span id="errorcategory"></span>
		    </div>
			<div class="form-group">
			  <input id="dp1" type="text" class="form-control clickable input-md cal" placeholder="&#xf133; Student Date of Birth *" name="dob" readonly="readonly">
				<span id="errordob"></span>
			</div>
			
			<div class="form-group">
			  <input type="text" class="form-control" id="fname" placeholder="Father's Name *" name="fname">
			  <span id="errorfname"></span>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="foccupation" placeholder="Father's Occupation" name="foccupation">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="fmobile" placeholder="Father's Mobile No *" name="fmobile">
			  <span id="errorfmobile"></span>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="femail" placeholder="Father's Email" name="femail">
			  <span id="errorfemail"></span>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="mname" placeholder="Mother's Name *" name="mname">
			  <span id="errormname"></span>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="moccupation" placeholder="Mother's Occupation" name="moccupation">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="mmobile" placeholder="Mother's Mobile *" name="mmobile">
			  <span id="errormmobile"></span>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="memail" placeholder="Mother's Email" name="memail">
			  <span id="errormemail"></span>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="address" placeholder="Address For Correspondence *" name="address">
			  <span id="erroraddress"></span>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="paddress" placeholder="Permanent Address *" name="paddress">
			  <span id="errorpaddress"></span>
			</div>
			<div class="form-group">
			    <select id="inclass" name="inclass" placeholder="Class in which admission sought *">
					<option value="">Class in which admission sought *</option>
					<?php
					$products = array("LKG", "UKG", "Class-1", "Class-2", "Class-3", "Class-4", "Class-5", "Class-6", "Class-7", "Class-8", "Class-9", "Class-10", "Class-11");
					foreach($products as $item){
					?>
					<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
					<?php
					}
					?>
				</select>
				<span id="errorinclass"></span>
		    </div>
			<div class="form-group">
			  <input type="text" class="form-control" id="preclass" placeholder="Year of passing previous class" name="preclass">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="percent" placeholder="Percentage in last class (half year, annual)" name="percent">
			</div>
					
			<div class="form-group-1">
                <label for="pwd">Captcha:</label>

                <!-- input captcha -->
                <div class="captcha-code btn btn-primary btn-md">
                    <div class="code">
                        <div class="dynamic-code"></div>
                    </div>
                    <div class="captcha-reload">
                        <i class="ion-ios-loop-strong"></i>
                    </div>
                </div>
                <div class="captcha-input">
                    <input type="text" class="form-control" id="captcha-input"  required autocomplete="off"  placeholder="Enter captcha code ...">
                    <span id="errCaptcha"></span>
                </div>

            </div>	
			<div class="form-group-1">
				<input type="submit" id="addsub" class="btn btn-primary" value="Submit">
			</div>
		  </form>
	</div>
</div>
</section>
<script src="js/captcha.js"></script>
<script>
	$(document).ready(function() {
		$('#addsub').click(function(){
			var studentname = $('#studentname').val();
			var aadhaar = $('#aadhaar').val();
			var dob = $('#dp1').val();
			var fname = $('#fname').val();
			var fmobile = $('#fmobile').val();
			var mname = $('#mname').val();
			var mmobile = $('#mmobile').val();
			var address = $('#address').val();
			var paddress = $('#paddress').val();
			var inclass = $('#inclass').val();
			var femail = $('#femail').val();
			var memail = $('#memail').val();
			var valid = true;
			if(studentname != '')
			{
				$('#errorstudent').hide();
			}
			else
			{
				$('#errorstudent').show().text('Please Enter Student Name');
				$('#errorstudent').addClass('errorstatus');
				var valid = false;
			}
			if(aadhaar != '')
			{
				$('#erroraadhaar').hide();
			}
			else
			{
				$('#erroraadhaar').show().text('Please Enter Aadhaar No.');
				$('#erroraadhaar').addClass('errorstatus');
				var valid = false;
			}
			if(dob != '')
			{
				$('#errordob').hide();
			}
			else
			{
				$('#errordob').show().text('Please Enter Student Date of Birth');
				$('#errordob').addClass('errorstatus');
				var valid = false;
			}
			if(fname != '')
			{
				$('#errorfname').hide();
			}
			else
			{
				$('#errorfname').show().text('Please Enter Father\'s name');
				$('#errorfname').addClass('errorstatus');
				var valid = false;
			}
			if(fmobile != '')
			{
				$('#errorfmobile').hide();
				if(!isPhoneNum(fmobile))
				{
					$('#errorfmobile').show().text('Invalid Mobile No');
					$('#errorfmobile').addClass('errorstatus');
					var valid = false;
				}
				else
				{
					
				}
			}
			else{
				$('#errorfmobile').show().text('Please Enter Fther\'s Mobile');
				$('#errorfmobile').addClass('errorstatus');
				var valid = false;
			}
			if(mmobile != '')
			{
				$('#errormmobile').hide();
				if(!isPhoneNum(mmobile))
				{
					$('#errormmobile').show().text('Invalid Mobile No');
					$('#errormmobile').addClass('errorstatus');
					var valid = false;
				}
				else
				{
					
				}
			}
			else{
				$('#errormmobile').show().text('Please Enter Mother Mobile No');
				$('#errormmobile').addClass('errorstatus');
				var valid = false;
			}
			if(mname != '')
			{
				$('#errormname').hide();
			}
			else
			{
				$('#errormname').show().text('Please Enter mother\'s Name');
				$('#errormname').addClass('errorstatus');
				var valid = false;
			}
			if(address != '')
			{
				$('#erroraddress').hide();
			}
			else
			{
				$('#erroraddress').show().text('Please Enter Address For Correspondence');
				$('#erroraddress').addClass('errorstatus');
				var valid = false;
			}
			if(paddress != '')
			{
				$('#errorpaddress').hide();
			}
			else
			{
				$('#errorpaddress').show().text('Please Enter Permanent Address');
				$('#errorpaddress').addClass('errorstatus');
				var valid = false;
			}
			if(inclass != '')
			{
				$('#errorinclass').hide();
			}
			else
			{
				$('#errorinclass').show().text('Please Enter Class in which admission sought');
				$('#errorinclass').addClass('errorstatus');
				var valid = false;
			}
			if(femail != '')
			{
				if(!isEmail(femail))
				{
					$('#errorfemail').show().text('Invalid Email');
					$('#errorfemail').addClass('errorstatus');
					var valid = false;
				}
				else
				{
					$('#errorfemail').hide();
				}
			}
			if(memail != '')
			{
				if(!isEmail(memail))
				{
					$('#errormemail').show().text('Invalid Email');
					$('#errormemail').addClass('errorstatus');
					var valid = false;
				}
				else
				{
					$('#errormemail').hide();
				}
			}
			return valid;
			
		});
	});
	
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#dp1').datepicker({

  beforeShowDay: function(date) {
    return date.valueOf() >= now.valueOf();
  },
  autoclose: true

}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

    var newDate = new Date(ev.date);
    newDate.setDate(newDate.getDate() + 1);
    checkout.datepicker("update", newDate);

  }
  $('#dp2')[0].focus();
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function isPhoneNum(phone) {
  var regex = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
  return regex.test(phone);
}
</script>