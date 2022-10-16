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

 let count =[1];
 let correctMovie =[];
 let correctGeografi =[];
 let correctHistory =[];
 let correctMusic =[];
 let correctOther =[];
 let correctSciense =[];
 let correctSport =[];
 

 const startPage = document.getElementById("startPage");
 const questionPage = document.getElementById("questionPage");
 const answerPage = document.getElementById("answerPage");
 const resultPage = document.getElementById("resultPage");

 document.getElementById("startButton").onclick = function() {
  startPage.style.display = "none";
  questionPage.style.display = "block";
  questionNumber.innerHTML = "Fråga" + count.length + "av" + numberOfQuestions;
}
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


 

 /*  **Testing JAVASCRIPT**
  Ex. code  setAttribute() is used to set attributes on a an element.
  Syntax: setAttribute(name, value) (name of the attribute and its value) 
  (same syntax for getAtribute() and RenoveAttribute().
html: 
<button>Hello World</button>

javascript:
const button = document.querySelector("button");
button.setAttribute("name", "helloButton"); change the name attibutes value to "helloButton"
button.setAttribute("disabled", "");
_________________________________________________________

Lägg in id-attribute före tailwind class
<p id="hello" class="text-48"> Fråga 2 av 35</p>*/
/*
_________________________________________________________

html:
<p>Execute a function when a user clicks on a button:</p>
<button id="myBtn">Try it</button>
html:
<p id="demo">
const element = document.getElementById("btn-page-two");
element.addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}*/
_________________________________________________________