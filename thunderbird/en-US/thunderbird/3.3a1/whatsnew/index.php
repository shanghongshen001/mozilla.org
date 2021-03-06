<?php
require_once '../../../../includes/config.inc.php';
require_once '../../../../includes/functions.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>What’s New in Miramar</title>
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
    background: #fff url(<?php echo data_url('../../../../img/template/header/tile-small.jpg','image/jpeg'); ?>) repeat-x;
    color: #3C475B;
    font-family: "segoe ui", tahoma, sans-serif;
    font-size: small;
    line-height: 1.5;
    min-width: 500px;
  }
  
  @font-face {
	font-family: 'MetaWebPro-Bold';
	src: local('☺'), url('../../../../img/fonts/metawebpro.woff') format('woff');
	font-style: normal;
  }
  
  a:link    { color: #0a4e96; }
  a:visited { color: #0a4e96; }
  a:hover   { color: #333; }
  a:active  { color: #000; }

  #contents {
    margin: 0;
    padding: 1em 250px 1em 2em;
    background: url(<?php echo data_url('../../../../img/template/header/tile-small.jpg','image/jpeg'); ?>) top repeat-x;
  }

  #header h1 {
    font-family: MetaWebPro-Bold;
    font-size: 27px;
    color: #0A4E96;
    margin: 0;
    padding: 20px 0 0 0;
  }

  #header p {
    font-weight: bold;
    margin: 0;
    padding: 0 0 40px 0;
    max-width: 500px;
  }

  #footer {
    font-size: x-small;
    color: #999;
  }
  </style>
</head>
<body>
  <div id="contents">
  <div class="container">
  <div id="header">
  <h1>What's New in Miramar!</h1>
<p>Thanks for testing Miramar Alpha 1</p>
</div>
<p><strong>What's New in Miramar Alpha 1</strong></p>
<p>This release is a developer preview of Mozilla Messaging’s next
generation Email client and is being made available for <span
 style="font-weight: bold;">testing purposes only</span>. </p>
<p>Miramar Alpha 1 is built on top of the Gecko 2.0 platform. The main goals of this release is to find out about possible problems
    caused by the changes in the underlying platform.  Notable changes include:</p>
<ul class="spaced">
  <li>New Addons Manager and extension management API (user interface will be changed before final release).</li>
  <li>Attachment sizes now displayed along with attachments.</li>
  <li>Several user interface fixes for Windows Vista/Windows 7.</li>
  <li>New support for Mac 32/64 bit Universal builds.</li>
  <li>Over 190 platform fixes to improve performance and stability.</li>
</ul>
<p>For a more detailed list of bug fixes, see the <a href="https://bugzilla.mozilla.org/buglist.cgi?quicksearch=ALL%20+milestone:%22Thunderbird%203.3a1%22%20+resolution:FIXED%20-status-thunderbird3.1:fixed%20-status-thunderbird3.0:fixed">the full bug list</a>.</p>
<p>We appreciate your support in helping us test and evaluate
  Miramar Alpha 1.&nbsp; Please read the <a
 href="/thunderbird/3.3a1/releasenotes/">release
    notes</a> before using this preview release.&nbsp; Please leave feedback specific to Miramar Alpha 1 on <a href="http://getsatisfaction.com/mozilla_messaging/topics/miramar_alpha_1_feedback_topic">this thread on our getsatisfaction site</a>. or by filing a bug in bugzilla using these <a
 href="http://developer.mozilla.org/en/Bug_writing_guidelines">instructions</a>.&nbsp; </p>
<p>For additional product information, visit the <a
 href="/thunderbird/">Thunderbird
Home Page</a>.</p>
<p id="footer">© 2010 Mozilla</p>
</div>
</div>
</body>
</html>
