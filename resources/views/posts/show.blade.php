<x-app-layout>
    <div class="container ml-6 mr-6 py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-gray-600 mb-2">
            {{$post->extract}}
        </div>

        <div class="grid grid-cols-3 gap-6">

            {{-- Contenido principal --}}
            <div class="col-span-2">

                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {{$post->body}}
                </div>

            </div>
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category}}</h1>
            </aside>
        </div>
    </div>
</x-app-layout>
