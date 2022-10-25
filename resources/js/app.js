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
import { spline } from '@georgedoescode/spline';
import {createNoise2D} from 'simplex-noise';

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

let filmChildren = Object.values(document.getElementById("film").children);
let geografiChildren = Object.values(document.getElementById("geografi").children);
let historiaChildren = Object.values(document.getElementById("historia").children);
let musikChildren = Object.values(document.getElementById("musik").children);
let övrigtChildren = Object.values(document.getElementById("övrigt").children);
let vetenskapChildren = Object.values(document.getElementById("vetenskap").children);
let sportChildren = Object.values(document.getElementById("sport").children);
let blobs = filmChildren.concat(geografiChildren, historiaChildren, musikChildren, övrigtChildren, vetenskapChildren, sportChildren)
console.log(blobs)

let correctCategory = []

// (our <path> element)
const blobleft = document.getElementById("blobleft");
const blobright = document.getElementById("blobright");
 const path = document.querySelector('path');
 // (used to set our custom property values)
 const root = document.documentElement;
 function createPoints() {
     const points = [];
     // how many points do we need
     const numPoints = 6;
     // used to equally space each point around the circle
     const angleStep = (Math.PI * 2) / numPoints;
     // the radius of the circle
     const rad = 75;
     for (let i = 1; i <= numPoints; i++) {
       // x & y coordinates of the current point
       const theta = i * angleStep;
       const x = 100 + Math.cos(theta) * rad;
       const y = 100 + Math.sin(theta) * rad;
       // store the point's position
       points.push({
         x: x,
         y: y,
         /* we need to keep a reference to the point's original {x, y} coordinates
         for when we modulate the values later */
         originX: x,
         originY: y,
         // more on this in a moment!
         noiseOffsetX: Math.random() * 1000,
         noiseOffsetY: Math.random() * 1000,
       });
     }
     return points;
   }
  // We can then initialise our blob points like so:
   const points = createPoints();
    function map(n, start1, end1, start2, end2) {
     return ((n - start1) / (end1 - start1)) * (end2 - start2) + start2;
   }
    const simplex = new createNoise2D();
    // how fast we progress through "time"
    let noiseStep = 0.005;
    function noise(x, y) {
    // return a value at {x point in time} {y point in time}
    return simplex(x, y);
    }
    (function animate() {
      blobleft.setAttribute('d', spline(points, 1, true));
      blobright.setAttribute('d', spline(points, 1, true));
      
      requestAnimationFrame(animate);
      for (let i = 0; i < points.length; i++) {
          const point = points[i]
          const nX= noise(point.noiseOffsetX, point.noiseOffsetX)
          const nY= noise(point.noiseOffsetY, point.noiseOffsetY)
          const x = map(nX, -1, 1, point.originX - 5, point.originX + 5)
          const y = map(nY, -1, 1, point.originY - 10, point.originY + 10)
          point.x = x
          point.y = y
          point.noiseOffsetX += noiseStep
          point.noiseOffsetY += noiseStep
      }
    })();



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
    blobleft.classList.remove("text-ljusblå")
    blobleft.classList.add("text-white")
    blobright.classList.remove("text-ljusblå")
    blobright.classList.add("text-white")
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
    blobleft.classList.remove("text-white")
    blobleft.classList.add("text-ljusblå")
    blobright.classList.remove("text-white")
    blobright.classList.add("text-ljusblå")
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
      blobleft.classList.remove("text-white")
      blobleft.classList.add("text-ljusblå")
      blobright.classList.remove("text-white")
      blobright.classList.add("text-ljusblå")

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
    blobleft.classList.remove("text-white")
    blobleft.classList.add("text-ljusblå")
    blobright.classList.remove("text-white")
    blobright.classList.add("text-ljusblå") 
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
      blobleft.classList.remove("text-white")
      blobleft.classList.add("text-ljusblå")
      blobright.classList.remove("text-white")
      blobright.classList.add("text-ljusblå") 
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
    for (let i = 0; i < blobs.length; i++) {
      blobs[i].classList.remove("bg-green") //Återställer färgade knappar
      blobs[i].classList.add("bg-gray")
    }
    
}



 



 
 






 

 



