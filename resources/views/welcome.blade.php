
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

        <title>{{ config('Gestion 1.0', 'Gestion 1.0') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

      

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
   

   
<nav class="bg-gray-800 shadow" >
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
  
      
 
    









    <body class="font-sans antialiased">
        <x-jet-banner />

       

          

            <!-- Page Content -->
            <main>
                <body class="antialiased">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm  underline text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm underline text-white">Log in</a>

                        
                    @endauth
                </div>
            @endif

            
           
          

   
                <div class="container max-w-7xl mx-auto px-2 sm:px6 lg:px8 bg-gray-200 py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="grid-cols-1" >
                            <iframe  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLeslie-Figueroa-144954874030748&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=331061058733969" width="350" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                        <div>
                             @foreach ($posts as $post)
            
                                <article class="w-full h-80 bg-cover bg-center mt-4 @if($loop->first) md:col-span-2 @else grid-cols-1  @endif " style="background-image: url(@if($post->url){{Storage::url($post->url)}}@else storage/post/09.jpg @endif) ">
                                    
                                    <div class="w-full h-full px-8 flex flex-col justify-center">
                                       <h1 class="text-6xl text-white leading-8 font-bold">
                                           <a href="{{route('postint.show',$post)}}">{{$post->titulo}}</a>
                                    </h1> 
                                    </div>               
                            
                                </article>
                            
                            @endforeach
                        </div>     
                    </div>
            
                </div>
            
            
                <div class="mt-4">
                    {{$posts->links()}}            
                </div>
            
            
            
          
            


        </div>
    </body>
            </main>
        

       

       
    </body>
</html>

