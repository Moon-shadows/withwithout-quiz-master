<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donkeyquiz - boilerplate</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> 
    </head>
    <body >

<!-- Start-page -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page1/Column 1 Start -->
      <div class="grid-container">
          <div class="column-1"> 
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        class="class= startPage h-[150px] mt-[30px] mb-[228px] ml-14">  
                </div>
                <div>
                    <img 
                        src="/Image/blob-left.svg"
                        class=" startPage h-[415px] mb-[77px]">  
                </div>
          </div>
<!-- Page1/Column 1 End --> 
     

<!-- Page1/Column 2 Start -->          
          <div id="startpage" class=" startPage column-2 mt-[337px] mb-[327] w-full"> 
                <h1 class=" text-mörkblå font-poppins text-32  lg:text-48  font-semibold lg:font-semibold text-center mb-8"> 
                    Svensk mästare i TP?
                </h1>
                <p class="text-20 text-center mb-10"> Utmana vänner, kollegor och familj på frågesport. 
                    Svara på 35 samtida frågor i 7 olika kategorier. </p>
                <div class="w-63 text-center">
                    <button id="start-btn" class="btn-page-one border-2 border-ljusblå" onclick="myFunction()">Klicka här för att starta</button>
                </div>
          </div> 
<!-- Page1/Column 2 End --> 

         
         
<!-- Page1/Column 3 Start -->
          <div class="column-3 bg"> 
                <img 
                  src="/Image/blob-right.svg"
                  class="startPage w-[245px] mt-[80px] float-right">  
          </div>  
      
<!-- Page1/Column 3 End --> 
<!-- Grid Container End (grid-3-columns) -->
<!-- Page1 end -->







<!-- Page2 start -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page2/Column 1 Start -->
            <div class="column-1"> 
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        class=" guestionPage h-[150px] mt-[30px] mb-[228px] ml-14">  
                </div>
                <div>
                    <img 
                        src="/Image/blob-left.svg"
                        class=" guestionPage  h-[415px] mb-[77px]">  
                </div>
            </div>
        <!-- Page2/Column 1 End --> 


        <!-- Page2/Column 2 Start -->   
            <div class="column-2  mt-[268px] mb-[165px] w-full"> 
                <p class="guestionPage text-20 text-center mb-10">Tv & film </p>
                <h1 id="question" class=" guestionPage text-mörkblå font-poppins text-20  lg:text-48  font-semibold lg:font-semibold text-center mb-8"> 
                    I vilken amerikansk delstat utspelar sig den populära Netflixserien Stranger Things?
                </h1>
                
                <div class="w-63 text-center mb-24">
                        <button id="answerButton" class=" guestionPage border-2 border-ljusblå">Se svaret</button>
                </div>
        

             
                        <div class=" guestionPage progress-bar"> 
                            <div class="progress-line absolute w-56 h-[2px] bg-ljusblå tablet:w-[420px] xl:w-[620px]"></div>
                            <div class="progress-button"></div>
                       

                        <div id="questionCounter" class=" guestionPage text-center text-darkblue pt-3.5">
                            <p>Fråga 2 av 35</p>
                        </div>
                </div> 
            </div> 
    <!-- Page2/Column 2 End --> 

    
<!-- Page2/Column 3 Start -->   
                <div class="column-3"> 
                    <img 
                    src="/Image/blob-right.svg"
                    class=" guestionPage  w-[245px] mt-[80px] float-right">  
                </div>  
<!-- Page2/Column 3 End --> 
<!-- Grid Container End (grid-3-columns) -->
<!-- Page2 end -->







<!-- Page3 -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page3/Column 1 Start -->

            <div class="column-1 bg-ljusblå"> 
                <div>
                    <img 
                        src="/Image/Logo(4).svg"
                        class=" h-[150px] mt-[30px] mb-[228px] ml-14"> 
                </div>
                <div>
                    <img 
                        src="/Image/blob-left-white.svg"
                        class=" h-[415px] mb-[77px]">  
                </div>
            </div>
<!-- Page3/Column 1 End -->



  

<!-- Page3/Column 2 Start -->
  <div class="bg-ljusblå">
            <div id="answerPage" class="column-2 mt-[346px] mb-[179px] w-full"> 
                <p class="text-20 text-center text-white mb-10">Rätt svar: </p>
                <h1 class="text-green font-poppins text-48 font-semibold text-center mb-8"> 
                    Indiana
                </h1>
                <p class="text-20 text-center text-white mb-10">Svarade du rätt? </p>
                <div class="w-63 text-center mb-24">
                    <button id="answerButtonYes" class="btn-page-third-yes border-2 border-white" onclick="myFunction()">Ja</button>
                    <button id="answerButtonNo"  class="btn-page-third-no border-2 border-white" onclick="myFunction()">Nej</button>
                </div>

                <div class="progress-bar mt-[179px] h-[48px] w-full">
                    <div class="progress-slide"> 
                        <div class="progress-line-white absolute w-56 h-[2px] bg-white tablet:w-[420px] xl:w-[620px]"></div>
                        <div class="progress-button-white"></div>
                    </div>

                    <div class="text-center pt-3.5">
                        <p id="questionNumber"></p>
                    </div>
                </div>  
            </div>
    </div>
<!-- Page3/Column 2 End -->
    
    
<!-- Page3/Column 3 Start -->
            <div class="column-3 bg-ljusblå"> 
                <img 
                src="/Image/blob-right-white.svg"
                class=" w-[245px] mt-[80px] float-right">  
            </div>  
<!-- Page3/Column 3 End --> 
<!-- Grid Container End (grid-3-columns) -->
<!-- Page3 end -->






<!-- Page4 -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page4/Column 1 Start -->
            <div class="column-1"> 
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        class=" h-[150px] mt-[30px] mb-[228px] ml-14">  <!-- Hover over Logo? -->
                </div>
                   <div>
                    <img 
                        src="/Image/blob-left.svg"
                        class=" h-[415px] mb-[77px]">  <!-- Hover over Logo? -->
                </div>
            </div>
            <!-- Page4/Column 1 End --> 


<!-- Page4/ Column 2 Start -->
            <div  id="resultPage" class="column-2 mt-56 mb-36 w-full"> 
                <p class="text-20 text-center mb-10">Ditt resultat</p>
                <h1 class="text-mörkblå font-poppins text-48 font-semibold text-center mb-8"> 
                    21 av 35 rätt
                </h1>

                <div class="buttons flex items-center gap-2.5 gap-x-16">
                    <div class="flex flex-col gap-y-2 flex-wrap lg:w-3/5">
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <p class="mt-1">Film & TV</p>
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <p class="mt-1">Geografi</p>
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <p class="mt-1">Historia</p>
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <p class="mt-1">Musik</p>
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-green"></div>
                        <p class="mt-1">Övrigt</p>
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <p class="mt-1">Vetenskap</p>
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-gray"></div>
                        <div class="btn-page-fourth-green"></div>
                        <div class="btn-page-fourth-green"></div>
                        <p class="mt-1">Sport</p>
                    </div>
                </div>
            
                <div class="w-63 mt-16 text-center">
                    <button class="btn-page-fourth border-2 border-ljusblå" onclick="myFunction()">En runda till</button>
                </div>
            </div> 
    <!-- Page4/Column 2 End --> 



    <!-- Page4/Column 3 Start -->
            <div class="column-3"> 
                <img 
                        src="/Image/blob-right.svg"
                        class=" w-[245px] mt-[80px] float-right">  
            </div>  
        </div>
    <!-- Page4/Column 3 End --> 
    <!-- Grid Container End (grid-3-columns) -->
    <!-- Page4 end -->






<!-- Detta ska va kvar-->
        <script type="module" crossorigin src="http://localhost:3000/@@vite/client"></script>
        <script type="module" crossorigin src="http://localhost:3000/resources/js/app.js"></script>
        </section>
    
    </body>
</html>
