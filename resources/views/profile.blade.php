<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between align-middle">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <form class="w-full max-w-lg" action="{{route('updateProfile')}}" method="POSt">
                        @method('PUT')
                        @csrf
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
    
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                              Name
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input value="{{Auth::user()->name}}" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="name">
                          </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                              Email
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input value="{{Auth::user()->email}}" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="email" name="email" >
                          </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Location
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input value="{{Auth::user()->location}}" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" name="location" >
                              </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Phone
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input required value="{{Auth::user()->phone}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" name="phone" >
                              </div>
                        </div>


                        <div class="md:flex md:items-center">
                          <div class="md:w-1/3"></div>
                          <div class="md:w-2/3">
                            <button type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                              Update Profile
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
