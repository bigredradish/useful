<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#clickForward').click(function(){
			var a = new XMLHttpRequest();
			a.open("GET","ajax_forward.php");
			a.onreadystatechange = function() {
				if( a.readyState == 4) {
				if( a.status == 200) {
				}
				else alert("HTTP error "+a.status+" "+a.statusText);
				}
			}
			a.send();
		});

		$('#clickStop').click(function(){
			var a = new XMLHttpRequest();
			a.open("GET","ajax_stop.php");
			a.onreadystatechange = function() {
				if( a.readyState == 4) {
				if( a.status == 200) {
				}
				else alert("HTTP error "+a.status+" "+a.statusText);
				}
			}
			a.send();
		});

		$('#clickBack').click(function(){
			var a = new XMLHttpRequest();
			a.open("GET","ajax_backward.php");
			a.onreadystatechange = function() {
				if( a.readyState == 4) {
				if( a.status == 200) {
				}
				else alert("HTTP error "+a.status+" "+a.statusText);
				}
			}
			a.send();
		});

		$('#clickLeft').click(function(){
			var a = new XMLHttpRequest();
			a.open("GET","ajax_left.php");
			a.onreadystatechange = function() {
				if( a.readyState == 4) {
				if( a.status == 200) {
				}
				else alert("HTTP error "+a.status+" "+a.statusText);
				}
			}
			a.send();
		});

		$('#clickRight').click(function(){
			var a = new XMLHttpRequest();
			a.open("GET","ajax_right.php");
			a.onreadystatechange = function() {
				if( a.readyState == 4) {
				if( a.status == 200) {
				}
				else alert("HTTP error "+a.status+" "+a.statusText);
				}
			}
			a.send();
		});

	});

</script>
<title>PiCam Controller</title>
</head>
<body>
<center><h1>SPi Cam Console</h1>

<table>
  <tr>
    <th rowspan="3"><img src="http://192.168.1.31:9000/?action=stream" width=“320”><</th>
    <th></th>
    <th><button type="button" id="clickForward">FORWARD</button><br></th>
    <th></th>
  </tr>
  <tr>
    <td><button type="button" id="clickLeft">LEFT</button><br></td>
    <td><button type="button" id="clickStop">STOP</button><br></td>
    <td><button type="button" id="clickRight">RIGHT</button><br></td>
  </tr>
  <tr>
    <td></td>
    <td><button type="button" id="clickBack">BACKWARD</button><br></td>
    <td></td>
  </tr>
</table>
  </center>
</body>
</html>
