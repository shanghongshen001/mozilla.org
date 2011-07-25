<?php
require_once '../../../../includes/config.inc.php';
require_once '../../../../includes/functions.inc.php';
require_once '../../../../includes/lightning.inc.php';

$release_version = '3.1.11';

// release_build_no only needs setting on a second or later beta candidate.
// Set it to something like ' (Build 2)'.
$release_build_no = '';
$release_date = 'June 14th, 2011';

// tb_fixed_version is '.n-fixed' where 'n' is the minor number of the
// release
$tb_fixed_version = '.11-fixed';

// gecko_fixed_version is '.n-fixed' where 'n' is the minor number of the
// release
$gecko_fixed_version = '.18-fixed';
// NOTE: in-line query has extra gecko versions.

$release_fullname = 'Thunderbird&nbsp;'.$release_version;

//set up lightning promo variables
$supportedPlatform = lightningPlatform($osmap);
$lightningUrl = lightningURL($supportedPlatform);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>What’s New in Thunderbird</title>
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
    background: #fff url(<?php echo data_url('../../../../img/thunderbird/start/bg-header-small.jpg','image/jpeg'); ?>) repeat-x;
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
    background: url(<?php echo data_url('../../../../img/thunderbird/start/main-feature.jpg','image/jpeg'); ?>) top right no-repeat;
  }

  #header h1 {
    font-family: MetaWebPro-Bold;
    color: #09429E;
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
  
  #header span {
    font-size: 110%; 
    position: relative; top: 3px
  }
  </style>
</head>
<body>
  <div id="contents">
  <div class="container">
  <div id="header">
  <h1>Thanks for beta testing Thunderbird 3.1</h1>
  <p>If you notice any problems while you use this update, please let us
  know by either using
  <a href="http://getsatisfaction.com/mozilla_messaging/">this feedback form</a>
  or by <a href="https://bugzilla.mozilla.org/">filing a bug in Bugzilla</a>.</p
  ></div>
  <p><?=$release_fullname?> Beta<?=$release_build_no?> was released on <?=$release_date?>.</p>
<p><strong>What's New in this Beta version of Thunderbird 3.1</strong></p>
<p>There were several fixes to improve stability and security of Thunderbird 3.1. Please see the <a href="https://bugzilla.mozilla.org/buglist.cgi?field0-0-0=cf_status_thunderbird31;type0-0-1=equals;field0-0-1=cf_status_192;query_format=advanced;value0-0-1=<?=$gecko_fixed_version?>;type0-0-0=equals;value0-0-0=<?=$tb_fixed_version?>;value0-0-2=.16-fixed;field0-0-2=cf_status_192;type0-0-2=equals">complete list of changes</a> in this version or view the <a href="../releasenotes">release notes</a> for more information.</p></p>
<p><strong>What's New in Thunderbird 3.1</strong></p>
<p>We hope you enjoy the new features in Thunderbird. We have new search tools, tabbed email, message archiving, and hundreds of add-ons to make Thunderbird 3.1 all yours. </p>
<p><strong>Easier to Upgrade with New Migration Assistant</strong></p>
<p>Under the Help Menu, select the Migration Assistant to help you change your Toolbar layout and add features like Compact Header and Advanced Folder Columns. </p>
<p><strong>Better Search with New Search Tools</strong></p>
<p>The new Quick Filter Toolbar lets you filter your email faster. Filter your email by New Messages, Tags, people in your Address Book, or using search terms. You can also &quot;Pin&quot; or save a Filter and use it across multiple folders. </p>
<p>Type in your search term in the Global Search Bar and we will open your search results in a new tab. You can pinpoint what you're looking for with Thunderbird's filtering and timeline tools. </p>
<p><strong>Tabbed Email</strong></p>
<p>If you like Firefox’s tabbed browsing, you’re going to love tabbed email. Double-click or hit enter on a mail message to open messages in a new tab window. You can right-click on messages or folders to open them in a tab background.</p>
<p><strong>Message Archiving</strong></p>
<p>Clicking the Archive button or  the ‘A’ key will archive your email. Archiving mail moves email from your inbox into the new archive folder system.</p>
<p><strong>Personal Calendar</strong></p>
<table>
  <tr>
    <td style="padding-right: 20px" rowspan="2">
      <img src="https://addons.mozilla.org/img/uploads/previews/thumbs/18/18246.png?modified=1222201093"/>
    </td>
    <td valign="top">
      With help of the Lightning Add-on, you can now organize your appointments and
      tasks from within Thunderbird. Aside from storing your calendar on this
      computer, you can also subscribe to network calendars so you don't miss a
      minute, even on the go.
    </td>
  </tr>
  <tr>
    <td valign="top">
    <?if ($supportedPlatform) {?>
      <button class="install-button" onclick="InstallTrigger.install({ 'Lightning': { URL: '<?=$lightningUrl?>' }}); return false;">Install Now</button>
    <?} else {?>
      A supported version of Lightning is currently not available for your platform,
      but there may be a <a href="<?=$lightningUrl?>">contributed version</a>.
    <?}?>
    </td>
  </tr>
</table>
<p><strong>More New Features to Explore</strong>:</p>
<ul>
  <li>Unified Folders</li>
  <li>Activity Manager</li>
  <li>One-click Address Book</li>
  <li>Attachment Reminder</li>
  <li>Hundreds of new Add-ons to try</li>
</ul>
<p>For additional product information, visit the <a
 href="/thunderbird/">Thunderbird
Home Page</a>.</p>
<p id="footer">© 2011 Mozilla</p>
</div>
</div>
</body>
</html>

