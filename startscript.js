const startBtn = document.querySelector('button.start-btn');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit-btn');
const main = document.querySelector('.main');
const continueBtn = document.querySelector('.continue-btn');
const quizSection = document.querySelector('.quiz-section');
const quizBox = document.querySelector('.quiz-box');
const resultBox = document.querySelector('.result-box');
const tryAgainBtn = document.querySelector('.tryAgain-btn');
const goHomeBtn = document.querySelector('.goHome-btn');

startBtn.onclick = () => {
    popupInfo.classList.add('active');
    main.classList.add('active');
}

exitBtn.onclick = () => {
    popupInfo.classList.remove('active');
    main.classList.remove('active');
}

continueBtn.onclick = () => {    
    popupInfo.classList.remove('active');
    main.classList.remove('active');

    quizSection.classList.add('active');
    quizBox.classList.add('active');

    showQuestions(0);
    questionCounter(1);
    headerScore();
}

tryAgainBtn.onclick = () => {
    quizBox.classList.add('active');
    resultBox.classList.remove('active');
    nextBtn.classList.remove('active');

    questionCount = 0;
    questionNumb = 1;
    userScore =0;

    showQuestions(questionCount);
    questionCounter(questionNumb);

    headerScore();
}

goHomeBtn.onclick = () => {
    quizSection.classList.remove('active');
    resultBox.classList.remove('active');
    nextBtn.classList.remove('active');

    questionCount = 0;
    questionNumb = 1;
    userScore =0;

    showQuestions(questionCount);
    questionCounter(questionNumb);
}

let questionCount = 0;
let questionNumb = 1;
let userScore =0;

const nextBtn = document.querySelector('.next-btn');

nextBtn.onclick = () => {   
    nextBtn.classList.remove('active');
    if (questionCount < questions.length - 1) {
        questionCount++;
        showQuestions(questionCount);

        questionNumb++;
        questionCounter(questionNumb);
    } 
    else {
        showResultBox();
    }
}

const optionList = document.querySelector('.option-list');

//getting questions and options from array
function showQuestions(index) {
    const questionText = document.querySelector('.question-text');
    questionText.textContent = questions[index].numb+'. '+questions[index].question;

    let optionTag = '<div class="option"><span>'+ questions[index].options[0] + '</span></div>' + '<div class="option"><span>'+questions[index].options[1]+'</span></div>' + '<div class="option"><span>'+questions[index].options[2]+'</span></div>' + '<div class="option"><span>'+questions[index].options[3]+'</span></div>';

    optionList.innerHTML = optionTag;

    const option = document.querySelectorAll('.option');
    for ( let i=0; i<option.length; i++) {
        option[i].setAttribute('onclick','optionSelected(this)');
    }
}

function optionSelected(answer) {
    let userAnswer = answer.textContent;
    let correctAnswer = questions[questionCount].answer;
    let allOptions = optionList.children.length;
    nextBtn.classList.add('active');

    if (userAnswer == correctAnswer) {
        answer.classList.add('correct');
        userScore += 1;
        headerScore();
        // Play correct audio
        let correctAudio = new Audio('correctanswer.mp3');
        correctAudio.play();
    }
    else {
        answer.classList.add('incorrect');
        // Play incorrect audio
        let incorrectAudio = new Audio('wronganswer.mp3');
        incorrectAudio.play();
    }

    //if user has selected, disable all other options
    for (let i=0; 1< allOptions; i++) {
        optionList.children[i].classList.add('disabled');
    }

    
}

function questionCounter(index) {
    const questionTotal = document.querySelector('.question-total');
    questionTotal.textContent = index +' of '+questions.length +' Questions';
}

function headerScore() {
    const headerScoreText = document.querySelector('.header-score');
    headerScoreText.textContent = 'Score: '+userScore+' / '+questions.length;
} 

function showResultBox() {
    quizBox.classList.remove('active');
    resultBox.classList.add('active');

    const scoreText = document.querySelector('.score-text');
    scoreText.textContent = 'You Scored '+userScore+' out of '+questions.length;

    const circularProgress = document.querySelector('.circular-progress');
    const ProgressValue = document.querySelector('.progress-value');
    let progressStartValue = -1;
    let progressEndValue = (userScore/questions.length) * 100;
    let speed = 20;

    let progress = setInterval(() => {
        progressStartValue++;
        circularProgress.style.background = "conic-gradient(#c40094 " + (progressStartValue * 3.6) + "deg, rgba(255, 255, 255, .1) 0deg)";

        ProgressValue.textContent = progressStartValue+'%';
        if (progressStartValue == progressEndValue) {
            clearInterval(progress);
        }

    }, speed);
}