<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FreeTube</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
	<script src="script.js"></script>
	<style type="text/css">
		*{
			font-family: 'Open Sans', sans-serif;
		}
	</style>
</head>
<body>
	<div class="w3-container w3-dark-gray w3-topbar w3-border-red">
		<p class="w3-xlarge w3-left">Free</p><p class="w3-xlarge w3-left w3-red w3-round-large w3-text-white">&nbsp;Tube&nbsp;</p>		
	</div>	
	<br><br>		
	<form  class="w3-container w3-center w3-padding w3-margin w3-border w3-round" id="url_form">
		<br><br>
		<p class="w3-xlarge w3-text-grey w3-hide-small">Download YouTube Videos</p>
		<p class="w3-large w3-text-grey w3-hide-large w3-hide-medium">Download YouTube Videos</p>	
	
		<div class="w3-row w3-border w3-round w3-hover-border-blue">
		    <input class="w3-col w3-border-0 w3-input w3-white w3-padding" style="width: 86%" type="text" name="url" placeholder="Paste link here">
			<button class="w3-col w3-text-grey w3-button w3-padding w3-hover-text-blue w3-hover-none" onclick="ajax();" style="width: 14%"><i class="fa fa-download"></i></button>
		</div>
		<br>
		<div class="w3-small">
		<p>or browse<a href="https://www.youtube.com" target="_blank" style="text-decoration: none;" class="w3-hover-text-pink w3-text-blue"> YouTube </a>to get something</p>
		</div>
		<br>
	</form>
	<br>
	<div id='response' class="w3-container w3-center w3-margin"></div>
	<br>
	<div class="w3-center w3-dark-gray w3-display-bottom">
		<br>
		<p class="w3-small">Made by Sachin &copy; 2019</p>
		<p class="w3-small w3-text-red">Powered by w3.css</p>
		<br>
	</div>
</body>
</html>