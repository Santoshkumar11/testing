<html>
	<head>
		<title>
			Test Tabs
		</title>
		<script>
			function tab(e) 
			{
				if (e.keyCode == 9 )
					 {
					document.getElementById('inp1').focus();
					e.returnValue = false; // for IE
					if (e.preventDefault) e.preventDefault(); // for Mozilla
					}
			}
		</script>
	</head>
		<body>
		<center>
			<p>press tab button in the textboxes to see the effect of tab order event</p>
			<table>
			<tr>
			<dr>
				<td>first</td><td><input type="text" id="inp1"/></td>
			
			</tr>
			<tr>
				<td>second</td><td><input type="text" id="inp2" onKeyDown="tab(event)"/></td>
			</tr>
			</table>
		</center>
		</body>
</html>