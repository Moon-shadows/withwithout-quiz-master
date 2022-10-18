// Our main CSS
import '../css/app.css'

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
import { countBy } from 'lodash';
 window.axios = axios;

 window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


const questionpage = document.getElementById("question-page")
const startPage = document.getElementsByClassName("startPage");
const questionPage = document.getElementsByClassName("questionPage");
const answerPage = document.getElementsByClassName("answerPage");
const resultPage = document.getElementsByClassName("resultPage");
const body = document.getElementsByTagName("body");


let progressButton = document.getElementById("progressButton");
let progressButtonWhite = document.getElementById("progressButtonWhite");
let questionCounter = document.getElementById("questionCounter");

const maxQuestions = 5;
questionCounter = 0;
let correctAnswer = 0;


/***StartPage***/
const startButton = document.getElementById("start-btn");
startButton.addEventListener("click", changeStartPage);

function changeStartPage(){
startPage[0].style.display = "none";
questionpage.style.visibility = "visibility";
body.style.backgroundColor = "#7678ED";
questionCounter.innerHTML = `Fråga + ${questionCounter} av ${maxQuestions}`;
questionCounter++;
questionCounter.innerHTML = `Fråga + ${questionCounter} av ${maxQuestions}`;
progressButton.style.width = (questionCounter/maxQuestions) * 100 + "%";
progressButtonWhite.style.width = (questionCounter/maxQuestions) * 100 + "%";
}


/***QuestionPage***/


/***AnswerPage***/
document.getElementById("answerButtonYes").onclick = function() {
  count.push(1);
}

/***ResultPage***/
 

/**
 questionNumber.innerHTML = "Fråga" + count.length + "av" + numberOfQuestions;
  * 
 let count =[1];
 let correctMovie =[];
 let correctGeografi =[];
 let correctHistory =[];
 let correctMusic =[];
 let correctOther =[];
 let correctSciense =[];
 let correctSport =[];
 

 
 






 

 

_________________________________________________________

_______________________________________________________
***Examples****
Execute a function when a user clicks on a button

html:
<button id="myBtn">Try it</button>
<p id="demo">
js:
const element = document.getElementById("myBtn");
element.addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}*/
_________________________________________________________
