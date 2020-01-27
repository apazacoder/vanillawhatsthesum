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
<div id="game-wrapper">
    <div id="ok-message" class="message is-hidden">
        <p>Great, you did it!</p>
        <p>Press the button below to play again</p>
    </div>
    <div id="error-message" class="message is-hidden">
        <p>Sorry, try again!</p>
        <p>Press the button below to play again</p>
    </div>
    <div class="flex-row" id="game-title">
        What is the sum of&nbsp;
        <span id="first-number">00</span>&nbsp;
        and&nbsp;
        <span id="second-number">00</span>?
    </div>
    <div class="flex-row" id="game-numbers">
        <div class="flex-col-3 number" id="number-1">12</div>
        <div class="flex-col-3 number" id="number-2">12</div>
        <div class="flex-col-3 number" id="number-3">12</div>
        <div class="flex-col-3 number" id="number-4">12</div>
    </div>
    <div class="flex-row" id="game-continue">
        <button type="button" id="btn-play-again">Play again</button>
    </div>
    <div id="score">
        <p>Respuestas correctas: <span id="right-answers">0</span></p>
        <p>Respuestas incorrectas: <span id="wrong-answers">0</span></p>
    </div>
    <script src="js/script.js"></script>
</div>
</body>
</html>
