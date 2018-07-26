	<?php
	 //echo 'Email send';
	date_default_timezone_set('Asia/Kolkata');
	$currentDateTime=date('d-m-Y H:i:s');
	$timestamp = date('d-m-Y h:i A', strtotime($currentDateTime));
	 
	//date_default_timezone_set('Asia/Kolkata');
	
	//$timestamp = date("d-m-Y H:i:s A");
	require("class.phpmailer.php");
	
	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	$mail->Host = "shubhlabhinfra.com";
	
	$mail->SMTPAuth = true;
	//$mail->SMTPSecure = "ssl";
	$mail->Port = 587;
	$mail->Username = "info@shubhlabhinfra.com";
	$mail->Password = "admin@123";
	
	$mail->From = "info@shubhlabhinfra.com";
	$mail->FromName ="Enquiry For Contact Us mail.";
	$mail->AddAddress("info@shubhlabhinfra.com");
	$mail->addReplyTo('shubhlabh.infra@gmail.com');
	$mail->addBCC('enquiry@flawlessindia.in');
	$mail->addBCC('vivek.lawrence@flawlessindia.in');
	//$mail->addBCC('ajay@flawlessindia.in');
	
	$fname =$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['Subject'];
	$message=$_POST['message'];
	
	$validateVal = "false";
	$emailval = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
	$mob="/^[1-9][0-9]*$/"; 
	if($name=="" && $email=="" && $phone=="") {
	    $msg="Please fill all mandatory fields";
	    $validateVal = "true";
	}elseif(!preg_match($emailval, $email)) {
	    $msg="Please enter a valid email";
	    $validateVal = "true";
	}elseif(!preg_match($mob, $phone)) {
	    $msg="Please enter a valid number";
	    $validateVal = "true";
	}
	
	$mail->IsHTML(true);
	
	
	 $mail->Subject = "Flawless India Infotech Enquiry ". $timestamp;
	
	       
	
	$mail->Body = "First Name : <b>".$fname."</b><br/><br/>Phone : <b>".$phone."</b><br/><br/>Email : <b>".$email."</b><br/><br/>Subject : <b>".$subject."</b><br/><br/>Message : <b>".$message;
	//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
	if($validateVal=="false"){
	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
	?> 
	<html>
	<head>
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <style>
	        img{background-size: 100% ;
	        background-attachment: fixed;
	        }
	    </style>
	    
	<meta http-equiv=REFRESH CONTENT=5;url="http://www.shubhlabhinfra.com/">
	    </head>
	    <body style="background-color:#e6e6e6">
	    <section>
	        <div class="container">
	        <div class="row">
	            <div class="col-md-12 ">
	            <figure>
	            <center><img src="co.png" alt=".." class="img-responsive" style="max-width:50%;"></center>
	            </figure>
	                </div>
	            </div>
	        </div>
	        </section>
	<!-- Google Code for Shubh Labh Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 815349196;
	var google_conversion_label = "w4NDCPDQx34QzPvkhAM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/815349196/?label=w4NDCPDQx34QzPvkhAM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	    </body>
	</html>
	    
	
	<?
	}
	}
	else{
		echo "Error In Mail : " , $msg;
	}
	
	?>