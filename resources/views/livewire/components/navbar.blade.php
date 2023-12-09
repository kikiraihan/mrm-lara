<div>
    <nav wire:ignore.self id="header" class="fixed w-full z-50 top-0 animate__animated animate__fadeInDown">

        <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #5789cf var(--scroll), transparent 0);"></div>
    
        <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-1">
    
            <div class="pl-4">
                <a href="{{ route('landing.home') }}">
                    <img src="{{ asset('asset_landing/logo-1.png') }}" class="transform w-32 hover:shadow-md  rounded-xl px-1 py-0.5">
                </a>
            </div>
    
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="bg-gradient-to-r from-orange-300 to-amber-300 flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
    
            <div class="w-full flex-grow  lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    @foreach ([
                        ['route' => 'landing.home', 'title' => __('nav.home')],
                        ['route' => 'landing.portfolio', 'title' => __('nav.port')],
                    ] as $item)
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 no-underline @if(request()->routeIs($item['route'])) text-gray-900 font-bold @else text-gray-600 hover:text-gray-900 hover:text-underline @endif " href="{{ route($item['route']) }}">{{$item['title']}}</a>
                    </li>
                    @endforeach
                    <li class="mr-3 text-gray-600 py-2 px-4 flex gap-2">
                        <span wire:click="gantiBahasa('id')" class="inline-block no-underline hover:text-gray-900 hover:text-underline cursor-pointer">🇮🇩</span>
                        <span>|</span>
                        <span wire:click="gantiBahasa('en')" class="inline-block no-underline  hover:text-gray-900 hover:text-underline cursor-pointer">🇬🇧</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <a id="fly-wa" href="https://wa.me/6281356685616" class='fixed bottom-12 right-4 text-white bg-gray-500 py-2 px-3 rounded-full shadow-lg flex items-center gap-2 text-3xl z-10' target="_blank">
        <i class="fab fa-whatsapp" ></i>
        <span id="fly-wa-caption" class="text-base">{{__('nav.wa')}}</span>
    </a>
    <style>
        #fly-wa:hover{
            background-color: #128c7e;
            transition: background-color 0.4s ease-in-out;
        }
        #fly-wa:hover #fly-wa-caption {
            display: inline;
        }
        #fly-wa-caption {
            display: none;
        }
    </style>

    {{-- <x-atom.button-fly-wa >    
    </x-atom.button-fly-wa>     --}}
</div>