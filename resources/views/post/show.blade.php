<x-app-layout>
    <div class="container bg-cover bg-center max-w-7xl mx-auto px-2 sm:px6 lg:px8 py-8 gap-6 mt-4 "> 
            <h1 class="text-center text-4xl font-bold text-black">{{$post->titulo}}</h1>
  </div >

  <div class="grid grid-cols-2 gap-6 mt-4 ">
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
</x-app-layout>