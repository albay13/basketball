<?php 
ob_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
        <title>Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/images/logo.png">
        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway+Light:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        
        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav1.css">
        <link rel="stylesheet" type="text/css" href="assets/css/customizecss.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
      <style type="text/css">
      	@media screen and (max-width: 1100px) and (min-width: 300px) {
    .navbar-brand .logo{
        display: none;
    }
}
@media screen and (min-width: 992px) {

        .navbar-default {
            padding: 5px 0;
            transition: padding 0.5s;
        }

            .navbar-default.navbar-shrink {
                padding: 0px 0;
            }
    }
 body{
		background-color: black;
    background: url(assets/images/Catering1.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: Century Gothic;
    color: white;
    overflow-x: hidden;

		}

.loader {
    display: block;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: #fafafa url(assets/images/loader1.gif) no-repeat center center;
    text-align: center;
    color: #999;
    opacity: 1;
}
.divider-new {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  font-weight: 300;
  margin-bottom: 0px;
}

.divider-new h3 {
  margin-top: 5px;
}

.divider-new:before {
  content: '';
  height: 1.5px;
  background: #c6c6c6;
  flex: 1;
  margin: 0 .45em 0 0;
}

.divider-new:after {
  content: '';
  height: 1.5px;
  background: #c6c6c6;
  flex: 1;
  margin: 0 0 0 .45em;

}

      </style>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="loader"></div>
<?php
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "13iloveyouJeezele";
$dbname = "event_management_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO tbl_user VALUES (:ID, :Account_Name, :Password, :First_Name,:Last_Name,:Birthdate,:Age,:Email,:Contact_Number,:Account_Status,:Verification_Code,:Display_Number)");
     $stmt->bindParam(':ID', $id);
    $stmt->bindParam(':Account_Name', $account_name);
    $stmt->bindParam(':Password', $password);
    $stmt->bindParam(':First_Name', $first_name);
    $stmt->bindParam(':Last_Name', $last_name);
    $stmt->bindParam(':Birthdate', $birthdate);
    $stmt->bindParam(':Age', $age);
    $stmt->bindParam(':Email', $email);
    $stmt->bindParam(':Contact_Number', $contact_number);
    $stmt->bindParam(':Account_Status', $accountstatus);
    $stmt->bindParam(':Verification_Code', $verification_code);
    $stmt->bindParam(':Display_Number', $dp);
      
    // insert a row
    
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>

<br><br><br><br><br>
<div class="wow rollIn container">
<div class="row">	
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
<div class="well" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 5px; opacity: 0.85; background-color: #F5DEB3;">
<h3 style="color: black;">Register for Creative Corner account <i class="fa fa-lock fa-3x" style=" opacity: 0.7; float: right;"></i></h3>
<p style="color: black;">Account Information</p>
 <div class="wow fadeInDown divider-new">
                <h3>Login Details</h3>
</div>
<?php 
if(isset($_POST["btnsubmit"])){

    $id = '';
    $account_name = $_POST["accountname"];
    $password = $_POST["password"];
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $birthdate = $_POST["birthdate"];
    $age = $_POST["resultBday"];
    $email = $_POST["email"];
    $contact_number = $_POST["phone"];
    $accountstatus = "Pending";
    $verification_code = "";
    $dp = "1";
    $stmt->execute();
?>
<div class="wow fadeInTop alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Account has been created.
</div>
<?php
}
?>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'theme_name'
 };
 </script>
<form id="register-form" method="POST">
  <div class="form-group">
    <label style="color: black;" class="col-sm-12 control-label" for="email"><span style="color: red;">*</span> Account Name </label>
    <div class="col-sm-12">
    	<input required placeholder="Ex. noli_albay" type="text" class="form-control" id="accountname" name="accountname" autocomplete="off" required>
    </div>
  </div><!-- Username -->
  <div class="form-group">
    <label style="color: black;" class="col-sm-6  col-md-6 col-xs-6 control-label"><span style="color: red;">*</span> Password: </label>
    <label style="color: black;" class="col-sm-6  col-md-6 col-xs-6 control-label"><span style="color: red;">*</span> Confirm Password: </label>
 	<div class="col-sm-6">
 		<input required placeholder="*******" autocomplete="off" type="password" class="form-control col-sm-6 col-md-6 col-xs-6" id="password" name="password">
 	</div>
 	<div class="col-sm-6">
 		<input required placeholder="*******" autocomplete="off" type="password" class="form-control col-sm-6 col-md-6 col-xs-6" id="confirmpassword" name="confirmpassword">
 	</div>
  </div> <!-- Password and Confirm Password group -->
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 	<div class="wow fadeInDown divider-new">
                <h3>Personal Information</h3>
            </div>
</div>
 </div>
  <div class="form-group">
    <label style="color: black;" class="col-sm-6 control-label"><span style="color: red;">*</span> First Name : </label>
    <label style="color: black;" class="col-sm-6 control-label"><span style="color: red;">*</span> Last Name : </label>
 	<div class="col-sm-6">
 		<input placeholder="Ex. Juan" autocomplete="off" type="text" class="form-control" id="firstname" name="firstname">
 	</div>
 	<div class="col-sm-6">
 		<input placeholder="Ex. Dela Cruz" autocomplete="off" type="text" class="form-control" id="lastname" name="lastname">
 	</div>
  </div> <!-- First and Last group -->
  <br>
  <div class="form-group">
    <label  style="color: black;" class="col-sm-7 control-label"><span style="color: red;">*</span> Birthdate  : </label>
    <label style="color: black;" class="col-sm-5 control-label"><span style="color: red;">*</span> Age : </label>
 	<div class="col-sm-7">
 		<input autocomplete="off" type="date" class="form-control" id="birthdate" name="birthdate" onchange="submitBday()">
 	</div>
 	<div class="col-sm-5">
 		<input  autocomplete="off" type="text" class="form-control" id="resultBday" name="resultBday" readonly>
 	</div>
  </div> <!-- Birthdate and Age group -->
  <div class="form-group">
    <label style="color: black;" class="col-sm-12 control-label" for="email"><span style="color: red;">*</span> Email </label>
   
    <div class="col-sm-12">
    	<input placeholder="Ex. example@gmail.com" type="email" class="form-control" id="email" name="email" autocomplete="off">
    </div>
  </div><!-- Email -->
  <div class="form-group">
   <label style="color: black;" class="col-sm-12 control-label" for="email"><span style="color: red;">*</span> Contact Number </label>
   <div class="col-sm-6">
   		<input  maxlength="11" onkeypress="numbersOnly()" placeholder="Ex. 09123456789"  name="phone" id="phone" class="form-control">
   </div>	
  </div>
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 	 <div class="wow fadeInDown divider-new">
                <h3>Terms of Service</h3>
            </div>

 </div>
 </div>
 <p style="color: black; text-align: justify;">By submitting your registration information, you indicate that you agree to the Terms of use and have read and understood Creative Corner's Privacy Policy. Your submission of this form will constitute your consent to the collection and use of this information by Creative Corner and its affiliates. You also agree to receive required administrative and legal notices such as this electronically.<label><input name="iagree" class="control-label" type="checkbox" /> I Agree</label>
 </p>
 <center>
 <div class="g-recaptcha" data-sitekey="6LfTq0sUAAAAAArbiWJR5u6GnDWnLJfhcUz421f3">
 </div>
 </center>
 <br>
 <div class="form-group">
 	<button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary form-control">Submit </button>
 </div>
</form><!-- REGISTER-FORM -->
</div>
</div> <!--main col-xs-12 col-sm-12 col-md-6 col-lg-6 -->
</div><!-- ROW -->
</div><!-- Main Container -->
<?php
include 'footer.php';

 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="dist/wow.min.js" ></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/node_modules/push.js/bin/push.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
     		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
        <script type="text/javascript">
          jQuery.extend(jQuery.validator.messages, {
            required: "This field is required.",
            remote: "Please fix this field.",
            email: "Please enter a valid email address.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            creditcard: "Please enter a valid credit card number.",
            equalTo: "Password and Confirm password doesnt match.",
            accept: "Please enter a value with a valid extension.",
            maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
            minlength: jQuery.validator.format("Please enter at least {0} characters."),
            rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
            range: jQuery.validator.format("Please enter a value between {0} and {1}."),
            max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
            min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
        });
        </script>
     		<script src="assets/js/forRegisterValidation.js"></script>
        <script type="text/javascript">
          new WOW().init();
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('.loader').fadeOut(1000);
        });
        </script>
 		<script language="javascript">
		function numbersOnly() {
		  if (event.keyCode < 48 || event.keyCode > 58) {
		        event.returnValue = false;
		        return false;
		      }
		}
		</script>
	 	<script>
			  function submitBday() {
			    var Q4A = "";
			    var Bdate = document.getElementById('birthdate').value;
			    var Bday = +new Date(Bdate);
			    Q4A += ~~ ((Date.now() - Bday) / (31557600000));
			    var age = document.getElementById('resultBday').value=Q4A; 
			    if(age <= 17 || age >= 80){
			        document.getElementById('resultBday').value=Q4A;
			        document.getElementById('resultBday').style.color = "Red";
			      }else{
			             document.getElementById('resultBday').style.color = "Black";
			              document.getElementById('resultBday').value=Q4A;
			         }
			    
			}
		</script>
 	    <script type="text/javascript">
            $(document).ready(function () {
            $(window).scroll(function () {
            $(".navbar-default").toggleClass("navbar-shrink", $(this).scrollTop() > 50)
        });
         });
        </script>
        <script type="text/javascript">

			$('#register-form').on('submit', function(e) {
			  if(grecaptcha.getResponse() == "") {
			    e.preventDefault();
			    Push.create("NOTE : ", {
                body: "In able to proceed, Please click the checkbox I'm not a robot.",
                icon: 'Logo.png',
               
                timeout: 3000,
                onClick: function () {
                    window.focus();
                    this.close();
                }
            });
			  }
			});
        </script>
</body>
</html>