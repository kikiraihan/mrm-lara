<aside class="flex-none w-1/2 md:w-1/6 fixed md:relative md:flex flex-col space-y-2 border-r-2 border-gray-200 p-2 h-screen md:h-auto" x-show="asideOpen" style="background-color: rgba(255, 255, 255, 0.95);">

    @foreach ([
        ['judul'=>'Dashboard','icon'=>'bx bxs-dashboard','route'=>'admin.dashboard'],
        ['judul'=>'Portfolio','icon'=>'bx bxs-book-content','route'=>'admin.portfolio'],
        
        // ['judul'=>'Cart','icon'=>'bx bx-cart','route'=>'#'],
        // ['judul'=>'Shopping','icon'=>'bx bx-shopping-bag','route'=>'#'],
        // ['judul'=>'My Favourite','icon'=>'bx bx-heart','route'=>'#'],
        // ['judul'=>'Profile','icon'=>'bx bx-user','route'=>'#'],
    ] as $item)
    
        <a href="{{ route($item['route']) }}" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
            <span class="text-2xl"><i class="{{$item['icon']}}"></i></span>
            <span>{{$item['judul']}}</span>
        </a>
    @endforeach
        {{-- <a target="_blank" href="https://app.crisp.chat/" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
            <span class="text-2xl"><i class='bx bxs-message-dots' ></i></span>
            <span>Chat</span>
        </a> --}}
    

    
</aside>