<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Java Script Alert Test</title>
</head>

<body>
<br />
<p>Click the button to display an alert box.</p>

<p><button onclick="alertFunction()">bookmyinterview</button></p><br />
<p>Click the button to display an confirm event.</p>

<p><button onclick="confirmFunction()">Join bookmyinterview</button></p><br />
<p>Click tge button to display an prompt box</p>
<p><button onclick="promptFunction()">Your Name</button></p><br />

<script type="text/javascript">
function promptFunction()
{
	var y=window.prompt("please enter your name")
	window.alert(y)
}
function confirmFunction()
{
var x=window.confirm("Are you sure you join bookmyinterview.in?")
if (x)
window.alert("Good!")
else
window.alert("Too bad")
}
function alertFunction() {
    alert("Hi! welcome to bookmyinterview");
}
</script>
</body>
</html>
