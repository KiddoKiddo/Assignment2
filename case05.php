
<html>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<h1>Case 05</h1> 
<font color="red">If this page seems to go haywire, press the stop button. Then slowly observe this page. </font>
<body>
	<?php 
			$cookie_name = 'Flag';
			$cookie_value = 'cnBar34s59N8h8z';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
	?>
	
<script>
	document.location = "<?php echo $_GET["location"]?>";
</script>
</body>
</html>