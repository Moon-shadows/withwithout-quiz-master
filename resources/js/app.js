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





const startPage = document.getElementsByClassName("startPage");
const questionPage = document.getElementsByClassName("questionPage");
const answerPage = document.getElementsByClassName("answerPage");
const resultPage = document.getElementsByClassName("answerPage");




const element = document.getElementById("start-btn");
element.addEventListener("click", changeText);

function myFunction() {
  document.getElementsByClassName("popper").style.backgroundColor ="red";
}


function changeText(){
startPage[0].style.display = "none";
}






 /**
  * 
  * 
  document.getElementById('start-btn').onclick = function() {
  startPage.style.display = "none";
  questionPage.style.display = "block";
 };

  * 
  * html:
<button id="myBtn">Try it</button>
<p id="demo">
js:
const element = document.getElementById("myBtn");
element.addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
  * 
  *  questionNumber.innerHTML = "Fråga" + count.length + "av" + numberOfQuestions;
  * 
  * 
let questionCounter = document.getElementById("questionCounter");

 let count =[1];
 let correctMovie =[];
 let correctGeografi =[];
 let correctHistory =[];
 let correctMusic =[];
 let correctOther =[];
 let correctSciense =[];
 let correctSport =[];
 

 
 


document.getElementById("questionButton").onclick = function() {
  questionPage.style.display = "none";
  answerPage.style.display = "none";
}

document.getElementById("answerButtonYes").onclick = function() {
  count.push(1);


}
 element.addEventListener("click", myFunction);
 
 function myFunction() {
   document.getElementById("demo").innerHTML = "Hello World";
 }
 _________________________________________________________


 

 
html: 
<button>Hello World</button>
js:
const button = document.querySelector("button");
button.setAttribute("name", "helloButton"); change the name attibutes value to "helloButton"

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
