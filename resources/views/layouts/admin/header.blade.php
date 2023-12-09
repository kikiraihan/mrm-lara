<header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2 pr-4 fixed z-20">
    <!-- logo -->
    <div class="flex items-center space-x-2">
        <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i class="bx bx-menu"></i></button>
        <div class="f-roboto font-bold">
            Administrator
        </div>
    </div>

    <!-- button profile -->
    <div class="flex">
        <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false"
            class="overflow-hidden rounded-full hover:shadow-md h-full">
            <img src="{{ asset('asset_landing/logo-1.png') }}" class="transform w-24 rounded-xl px-1 py-0.5">
        </button>

        <!-- dropdown profile -->
        <div class="absolute right-2 mt-10 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
            x-show="profileOpen" x-transition>
            {{-- <div class="flex items-center space-x-2 p-2">
                <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" class="h-9 w-9 rounded-full" />
                <div class="font-medium">Hafiz Haziq</div>
            </div> --}}

            <div class="flex flex-col space-y-3 p-2">
                <a href="{{ route('landing.home') }}" class="transition hover:text-blue-600">Site</a>
                {{-- <a href="#" class="transition hover:text-blue-600">Edit Profile</a>
                <a href="#" class="transition hover:text-blue-600">Settings</a> --}}
            </div>

            <div class="p-2">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link class="flex gap-2 items-center justify-center" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>


            </div>
        </div>
    </div>
</header>