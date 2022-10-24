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
let correctQuestionCounter = document.getElementById("correctQuestionCounter");

let questions = [];
const maxQuestions = 3;
let count = 0;
let correct = 0;

let filmChildren = document.getElementById("film").children;
let geografiChildren = document.getElementById("geografi").children;
let historiaChildren = document.getElementById("historia").children;
let musikChildren = document.getElementById("musik").children;
let övrigtChildren = document.getElementById("övrigt").children;
let vetenskapChildren = document.getElementById("vetenskap").children;
let sportChildren = document.getElementById("sport").children;

let correctCategory = []




/***StartPage***/
const startButton = document.getElementById("start-btn");
startButton.onclick = function(){
  axios.get("/questions").then(response=> {   //Inhämtar frågorna genom api:t i routen (med sökväg /question). Frågorna finns under storage {}questions.json
questions=response.data

    p1.classList.add("hidden")
    p1.classList.remove("grid-container")
    p2.classList.add("grid-container")
    p2.classList.remove("hidden")
    
    count++

    category.innerHTML = questions[count-1]["category"]  //Hämtar en kategori ur questions arrayen
    question.innerHTML = questions[count-1]["question"]  //Hämtar en fråga ur questions array
    answer.innerHTML = questions[count-1]["answer"]  //Hämtar ett svar ur questions array
    
    questionCounter.innerHTML = `Fråga ${count} av ${maxQuestions}`;
    
    progressButton.style.width = (count/maxQuestions) * 100 + "%";
    progressButtonWhite.style.width = (count/maxQuestions) * 100 + "%";
    
    correctCategory['Film & TV'] = []  //Har döpt den nästlade arrayen till samma kategori som i den storas question arrayens kategorier för att hamna på rätt plats.
    correctCategory['Geografi'] = []
    correctCategory['Historia'] = []
    correctCategory['Musik'] = []
    correctCategory['Övrigt'] = []
    correctCategory['Vetenskap'] = []
    correctCategory['Sport'] = []
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
    correctCategory[category.textContent].push(1)
   
    questionCounter.innerHTML = `Fråga ${count} av ${maxQuestions}`;  
  if(count<maxQuestions){
    p3.classList.add("hidden") 
    p3.classList.remove("grid-container")  
    p2.classList.add("grid-container")  
    p2.classList.remove("hidden")
    progressButton.style.width = (count/maxQuestions) * 100 + "%";
    progressButtonWhite.style.width = (count/maxQuestions) * 100 + "%"; 

    category.innerHTML = questions[count-1]["category"] // Inuti diven i html med id=category skriver jag in: questions[count-1]["category"] dvs. category (i arrayen för frågorna) minskar count med 1 (-1) eftersom jag ökade count med 1, 
    question.innerHTML = questions[count-1]["question"]
    answer.innerHTML = questions[count-1]["answer"]

  }else if(count===maxQuestions){
      p3.classList.add("hidden") 
      p3.classList.remove("grid-container")  
      p4.classList.add("grid-container2")  
      p4.classList.remove("hidden")

      correctQuestionCounter.innerHTML = `${correct} av ${maxQuestions} rätt`;

      for(let i = 0; i < correctCategory["Film & TV"].length; i++){
        filmChildren[i].classList.remove("bg-gray")
        filmChildren[i].classList.add("bg-green")
      }
      for(let i = 0; i < correctCategory["Geografi"].length; i++){
        geografiChildren[i].classList.remove("bg-gray")
        geografiChildren[i].classList.add("bg-green")
      }
      for(let i = 0; i < correctCategory["Historia"].length; i++){
        historiaChildren[i].classList.remove("bg-gray")
        historiaChildren[i].classList.add("bg-green")
      }
      for(let i = 0; i < correctCategory["Musik"].length; i++){
       musikChildren[i].classList.remove("bg-gray")
       musikChildren[i].classList.add("bg-green")
      }
      for(let i = 0; i < correctCategory["Övrigt"].length; i++){
       övrigtChildren[i].classList.remove("bg-gray")
       övrigtChildren[i].classList.add("bg-green")
      }
      for(let i = 0; i < correctCategory["Vetenskap"].length; i++){
        vetenskapChildren[i].classList.remove("bg-gray")
        vetenskapChildren[i].classList.add("bg-green")
      }
      for(let i = 0; i < correctCategory["Sport"].length; i++){
        sportChildren[i].classList.remove("bg-gray")
        sportChildren[i].classList.add("bg-green")
      }
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
      p4.classList.add("grid-container2")  
      p4.classList.remove("hidden") 
      correctQuestionCounter.innerHTML = `${correct} av ${maxQuestions} rätt`;   
  }
}

/***PlayAgainButton***/
const playAgainButton = document.getElementById("playAgainButton");
playAgainButton.onclick= function(){
    p4.classList.add("hidden")
    p4.classList.remove("grid-container2")
    p1.classList.add("grid-container")
    p1.classList.remove("hidden")
    count = 0;
    correct = 0; //Återställer räkneverket 
    filmChildren[i].classList.remove("bg-green") //Återställer färgade knappar
    filmChildren[i].classList.add("bg-gray")
    geografiChildren[i].classList.remove("bg-green")
    geografiChildren[i].classList.add("bg-gray")
    historiaChildren[i].classList.remove("bg-green")
    historiaChildren[i].classList.add("bg-gray")
    musikChildren[i].classList.remove("bg-green")
    musikChildren[i].classList.add("bg-gray")
    övrigtChildren[i].classList.remove("bg-green")
    övrigtChildren[i].classList.add("bg-gray")
    vetenskapChildren[i].classList.remove("bg-green")
    vetenskapChildren[i].classList.add("bg-gray")
    sportChildren[i].classList.remove("bg-green")
    sportChildren[i].classList.add("bg-gray")
}



 



 
 






 

 



