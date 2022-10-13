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
<div class="container mx-auto">

         
<!-- Second page start -->
<!-- Grid Container Start (grid-3-columns) -->
<div id="grid-3-columns" class="grid-3-columns grid grid-cols-12 relative">
    <div class="column-1"> <!-- Column 1 Start -->
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
    </div><!-- Column 1 End --> 


   
    <div class="column-2 mx-auto col-start-4 col-end-9 mt-80 mb-44"> <!-- Column 2 Start -->
          <p class="text-20 text-center mb-10">Tv & film </p>
          <h1 class="text-mörkblå font-poppins text-48 font-semibold text-center mb-8"> 
            I vilken amerikansk delstat utspelar sig den populära Netflixserien Stranger Things?
          </h1>
          
          <div class="w-63 text-center mb-12">
                <button id="btn-page-two" class="border-2 border-ljusblå">Se svaret</button>
                <p id="demo">
          </div>

          <div class="text-center">
                <p>Fråga 3 av 35</p>
          </div> 
    </div> <!-- Column 2 End --> 

    
    
    <div class="column-3 col-start-10 col-end-12"> <!-- Column 3 Start -->
          <img 
            src="/Image/blob-right.png"
            class="hover:bg-mörkblå h-2/3 w-60 mt-20 absolute right-0">  
    </div> <!-- Column 3 End --> 
</div>
<!-- Grid Container End (grid-3-columns) -->
<!-- Second page end -->








</div>




<!-- Detta ska va kvar-->
        <script type="module" crossorigin src="http://localhost:3000/@@vite/client"></script>
        <script type="module" crossorigin src="http://localhost:3000/resources/js/app.js"></script>
        </section>
    
    </body>
</html>
