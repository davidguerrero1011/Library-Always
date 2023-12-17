<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../vendor/autoload.php";
require_once("../Settings/settings.php");

final class sendEmail
{

    private $host;
    private $username;
    private $password;

    public function __construct()
    {

        $this->host = SMTP_HOST;
        $this->username = SMTP_USERNAME;
        $this->password = SMTP_PASSWORD;
    }

    public function sendEmailsHelper($title, $to, $to2 = '', $reply = '', $subject)
    {

        $email = new PHPMailer(true);

        try {

            // Email send Settings
            $email->SMTPDebug = SMTP::DEBUG_SERVER;
            $email->isSMTP();
            $email->Host       = $this->host;
            $email->SMTPAuth   = true;
            $email->Username   = $this->username;
            $email->Password   = $this->password;
            $email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $email->Port       = 465;

            //Recipients
            $email->setFrom($this->username, $title);
            $email->addAddress($to, 'General User');
            $email->addAddress($to2, 'General User2');
            $email->addReplyTo($reply, 'Copy');
            // $email->addCC('cc@example.com');
            // $email->addBCC('bcc@example.com');

            //Attachments
            // $email->addAttachment('/var/tmp/file.tar.gz');         
            // $email->addAttachment('/tmp/image.jpg', 'new.jpg');    

            //Content
            $email->isHTML(true);
            $email->Subject = $subject;
            $email->Body    = $this->buildBodyEmail();
            $email->AltBody = $this->buildBodyEmail();

            $email->send();
            echo '1';
        } catch (\Throwable $th) {
            echo "Error: $th";
        }
    }

    private function buildBodyEmail()
    {

        $body = "";
        $body = '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="x-apple-disable-message-reformatting">  
<title></title> 
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
<style>
html,body{
margin: 0 auto !important;
padding: 0 !important;
height: 100% !important;
width: 100% !important;
background: #f1f1f1;
}
*{
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}

div[style*="margin: 16px 0"] {
margin: 0 !important;
}
table,
td {
mso-table-lspace: 0pt !important;
mso-table-rspace: 0pt !important;
}
table {
border-spacing: 0 !important;
border-collapse: collapse !important;
table-layout: fixed !important;
margin: 0 auto !important;
}
img {
-ms-interpolation-mode:bicubic;
}
a {
text-decoration: none;
}
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
border-bottom: 0 !important;
cursor: default !important;
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;
font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
.a6S {
display: none !important;
opacity: 0.01 !important;
}
.im {
color: inherit !important;
}
img.g-img + div {
display: none !important;
}
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
u ~ div .email-container {
min-width: 320px !important;
}
}
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
u ~ div .email-container {
min-width: 375px !important;
}
}
@media only screen and (min-device-width: 414px) {
u ~ div .email-container {
min-width: 414px !important;
}
}
</style>
<style>
.primary{
background: #ffc0d0;
}
.bg_white{
background: #ffffff;
}
.bg_light{
background: #fafafa;
}
.bg_black{
background: #000000;
}
.bg_dark{
background: rgba(0,0,0,.8);
}
.email-section{
padding:2.5em;
}
.btn{
padding: 5px 20px;
display: inline-block;
}
.btn.btn-primary{
border-radius: 5px;
background: #ffc0d0;
color: #ffffff;
}
.btn.btn-white{
border-radius: 5px;
background: #ffffff;
color: #000000;
}
.btn.btn-white-outline{
border-radius: 5px;
background: transparent;
border: 1px solid #fff;
color: #fff;
}
.btn.btn-black{
border-radius: 0px;
background: #000;
color: #fff;
}
.btn.btn-black-outline{
border-radius: 0px;
background: transparent;
border: 2px solid #000;
color: #000;
font-weight: 700;
}
h1,h2,h3,h4,h5,h6{
font-family: "Playfair Display", sans-serif;
color: #000000;
margin-top: 0;
font-weight: 400;
}
body{
font-family: "Lato", sans-serif;
font-weight: 400;
font-size: 15px;
line-height: 1.8;
color: rgba(0,0,0,.5);
}
a{
color: #ffc0d0;
}
table{
}
.logo h1{
margin: 0;
}
.logo h1 a{
color: #000000;
font-size: 30px;
font-weight: 700;
/*text-transform: uppercase;*/
font-family: "Playfair Display", sans-serif;
font-style: italic;
}
.navigation{
padding: 0;
padding: 1em 0;
/*background: rgba(0,0,0,1);*/
border-top: 1px solid rgba(0,0,0,.05);
border-bottom: 1px solid rgba(0,0,0,.05);
margin-bottom: 0;
}
.navigation li{
list-style: none;
display: inline-block;;
margin-left: 5px;
margin-right: 5px;
font-size: 13px;
font-weight: 500;
text-transform: uppercase;
letter-spacing: 2px;
}
.navigation li a{
color: rgba(0,0,0,1);
}

.hero{
position: relative;
z-index: 0;
}
.hero .overlay{
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
width: 100%;
background: #000000;
z-index: -1;
opacity: .2;
}
.hero .text{
color: rgba(255,255,255,.9);
max-width: 50%;
margin: 0 auto 0;
}
.hero .text h2{
color: #fff;
font-size: 30px;
margin-bottom: 0;
font-weight: 300;
line-height: 1.4;
}
.hero .text h2 span{
font-weight: 600;
color: #ffc0d0;
}
.intro{
position: relative;
z-index: 0;
}
.intro .text{
color: rgba(0,0,0,.3);
}
.intro .text h2{
color: #000;
font-size: 34px;
margin-bottom: 0;
font-weight: 300;
}
.intro .text h2 span{
font-weight: 600;
color: #ffc0d0;
}
.text-product{
}
.text-product .price{
font-size: 20px;
color: #fff;
display: inline-block;;
margin-bottom: 1em;
border: 2px solid #fff;
padding: 0 10px;
}
.text-product h2{
font-family: sans-serif;
}
.heading-section{
}
.heading-section h2{
color: #000000;
font-size: 28px;
margin-top: 0;
line-height: 1.4;
font-weight: 400;
}
.heading-section .subheading{
margin-bottom: 20px !important;
display: inline-block;
font-size: 13px;
text-transform: uppercase;
letter-spacing: 2px;
color: rgba(0,0,0,.4);
position: relative;
}
.heading-section .subheading::after{
position: absolute;
left: 0;
right: 0;
bottom: -10px;
content: "";
width: 100%;
height: 2px;
background: #ffc0d0;
margin: 0 auto;
}
.heading-section-white{
color: rgba(255,255,255,.8);
}
.heading-section-white h2{
font-family: 
line-height: 1;
padding-bottom: 0;
}
.heading-section-white h2{
color: #ffffff;
}
.heading-section-white .subheading{
margin-bottom: 0;
display: inline-block;
font-size: 13px;
text-transform: uppercase;
letter-spacing: 2px;
color: rgba(255,255,255,.4);
}
ul.social{
padding: 0;
}
ul.social li{
display: inline-block;
margin-right: 10px;
}
.footer{
border-top: 1px solid rgba(0,0,0,.05);
color: rgba(0,0,0,.5);
}
.footer .heading{
color: #000;
font-size: 20px;
}
.footer ul{
margin: 0;
padding: 0;
}
.footer ul li{
list-style: none;
margin-bottom: 10px;
}
.footer ul li a{
color: rgba(0,0,0,1);
}
</style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
<center style="width: 100%; background-color: #f1f1f1;">
<div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
</div>
<div style="max-width: 600px; margin: 0 auto;" class="email-container">
<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
<tr>
<td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td class="logo" style="text-align: center;">
<h1><a href="#">Elise</a></h1>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td valign="top" class="bg_white" style="padding: 0;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="60%" style="text-align: center;">
<ul class="navigation">
<li><a href="#">Home</a></li>
<li><a href="#">New</a></li>
<li><a href="#">Women</a></li>
<li><a href="#">Kids</a></li>
<li><a href="#">Blog</a></li>
</ul>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td valign="middle" class="hero bg_white" style="background-image: url(images/bg_1.jpg); background-size: cover; height: 400px;">
<div class="overlay"></div>
<table>
<tr>
<td>
<div class="text" style="padding: 0 4em; text-align: center;">
<h2>Up to 50% off Selected Womens Items</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-primary">Start Shoping</a></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td valign="middle" class="intro bg_white" style="padding: 2em 0 4em 0;">
<table>
<tr>
<td>
<div class="text" style="padding: 0 2.5em; text-align: center;">
<h2>Fashion your self this season</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<p><a href="#" class="btn btn-black">Browse Shop</a></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="bg_white">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td class="primary email-section" style="padding: 0; width: 100%;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td class="text-product" style="text-align: left; padding: 20px 30px;">
<div class="heading-section">
<span class="price">$100.00</span>
<h2 style="font-size: 20px;">Young Woman Dress</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-black">Shop now</a></p>
</div>
</td>
</tr>
</table>
</td>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td>
<img src="images/product-1.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="primary email-section" style="padding: 0; width: 100%;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td>
<img src="images/product-2.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
</td>
</tr>
</table>
</td>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td class="text-product" style="text-align: left; padding: 20px 30px;">
<div class="heading-section">
<span class="price">$100.00</span>
<h2 style="font-size: 20px;">Young Woman Dress</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-black">Shop now</a></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="primary email-section" style="padding: 0; width: 100%;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td class="text-product" style="text-align: left; padding: 20px 30px;">
<div class="heading-section">
<span class="price">$100.00</span>
<h2 style="font-size: 20px;">Young Woman Dress</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-black">Shop now</a></p>
</div>
</td>
</tr>
</table>
</td>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td>
<img src="images/product-3.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="primary email-section" style="padding: 0; width: 100%;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td>
<img src="images/product-4.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
</td>
</tr>
</table>
</td>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td class="text-product" style="text-align: left; padding: 20px 30px;">
<div class="heading-section">
<span class="price">$100.00</span>
<h2 style="font-size: 20px;">Young Woman Dress</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-black">Shop now</a></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="primary email-section" style="padding: 0; width: 100%;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td class="text-product" style="text-align: left; padding: 20px 30px;">
<div class="heading-section">
<span class="price">$100.00</span>
<h2 style="font-size: 20px;">Young Woman Dress</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-black">Shop now</a></p>
</div>
</td>
</tr>
</table>
</td>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td>
<img src="images/product-5.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="primary email-section" style="padding: 0; width: 100%;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td>
<img src="images/product-6.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
</td>
</tr>
</table>
</td>
<td valign="middle" width="50%">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td class="text-product" style="text-align: left; padding: 20px 30px;">
<div class="heading-section">
<span class="price">$100.00</span>
<h2 style="font-size: 20px;">Young Woman Dress</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-black">Shop now</a></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td valign="middle" class="bg_white" style="padding: 2em 0;">
<table>
<tr>
<td>
<div class="text" style="padding: 0 2.5em; text-align: center;">
<p><a href="#" class="btn btn-black-outline">Start Shopping</a></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
<tr>
<td valign="middle" class="bg_white footer">
<table>
<tr style="text-align: left;">
<td valign="middle" width="60%" style="padding-top: 20px; text-align: left;">
<h3 class="heading">Stay Updated On Our Shopping</h3>
</td>
<td valign="middle" width="40%" style="padding-top: 20px; text-align: right;">
<ul class="social">
<li><img src="images/004-twitter-logo.png" alt="" style="width: 24px; max-width: 600px; height: auto; display: block;"></li>
<li><img src="images/005-facebook.png" alt="" style="width: 24px; max-width: 600px; height: auto; display: block;"></li>
<li><img src="images/006-instagram-logo.png" alt="" style="width: 24px; max-width: 600px; height: auto; display: block;"></li>
</ul>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="bg_light" style="text-align: center;">
<p>No longer want to receive these email? You can <a href="#" style="color: rgba(0,0,0,.8);">Unsubscribe here</a></p>
</td>
</tr>
</table>
</div>
</center>
</body>
</html>';

    return $body;
    }
}
