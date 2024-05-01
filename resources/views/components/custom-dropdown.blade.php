

    @props(['menuItems'])

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div x-data="{ dropdownOpen: false }">
        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>

        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

        <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
            @foreach($menuItems as $menuItem)
                @if($menuItem['label'] == 'Delete')
                    <a href="{{ $menuItem['route'] }}" class="block px-4 py-2 text-sm capitalize hover:text-white text-black hover:bg-red-500" style="text-align: start;">
                        <span class="hover:text-white"> {{ $menuItem['label'] }} </span>
                    </a>
                @else
                    <a href="{{ $menuItem['route'] }}" class="block px-4 py-2 text-sm capitalize text-black hover:bg-blue-500" style="text-align: start;">
                        <span class="hover:text-white"> {{ $menuItem['label'] }} </span>
                    </a>
                @endif
            @endforeach
        </div>
    </div>

