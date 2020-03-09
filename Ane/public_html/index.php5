<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Optima Hosting - Website under construction</title>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	background-color: white;
}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	padding: 5px;
}
h1 {
	float: left;
	font-size: 30px;
	margin: 0;
}
.text1 a {
	color: #2462B9;
	text-decoration: none;
}
.text1 a:hover {
	color: #E80000;
}
.logo {
	float: right;
	text-align: right;
	width: 380px;
}
@media only screen and (max-width: 890px) {
img[id=logo] {
	width: 300px;
	height: auto;
}
.logo {
	width: 300px;
}
}
@media only screen and (max-width: 790px) {
img[id=logo] {
	width: 200px;
	height: auto;
}
.logo {
	width: 200px;
}
}
@media only screen and (max-width: 690px) {
div[class=logo] {
	display: none;
}
.text1 {
	padding-top: 30px;
}
}
</style>
</head>

<body>
<table width="95%" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td align="center" style="padding-top:0;"><a href="https://www.optimahosting.hr/" title="OptimaHosting.hr"> <img alt="OptimaHosting.hr" src="https://www.optimahosting.hr/test-page/under.jpg" border="0"></a></td>
  </tr>
  <tr>
    <td align="left" style="border-bottom: 1px solid black;"><h1>Website under construction</h1>
      <div class="logo" style="padding-right:5px; padding-top:15px;">hosted by</div></td>
  </tr>
  <tr>
    <td valign="top" align="left">This website is under construction. Please come back later.
      <div class="logo"><a href="https://www.optimahosting.hr/" title="OptimaHosting.hr"> <img id="logo" alt="OptimaHosting.hr" src="https://www.optimahosting.hr/test-page/logo.jpg" border="0"></a></div></td>
  </tr>
    <?php 
	function getter($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
	}
	echo getter('https://www.optimahosting.hr/test-page/marketing.php');?>
</table>
</body>
</html>
