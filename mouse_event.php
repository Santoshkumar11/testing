<html>
	<head>
		<title>
			mouse event
		</title>
		<script>
			
			// use to see the effect of mouse over eveny
			function over(x)
			{
				x.style.width = "200px"
				x.style.height = "200px"
			}
			
			// use to see the effect of mouse out event
			function out(x)
			{
				x.style.width = "100px"
				x.style.height = "100px"
			}
			
			// use to see the effect of mouse down event
			function press()
			{
				alert("your mouse is pressed");
			}
			
			// use to see the effect of mouse up event
			function up()
			{
				alert("you just release mouse button");
			}
			
			// use to see the onmousemove event
			function move(d)
			 {
					var x = d.clientX;
					var y = d.clientY;
					var value = x + "," + y;
					document.getElementById("show").innerHTML = "coordinates of your mouse position = " + value;
			}
			
			function div_out()
			{
				document.getElementById("show").innerHTML = " ";
			}
			
			// use to see the mouse double click event
			function double_click()
			{
				alert("You just double click on a text");
			}
		</script>
	</head>
	<body>
			<div align="center" style="width:100%; height:auto">
			<p> move your mouse over the image to see the effect of onmouseover and onmouseout event</p>
			<img src="koala.jpg" width="100" height="100" onMouseOver="over(this)" onMouseOut="out(this)"> 
			<br>
			<br>
			<p>press your mouse on a below text but don't release your mouse and u will see the efect of onmousedown event</p>
			<p onMouseDown="press()">press mouse button here</p>
			<br>
			<br>
			<p> click on the below text to see the effect of onmouseup event</p>
			<p onMouseUp="up()">click your mouse button here</p>
			<br>
			<br>
			<p>move your mouse on a below div to see the effect of onmousemove event</p>
			<div style="height:100px; width:100px; border:1px solid;" onMouseMove="move(event)" onMouseOut="div_out()">
			</div>
			<p id="show"></p>
			<br>
			<br>
			<p>double click on a given text to see the effect of ondblclick event</p>
			<p id="double_click" onDblClick="double_click()"> double click here </p>
			</div>
			
		
	</body>
</html>