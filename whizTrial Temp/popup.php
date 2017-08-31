<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pop up window</title>

</head>

<body>
<br />
<p>Click the button to open a new browser window.</p>

<p><button onclick="myFunction()" id="Nw" name="Newwin">open new tap</button></p>
<br />

<p>click below link to open a popup window</p>
<p><a href="JavaScript:newPopup('http://www.whiztrain.com');" id="Pw" name="Popwin">Open a popup window</a></p><br />
<p>Opens the linked document in the same window as it was clicked </p>
<p><a href="http://www.whiztrain.com" target="_self" id="self" name="selfpage">Open in a self page</a></p><br />
<p>click on the link you find a image, when you click this image window is closed </p>
<a href="closepg.php" target="_blank" id="cpage" name="closepage">open it and check close window</a>

<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>

<script>
function myFunction() {
    window.open("http://www.bookmyinterview.in");
}
</script>
</body>
</html>
