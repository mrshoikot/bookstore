<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between align-middle">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My Books') }}
            </h2>
            <a href="{{ route('books.create') }}" type="button"
                class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Post
                Book</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <form class="max-w-6xl mx-auto mb-5">   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input value="{{$_GET['search'] ?? ''}}"  type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="search" placeholder="Search a book...">
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-black hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                    
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($books as $book)
                        <div class="flex flex-col shadow-xl bg-white">
                            <div class="flex flex-col relative">
                                <div class="aspect-video flex items-center" style="text-align: center">
                                    <img style="max-height: 270px; {{$book->photo ? "width: 100%" : ""}}" class="mx-auto" src="{{ $book->photo ? asset('storage/photos/'.$book->photo) : asset('/images/logo.png') }}" alt="{{$book->name}}" >
                                </div>
                                <div class="p-5 -mt-8 rounded-2xl bg-white relative">
                                    <div class="flex flex-row items-center space-x-1">
                                        <p class="font-bold text-xl">{{$book->name}}</p>
                                    </div>
                                    <div class="flex flex-row space-x-1 text-blue-600 my-2">
                                        <p class=" font-semibold text-xs">{{$book->writer}}</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex flex-row items-center space-x-2 mb-2">
                                            <p class="font-bold">{{$book->category}}</p>
                                            <img class="h-4" src="http://cdn.onlinewebfonts.com/svg/img_424257.png"
                                                alt="">
                                        </div>
                                        <div class="flex flex-row space-x-1">
                                            <div class="bg-green-100 px-3 py-1 rounded-lg flex space-x-2 flex-row">
                                                <p class="text-xxsm">For {{$book->type}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="text-grey-500 flex flex-row space-x-1 py-4 border-t border-b border-gray-200 my-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <p class="text-xs">{{$book->user->location}}</p>
                                    </div>
                                    <div class="bg-gray-100 p-4 mt-2">
                                        <div class="flex flex-row justify-between">
                                            <img src="https://logos-download.com/wp-content/uploads/2016/08/Agoda_logo.png"
                                                class="h-5" alt="">
                                            <div class="text-right">
                                                <p class="text-2xl font-bold">
                                                    @if ($book->type == 'sell')
                                                    ৳{{$book->price}}
                                                        
                                                    @elseif($book->type == 'exchange')
                                                        A Book
                                                    @else
                                                        Free
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <a href="{{route('books.show', $book)}}" style="background-color: #00AF87"
                                            class="rounded-lg w-full block py-2 text-center mt-5 text-white font-bold">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
