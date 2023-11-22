<x-app-layout>

    <div class="container py-8 bg-white">

        <div class="ml-6 mr-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach ($posts as $post)
            <article class="w-full h-96 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{Storage::url($post->image->url)}})">
                <div class="w-full h-full px-8 flex flex-col justify-end">

                    <div>
                        @foreach ($post->tags as $tag)
                            <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                        @endforeach
                    </div>

                    <h1 class="text-3xl text-dark leading-6 font-bold">
                        <a href="{{route('posts.show', $post)}}">
                            {{$post->name}}
                        </a>
                    </h1>
                    <br>
                </div>
            </article>
        @endforeach
        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>
