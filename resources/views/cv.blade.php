<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
  
    <body>
       <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    <div class="cv">
        @include('template')
         <!---- Top cv -->
         <div class="top">
            <div class="bloc-1">
               @yield('bloc-1')
            </div>
            <div class="bloc-2">
               @yield('bloc-2')
            </div>
            <div class="bloc-3">
               @yield('bloc-3')
            </div>  
        </div>

        <!-- Description section -->
        <div class="description">
             @yield('description')
        </div>
        
        <!-- Compétence section -->
        <div class="competence">
           @yield('competence')
            <hr>
           @yield('competence_content')
        </div>
        
        <!-- Formation section -->
        <div class="formation">
           @yield('formation')
           <hr>
           @yield('formation_content')
        </div>
        
        <!-- Expérience section -->
        <div class="experience">
          @yield('experience')
          <hr>
          @yield('experience_content')
        </div>
        
        <!-- Centres d'intérêt section -->
        <div class="centre">
           @yield('centre')
           <hr>
           @yield('centre_content')
        </div>

        
    </div>


   
   </body>
</html>