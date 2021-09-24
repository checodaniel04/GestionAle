<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

        <title>{{ config('Gestion 1.0', 'Gestion 1.0') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" 
        src="https://connect.facebook.net/es_MX/sdk.js#xfbml=1
             &version={graph-api-version}
             &appId={your-facebook-app-id}
             &autoLogAppEvents=1" 
        nonce="FOKrbAYI">
  </script>
    </head>

    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-12 w-auto" src="\vendor\adminlte\dist\img\logo1.jpg" alt="Seyertech">
                <img class="hidden lg:block h-12 w-auto" src="\vendor\adminlte\dist\img\logo1.jpg" alt="Seyertech">
              </div>
              <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="/" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Bienvenidos</a>
      
                  
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              
      
              
      
                <!--
                  Dropdown menu, show/hide based on menu state.
      
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
               
              </div>
            </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1">
            
            <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Bienvenidos</a>
      
            
          </div>
        </div>
      </nav>
      

   
   
   <div class="container bg-cover bg-center max-w-7xl mx-auto px-2 sm:px6 lg:px8 py-8 gap-6 mt-4 "> 
            <h1 class="text-center text-4xl font-bold text-black">{{$post->titulo}}</h1>
  </div >
<div class="grid grid-cols-2 grid-cols-8gap-6 mt-4 ">
    <div class="grid-cols-2 ">
      @if ($post->url)
      <figure>
        <img class="w-full h-80 object-cover object-center "src="{{Storage::url($post->url)}}" alt="">
    </figure>
      @else
      <figure>
        <img class="w-full h-80 object-cover object-center "src="https://leslie.sftcontrol.com/storage/post/09.jpg" alt="">
    </figure>
      @endif
      

      <div class=" container bg-cover bg-center max-w-7xl mx-auto px-2 sm:px6 lg:px8 py-8 text-base text-blue-900 mt-4 justify-center ">
        {!!$post->noticia!!}

      </div>    

    </div>
    
      


  </div>