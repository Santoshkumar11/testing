<html>
	<head>
		<title>
			enter key event
		</title>
		<script>
			
			function myFunction(event)
			{
				var x = event.keyCode;
				if(x == 13)
				{
					alert("you press enter key");
				}
				
			//	console.log(key);
			}
		</script>
	</head>
	<body>
		<center>
			<p>press enter inside the textbox to see the event of enter key</p>
			<br>
			<br>
			<input type="text"onkeypress="myFunction(event)">
		</center>
	</body>
</html>