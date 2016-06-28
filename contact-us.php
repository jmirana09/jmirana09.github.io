<?php $page = "contact"; 

$error = "";
if (isset($_POST['submitform'])) {
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/securimage/securimage.php';
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  $error = "<span class='errordivred'>The security code entered was incorrect.<br /><br />";
  $error .= "Please go <a href='javascript:history.go(-1)'>back</a> and try again.</span>";
} else {

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

        $to = "joeben@iconstrategiesbpo.com"; 
        $subject = "Elite Auto Lease, New Quote from : ".$name;
        $headers = "From: Elite Auto Lease<no-reply@eliteautolease.com>\r\n";  
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $mail_body = "<html><body>";
        $mail_body .= "<b>Name</b>: $name<br>
        <b>Email Address</b>: $email<br>
        <b>Phone</b>: $phone<br>
        <b>Mesage</b>: <br>$message<br>";
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
<section id="contact-us">
  <div class="container">
    <div class="contact-wrapper">
    <div class="top-right top-left">
      <img src="/assets/images/logo.png">
      <div class="details">
      <span><a href="/">www.eliteautolease.com</a></span>
      <span><a href="mailto: info@eliteautolease.com">info@eliteautolease.com</a></span>
      <span>Phone: <a href="9549477133">(954) 947-7133</a></span>
      <span>Fax: (855) 279-3379</span>
      </div>
    </div>
    <div class="contact-form">
      <div class="row">
        <div class="col-xs-12 col-md-6">
      <h2>Contact Form</h2>
      <?php echo $error; ?>
      <form class="contactform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" class="form-control" name="phone" id="phone" required>
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea name="message" style="width: 100%; height: 100px;" required></textarea>
        </div>
        <div class="form-group">
            <img id="captcha" src="/assets/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <input type="text" name="captcha_code" size="10" maxlength="6" />
            <a href="#" onclick="document.getElementById('captcha').src = '/assets/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
          </div>
          <div class="form-group">
            <input type="submit" name="submitform" class="form-control" value="Submit" id="submitform">
          </div>
      </form>
      </div>
    </div>
    </div>
  </div>
  </div>
</section>
<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>