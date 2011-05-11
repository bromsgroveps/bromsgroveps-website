<?php
$domain = preg_replace("/^www\./", "", $_SERVER['HTTP_HOST']);

//$domain = 'abcdefghijklmnopqrstuvwxyz.com';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $domain; ?> : provided by Just Host</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/screen.css" type="text/css"/>
	<link rel="stylesheet" href="sIFR-screen.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="sIFR-print.css" type="text/css" media="print" />
	<!--[if lt IE 7.]>
	<link rel="stylesheet" href="css/ie6.css" type="text/css"/>
	<![endif]-->
</head>
<body><div id="wrapper-bg"><div id="wrapper">



<h1><?php echo strlen($domain) > 17 ? substr($domain,0,17) . '...' : $domain; ?>
<a href="http://www.justhost.com"><img class="registered-by" src="img/registered-by.png" alt="Web Hosting from Just Host" width="340" height="33" /></a></h1>

<div style="height:30px;" class="clear">&nbsp;</div>

<div class="contain">
	<h3 id="domaincheck"><span>Domain Check</span></h3>
	<div class="grey-container">
		<h4>Get your domain name now!</h4>
		<form id="registration" action="http://www.justhost.com/register" method="post">
			<p>
			<input type="text" name="domain" value=""/>
			<select name="ext">
				<option value="com">.com</option>
				<option value="net">.net</option>
				<option value="org">.org</option>
				<option value="co.uk">.co.uk</option>
			</select>
			<a href="#" onclick="document.getElementById('registration').submit();return false;" class="checkdomain">&nbsp;<span>Check Domain Name</span></a>
			</p>
		</form>
		<div class="grey-tl"></div>
		<div class="grey-bl"></div>
		<div class="grey-tr"></div>
		<div class="grey-br"></div>
	</div>
</div>

<div class="contain">
	<h3 id="offer"><span>Exclusive Offer</span></h3>
	<a href="http://www.justhost.com/signup"><img src="img/exclusive.png" alt="Professional Web Hosting"/></a>
</div>

<div class="contain" style="margin-right:0;">
	<h3 id="logins"><span>cPanel Login</span></h3>
	<div class="yellow-container">
		<p>Is this your domain?<br />
		Login now and upload your website.</p>
		<form id="cpanel" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>:2082/login/" method="post">
			<p><label>Username</label>
			<label>Password</label>
			<input type="text" name="user" value=""/>
			<input type="password" name="pass" value=""/>
			<a href="#" onclick="document.getElementById('cpanel').submit();return false;" class="login">&nbsp;<span>Login</span></a></p>
		</form>
		<div class="yellow-tl"></div>
		<div class="yellow-bl"></div>
		<div class="yellow-tr"></div>
		<div class="yellow-br"></div>
	</div>
</div>



<div style="height:30px;" class="clear">&nbsp;</div>

<iframe src="http://searchportal.information.com/?o_id=116648&domainname=referer_detect" frameborder="0" height="510" width="790" style="margin-left:-14px;overflow:auto;"></iframe>

<div class="clear">&nbsp;</div>

<div class="push">&nbsp;</div>
</div></div>
<div id="footer">
	<h5 id="partner-logos"><span>PHP, Linux, MySQL, cPanel, ModernBill</span></h5>
	<p>&copy; JustHost Ltd 2008 - 2009, All Rights Reserved</p>
</div>
<script type="text/javascript">
//<![CDATA[
if(typeof sIFR == "function"){
	sIFR.replaceElement(named({sSelector:"body h1", sFlashSrc:"justhost.swf", sColor:"#FFFFFF", sLinkColor:"#FFFFFF", sHoverColor:"#FFFFFF", nPaddingTop:20, nPaddingBottom:20, sFlashVars:"textalign=center&offsetTop=0", sWmode:"transparent"}));

};

//]]>
</script>
</body>
</html>