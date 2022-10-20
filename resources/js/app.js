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


const p1= document.getElementById("p1");
const p2= document.getElementById("p2");
const p3= document.getElementById("p3");
const p4= document.getElementById("p4");
const category = document.getElementById("category");
const question = document.getElementById("question");
const answer = document.getElementById("answer");

let progressButton = document.getElementById("progressButton");
let progressButtonWhite = document.getElementById("progressButtonWhite");
let questionCounter = document.getElementById("questionCounter");
let questionCounter2 = document.getElementById("questionCounter2");
let questions = [];

const maxQuestions = 35;
let count = 0;
let correct = 0;


/***StartPage***/
const startButton = document.getElementById("start-btn");
startButton.onclick = function(){
  axios.get("/questions").then(response=> {
questions=response.data

 
    p1.classList.add("hidden")
    p1.classList.remove("grid-container")
    p2.classList.add("grid-container")
    p2.classList.remove("hidden")
    
    count++

    category.innerHTML=questions[count-1]["category"]
    question.innerHTML=questions[count-1]["question"]
    answer.innerHTML=questions[count-1]["answer"]
    
    

    questionCounter.innerHTML = `Fråga ${count} av ${maxQuestions}`;
    
    progressButton.style.width = (count/maxQuestions) * 100 + "%";
    progressButtonWhite.style.width = (count/maxQuestions) * 100 + "%"; 
  })
}

/***QuestionPage***/
const questionButton = document.getElementById("questionButton");
questionButton.onclick= function(){
    p2.classList.add("hidden") 
    p2.classList.remove("grid-container")  
    p3.classList.add("grid-container")  //blir samma som display: block eftersom grid-containern, tar över och häver upp hidden
    p3.classList.remove("hidden")
    questionCounter2.innerHTML = `Fråga ${count} av ${maxQuestions}`;  
}
/***AnswerButtonYes***/
const answerButtonYes = document.getElementById("answerButtonYes");
answerButtonYes.onclick= function(){
  count++     
  correct++
  questionCounter.innerHTML = `Fråga ${count} av ${maxQuestions}`;  
  if(count<maxQuestions){
    p3.classList.add("hidden") 
    p3.classList.remove("grid-container")  
    p2.classList.add("grid-container")  
    p2.classList.remove("hidden")
    progressButton.style.width = (count/maxQuestions) * 100 + "%";
    progressButtonWhite.style.width = (count/maxQuestions) * 100 + "%"; 

    category.innerHTML=questions[count-1]["category"] // Inuti diven i html med id=category skriver jag in: questions[count-1]["category"] dvs. category (i arrayen för frågorna) minskar count med 1 (-1) eftersom jag ökade count med 1, 
    question.innerHTML=questions[count-1]["question"]
    answer.innerHTML=questions[count-1]["answer"]
 

  }else if(count===maxQuestions){
      p3.classList.add("hidden") 
      p3.classList.remove("grid-container")  
      p4.classList.add("grid-container")  
      p4.classList.remove("hidden")    
  }
}

/***AnswerButtonNo***/
const answerButtonNo = document.getElementById("answerButtonNo");
answerButtonNo.onclick= function(){
  count++
  questionCounter.innerHTML = `Fråga ${count} av ${maxQuestions}`;  
  if(count<maxQuestions){
    p3.classList.add("hidden") 
    p3.classList.remove("grid-container")  
    p2.classList.add("grid-container")  
    p2.classList.remove("hidden") 
    progressButton.style.width = (count/maxQuestions) * 100 + "%";
    progressButtonWhite.style.width = (count/maxQuestions) * 100 + "%"; 

    category.innerHTML=questions[count-1]["category"]
    question.innerHTML=questions[count-1]["question"]
    answer.innerHTML=questions[count-1]["answer"]

  }else if(count===maxQuestions){
      p3.classList.add("hidden") 
      p3.classList.remove("grid-container")  
      p4.classList.add("grid-container")  
      p4.classList.remove("hidden")    
}
}

/***PlayAgainButton***/
const playAgainButton = document.getElementById("playAgainButton");
playAgainButton.onclick= function(){
    p4.classList.add("hidden")
    p4.classList.remove("grid-container")
    p1.classList.add("grid-container")
    p1.classList.remove("hidden")
    count = 0;
    correct =0;
}



/***QuestionPage***/


/***AnswerPage***/

 


/***ResultPage***/
 



 
 






 

 

_________________________________________________________

_______________________________________________________
