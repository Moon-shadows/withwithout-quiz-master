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



<div class="grid-3-columns grid grid-cols-12">
          <div class="column-1">
                <div>
                    <img 
                        src="/Image/Logo(3).svg"
                        class="hover:bg-mörkblå h-37.5 mt-6 mb-56 ml-14">  <!-- Hover over Logo? -->
                </div>
                <div>
                    <img 
                        src="/Image/blob-left.png"
                        class="hover:bg-mörkblå">  <!-- Hover over Logo? -->
                </div>
          </div> 
     

          <div class="column-2 col-start-4 col-end-9 mt-80 hover:bg-mörkblå">
                <h1 class="text-mörkblå font-poppins text-48 font-semibold text-center mb-8"> 
                    Svensk mästare i TP?
                </h1>
                <p class="text-20 text-center mb-10"> Utmana vänner, kollegor och familj på frågesport. 
                    Svara på 35 samtida frågor i 7 olika kategorier. </p>
                <div class="button-container w-63 text-center">
                    <button class="py-8 px-3 rounded-full bg-white text-ljusblå border-2 border-ljusblå" onclick="myFunction()">Klicka här för att starta</button>
                </div>
          </div>

          <div class="column-3 col-start-10 col-end-12">
                <img 
                  src="/Image/blob-right.png"
                  class="hover:bg-mörkblå h-2/3 w-60 mt-20">  <!-- Hover over Logo? -->
          </div>

</div>

            <!-- Detta ska va kvar-->
        <script type="module" crossorigin src="http://localhost:3000/@@vite/client"></script>
        <script type="module" crossorigin src="http://localhost:3000/resources/js/app.js"></script>
        </section>
    
    </body>
</html>
