<x-slot name="stylehalaman">
    @livewireStyles
    <style>
        body {
            background-color: #F3F4F6;
        }
    </style>
</x-slot>
<x-slot name="scripthalaman">
    @livewireScripts
    @include('layouts.scriptsweetalert')
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

<x-slot name="header">

    {{-- <div wire:loading>
        <x-atom.loading_fullpage-image  />
    </div> --}}
    
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


<div class="py-14 h-screen w-full">
    
    <section class="bg-white md:h-screen md:w-1/4 md:float-left md:fixed animate__animated animate__fadeInLeft">
        <div class="text-4xl pt-10 px-6 f-robot font-bold uppercase">
            {{$data->judul}} 
        </div>
        <div class="text-gray-400 text-sm px-6 f-robot font-bold uppercase">
            {{$data->kategori}} 
        </div>

        <div class="flex flex-col px-6 mt-6 text-sm gap-2">
            <span>{{__('portdetail.location')}} : {{$data->lokasi}} </span>
            <span>{{__('portdetail.year')}} : {{$data->tahun}} </span>
            <span>{{__('portdetail.site')}} : {{$data->luas_situs}} {{__('portdetail.site.satuan')}}</span>
            <span>{{__('portdetail.flor')}} : {{$data->luas_lantai}} {{__('portdetail.flor.satuan')}}</span>
            <span>{{__('portdetail.tinggi')}} : {{$data->tinggi}} {{__('portdetail.tinggi.satuan')}}</span>
            <span>{{__('portdetail.mitra')}} : {{$data->pic}} </span>
            <span>{{__('portdetail.tipe')}} : {{$data->tipe}} </span>
        </div>

        
    </section>

    <section class="bg-gray-100 float-right px-3 pt-3 mb-16 md:w-3/4">
        <div class="flex flex-col gap-3">
            <img src="{{$data->CoverIfNullReturnTemplate}}" class="shadow" alt="EXTERIOR REV05 - 001C">
            @foreach ($data->gambar as $item)
                <img src="{{$item->path}}" class="shadow" alt="EXTERIOR REV05 - 001C">
            @endforeach
        </div>
    </section>
    
</div>
