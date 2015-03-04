<h1>Case 13</h1>
<script src="../global-libs/jquery-2.1.3.js"></script>
<script>
	function loadAnotherLang()
	{
		var lang = document.getElementById("LANG").value;
		window.location.replace("?LANG=" + lang);
	}
</script>


<select id="LANG" onchange="loadAnotherLang()">
  <option value="en">English</option>
  <option value="fr">French</option>
  <option value="jp">Japanese</option>
  <option value="cn">Chinese</option>
</select>


<?php
	if(isset($_GET['LANG']))
	{
		$lang = $_GET['LANG'];
	}
	else
	{
		$lang = 'en';
	}
	include($lang. '.php' );
?>

<div id="demo"></div>