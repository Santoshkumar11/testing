<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/style.css">
<title>Context Menu</title>
<menu type="context" id="menu">
	<menuitem label="Refresh" onClick="window.location.reload();"></menuitem>
	<menuitem label="Social Networks"></menuitem>
</menu>
<menu type="context" id="Nmenu">
	<menuitem label="Refresh" onClick="window.location.reload();"></menuitem>
	<menu label="Social Networks">
		<menuitem label="Facebook"></menuitem>
		<menuitem label="Google+"></menuitem>
		<menuitem label="Linkdin"></menuitem>
	</menu>
</menu>
</head>

<body><p>Test for different type of Context Text</p>
<br />
<p>Note: This test only working in the Mozilla Firefox<p><br />
<h1>Simple Context Menu</h1>
<section class="sec" contextmenu="menu">
Right click here to show context menu
</section>
<br />
Nested Context Menu
<br />
<section class="sec" contextmenu="Nmenu">
Right click here to show nested context menu
</section>
</body>
</html>
