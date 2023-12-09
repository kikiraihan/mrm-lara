<x-slot name="stylehalaman">
    @livewireStyles
</x-slot>

<x-slot name="scripthalaman">
    @livewireScripts
    @include('layouts.scriptsweetalert')
</x-slot>


<div class="w-full p-4">
    {{-- <div class="flex items-center space-x-2">
        <div class="text-2xl font-bold">Dashboard</div>
        <div class="text-gray-500">/</div>
        <div class="text-gray-500">Home</div>
    </div> --}}

    {{-- @for ($i = 0; $i < 20; $i++)
    <div class="text-justify">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eaque aspernatur exercitationem corporis harum debitis iusto aut blanditiis rem, impedit consectetur inventore eligendi eos quasi quam officiis quia asperiores quos?
    </div>
    @endfor --}}

    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$portCount}}</span>
                    <h3 class="text-base font-normal text-gray-500">Jumlah Portfolio</h3>
                </div>
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-5xl font-bold text-orange-400">
                    <i class='bx bxs-book-content'></i>
                </div>
            </div>
        </div>

        {{-- <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">100</span>
                    <h3 class="text-base font-normal text-gray-500">Jumlah Klien</h3>
                </div>
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-5xl font-bold text-blue-400">
                    <i class='bx bxs-group' ></i>
                </div>
            </div>
        </div> --}}

    </div>
</div>