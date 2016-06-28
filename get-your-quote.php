<?php 
session_start();
$page = "quote";
$error = "";
if (isset($_POST['submitquote'])) {
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/securimage/securimage.php';
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  $error = "<span class='errordivred'>The security code entered was incorrect.<br /><br />";
  $error .= "Please go <a href='javascript:history.go(-1)'>back</a> and try again.</span>";
} else {

        $makeandmodel = $_POST['makeandmodel'];
        $purchaseoption = $_POST['purchaseoption'];
        $buyperiod = $_POST['leasebuyperiod'];
        $milesperyear = $_POST['milesperyear'];
        $moneydown = $_POST['moneydown'];
        $preferredoptions = $_POST['preferredoptions'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $emailaddress = $_POST['emailaddress'];

        $to = "joeben@iconstrategiesbpo.com"; 
        $subject = "Elite Auto Lease, New Quote from : ".$firstname;
        $headers = "From: Elite Auto Lease<no-reply@eliteautolease.com>\r\n";  
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $mail_body = "<html><body>";
        $mail_body .= "------What Vehicle Are You Interested In?-------<br><br>

Make and Model: ".$makeandmodel."<br>
Purchase Option: ".$purchaseoption."<br>
Buy Period: ".$buyperiod."<br>
Miles Per Year: ".$milesperyear."<br>
Money Down: ".$moneydown."<br>
Preferredoptions: ".$preferredoptions."<br><br>

-----Personal Information-----<br><br>

First Name: ".$firstname."<br>
Last Name: ".$lastname."<br>
Phone Number: ".$phonenumber."<br>
Email Address: ".$emailaddress."<br><br>";
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
<section id="get-quote-page">
  <div class="container">
    <div class="get-quote-page-wrapper">
      <div class="top-right">
        <img src="/assets/images/logo.png">
        <div class="details">
        <span><a href="/">www.eliteautolease.com</a></span>
        <span><a href="mailto: info@eliteautolease.com">info@eliteautolease.com</a></span>
        <span>Phone: <a href="9549477133">(954) 947-7133</a></span>
        <span>Fax: (855) 279-3379</span>
        </div>
      </div>
      <div class="form-body">
        <?php echo $error; ?>
        <h2>What vehicle are you interested in?</h2>
        <span>Please fill out the details below</span>
        <form id="getquoteform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <div class="form-group">
          <label>Make and Model</label>
          <input type="text" class="form-control" name="makeandmodel" id="makeandmodel" required>
          </div>

          <div class="form-group">
          <label>Purchase Option</label>
          <select class="form-control" name="purchaseoption" id="purchaseoption" required>
            <option>Please select</option>
            <option value="Lease">Lease</option>
            <option value="Buy">Buy</option>
            <option value="Cash">Cash</option>
            <option value="Not Sure">Not Sure</option>
          </select>
          </div>

          <div class="form-group">
          <label>Lease/Buy Period</label>
          <select class="form-control" name="leasebuyperiod" id="leasebuyperiod" required>
            <option>Select Period</option>
            <option value="24 Months">24 Months</option>
            <option value="36 Months">36 Months</option>
            <option value="39 Months">39 Months</option>
            <option value="42 Months">42 Months</option>
            <option value="60 Months">60 Months</option>
            <option value="Not Sure">Not Sure</option>
          </select>
          </div>

          <div class="form-group">
          <label>Miles Per Year</label>
          <select class="form-control" name="milesperyear" id="milesperyear" required>
            <option>Please select</option>
            <option value="10,000">10,000</option>
            <option value="12,000">12,000</option>
            <option value="15,000">15,000</option>
            <option value="20,000">20,000</option>
            <option value="Not Sure">Not Sure</option>
          </select>
          </div>

          <div class="form-group">
          <label>Money Down</label>
          <select id="moneydown" name="moneydown" class="form-control" required>
            <option>Please Select</option>
            <option value="$0 Down">$0 Down</option>
            <option value="$1000 Down">$1000 Down</option>
            <option value="$1500 Down">$1500 Down</option>
            <option value="$2000 Down">$2000 Down</option>
            <option value="$3000 Down">$3000 Down</option>
            <option value="$4000 Down">$4000 Down</option>
            <option value="$5000 Down">$5000 Down</option>
            <option value="$10,000 Down">$10,000 Down</option>
            <option value="$20,000 Down">$20,000 Down</option>
            <option value="Not Sure">Not Sure</option>
          </select>
          </div>

          <div class="form-group">
          <label>Preferred Options (MSRP, Navigation, Exterior Color, Interior Color, etc)</label>
          <textarea class="form-control" name="preferredoptions" id="preferredoptions" style="height: 100px;"></textarea>
          </div>

          <div class="form-group">
          <label>First Name</label>
          <input type="text" class="form-control" name="firstname" id="firstname" required>
          </div>

          <div class="form-group">
          <label>Last Name</label>
          <input type="text" class="form-control" name="lastname" id="lastname" required>
          </div>

          <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" class="form-control" name="phonenumber" id="phonenumber" required>
          </div>

          <div class="form-group">
          <label>Email Address</label>
          <input type="email" class="form-control" name="emailaddress" id="emailaddress" required>
          </div>
          <div class="form-group">
            <img id="captcha" src="/assets/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <input type="text" name="captcha_code" size="10" maxlength="6" />
            <a href="#" onclick="document.getElementById('captcha').src = '/assets/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
          </div>
          <div class="form-group">
            <input type="submit" name="submitquote" class="form-control" value="Submit" id="submitquote">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>