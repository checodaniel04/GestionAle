<x-app-layout>
   
    <div class="max-w-7xl mx-auto px-2 sm:px6 lg:px8 bg-gray-400 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
                 @foreach ($posts as $post)

                    <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->url){{Storage::url($post->url)}} @else storage/post/09.jpg @endif) ">
                        
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                           <h1 class="text-6xl text-white leading-8 font-bold">
                               <a href="{{route('post.show',$post)}}">{{$post->titulo}}</a>
                        </h1> 
                        </div>               
                
                    </article>
                
                @endforeach
            
        </div>

    </div>


    <div class="mt-4">
        {{$posts->links()}}

    </div>



</x-app-layout>
