<!doctype html>
<?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
<?php
$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <title>WorldShaker Interactive - UI/UX Design &amp; Engineering</title>
    <meta name="description" content="">
  <meta name="author" content="RobertHarris">

<body>
	<nav id="menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button><a class="navbar-brand page-scroll" href="index.html">WorldShaker Interactive</a> </div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class=""><a href="about.html" class="page-scroll">About</a></li>
					<li><a href="casestudy.html">Case Study</a>
				</li>
        <li class=""><a href="toolsandtech.html" class="page-scroll">Tools & Technologies</a>
        <!--<li class=""><a href="services.html" class="page-scroll">Services</a></li>-->
				<li class=""><a href="work.html" class="page-scroll">Work</a>
			</li><li class=""><a href="contact.html" class="page-scroll">Contact</a></li></ul></div></div>
	</nav>

<div id="contact">
            <div class="container">
                <div class="row">
					
            <div class="col-md-8"><div class="row"><div class="section-title"><h2>Get In Touch</h2><p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p></div><form name="sentMessage" id="contactForm" novalidate=""><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" id="name" class="form-control" placeholder="Name" required=""><p class="help-block text-danger"></p></div></div><div class="col-md-6"><div class="form-group"><input type="email" id="email" class="form-control" placeholder="Email" required=""><p class="help-block text-danger"></p></div></div></div><div class="form-group"><textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required=""></textarea><p class="help-block text-danger"></p></div><div id="success"></div><button type="submit" class="btn btn-custom btn-lg">Send Message</button></form></div></div><div class="col-md-3 col-md-offset-1 contact-info"><div class="contact-item"><h3>Contact Info</h3><p><span><i class="fa fa-map-marker" aria-hidden="true"></i> Address</span>183 Sterling Street, Brooklyn, New York, 11225 </p></div><div class="contact-item"><p><span><i class="fa fa-phone" aria-hidden="true"></i> Phone</span> +1 646 620 4438</p></div><div class="contact-item"><p><span><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</span> rharris@worldshaker.com</p></div><div class="contact-item"></div></div><div class="col-md-12"><div class="row"><div class="social"><ul><li><a href="http://linkedin.com/in/robertsharris"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li></ul></div></div>

</div>
</div>
</div>
</div>
<div id="footer"><div class="container text-center"><p>© 2021 WorldShaker Interactive, Inc. <a href="http://www.worldshaker.com" rel="nofollow">WorldShaker Interactive, Inc.</a></p></div></div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/7ea9973e6b.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
</body>
</html>

";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
