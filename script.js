/*const startBtn = document.querySelector('.start-btn');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit-btn');
const main = document.querySelector('.main');
const continueBtn = document.querySelector('.continue-btn');
const quizSection = document.querySelector('.quiz-section');
const quizBox = document.querySelector('.quiz-box');

startBtn.onclick = () => {
    popupInfo.classList.add('active');
    main.classList.add('active');
}

exitBtn.onclick = () => {
    popupInfo.classList.remove('active');
    main.classList.remove('active');
}

continueBtn.onclick = () => {
    quizSection.classList.add('active');
    popupInfo.classList.remove('active');
    main.classList.remove('active');
    quizBox.classList.add('active');

    showQuestions(0);
}

let questionCount = 0;

const nextBtn = document.querySelector('.next-btn');

nextBtn.onclick = () => {
    questionCount++;
    showQuestions(questionCount);
}

const optionList = document.querySelector('.option-list');

function showQuestions(index) {
    const questionText = document.querySelector('.question-text');
    questionText.textContent = '${questions[index].numb}. ${questions{index}.question}';
}

let optionTag = '<div class="option"><span>${questions[index].options[0]}</span></div>
<div class="option"><span>${questions[index].options[1]}</span></div>
<div class="option"><span>${questions[index].options[2]}</span></div>
<div class="option"><span>${questions[index].options[3]}</span></div>';*/
let quizz = 0;
let attempt = 0;
let score = 0;
let wrong = 0;
let questions = quizz;


$(function (){
    //timer
    let totaTime = 200; //200 secondes
    let min = 0;
    let sec = 0;
    let counter = 0;


    let timer = setInterval(function(){
        counter++;
        min = Math.floor((totaTime - counter)/60);
        sec = totaTime - (min * 60) - counter;

        $(".timerBox span").text(min + ":" + sec);

        if(counter == totaTime){
            clearInterval(timer);
        }
    }, 1000);

    printQuestion(index);
});

function printQuestion(i) {
    $(".questionBox").text(questions[i].question);
    $(".optionBox span").eq(0).text(questions[i].option[0]);
    $(".optionBox span").eq(1).text(questions[i].option[1]);
    $(".optionBox span").eq(2).text(questions[i].option[2]);
    $(".optionBox span").eq(3).text(questions[i].option[3]);
}

function checkAnswer(option) {
    attemps++;

    let optionClicked = $(option).data("opt");

    //console.log(questions[quizz]);

    if(optionClicked== questions[quizz].answer){
        $(option).addClass("right");
        score++;
    }
    else{
        $(option).addClass("wrong");
        wrong++;
    }

    $(".scoreBox span").text(score);

    $(".optionBox span").attr("onclick", "");
}