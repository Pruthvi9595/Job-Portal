<?php
require_once("maillib/swift_required.php");


function sendMail($subject,$body,$toaddress)
{
	$msg=Swift_Message::newInstance();
	$msg->setSubject($subject);
	$msg->setBody($body,"text/html");
	$msg->setFrom(array("cloudkarad@gmail.com" => "cloudkarad@gmail.com"));
	$msg->setTo(array($toaddress => $toaddress));
	
	$transport=Swift_SmtpTransport::newInstance("smtp.gmail.com",465,"ssl");//secure socket layer
	$transport->setUsername("cloudkarad@gmail.com");
	$transport->setPassword("cloud123#$");
	
	$mailer=Swift_Mailer::newInstance($transport);
	
	$result=$mailer->send($msg);
	return $result;
	
}
function sendMail2($subject,$body,$toaddress,$path)
{
	$msg=Swift_Message::newInstance();
	$msg->setSubject($subject);
	$msg->setBody($body,"text/html");
	$msg->setFrom(array("cloudkarad@gmail.com" => "cloudkarad@gmail.com"));
	$msg->setTo(array($toaddress => $toaddress));
	
	$attachment = Swift_Attachment::fromPath($path);
	$msg->attach($attachment);
	
	$transport=Swift_SmtpTransport::newInstance("smtp.gmail.com",465,"ssl");
	$transport->setUsername("cloudkarad@gmail.com");
	$transport->setPassword("cloud123$");
	
	
	
	$mailer=Swift_Mailer::newInstance($transport);
	
	$result=$mailer->send($msg);
	return $result;
	
}

?>