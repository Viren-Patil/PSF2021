<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/punese3g/PHPMailerTest/PHPMailer/src/Exception.php';
require '/home/punese3g/PHPMailerTest/PHPMailer/src/PHPMailer.php';
require '/home/punese3g/PHPMailerTest/PHPMailer/src/SMTP.php';


if (isset($_POST['sendMailBtn'])) {
    
    // Instantiation and passing [ICODE]true[/ICODE] enables exceptions
    $mail = new PHPMailer(true);
    
    $fromEmail = 'querysender.psf@punestartupfest.in';
    $toEmail = 'queries.psf@gmail.com';
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];

    try {
     //Server settings
    //  $mail->SMTPDebug = 2; // Enable verbose debug output
     $mail->isSMTP(); // Set mailer to use SMTP
     $mail->Host = 'punestartupfest.in'; // Specify main and backup SMTP servers
     $mail->SMTPAuth = true; // Enable SMTP authentication
     $mail->Username = 'querysender@punestartupfest.in'; // SMTP username
     $mail->Password = 'queryme@2k21'; // SMTP password
     $mail->SMTPSecure = 'ssl';
     $mail->Port = 465; // TCP port to connect to
    
    //Recipients
     $mail->setFrom($fromEmail, 'Query Sender');
     $mail->addAddress($toEmail); // Add a recipient
    //  $mail->addAddress('recipient2@example.com'); // Name is optional
     $mail->addReplyTo($visitor_email, $name);
    
    // Content
     $mail->isHTML(true); // Set email format to HTML
     $mail->Subject = $subjectName;
     $mail->Body = '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Query</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
				    <h3 style="font-weight: bold;">Name: '.$name.'</h3>
				    <h3 style="font-weight; bold;">Email: '.$visitor_email.'</h3>
				    <p style="color: #0a2642; font-size: 20px;">'.$message.'</p>
				</div>
			</body>
			</html>';
     $mail->AltBody = $message;
    
    $mail->send();
    $output = '<div class="alert alert-success">
                  <p style="font-weight: bold;">Thank You '.$name.' for contacting us!<br/>We\'ll get back to you soon!</p>
               </div>';
    
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pune Startup Fest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="plugins/googlefonts/icon.css" rel="stylesheet">
    <style type="text/css">
    #btnScrollToTop {
        z-index: 99;
        position: fixed;
        right: 10px;
        bottom: 10px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #337ab7;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
        color: #ffffff;
        border: none;
        outline: none;
    }
    </style>

    <link rel="shortcut icon" href="images\logos\psf_21.png">
    <link rel="stylesheet" href="styles/Footer-with-map.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <!--<link rel="stylesheet" href="plugins/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
        <!-- Arrow Up -->
        <button id="btnScrollToTop">
            <i class="fas fa-chevron-up"></i>
        </button>

        <div style="background-color:#0a2642;">	
            <div class="logo">
                <a href="index.html">
                    <img src="images\logos\psf_21.png" width="95px" height="80px">
                </a>

                <div class="cnt__nav">
                    <nav>
                        <ul>
                            <li><a style="text-decoration:none;" href="index.html">HOME</a></li>
                            <li><a style="text-decoration:none;" href="http://portal-and-resume-ld-998776614.ap-south-1.elb.amazonaws.com/">INTERNSHIP PORTAL</a></li>
                            <li><a style="text-decoration:none;" href="about.html">ABOUT US</a></li>
                            <li><a style="text-decoration:none;" href="partners.html">PREVIOUS PARTNERS</a></li>
                            <li><a style="text-decoration:none;" href="partners2.html">PRESENT PARTNERS</a></li>    
                            <li><a style="text-decoration:none;" href="expo.html">STARTUP EXPO</a></li>
                            <li><a style="text-decoration:none;" href="alumni.html">ALUMNI</a></li>
                            <li><a style="text-decoration:none;" href="events.html">EVENTS</a></li>
                            <li><a style="text-decoration:none;" href="team.html">TEAM</a></li> 
                            <li><a style="text-decoration:none;" href="contact.php">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- NAV TRIGGER -->

                <div id="cnt__nav-trigger">
                <div class="nav-trigger">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                </div>
                
                <script src='plugins/js/jquery-2.2.4.min.js'></script>
                <script  src="js/script.js"></script>

            </div>	
        </div>

        <main role="main" class="container">
            <div class="content-section col-md-5 mx-auto" style="border: 2px solid #0a2642; border-radius: 15px; margin-top: 50px; margin-bottom: 50px;">
                <h5 class="text-center" style="font-size: 30px; margin-top: 20px;">Contact <i class="fas fa-paper-plane"></i></h5>
                <h3 class="text-center text-success"><?= $output?></h3>
                <form action="" method="post" class="form-signin">
                    <div class="form-label-group">
                        <label for="inputEmail"><i class="fas fa-signature"></i> Name</label>
                        <input type="text" name="name" id="name" class="form-control"  placeholder="Your name" required autofocus>
                    </div> <br/>
                    <div class="form-label-group">
                        <label for="inputEmail"><i class="fas fa-envelope"></i> Email-ID</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Your email address" required autofocus>
                    </div> <br/>
                    <label for="inputPassword"><i class="fas fa-clipboard"></i> Subject</label>
                    <div class="form-label-group">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                    </div><br/>
                    <label for="inputPassword"><i class="fas fa-comments"></i> Query</label>
                    <div class="form-label-group">
                        <textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>
                    </div> <br/>
                    <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block col-md-4 mx-auto" style="margin-bottom: 10px; background-color: #0a2642;">Submit</button>
                </form>
                    </div>
        </main>

        <footer id="myFooter">
  <!-- Here we use the Google Embed API to show Google Maps. -->
  <!-- In order for this to work in your project you will need to generate a unique API key.  -->   
  <iframe id="map-container" frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.955745660585!2d73.85451101358116!3d18.530901873697637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c089cc962235%3A0x40aefe804ecad857!2sBHAU%20Institute!5e0!3m2!1sen!2sin!4v1576995111438!5m2!1sen!2sin" >
  </iframe>
  
    <div class="container" style="max-width: 1500px; text-align:center; color: #0a2642;">
        <div class="row">
            <div class="mobilmt" style="width: 37.49999%;">
                <div class="person" style="background-color: #fff; border-radius: 20px;">
               </div>
            </div>
            <div class="col-12 col-md-3 mobilmt">
                <div class="person" style="background-color: #fff; border-radius: 20px;">
                <h5 style="color: #0a2642; padding-top: 15px;">Krushna Wath</h5>
                <ul style="padding-bottom: 15px;">
                    <li>Secretary, BHAU's E-cell</li>
                    <!--<li>+91 77760 43286</li>-->
                    <li>secretary.psf@coep.ac.in</li>
               </ul>
               </div>
            </div>
            <div class="mobilmt" style="width: 37.49999%;">
                <div class="person" style="background-color: #fff; border-radius: 20px;">
               </div>
            </div>
        </div>
    </div>
    
  <div class="container" style="max-width: 1500px; text-align:center; color: #0a2642;">
    <div class="row">
        <div class="col-12 col-md-3 mobilmt">
            <div class="person" style="background-color: #fff; border-radius: 20px;">
                <h5 style="color: #0a2642; padding-top: 15px;">Kartikeya Dubey</h5>
                <ul style="padding-bottom: 15px;">
                    <li>Finance & Sponsorship Executive</li>
                    <!--<li>+91 93597 11665</li>-->
                    <li>finance.psf@coep.ac.in</li>
               </ul>
            </div>
        </div>
        <div class="col-12 col-md-3 mobilmt">
            <div class="person" style="background-color: #fff; border-radius: 20px;">
                <h5 style="color: #0a2642; padding-top: 15px;">Bhagyesh Sakhala</h5>
                <ul style="padding-bottom: 15px;">
                    <li>Finance & Sponsorship Executive</li>
                    <!--<li>+91 93267 32005</li>-->
                    <li>finance.psf@coep.ac.in</li>
               </ul>
            </div>
        </div>
        <div class="col-12 col-md-3 mobilmt">
            <div class="person" style="background-color: #fff; border-radius: 20px;">
                <h5 style="color: #0a2642; padding-top: 15px;">Radhika Kandoi</h5>
                <ul style="padding-bottom: 15px;">
                    <li>Corporate Outreach Group Executive</li>
                    <!--<li>+91 88052 74477</li>-->
                    <li>cog.psf@coep.ac.in</li>
               </ul>
            </div>
        </div>
        <div class="col-12 col-md-3 mobilmt">
            <div class="person" style="background-color: #fff; border-radius: 20px;">
                <h5 style="color: #0a2642; padding-top: 15px;">Kushal Lahoti</h5>
                <ul style="padding-bottom: 15px;">
                    <li>Corporate Outreach Group Executive</li>
                    <!--<li>+91 97675 57456</li>-->
                    <li>cog.psf@coep.ac.in</li>
               </ul>
            </div>
        </div>
      </div>
    </div>
  
    <div class="social-networks">
        <a href="index.html">
    		<img src="images\logos\psf_21.png" width="150px" height="126px">
        </a>
    </div>
    <center style="font-size: 17px;">
      <a href="index.html" style="margin-right: 10px;">Home </a>|
      <a href="about.html" style="margin-right: 10px; margin-left:10px">About </a>|
      <a href="contact.php" style="margin-left: 10px;">Contact</a>
    </center>
  <div class="social-networks">
      <a href="https://twitter.com/BEC_COEP" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="https://www.facebook.com/bec.coep/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/bec_coep/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href="https://www.linkedin.com/company/pune-startup-fest-19/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
  </div>
  <center>
      <p style="color:#fff;font-size:15px;padding-bottom:20px;">
            Designed by Viren Patil and the Web Team of E-Cell
        </p>
  </center>
</footer>
    
    <script type="text/javascript">
        const btnScrollToTop = document.querySelector("#btnScrollToTop");
        btnScrollToTop.addEventListener("click", function() {
            //window.scrollTo(0,0);
            window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
            });
        });  
    </script>
    <script src="https://kit.fontawesome.com/b08dd984f6.js" crossorigin="anonymous"></script>
</body>
</html>