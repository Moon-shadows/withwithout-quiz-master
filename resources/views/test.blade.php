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

<!-- First Page -->
<!-- Grid Container Start (grid-3-columns) -->
      <div id="startPage" class="grid-3-columns grid grid-cols-12 relative">
          <div class="column-1"> <!-- Column 1 Start -->
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        class=" h-[150px] mt-[30px] mb-[228px] ml-14">  <!-- Hover over Logo? -->
                </div>
                <div>
                    <img 
                        src="/Image/blob-left.png"
                        class=" h-[415px] mb-[77px]">  <!-- Hover over Logo? -->
                </div>
          </div><!-- Column 1 End --> 
     

          
          <div class="column-2 mx-auto col-start-4 col-end-9 mt-[337px] mb-[327] h-[236]"> <!-- Column 2 Start -->
                <h1 class="text-mörkblå font-poppins text-48 font-semibold text-center mb-8"> 
                    Svensk mästare i TP?
                </h1>
                <p class="text-20 text-center mb-10"> Utmana vänner, kollegor och familj på frågesport. 
                    Svara på 35 samtida frågor i 7 olika kategorier. </p>
                <div class="w-63 text-center">
                    <button class="btn-page-one border-2 border-ljusblå" onclick="myFunction()">Klicka här för att starta</button>
                </div>
          </div> <!-- Column 2 End --> 

         
         
         
          <div class="column-3 col-start-10 col-end-12"> <!-- Column 3 Start -->
                <img 
                  src="/Image/blob-right.png"
                  class=" h-[573px] mt-[80px] absolute right-0" >  <!-- Hover over Logo? -->
          </div> <!-- Column 3 End --> 
      </div>
<!-- Grid Container End (grid-3-columns) -->
<!-- First page end -->







<!-- Second page start -->
<!-- Grid Container Start (grid-3-columns) -->
<div id="guestionPage" class="grid-3-columns grid grid-cols-12 relative">
    <div class="column-1"> <!-- Column 1 Start -->
        <div>
            <img 
                src="/Image/Logo(3).svg"
                class=" h-[150px] mt-[30px] mb-[228px] ml-14">  <!-- Hover over Logo? -->
        </div>
        <div>
            <img 
                src="/Image/blob-left.png"
                class=" h-[415px] mb-[77px]">  <!-- Hover over Logo? -->
        </div>
    </div><!-- Column 1 End --> 


   
    <div class="column-2 mx-auto col-start-4 col-end-9 mt-[268px] mb-[165px] h-[364px]"> <!-- Column 2 Start -->
          <p class="text-20 text-center mb-10">Tv & film </p>
          <h1 class="text-mörkblå font-poppins text-48 font-semibold text-center mb-8"> 
            I vilken amerikansk delstat utspelar sig den populära Netflixserien Stranger Things?
          </h1>
          
          <div class="w-63 text-center mb-24">
                <button id="btn-page-two" class="border-2 border-ljusblå">Se svaret</button>
                <p id="demo">
          </div>
  

          <div class="progress-bar mx-auto mb-[55px] h-[48px] max-w-[620px]">
                <div class="progress-slide"> 
                    <div class="progress-line"></div>
                    <div class="progress-button"></div>
                </div>

                <div class="text-center pt-3.5">
                    <p>Fråga 2 av 35</p>
                </div>
          </div> 
    </div> <!-- Column 2 End --> 

    
    
    <div class="column-3 col-start-10 col-end-12"> <!-- Column 3 Start -->
          <img 
          src="/Image/blob-right.png"
          class=" h-[573px] mt-[80px] absolute right-0" >
    </div> <!-- Column 3 End --> 
</div>
<!-- Grid Container End (grid-3-columns) -->
<!-- Second page end -->







<!-- Third Page -->
<!-- Grid Container Start (grid-3-columns) -->
<div  id="answerPage" class="grid-3-columns bg-ljusblå grid grid-cols-12 relative">
    <div class="column-1"> <!-- Column 1 Start -->
        <div>
            <img 
                src="/Image/Logo(4).svg"
                class=" h-[150px] mt-[30px] mb-[228px] ml-14">  <!-- Hover over Logo? -->
        </div>
        <div>
            <img 
                src="/Image/blob-left-white.png"
                class=" h-[415px] mb-[77px]">  <!-- Hover over Logo? -->
        </div>
  </div><!-- Column 1 End --> 


    <div class="column-2 mx-auto col-start-4 col-end-9 mt-80"> <!-- Column 2 Start -->
        <p class="text-20 text-center text-white mb-10">Rätt svar: </p>
          <h1 class="text-green font-poppins text-48 font-semibold text-center mb-8"> 
              Indiana
          </h1>
          <p class="text-20 text-center text-white mb-10">Svarade du rätt? </p>
          <div class="w-63 text-center">
              <button class="btn-page-third-yes border-2 border-white" onclick="myFunction()">Ja</button>
              <button class="btn-page-third-no border-2 border-white" onclick="myFunction()">Nej</button>
            </div>

            <div class="progress-bar mx-auto mb-[55px] h-[48px] max-w-[620px]">
                <div class="progress-slide"> 
                    <div class="progress-line-white"></div>
                    <div class="progress-button-white"></div>
                </div>

                <div class="text-center pt-3.5">
                    <p>Fråga 2 av 35</p>
                </div>
          </div>  
    </div> <!-- Column 2 End -->
    
    

    <div class="column-3 col-start-10 col-end-12"> <!-- Column 3 Start -->
          <img 
          src="/Image/blob-right-white.png"
          class=" h-[573px] mt-[80px] absolute right-0" >
    </div> <!-- Column 3 End --> 
</div>
<!-- Grid Container End (grid-3-columns) -->
<!-- Third page end -->






<!-- Fourth Page -->
<!-- Grid Container Start (grid-3-columns) -->
<div   id="resultPage" class="grid-3-columns grid grid-cols-12 relative">
    <div class="column-1"> <!-- Column 1 Start -->
        <div>
            <img 
                src="/Image/Logo(3).svg"
                class=" h-[150px] mt-[30px] mb-[228px] ml-14">  <!-- Hover over Logo? -->
        </div>
        <div>
            <img 
                src="/Image/blob-left.png"
                class=" h-[415px] mb-[77px]">  <!-- Hover over Logo? -->
        </div>
  </div><!-- Column 1 End --> 


    <div class="column-2 mx-auto col-start-4 col-end-9 mt-56 mb-36"> <!-- Column 2 Start -->
        <p class="text-20 text-center mb-10">Ditt resultat</p>
          <h1 class="text-mörkblå font-poppins text-48 font-semibold text-center mb-8"> 
            21 av 35 rätt
          </h1>

        <div class="buttons flex items-center gap-2.5 gap-x-16">
            <div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <p class="mt-1">Film & TV</p>
            </div>

            <div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <p class="mt-1">Geografi</p>
            </div>

            <div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <p class="mt-1">Historia</p>
            </div>

            <div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <p class="mt-1">Musik</p>
            </div>

            <div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-green"></div>
                <p class="mt-1">Övrigt</p>
            </div>

            <div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-gray"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <div class="btn-page-fourth-green"></div>
                <p class="mt-1">Vetenskap</p>
            </div>

            <div>
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
    </div> <!-- Column 2 End --> 




    <div class="column-3 col-start-10 col-end-12"> <!-- Column 3 Start -->
          <img 
          src="/Image/blob-right.png"
          class=" h-[573px] mt-[80px] absolute right-0" >
    </div> <!-- Column 3 End --> 
</div>
<!-- Grid Container End (grid-3-columns) -->
<!-- Fourth page end -->






<!-- Detta ska va kvar-->
        <script type="module" crossorigin src="http://localhost:3000/@@vite/client"></script>
        <script type="module" crossorigin src="http://localhost:3000/resources/js/app.js"></script>
        </section>
    
    </body>
</html>



.progress-bar{
    position: relative;
}

.progress-slide{
    position: absolute;
}
.progress-line{
    position: absolute;
    width: 620px;
    height: 0px;
    left: 36px;
    top: 7px;
    border: 2px solid #7678ED;
}
.progress-button{
    position: absolute;
    width: 116px;
    height: 14px;
    left: 0px;
    top: 0px;
    background: #000064;
    border-radius: 10px;
}

.progress-line-white{
    position: absolute;
    width: 620px;
    height: 0px;
    left: 36px;
    top: 7px;

    /* Brand/Ljusblå */
    border: 2px solid white;
}

.progress-button-white{
    position: absolute;
    width: 116px;
    height: 14px;
    left: 0px;
    top: 0px;
    background: white;
    border-radius: 10px;
}



<div class="relative w-56 h-[2px] bg-ljusblå tablet:w-[420px] xl:w-[620px]">
    <div id="progressbar" class="absolute h-3 w-[30%] center-y bg-mörkblå rounded-full"></div>
</div>