<div class="bg-white  w-20 flex-shrink-0 border-r border-gray-200 flex-col hidden sm:flex">
    <div class="h-16 text-blue-500 flex items-center justify-center">
        <img src="{{ asset('image/Logo_PLN.png') }}" alt="Logo PLN" class="h-14">
    </div>
    <div class="flex mx-auto flex-grow mt-4 flex-col text-gray-400 space-y-4">
        <a href="/">
            <button class="h-10 w-12 rounded-md flex items-center justify-center hover:bg-blue-100 hover:text-blue-500">
                <svg viewBox="0 0 24 24" class="h-5" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </button>
        </a>
        @foreach ($ultg as $item)
            
        <a href="{{ $item->link }}">
            <button class="h-10 w-12 rounded-md flex items-center justify-center hover:bg-blue-100 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" data-slot="icon" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                </svg>
            </button>
        </a>
        @endforeach
    </div>
</div>
