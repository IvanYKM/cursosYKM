<x-app-layout>
    <h1 class="text-2xl text-dark leading-6 bg-white">Siguiente curso:</h1>
    <h1 class="text-2xl text-center text-dark leading-6 bg-white position-end">Próximos cursos:</h1>
    <div class="container py-8 bg-white">

        {{-- <div class="animate-pulse 3s ml-6 mr-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-2"> --}}
        <div class="ml-6 mr-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-2">

        @foreach ($posts as $post)
            <article class="border-2 w-full h-64 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{Storage::url($post->image->url)}})">
                <br>
                <h2 class="text-xs text-blue-800 leading-6 font-bold">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('posts.show', $post)}}">
                        &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <span class="ml-1">29-11-2023 02:59</span>
                    </a>
                </h2>

                <div class=" flex flex-col justify-end">

                    {{-- <div>
                        @foreach ($post->tags as $tag)
                            <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                        @endforeach
                    </div> --}}

                    <h2 class="text-xs text-blue-800 leading-6 font-bold">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('posts.show', $post)}}">
                            &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <span class="ml-1">{{$post->name}}</span>
                        </a>
                    </h2>

                    <h3 class="text-xs text-blue-800 leading-6 font-bold">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('posts.show', $post)}}">
                            &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="ml-1">{{$post->speaker}}</span>
                        </a>
                    </h3>
                    <h3 class="text-xs text-blue-800 leading-6 font-bold">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('posts.show', $post)}}">
                            &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            <span class="ml-1">UME</span>
                        </a>
                    </h3>
                    <h3 class="text-xs text-blue-800 leading-6 font-bold">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('posts.show', $post)}}">
                            &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                            </svg>
                            <span class="ml-1">Traductor</span>
                        </a>
                    </h3>
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
