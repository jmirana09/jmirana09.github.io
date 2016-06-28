<?php
session_start(); 
$page = "credit"; 

$error = "";
if (isset($_POST['submitpersonal'])) {
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/securimage/securimage.php';
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  $error = "<span class='errordivred'>The security code entered was incorrect.<br /><br />";
  $error .= "Please go <a href='javascript:history.go(-1)'>back</a> and try again.</span>";
} else {

        $fullname = $_POST['fullname'];
        $currentaddress = $_POST['currentaddress'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $homephone = $_POST['homephone'];
        $cellphone = $_POST['cellphone'];
        $faxnumber = $_POST['faxnumber'];
        $emailaddress = $_POST['emailaddress'];
        $socialsecuritynumber = $_POST['socialsecuritynumber'];
        $birthdate = $_POST['birthdate'];
        $ownorrent = $_POST['ownorrent'];
        $howlongcurrentaddress = $_POST['howlongcurrentaddress'];
        $monthlymortage = $_POST['monthlymortage'];
        $previousaddress = $_POST['previousaddress'];
        $howlongpreviousaddress = $_POST['howlongpreviousaddress'];
        $companyname1 = $_POST['companyname1'];
        $businessaddress1 = $_POST['businessaddress1'];
        $city1 = $_POST['city1'];
        $state1 = $_POST['state1'];
        $zip1 = $_POST['zip1'];
        $companyphone1 = $_POST['companyphone1'];
        $timeinposition1 = $_POST['timeinposition1'];
        $positionheld1 = $_POST['positionheld1'];
        $grossannual1 = $_POST['grossannual1'];
        $companyname2 = $_POST['companyname2'];
        $businessaddress2 = $_POST['businessaddress2'];
        $city2 = $_POST['city2'];
        $state2 = $_POST['state2'];
        $zip2 = $_POST['zip2'];
        $companyphone2 = $_POST['companyphone2'];
        $timeinposition2 = $_POST['timeinposition2'];
        $positionheld2 = $_POST['positionheld2'];
        $grossannual2 = $_POST['grossannual2'];
        $datesigned = $_POST['datesigned'];
        $signature = $_POST['signature'];

        $to = "joeben@iconstrategiesbpo.com"; 
        $subject = "Elite Auto Lease, New Quote from : ".$fullname;
        $headers = "From: Elite Auto Lease<no-reply@eliteautolease.com>\r\n";  
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $mail_body = "<html><body>";
        $mail_body .= "</b>------Personal Information-------</b><br><br>

<b>Full Name:</b> $fullname<br>
<b>Current Address:</b> $currentaddress, $city $state $zip<br>
<b>Home Phone:</b> $homephone<br>
<b>Cell Phone:</b> $cellphone<br>
<b>Fax Number:</b> $faxnumber<br>
<b>Email Address:</b> $emailaddress<br>
<b>Social Security Number:</b> $socialsecuritynumber<br>
<b>Birthdate:</b> $birthdate<br>
<b>Own or Rent:</b> $ownorrent<br>
<b>How Long (Current Address):</b> $howlongcurrentaddress<br>
<b>Monthly Mortage:</b> $monthlymortage<br>
<b>Previous Address:</b> $previousaddress<br>
<b>How Long (Previous Address):</b> $howlongpreviousaddress<br><br>

</b>-----Employment Information-----</b><br><br>

<b>Company Name:</b> $companyname1<br>
<b>Business Address:</b> $businessaddress1<br>
<b>City:</b> $city1<br>
<b>State:</b> $state1<br>
<b>Zip:</b> $zip1<br>
<b>Phone:</b> $companyphone1<br>
<b>Time in Position:</b> $timeinposition1<br>
<b>Position Held:</b> $positionheld1<br>
<b>Gross Annual Income/Salary:</b> $grossannual1<br><br>

<b>CompanyName:</b> $companyname2<br>
<b>Business Address:</b> $businessaddress2<br>
<b>City:</b> $city2<br>
<b>State:</b> $state2<br>
<b>Zip:</b> $zip2<br>
<b>Phone:</b> $companyphone2<br>
<b>Time in Position:</b> $timeinposition2<br>
<b>Position Held:</b> $positionheld2<br>
<b>Gross Annual Income/Salary:</b> $grossannual2<br><br>

<b>Date Signed:</b> $datesigned<br>
<b>Signature:</b> $signature<br>
";
        $mail_body .= "</body></html>";
        $success = mail($to, $subject, $mail_body, $headers);
        if ($success) {
          $error="<span class='errordiv'>Message Sent! Thank You!</span>";
        }
      }

}

if (isset($_POST['submitbusiness'])) {
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/securimage/securimage.php';
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  $error = "<span class='errordivred'>The security code entered was incorrect.<br /><br />";
  $error .= "Please go <a href='javascript:history.go(-1)'>back</a> and try again.</span>";
} else {

        $companyname = $_POST['companyname'];
        $natureofbusiness = $_POST['natureofbusiness'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        $fax = $_POST['fax'];
        $taxid = $_POST['taxid'];
        $duns = $_POST['duns'];
        $yearsestablished = $_POST['yearsestablished'];
        $companytype = $_POST['companytype'];
        $officers1 = $_POST['officers1'];
        $title1 = $_POST['title1'];
        $ownership1 = $_POST['ownership1'];
        $officers2 = $_POST['officers2'];
        $title2 = $_POST['title2'];
        $ownership2 = $_POST['ownership2'];
        $officers3 = $_POST['officers3'];
        $title3 = $_POST['title3'];
        $ownership3 = $_POST['ownership3'];
        $bankname = $_POST['bankname'];
        $accountbalance = $_POST['accountbalance'];
        $branchaddress = $_POST['branchaddress'];
        $bankcity = $_POST['bankcity'];
        $bankstate = $_POST['bankstate'];
        $bankzip = $_POST['bankzip'];
        $bankphone = $_POST['bankphone'];
        $loanofficer = $_POST['loanofficer'];
        $datesigned = $_POST['datesigned'];
        $signature = $_POST['signature'];

        $to = "joeben@iconstrategiesbpo.com"; 
        $subject = "Elite Auto Lease, New Quote from : ".$companyname;
        $headers = "From: Elite Auto Lease<no-reply@eliteautolease.com>\r\n";  
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $mail_body = "<html><body>";
        $mail_body .= "<b>------Business Information-------</b><br><br>
<b>Company Name:</b> $companyname<br>
<b>Name of Business:</b> $natureofbusiness<br>
<b>Address:</b> $address, $city $state $zip<br>
<b>Phone:</b> $phone<br>
<b>Fax:</b> $fax<br>
<b>Tax ID:</b> $taxid<br>
<b>DUNS #(if any):</b> $duns<br>
<b>Years Established:</b> $yearsestablished<br>
<b>Company is:</b> $companytype<br><br>

<b>Officers:</b> $officers1<br>
<b>Title:</b> $title1<br>
<b>Ownership:</b> $ownership1<br><br>

<b>Officers:</b> $officers2<br>
<b>Title:</b> $title2<br>
<b>Ownership:</b> $ownership2<br><br>

<b>Officers:</b> $officers3<br>
<b>Title:</b> $title3<br>
<b>Ownership:</b> $ownership3<br><br>


<b>-----Bank Information-----</b><br><br>
<b>Name of Bank:</b> $bankname<br>
<b>Account Balance:</b> $accountbalance<br>
<b>Branch Address:</b> $branchaddress, $bankcity $bankstate $bankzip<br>
<b>Phone:</b> $bankphone<br>
<b>Loan Officer:</b> $loanofficer<br><br>


<b>Date Signed:</b> $datesigned<br>
<b>Signature:</b> $signature<br>
";
        $mail_body .= "</body></html>";
        $success = mail($to, $subject, $mail_body, $headers);
        if ($success) {
          $error="<span class='errordiv'>Message Sent! Thank You!</span>";
        }
      }

}

?>
<?php include('includes/meta.php'); ?>
<?php include('includes/header.php'); ?>
<section id="creditsection">
  <div class="container">
    <?php echo $error; ?>
    <div class="row">
      <div class="col-xs-6">
        <div class="creditbutton">
          <button id="button1">Personal Credit Application Form</button>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="creditbutton">
          <button id="button2">Business Credit Application Form</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="creditforms form1">
        <form class="personalform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <div class="top-right">
            <img src="/assets/images/logo.png">
            <div class="details">
            <span><a href="/">www.eliteautolease.com</a></span>
            <span><a href="mailto: info@eliteautolease.com">info@eliteautolease.com</a></span>
            <span>Phone: <a href="9549477133">(954) 947-7133</a></span>
            <span>Fax: (855) 279-3379</span>
            </div>
          </div>
          <h2>Personal Credit Application</h2>
          <span class="form-title">Personal Information</span>
          <div class="form-group">
            <label>Full Name:</label><input type="text" class="form-control" id="fullname" name="fullname" required>
          </div>
          <div class="form-group">
            <label>Current Address:</label><input type="text" class="form-control" id="currentaddress" name="currentaddress" required>
          </div>
          <div class="form-group">
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <label>City:</label><input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="col-sm-4 col-xs-12">
              <label>State:</label><input type="text" class="form-control" id="state" name="state">
            </div>
            <div class="col-sm-4 col-xs-12">
              <label>Zip:</label><input type="text" class="form-control" id="zip" name="zip">
            </div>
          </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <label>Home Phone:</label><input type="tel" class="form-control" id="homephone" name="homephone">
              </div>
              <div class="col-sm-6 col-xs-12">
                <label>Cell Phone:</label><input type="tel" class="form-control" id="cellphone" name="cellphone">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <label>Fax Number:</label><input type="text" class="form-control" id="faxnumber" name="faxnumber">
              </div>
              <div class="col-sm-6 col-xs-12">
                <label>Email Address:</label><input type="email" class="form-control" id="emailaddress" name="emailaddress" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <label>Social Security Number: </label><input type="text" class="form-control" id="socialsecuritynumber" name="socialsecuritynumber" required>
              </div>
              <div class="col-sm-6 col-xs-12">
                <label>Birthdate: </label><input type="date" class="form-control" id="birthdate" name="birthdate">
              </div>
            </div>
          </div>
          <div class="form-group">
          <label>Own Or Rent</label>
          <select class="form-control" name="ownorrent" id="ownorrent" required>
            <option>Please select</option>
            <option value="Own">Own</option>
            <option value="Rent">Rent</option>
          </select>
          </div>
          <div class="form-group">
            <label>How long (current address):</label><input type="text" class="form-control" id="howlongcurrentaddress" name="howlongcurrentaddress">
          </div>
          <div class="form-group">
            <label>Monthly Mortage or Rent Payments</label><input type="text" class="form-control" id="monthlymortage" name="monthlymortage">
          </div>
          <div class="form-group">
            <label>Previous Address (less than 2 years):</label><input type="text" class="form-control" id="previousaddress" name="previousaddress">
          </div>
          <div class="form-group">
            <label>How long (Previous Address):</label><input type="text" class="form-control" id="howlongpreviousaddress" name="howlongpreviousaddress">
          </div>
           <span class="form-title">Employment Information</span>
           <h2>Current Employer</h2>
           <div class="form-group">
            <label>Company Name:</label><input type="text" class="form-control" id="companyname1" name="companyname1">
          </div>
          <div class="form-group">
            <label>Business Address:</label><input type="text" class="form-control" id="businessaddress1" name="businessaddress1">
          </div>
           <div class="form-group">
            <div class="row">
            <div class="col-sm-4 col-xs-12">
              <label>City:</label><input type="text" class="form-control" id="city1" name="city1">
            </div>
            <div class="col-sm-4 col-xs-12">
              <label>State:</label><input type="text" class="form-control" id="state1" name="state1">
            </div>
            <div class="col-sm-4 col-xs-12">
              <label>Zip:</label><input type="text" class="form-control" id="zip1" name="zip1">
            </div>
          </div>
          </div>
          <div class="form-group">
            <label>Phone:</label><input type="text" class="form-control" id="companyphone1" name="companyphone1">
          </div>
          <div class="form-group">
            <label>Time in position:</label><input type="text" class="form-control" id="timeinposition1" name="timeinposition1">
          </div>
          <div class="form-group">
            <label>Position Held:</label><input type="text" class="form-control" id="positionheld1" name="positionheld1">
          </div>
           <div class="form-group">
            <label>Gross Annual Income/Salary:</label><input type="text" class="form-control" id="grossannual1" name="grossannual1">
          </div>

           <h2>Previous Employer</h2>
           <div class="form-group">
            <label>Company Name:</label><input type="text" class="form-control" id="companyname2" name="companyname2">
          </div>
          <div class="form-group">
            <label>Business Address:</label><input type="text" class="form-control" id="businessaddress2" name="businessaddress2">
          </div>
           <div class="form-group">
            <div class="row">
            <div class="col-sm-4 col-xs-12">
              <label>City:</label><input type="text" class="form-control" id="city2" name="city2">
            </div>
            <div class="col-sm-4 col-xs-12">
              <label>State:</label><input type="text" class="form-control" id="state2" name="state2">
            </div>
            <div class="col-sm-4 col-xs-12">
              <label>Zip:</label><input type="text" class="form-control" id="zip2" name="zip2">
            </div>
          </div>          </div>
          <div class="form-group">
            <label>Phone:</label><input type="text" class="form-control" id="companyphone2" name="companyphone2">
          </div>
          <div class="form-group">
            <label>Time in position:</label><input type="text" class="form-control" id="timeinposition2" name="timeinposition2">
          </div>
          <div class="form-group">
            <label>Position Held:</label><input type="text" class="form-control" id="positionheld2" name="positionheld2">
          </div>
          <div class="form-group">
            <label>Gross Annual Income/Salary:</label><input type="text" class="form-control" id="grossannual2" name="grossannual2">
          </div>

          <div class="form-group">
            <label>Date Signed:</label><input type="date" class="form-control" id="datesigned" name="datesigned">
          </div>

          <div class="form-group">
            <label>Signature:</label><input type="text" class="form-control" id="signature" name="signature">
          </div>
          <div class="form-group">
            <img id="captcha" src="/assets/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <input type="text" name="captcha_code" size="10" maxlength="6" />
            <a href="#" onclick="document.getElementById('captcha').src = '/assets/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
          </div>
          <div class="form-group">
            <input type="submit" name="submitpersonal" class="form-control" value="Submit" id="submitquote">
          </div>
        </form>
      </div>
      <div class="creditforms form2">
        <form class="businessform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <div class="top-right">
            <img src="/assets/images/logo.png">
            <div class="details">
            <span><a href="/">www.eliteautolease.com</a></span>
            <span><a href="mailto: info@eliteautolease.com">info@eliteautolease.com</a></span>
            <span>Phone: <a href="9549477133">(954) 947-7133</a></span>
            <span>Fax: (855) 279-3379</span>
            </div>
          </div>
          <h2>Business Credit Application</h2>
          <span class="form-title">Business Information</span>
          <div class="form-group">
            <label>Company Name:</label><input type="text" class="form-control" id="companyname" name="companyname" required>
          </div>
           <div class="form-group">
            <label>Nature of Business:</label><input type="text" class="form-control" id="natureofbusiness" name="natureofbusiness" required>
          </div>
          <div class="form-group">
            <label>Address:</label><input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <label>City:</label><input type="text" class="form-control" id="city" name="city">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>State:</label><input type="text" class="form-control" id="state" name="state">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Zip:</label><input type="text" class="form-control" id="zip" name="zip">
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <label>Phone:</label><input type="tel" class="form-control" id="phone" name="phone">
              </div>
              <div class="col-sm-6 col-xs-12">
                <label>Fax:</label><input type="text" class="form-control" id="fax" name="fax">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <label>Tax ID:</label><input type="tel" class="form-control" id="taxid" name="taxid">
              </div>
              <div class="col-sm-6 col-xs-12">
                <label>DUNS # (if any):</label><input type="text" class="form-control" id="duns" name="duns">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Years Established:</label><input type="text" class="form-control" id="yearsestablished" name="yearsestablished" required>
          </div>
          <div class="form-group">
            <label>Company is:</label><br>
            <input type="radio" value="Incorporate" name="companytype"> Incorporate &nbsp;&nbsp;
            <input type="radio" value="Partnership" name="companytype"> Partnership &nbsp;&nbsp;
            <input type="radio" value="Proprietorship" name="companytype"> Proprietorship &nbsp;&nbsp;
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <label>Officers:</label><input type="text" class="form-control" id="officers1" name="officers1">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Title:</label><input type="text" class="form-control" id="title1" name="title1">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Ownership:</label><input type="text" class="form-control" id="ownership1" name="ownership1">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <label>Officers:</label><input type="text" class="form-control" id="officers1" name="officers2">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Title:</label><input type="text" class="form-control" id="title1" name="title2">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Ownership:</label><input type="text" class="form-control" id="ownership1" name="ownership2">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <label>Officers:</label><input type="text" class="form-control" id="officers1" name="officers3">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Title:</label><input type="text" class="form-control" id="title1" name="title3">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Ownership:</label><input type="text" class="form-control" id="ownership1" name="ownership3">
              </div>
            </div>
          </div>

          <span class="form-title">Bank Information</span>
          <div class="form-group">
            <label>Name of Bank:</label><input type="text" class="form-control" id="bankname" name="bankname" required>
          </div>
           <div class="form-group">
            <label>Account Balance:</label><input type="text" class="form-control" id="accountbalance" name="accountbalance" required>
          </div>
          <div class="form-group">
            <label>Branch Address:</label><input type="text" class="form-control" id="branchaddress" name="branchaddress" required>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <label>City:</label><input type="text" class="form-control" id="bankcity" name="bankcity">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>State:</label><input type="text" class="form-control" id="bankstate" name="bankstate">
              </div>
              <div class="col-sm-4 col-xs-12">
                <label>Zip:</label><input type="text" class="form-control" id="bankzip" name="bankzip">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Phone:</label><input type="tel" class="form-control" id="bankphone" name="bankphone" required>
          </div>
           <div class="form-group">
            <label>Loan Officer:</label><input type="text" class="form-control" id="loanofficer" name="loanofficer" required>
          </div>
          <div class="form-group">
            <label>Date Signed:</label><input type="date" class="form-control" id="datesigned" name="datesigned">
          </div>

          <div class="form-group">
            <label>Signature:</label><input type="text" class="form-control" id="signature" name="signature">
          </div>
          <div class="form-group">
            <img id="captcha" src="/assets/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <input type="text" name="captcha_code" size="10" maxlength="6" />
            <a href="#" onclick="document.getElementById('captcha').src = '/assets/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
          </div>
          <div class="form-group">
            <input type="submit" name="submitbusiness" class="form-control" value="Submit" id="submitquote">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>