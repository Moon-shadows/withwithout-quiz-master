<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donkeyquiz - boilerplate</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> 
    </head>
    <body class="bg-white w-full font-poppins">


        <!--logoblue-->
        <div >
            <img id="logoBlue"
                src="/Image/Logo(3).svg"
                class="h-16 md:h-24 lg:h-28 xl:h-36 mt-[30px]  ml-14">
        </div>
        

        <!-- blobleft-->
        <div>
            <svg viewBox="100 0 100 200" class="w-12 md:w-32 lg:w-48 xl:w-64 absolute top-[300px]">
            <path id="blobleft" class="text-ljusblå" d="" fill="currentColor"></path>
            </svg>
                <!-- class=" h-[415px] mb-[77px]">  -->
        </div>


        <!-- blobright-->
       
        <div>
            <svg viewBox="-10 0 100 200" class="w-16 md:w-32 lg:w-48 xl:w-64 absolute right-0 top-4 md:top-[300px]">
            <path id="blobright" class="text-ljusblå" d="" fill="currentColor"></path>
            </svg>
                <!-- class=" h-[415px] mb-[77px]">  -->
        </div>




<!-- GRID CONTAINER START -->
        <div id="p1" class="grid-container">
<!-- P1/Col1 Start -->
            <div class="column-1 startpage">
            </div>
<!-- P1/Col1 End -->

<!-- P1/Col2 Start -->          
            <div class="column-2 absolut mt-[100px] lg:mt-[337px] mb-24 lg:mb-[327px] w-full"> 
                <h1 class="huvudrubrik text-mörkblå font-poppins text-32  mb:text-32  lg:text-48  font-semibold lg:font-semibold text-center mb-8"> 
                     Svensk mästare i TP?</h1>
                <p  id="startText"  class="popper text-16 text-center mb-10"> Utmana vänner, kollegor och familj på frågesport. 
                    Svara på 35 samtida frågor i 7 olika kategorier.</p>
                <div class="w-full text-center">
                    <button id="start-btn" class="btn-page-one border-2 border-ljusblå text-ljusblå hover:bg-mörkblå hover:text-white ">Klicka här för att starta</button>
                </div>
            </div> 
<!-- P1/Col2 End -->

<!-- P1/Col3 Start -->
<!-- P1/Col3 End -->

<!-- Grid Container End -->
        </div>




<!-- GRID CONTAINER START -->
<!-- P2/Col1 Start -->
        <div id="p2" class="hidden">
            <div column-1"> 
            </div>
<!-- P2/Col1 End --> 

<!-- P2/Col2 Start -->   
            <div id="questionpage" class=" absolut top-1 lg:mt-[268px] mb-[165px] w-full"> 
                <p id="category" class="text-ljusblå text-20 text-center mb-10">Film & TV</p>
                <h1 id="question" class="text-mörkblå font-poppins text-20  lg:text-48  font-semibold lg:font-semibold text-center mb-8"> 
                    I vilken amerikansk delstat utspelar sig den populära Netflixserien Stranger Things?</h1>
                
                <div class="w-63 text-center mb-24">
                    <button id="questionButton" class="border-2 border-ljusblå text-ljusblå hover:bg-mörkblå hover:text-white ">Se svaret</button>
                </div>
        
                <div class="progress-bar flex justify-center"> 
                    <div class="progress-line absolute w-56 h-[2px] bg-ljusblå md:w-[420px] xl:w-[620px]">
                        <div id="progressButton" class="progress-button center-y"></div>
                    </div>
                    <div id="questionCounter" class="text-center text-darkblue pt-3.5">
                        <p>Fråga 2 av 35</p>
                    </div>
                </div> 
            </div> 
<!-- P2/Col2 End -->

<!-- P2/Col3 Start -->   
<!-- P2/Col3 End -->

<!-- GRID CONTAINER END -->
        </div>





<!-- GRID CONTAINER START -->
<!-- P3/Col1 Start -->
        <div id="p3" class="hidden">
            <div class="column-1"> 
            </div>
<!-- P3/Col1 End -->
<!-- P3/Col2 Start -->
            <div>
                <div id="answerPage" class="column-2 absolut top-1 lg:mt-[346px] mb-[179px] w-full"> 
                    <p class="text-20 text-center text-white mb-10">Rätt svar: </p>
                    <h1 id="answer" class="text-green font-poppins text-20  lg:text-48  font-semibold text-center mb-8"> 
                        Indiana</h1>
                    <p class="text-20 text-center text-white mb-10">Svarade du rätt?</p>
                    <div class="w-63 text-center mb-24">
                        <button id="answerButtonYes" class="btn-page-third-yes border-2 border-white text-white hover:bg-white hover:text-ljusblå" ">Ja</button>
                        <button id="answerButtonNo"  class="btn-page-third-no border-2 border-white text-white hover:bg-white hover:text-ljusblå">Nej</button>
                    </div>

                    <div class=" progress-bar flex justify-center"> 
                        <div class="progress-line absolute w-56 h-[2px] bg-white md:w-[420px] xl:w-[620px]">
                           <div id="progressButtonWhite" class="progress-button-white center-y"></div>
                        </div>
                       
                        <div id="questionCounter2" class="text-center text-white pt-3.5">
                            <p>Fråga 2 av 35</p>
                        </div>
                    </div> 
                </div>
            </div>
<!-- P3/Col2 End -->

<!-- P3/Col3 Start -->
<!-- P3/Col3 End -->

<!-- GRID CONTAINER END  -->
        </div> 





<!-- GRID CONTAINER START-->
<!-- P4/Col1 Start -->
        <div id="p4" class="hidden">
            <div class="column-1"> 
            </div>
<!-- P4/Col1 End --> 
<!-- P4/ Col2 Start -->
            <div  id="resultPage" class="column-2 absolut top-1 lg:mt-56 w-full"> 
                <p class="text-16 text-mörkblå text-center mb-10">Ditt resultat</p>
                <h1 id="correctQuestionCounter" class="text-mörkblå font-poppins text-20  lg:text-48  font-semibold text-center mb-8"> 
                    21 av 35 rätt
                </h1>

                <div class="buttons flex flex-col md:flex-row items-center justify-center flex-wrap gap-x-6">
                    <div  class="flex flex-col items-center w-24">
                        <div id="film" class="flex  flex-row md:flex-col-reverse gap-x-2 md:gap-y-2">
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                        </div>
                        <p class="mt-1 text-14 pb-2">Film & TV</p>
                    </div>

                    <div  class="flex flex-col items-center w-24">
                        <div id="geografi" class=" flex  flex-row  md:flex-col-reverse gap-x-2 md:gap-y-2">
                            <div class="geografi btn-page-fourth-gray bg-gray"></div>
                            <div class="geografi btn-page-fourth-gray bg-gray"></div>
                            <div class="geografi btn-page-fourth-gray bg-gray"></div>
                            <div class="geografi btn-page-fourth-gray bg-gray"></div>
                            <div class="geografi btn-page-fourth-gray bg-gray"></div>
                            
                        </div>
                        <p class="mt-1 text-14 pb-2">Geografi</p>
                    </div>
                    
                    <div  class="flex flex-col items-center w-24">
                        <div id="historia" class=" flex  flex-row md:flex-col-reverse gap-x-2 md:gap-y-2">
                            <div class="historia btn-page-fourth-gray bg-gray"></div>
                            <div class="historia btn-page-fourth-gray bg-gray"></div>
                            <div class="historia btn-page-fourth-gray bg-gray"></div>
                            <div class="historia btn-page-fourth-gray bg-gray"></div>
                            <div class="historia btn-page-fourth-gray bg-gray"></div>
                        </div>
                        <p class="mt-1 text-14 pb-2">Historia</p>
                    </div>

                    <div  class="flex flex-col items-center w-24">
                        <div id="musik" class=" flex  flex-row md:flex-col-reverse gap-x-2 md:gap-y-2">
                            <div class="musik btn-page-fourth-gray bg-gray"></div>
                            <div class="musik btn-page-fourth-gray bg-gray"></div>
                            <div class="musik btn-page-fourth-gray bg-gray"></div>
                            <div class="musik btn-page-fourth-gray bg-gray"></div>
                            <div class="musik btn-page-fourth-gray bg-gray"></div>
                        </div>
                        <p class="mt-1 text-14 pb-2">Musik</p>
                    </div>

                    <div  class="flex flex-col items-center w-24">
                        <div id="övrigt" class=" flex  flex-row md:flex-col-reverse gap-x-2 md:gap-y-2">
                            <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                            <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                            <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                            <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                            <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                        </div>
                        <p class="mt-1 text-14 pb-2">Övrigt</p>
                    </div>

                    <div  class="flex flex-col items-center w-24">
                        <div id="vetenskap" class=" flex  flex-row md:flex-col-reverse gap-x-2 md:gap-y-2">
                            <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                            <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                            <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                            <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                            <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                        </div>
                        <p class="mt-1 text-14 pb-2">Vetenskap</p>
                    </div>

                    <div  class="flex flex-col items-center w-24">
                        <div id="sport" class=" flex  flex-row md:flex-col-reverse gap-x-2 md:gap-y-2">
                            <div class="sport btn-page-fourth-gray bg-gray"></div>
                            <div class="sport btn-page-fourth-gray bg-gray"></div>
                            <div class="sport btn-page-fourth-gray bg-gray"></div>
                            <div class="sport btn-page-fourth-gray bg-gray"></div>
                            <div class="sport btn-page-fourth-gray bg-gray"></div>
                        </div>
                        <p class="mt-1 text-14 pb-2">Sport</p>
                    </div>
                </div>
            
                <div class="w-63 mt-4 text-center">
                    <button id="playAgainButton" class="btn-page-fourth border-2 border-ljusblå  text-ljusblå hover:bg-mörkblå hover:text-white">En runda till</button>
                </div>
            </div> 
<!-- P4/Col2 End -->

<!-- P4/Col3 Start -->
<!-- P4/Col3 End -->
        
<!-- GRID CONTAINER END -->
        </div> 
   



<!-- Detta ska va kvar-->
        <script type="module" crossorigin src="http://localhost:3000/@@vite/client"></script>
        <script type="module" crossorigin src="http://localhost:3000/resources/js/app.js"></script>
        </section>
    </body>
</html>
