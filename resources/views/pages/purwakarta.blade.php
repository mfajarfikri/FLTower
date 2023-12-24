{{-- @dd($data) --}}

@extends('layouts.layout')

@section('content')

@include('component.sidebar')
    <div class="flex-grow overflow-hidden h-full flex flex-col">
        <div class="h-16 lg:flex w-full border-b border-gray-200 hidden px-10">
            <div class="flex h-full text-gray-600">
                <a href="#"
                    class="cursor-pointer h-full border-b-2 inline-flex mr-8 items-center hover:border-blue-500 hover:text-blue-500">Company</a>
                <a href="#"
                    class="cursor-pointer h-full border-b-2 inline-flex mr-8 items-center hover:border-blue-500 hover:text-blue-500">Maps</a>

            </div>
            <div class="ml-auto flex items-center space-x-7">
                <button class="flex items-center">
                    <span class="relative flex-shrink-0">
                        <img class="w-7 h-7 rounded-full"
                            src="https://images.unsplash.com/photo-1521587765099-8835e7201186?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt="profile" />
                        <span
                            class="absolute right-0 -mb-0.5 bottom-0 w-2 h-2 rounded-full bg-green-500 border border-white "></span>
                    </span>
                    <span class="ml-2">James Smith</span>
                    <svg viewBox="0 0 24 24" class="w-4 ml-1 flex-shrink-0" stroke="currentColor" stroke-width="2"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex-grow flex overflow-x-hidden">
            <div class="xl:w-72 w-48 flex-shrink-0 border-r border-gray-200 h-full overflow-y-auto lg:block hidden p-5">
                <div class="text-xs text-gray-400 tracking-wider">USERS</div>
                <div class="relative mt-2">
                    <input type="text" class="pl-8 h-9 bg-transparent border border-gray-300  w-full rounded-md text-sm"
                        placeholder="Search" />
                    <svg viewBox="0 0 24 24"
                        class="w-4 absolute text-gray-400 top-1/2 transform translate-x-0.5 -translate-y-1/2 left-2"
                        stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <div class="space-y-4 mt-3">
                    @foreach ($data as $item)
                        
                    <button class="bg-white p-3 w-full flex flex-col rounded-md  shadow" id="Gardu" data-id="{{ $item->id }}">
                        <div
                            class="flex xl:flex-row flex-col items-center font-medium text-gray-900 pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75  w-full">
                            {{-- <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=046c29138c1335ef8edee7daf521ba50"
                                class="w-7 h-7 mr-2 rounded-full" alt="profile" /> --}}
                            {{ $item->name_gardu }}
                        </div>
                        <div class="flex items-center w-full">
                            <div class="text-xs py-1 px-2 leading-none  bg-blue-100 text-blue-500 rounded-md">
                                Design</div>
                            <div class="ml-auto text-xs text-gray-500">$1,902.00</div>
                        </div>
                    </button>

                    @endforeach
                    
                </div>
            </div>
            <div class="flex-grow bg-white  overflow-y-auto">
                <div class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white  sticky top-0">
                    <div class="flex w-full items-center">
                        <div class="flex items-center text-3xl text-gray-900">
                            <img src="https://assets.codepen.io/344846/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1582611188&width=512"
                                class="w-12 mr-4 rounded-full" alt="profile" />
                            Mert Cukuren
                        </div>
                    </div>
                    {{-- <div class="flex items-center space-x-3 sm:mt-7 mt-4">
                        <a href="#" class="px-3 border-b-2 border-blue-500 text-blue-500  pb-1.5">Activities</a>
                        <a href="#" class="px-3 border-b-2 border-transparent text-gray-600  pb-1.5">Transfer</a>
                        <a href="#"
                            class="px-3 border-b-2 border-transparent text-gray-600  pb-1.5 sm:block hidden">Budgets</a>
                        <a href="#"
                            class="px-3 border-b-2 border-transparent text-gray-600  pb-1.5 sm:block hidden">Notifications</a>
                        <a href="#"
                            class="px-3 border-b-2 border-transparent text-gray-600  pb-1.5 sm:block hidden">Cards</a>
                    </div> --}}
                </div>
                <div class="sm:p-7 p-4">
                    <table class="w-full text-left" id="DataTable">
                        <thead>
                            <tr class="text-gray-400 text-center">
                                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200">No</th>
                                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200">
                                    Name Bay</th>
                                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 hidden md:table-cell">
                                    Longitude</th>
                                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200">
                                    Latitude</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 ">
                          
  
                        </tbody>
                    </table>
                    <div class="flex w-full mt-5 space-x-2 justify-end">
                        <button
                            class="inline-flex items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 leading-none">
                            <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </button>
                        <button
                            class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 leading-none">1</button>
                        <button
                            class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 bg-gray-100  leading-none">2</button>
                        <button
                            class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 leading-none">3</button>
                        <button
                            class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 leading-none">4</button>
                        <button
                            class="inline-flex items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 leading-none">
                            <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    

@endsection
