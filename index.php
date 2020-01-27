<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vanilla: What's the sum?</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="flex-wrapper" id="game-wrapper">
	<div class="flex-row" id="game-title">
		What is the sum of
		<span id="first-number"></span>
		and
		<span id="second-number"></span>
		?
	</div>
	<div class="flex-row" id="game-numbers">
		<div class="flex-col-3 number"></div>
		<div class="flex-col-3 number"></div>
		<div class="flex-col-3 number"></div>
		<div class="flex-col-3 number"></div>
	</div>
	<div class="flex-row" id="game-continue">
		<button type="button">Play again</button>
	</div>
	<script src="js/script.js"></script>
</div>
</body>
</html>
