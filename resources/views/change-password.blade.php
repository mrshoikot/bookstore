<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between align-middle">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Change Password') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <form class="w-full max-w-lg" action="{{route('change-password')}}" method="POST">
                        @csrf
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
    
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            
                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                              Current Password
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="password" name="old_pass">
                          </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                              New Password
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" name="new_pass" >
                          </div>
                        </div>


                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Confirm Password
                              </label>
                            </div>
                            <div class="md:w-2/3">
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" name="new_pass_confirmation" >
                            </div>
                          </div>


                        <div class="md:flex md:items-center">
                          <div class="md:w-1/3"></div>
                          <div class="md:w-2/3">
                            <button type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                              Submit
                            </button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
