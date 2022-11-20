<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between align-middle">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __($book->name) }}
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
        <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
            <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
                <img class="w-full" alt="image of a girl posing" src="{{ $book->photo ? asset('storage/photos/'.$book->photo) : asset('/images/logo.png') }}" />
            </div> 
            <div class="md:hidden">
                <img class="w-full" alt="image of a girl posing" src="{{ asset('storage/photos/'.$book->photo) }}" />
            </div>
            <div class="xl:w-1/2 ml-4 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
                <div class="border-b border-gray-200 pb-6">
                    <p class="text-sm leading-none text-gray-600 dark:text-gray-300 ">{{$book->type}}</p>
                    <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2">{{$book->name}}</h1>
                </div>
                <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                    <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Author</p>
                    <div class="flex items-center justify-center">
                        <p class="text-sm leading-none text-gray-600 dark:text-gray-300">{{$book->writer}}</p>
                    </div>
                </div>
                <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                    <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Location</p>
                    <div class="flex items-center justify-center">
                        <p class="text-sm leading-none text-gray-600 dark:text-gray-300">{{$book->user->location}}</p>
                    </div>
                </div>
                <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                    <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Category</p>
                    <div class="flex items-center justify-center">
                        <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">{{$book->category}}</p>
                        
                    </div>
                </div>
                @if ($book->type == 'sell')
                <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                    <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Price</p>
                    <div class="flex items-center justify-center">
                        <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">BDT {{$book->price}}</p>
                        
                    </div>
                </div>
                @endif
                <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                    <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Contact</p>
                    <div class="items-center justify-center">
                        <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3 mb-2">Name: {{$book->user->name}}</p>
                        <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">Phone: {{$book->user->phone}}</p>
                    </div>
                </div>
                <div>
                    <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-gray-300 mt-7">{{$book->description}}</p>
                </div>
                <div>
                    <div class="border-t border-b py-4 mt-7 border-gray-200">
                        <div data-menu class="justify-between items-center cursor-pointer">
                            @if ($book->user()->is(Auth::user()))
                                @if ($book->type == 'exchange')
                                <div class="overflow-x-auto relative">
                                    <h2 style="font-size: 20px; margin-bottom: 20px">Offers</h2>
                                    @if ($book->offers->count() <= 0)
                                       <p class="text-center mb-4">You haven't got any offer yet</p>
                                       @else
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="py-3 px-6">
                                                    Name
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Author
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Location
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               @foreach ($book->offers as $offer)
                                               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                   <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                       {{$offer->offeredFor->name}}
                                                    </th>
                                                    <td class="py-4 px-6">
                                                        {{$offer->offeredFor->writer}}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        {{$offer->user->location}}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        <a class="text-white bg-black hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-2 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{route('books.show', $offer->offeredFor)}}">Details</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                        </tbody>
                                    </table>
                                </div>
                                @endif

                                <a href="{{route('books.edit', $book->id)}}" class="block bg-blue-200 mt-3 hover:bg-blue-500 hover:text-white text-blue-500 text-center py-2 px-4 rounded">
                                    Update Book
                                  </a>
                                <a href="{{route('removeBook', $book->id)}}" class="block bg-red-200 mt-3 hover:bg-red-500 hover:text-white text-red-500 text-center py-2 px-4 rounded">
                                    Remove From Listing
                                  </a>

                            @else
                                <form method="POST" action="{{route('offers.store')}}">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{$book->id}}">
                                    <select name="offered_for">
                                        @foreach (Auth::user()->books as $book)
                                            <option value="{{$book->id}}">{{$book->name}} - {{$book->writer}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="bg-green-200 mt-3 hover:bg-green-500 hover:text-white text-green-500 text-center py-2 px-4 rounded">Send Offer</button>
                                </form>
                            @endif
                        </div>
                        <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable</div>
                    </div>
                </div>
            </div>
        </div>
        
        
    
            </div>
        </div>
    </div>
</x-app-layout>
