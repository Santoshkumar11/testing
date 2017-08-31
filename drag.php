<html>
	<head>
		<title>
			drag event
		</title>
		<script>
			function dragEnter(ev) {
            event.preventDefault();
            return true;
         }
         
         function dragOver(ev) {
            return false;
         }
         
         function dragDrop(ev) {
            var src = ev.dataTransfer.getData("Text");
            ev.target.appendChild(document.getElementById(src));
            ev.stopPropagation();
            return false;
         }
		 
		 function dragStart(ev) {
            ev.dataTransfer.effectAllowed='move';
            ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
            ev.dataTransfer.setDragImage(ev.target,0,0);
            
            return true;
         }
		</script>
	</head>
	<body>
	<center>
		<p align="center">This example shows the drop and drag evrnt</p>
		
				<img id="img1" src="koala.jpg" width="100" height="100" draggable="true"
            ondragstart="return dragStart(event)">
			<br>
			<br>
				<div id="tar" style="width:150px; height:150px; border:1px solid" ondragenter="return dragEnter(event)" 
            ondrop="return dragDrop(event)" 
            ondragover="return dragOver(event)">
				</div>
	</center>			
				
			
		
	</body>
</html>