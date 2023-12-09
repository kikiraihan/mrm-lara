<x-slot name="stylehalaman">
    @livewireStyles
    <style>
        body {
            background-color: #F3F4F6;
        }

        .__caption {
        opacity: 0;
        transition: opacity 0.0001s ease-in-out;
        }

        .parent-element:hover .__caption {
        opacity: 1;
        }
    </style>
</x-slot>
<x-slot name="scripthalaman">
    @livewireScripts
    @include('layouts.scriptsweetalert')

    <script>
        // Memilih semua elemen yang ingin dihover
        const hoverableElements = document.querySelectorAll('.__hover-fade');

        // Loop melalui setiap elemen dan menambahkan event listener
        hoverableElements.forEach(element => {
            element.addEventListener('mouseover', function() {
                this.querySelectorAll('.__caption').forEach(function(child) {
                    child.classList.add('animate__animated');
                    child.classList.add('animate__fadeIn');
                    child.classList.add('animate__delay-0.0001s');
                });
            });
            
            element.addEventListener('mouseout', function() {
                this.querySelectorAll('.__caption').forEach(function(child) {
                    child.classList.remove('animate__animated');
                    child.classList.remove('animate__fadeIn');
                    child.classList.add('animate__delay-0.0001s');
                });
            });
        });
    </script>
</x-slot>

<x-slot name="header">

    @livewire('components.navbar')
    <script>
        header.classList.add("bg-white");
        header.classList.add("shadow-sm");
        navcontent.classList.add("bg-white");
    
        document.addEventListener('scroll', function () {
            /*Refresh scroll % width*/
            scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            progress.style.setProperty('--scroll', scroll + '%');
    
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;
        });
    </script>
</x-slot>


<x-slot name="footer">
    @include('layouts.landing.footer',['lightmode'=>True])
</x-slot>


<div class="bg-gray-100 py-16 animate__animated animate__fadeIn">
    <div class="md:grid md:grid-cols-4 items-center mx-auto py-2 gap-2">
        <div class="flex col-start-2">
            <button class="w-auto flex justify-end items-center text-gray-50 p-2 hover:text-gray-100 bg-sky-800 shadow">
                <i class="fas fa-search"></i>
            </button>
            <x-atom.form-input-standar placeholder="Search" type="text" wire:model.debounce.500ms="search" class="w-full rounded-none p-2" />
        </div>

        <div class="text-right col-start-3 mb-2 md:mb-0">
            <div class="block shadow bg-white border-none text-sm w-full focus:outline-none focus:ring-2 focus:ring-blue-300">
                <div class="flex justify-between divide-x">
                    @foreach ([
                        __('port.k0')=>'',
                        __('port.k1')=>'arsitektur',
                        __('port.k2')=>'interior',
                        __('port.k3')=>'religion project',
                    ] as $idx=>$item)
                        <button wire:click="pilihKategori('{{$item}}')" class="flex-auto p-2 @if($item==$kategori) bg-sky-800 text-gray-50 @else hover:bg-gray-200 active:bg-gray-300 @endif">{{$idx}}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @if ($isiTabel->isEmpty())
        <x-atom.empty-table :bgwhite="False"/>
    @else
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 " wire:loading.remove wire:target="pilihKategori,getData">
        @foreach ($isiTabel as $item)
            <a href="{{ route('landing.portfolio.show', ['id'=>$item->id]) }}" class="w-full bg-white p-2 relative justify-center items-center gap-2 __hover-fade">
                <div>
                    <img class="bg-sky-800 object-center object-cover " src="{{ $item->CoverIfNullReturnTemplate }}" alt="photo">
                </div>
                <div class="__caption text-center absolute w-full bottom-0 left-0 right-0 h-full p-6">
                    <div class="h-full w-full grid grid-flow-col grid-rows-2 gap-2" style="background-color: rgba(255, 255, 255, 0.85);">
                        <p class="text-xs mt-auto text-gray-700 font-bold uppercase">{{$item->judul}}</p>
                        <sub class="mb-auto text-gray-400 font-normal">{{$item->kategori}}</sub>
                    </div>
                </div>
            </a>
        @endforeach

    </section>
    <div class="px-3 py-2 mb-10" wire:loading.remove wire:target="pilihKategori,getData">
        {{ $isiTabel->links() }}
    </div>
    @endif
    
    <div wire:loading.delay.longer wire:target='pilihKategori,getData'>
        <x-atom.loading_fullpage-image  />
    </div>
    
</div>
