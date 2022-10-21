<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donkeyquiz - boilerplate</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> 
    </head>
    <body class="font-poppins">

<!-- Start-page -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page1/Column 1 Start -->
        <div id="p1" class="grid-container">
            <div class="column-1 startpage"> 
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        class="h-[150px] mt-[30px] mb-[228px] ml-14">  
                </div>
                <div>
                    <img 
                        src="/Image/blob-left.svg"
                        class=" h-[415px] mb-[77px]">  
                </div>
            </div>
<!-- Page1/Column 1 End --> 
     

<!-- Page1/Column 2 Start -->          
            <div class=" startpage column-2 mt-[337px] mb-[327] w-full"> 
                <h1 class=" text-mörkblå font-poppins text-32  lg:text-48  font-semibold lg:font-semibold text-center mb-8"> 
                     Svensk mästare i TP?</h1>
                
                <p  id="startText"  class="popper text-20 text-center mb-10"> Utmana vänner, kollegor och familj på frågesport. 
                    Svara på 35 samtida frågor i 7 olika kategorier. </p>
                <div class="w-63 text-center">
                    <button id="start-btn" class="btn-page-one border-2 border-ljusblå">Klicka här för att starta</button>
                </div>
            </div> 
<!-- Page1/Column 2 End --> 

         
<!-- Page1/Column 3 Start -->
            <div class="column-3 startpage"> 
                <img 
                    src="/Image/blob-right.svg"
                    class=" w-[245px] mt-[80px] float-right">  
            </div>  
        </div>
<!-- Page1/Column 3 End --> 
<!-- Grid Container End (grid-3-columns) -->
<!-- Page1 end -->

<!-- Page2 start -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page2/Column 1 Start -->
        <div id="p2" class="hidden">
            <div column-1"> 
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        h-[150px] mt-[30px] mb-[228px] ml-14">  
                </div>
                <div>
                    <img 
                        src="/Image/blob-left.svg"
                         h-[415px] mb-[77px]">  
                </div>
            </div>
<!-- Page2/Column 1 End --> 


<!-- Page2/Column 2 Start -->   
            <div id="questionpage" class=" mt-[268px] mb-[165px] w-full"> 
                <p id="category" class="text-ljusblå text-20 text-center mb-10">Film & TV</p>
                <h1 id="question" class="text-mörkblå font-poppins text-20  lg:text-48  font-semibold lg:font-semibold text-center mb-8"> 
                    I vilken amerikansk delstat utspelar sig den populära Netflixserien Stranger Things?</h1>
                
                <div class="w-63 text-center mb-24">
                    <button id="questionButton" class="border-2 border-ljusblå">Se svaret</button>
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
<!-- Page2/Column 2 End --> 

    
<!-- Page2/Column 3 Start -->   
            <div class="questionpage column-3"> 
                <img 
                    src="/Image/blob-right.svg"
                    class=" questionPage  w-[245px] mt-[80px] float-right">  
            </div>  
        </div>
<!-- Page2/Column 3 End --> 
<!-- Grid Container End (grid-3-columns) -->
<!-- Page2 end -->

<!-- Page3 -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page3/Column 1 Start -->
        <div id="p3" class="hidden">
            <div class="column-1 bg-ljusblå"> 
                <div>
                    <img 
                        src="/Image/Logo(white).svg"
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
                <div id="answerPage" class="column-2  mt-[346px] mb-[179px] w-full"> 
                    <p class="text-20 text-center text-white mb-10">Rätt svar: </p>
                    <h1 id="answer" class="text-green font-poppins text-48 font-semibold text-center mb-8"> 
                        Indiana</h1>
                    <p class="text-20 text-center text-white mb-10">Svarade du rätt?</p>
                    <div class="w-63 text-center mb-24">
                        <button id="answerButtonYes" class="btn-page-third-yes border-2 border-white" onclick="myFunction()">Ja</button>
                        <button id="answerButtonNo"  class="btn-page-third-no border-2 border-white" onclick="myFunction()">Nej</button>
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
<!-- Page3/Column 2 End -->
    
    <!-- Page3/Column 3 Start -->
            <div class="column-3 bg-ljusblå"> 
                <img 
                src="/Image/blob-right-white.svg"
                class=" w-[245px] mt-[80px] float-right">  
            </div>
        </div>             
<!-- Page3/Column 3 End --> 
<!-- Grid Container End (grid-3-columns) -->
<!-- Page3 end -->


<!-- Page4 -->
<!-- Grid Container Start (grid-3-columns) -->
<!-- Page4/Column 1 Start -->
        <div id="p4" class="hidden">
            <div class="column-1"> 
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        class=" h-[150px] mt-[30px] mb-[228px] ml-14">  
                </div>
                <div>
                    <img 
                        src="/Image/blob-left.svg"
                        class=" h-[415px] mb-[77px]">  
                </div>
            </div>
<!-- Page4/Column 1 End --> 

<!-- Page4/ Column 2 Start -->
            <div  id="resultPage" class="column-2 mt-56 mb-36 w-full"> 
                <p class="text-14 text-mörkblå text-center mb-10">Ditt resultat</p>
                <h1 class="text-mörkblå font-poppins text-48 font-semibold text-center mb-8"> 
                    21 av 35 rätt
                </h1>

                <div class="buttons flex items-center gap-2.5 gap-x-16">
                    <div  class="flex flex-col gap-y-2 flex-wrap">
                        <div id="film" class=" flex flex-col-reverse gap-y-2 ">
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                                <div class="btn-page-fourth-gray bg-gray"></div>
                        </div>
                    <p class="mt-1 text-14">Film & TV</p>
                </div>

                    <div id="geografi" class="flex flex-col gap-y-2">
                        <div class="geografi btn-page-fourth-gray bg-gray"></div>
                        <div class="geografi btn-page-fourth-gray bg-gray"></div>
                        <div class="geografi btn-page-fourth-gray bg-gray"></div>
                        <div class="geografi btn-page-fourth-gray bg-gray"></div>
                        <div class="geografi btn-page-fourth-gray bg-gray"></div>
                        <p class="mt-1 text-14">Geografi</p>
                    </div>

                    <div id="historia" class="flex flex-col gap-y-2">
                        <div class="historia btn-page-fourth-gray bg-gray"></div>
                        <div class="historia btn-page-fourth-gray bg-gray"></div>
                        <div class="historia btn-page-fourth-gray bg-gray"></div>
                        <div class="historia btn-page-fourth-gray bg-gray"></div>
                        <div class="historia btn-page-fourth-gray bg-gray"></div>
                        <p class="mt-1 text-14">Historia</p>
                    </div>

                    <div id="musik" class="flex flex-col gap-y-2">
                        <div class="musik btn-page-fourth-gray bg-gray"></div>
                        <div class="musik btn-page-fourth-gray bg-gray"></div>
                        <div class="musik btn-page-fourth-gray bg-gray"></div>
                        <div class="musik btn-page-fourth-gray bg-gray"></div>
                        <div class="musik btn-page-fourth-gray bg-gray"></div>
                        <p class="mt-1 text-14">Musik</p>
                    </div>

                    <div id="övrigt" class="flex flex-col gap-y-2">
                        <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                        <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                        <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                        <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                        <div class="övrigt btn-page-fourth-gray bg-gray"></div>
                        <p class="mt-1 text-14">Övrigt</p>
                    </div>

                    <div id="vetenskap" class="flex flex-col gap-y-2">
                        <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                        <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                        <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                        <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                        <div class="vetenskap btn-page-fourth-gray bg-gray"></div>
                        <p class="mt-1 text-14">Vetenskap</p>
                    </div>

                    <div id="sport"  class="flex flex-col gap-y-2">
                        <div class="sport btn-page-fourth-gray bg-gray"></div>
                        <div class="sport btn-page-fourth-gray bg-gray"></div>
                        <div class="sport btn-page-fourth-gray bg-gray"></div>
                        <div class="sport btn-page-fourth-gray bg-gray"></div>
                        <div class="sport btn-page-fourth-gray bg-gray"></div>
                        <p class="mt-1 text-14">Sport</p>
                    </div>
                </div>
            
                <div class="w-63 mt-16 text-center">
                    <button id="playAgainButton" class="btn-page-fourth border-2 border-ljusblå">En runda till</button>
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
