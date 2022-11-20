<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between align-middle">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Update Book') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <form class="w-full max-w-lg" action="{{route('books.update', $book)}}" method="POST" enctype='multipart/form-data'>
                        @method("PUT")
                        @csrf
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
    
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                              Book Name
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input value="{{$book->name}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="name">
                          </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                              Author
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input value="{{$book->writer}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" name="writer" >
                          </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Category
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="category">
                                    <option {{$book->category == "Novel" ? "selected" : null}} value="Novel">Novel</option>
                                    <option  {{$book->category == "Science Fiction" ? "selected" : null}} value="Science Fiction">Science Fiction</option>
                                    <option  {{$book->category == "Lifestyle" ? "selected" : null}} value="Lifestyle">Lifestyle</option>
                                    <option {{$book->category == "Religion" ? "selected" : null}} value="Religion">Religion</option>
                                    <option {{$book->category == "Biography" ? "selected" : null}} value="Biography">Biography</option>
                                    <option {{$book->category == "History" ? "selected" : null}} value="History">History</option>
                                    <option {{$book->category == "Others" ? "selected" : null}} value="Others">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Type
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="type" onChange="showPriceBox()" name="type">
                                    <option {{$book->type == "Exchange" ? "selected" : null}} value="exchange">Exchange</option>
                                    <option {{$book->type == "Giveaway" ? "selected" : null}} value="giveaway">Giveaway</option>
                                    <option {{$book->type == "Sell" ? "selected" : null}} value="sell">Sell</option>
                                </select>
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6" id="pricebox" style="display: none">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="price">
                              Price
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input value="{{$book->price}}" placeholder="BDT" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="price" type="number" name="price" >
                          </div>
                        </div>
                        



                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                              Description
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <textarea value={{$book->description}} name="description" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" ></textarea>
                          </div>
                        </div>
                        

                        <div class="md:flex md:items-center">
                          <div class="md:w-1/3"></div>
                          <div class="md:w-2/3">
                            <button type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                              Update Book
                            </button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      function showPriceBox(){
          if(document.getElementById('type').value == 'sell'){
              document.getElementById('pricebox').style.display = 'flex';
          }
          else{
              document.getElementById('pricebox').style.display = 'none';
          }
      }
    </script>
</x-app-layout>
