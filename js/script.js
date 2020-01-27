let c = window.console.log;

let firstNumber = document.getElementById("first-number");
let secondNumber = document.getElementById("second-number");
let answerIndex;
window.addEventListener("load", () => {
    generateNumbers();
});


function generateNumbers() {
    // the first two are random between 10 and 49
    firstNumber.textContent = generateRandomBetween(10, 49);
    secondNumber.textContent = generateRandomBetween(10, 49);
    let answer = parseInt(firstNumber.textContent) + parseInt(secondNumber.textContent);

    // we must pick one between the four guesses to be the answer
    answerIndex = generateRandomBetween(1, 4);

    // the others are random with a difference of 5 to 25 from the real answer
    for (let i = 1; i <= 4; i++) {
        if (i !== answerIndex) {
            document.getElementById("number-" + i).textContent =
                (i % 2 === 0) ? answer + generateRandomBetween(5, 25) :
                    answer - generateRandomBetween(5, 25);
        } else {
            document.getElementById("number-" + i).textContent = answer;
        }
    }
}

// generates a random number bewteen the two
function generateRandomBetween(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

let numbers = document.getElementsByClassName("number");
for (let index in numbers) {
    if (typeof numbers[index] === "object") {
        numbers[index].addEventListener("click", function (e) {
            checkAnswer(e.target.attributes["id"].value.split('-')[1], answerIndex);
        });
    }
}

let okMessage = document.getElementById("ok-message");
let errorMessage = document.getElementById("error-message");

let rightAnswers = document.getElementById("right-answers");
let wrongAnswers = document.getElementById("wrong-answers");

function checkAnswer(chosenIndex, answerIndex) {
    if (parseInt(chosenIndex) === answerIndex) {
        okMessage.classList.remove("is-hidden");
        rightAnswers.textContent = parseInt(rightAnswers.textContent) + 1;
    } else {
        errorMessage.classList.remove("is-hidden");
        wrongAnswers.textContent = parseInt(wrongAnswers.textContent) + 1;
    }
}

let btnPlayAgain = document.getElementById("btn-play-again");
btnPlayAgain.addEventListener("click", createNewGame);
okMessage.addEventListener("click", createNewGame);
errorMessage.addEventListener("click", createNewGame);

function createNewGame() {
    // hide messages
    okMessage.classList.add("is-hidden");
    errorMessage.classList.add("is-hidden");

    // create a new game
    generateNumbers();
}
