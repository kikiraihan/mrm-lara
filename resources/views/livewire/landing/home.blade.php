<x-slot name="stylehalaman">
    @livewireStyles
    <style>
        body {
            background-color: #032b56;
        }
        #slideshow {
            transition: background-image 0.5s ease-in-out;
        }
    </style>
</x-slot>
<x-slot name="scripthalaman">
    @livewireScripts
    @include('layouts.scriptsweetalert')
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    {{-- untuk counter --}}
    <script>
        const counters = document.querySelectorAll('.value');
        const speed = 200;

        counters.forEach( counter => {
        const animate = () => {
            const value = +counter.getAttribute('akhi');
            const data = +counter.innerText;
            
            const time = value / speed;
            if(data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 1);
                }else{
                counter.innerText = value;
                }
            
        }
        
        animate();
        });
    </script>

    <script>
        // Memilih semua elemen yang ingin dihover
        const hoverableElements = document.querySelectorAll('.__hover-pulse');

        // Loop melalui setiap elemen dan menambahkan event listener
        hoverableElements.forEach(element => {
            element.addEventListener('mouseover', function() {
                this.classList.add('animate__animated');
                this.classList.add('animate__pulse');
            });
            
            element.addEventListener('mouseout', function() {
                this.classList.remove('animate__animated');
                this.classList.remove('animate__pulse');
            });
        });
    </script>

    {{-- slideshow --}}
    <script>
        var images = [
            '{{asset('asset_landing/slideshow/1.webp')}}',
            '{{asset('asset_landing/slideshow/2.jpg')}}',
            '{{asset('asset_landing/slideshow/5.jpg')}}',
        ];
        var currentIndex = 0;
        var slideshow = document.getElementById('slideshow');

        setInterval(function() {
            currentIndex = (currentIndex + 1) % images.length;
            slideshow.style.backgroundImage = 'url(' + images[currentIndex] + ')';
        }, 3000);
    </script>

</x-slot>

<x-slot name="header">

    {{-- <div wire:loading>
        <x-atom.loading_fullpage-image  />
    </div> --}}

    @livewire('components.navbar',['ta'=>True])
    <script>
        document.addEventListener('scroll', function () {
            /*Refresh scroll % width*/
            scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            progress.style.setProperty('--scroll', scroll + '%');
    
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;
    
            if (scrollpos > 10) {
                header.classList.add("bg-white");
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
    
            }
        });
    </script>
</x-slot>

<x-slot name="footer">
    @include('layouts.landing.footer',['lightmode'=>False])
</x-slot>



<div class="">
    <div id="slideshow" class="bg-fixed md:bg-fixed bg-center bg-cover bg-no-repeat flip-horizontal w-full" style="background-image: url('{{asset('asset_landing/slideshow/2.jpg')}}');">
        <section class="container mx-auto h-screen flex flex-col gap-6 items-center justify-center">
            <div class="font-bold text-5xl px-4 __hover-pulse" style="font-family: 'Montserrat';">
                <img class="w-32 pb-5" src="{{ asset('asset_landing/logo-1.png') }}">
                <span style="color:#003F83">Uniting</span> Hearts,<br> Words, and Deeds
            </div>
            {{-- <p>"{{$quote}}" ~ {{$who}}</p> --}}
        </section>

        <section class="pb-24" style="background-color: rgba(255, 255, 255, 0.5);">

            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon style="color: rgba(255, 255, 255, 0.5)" class=" fill-current" points="0 0 0 100 2560 100"></polygon>
                </svg>
            </div>

            <div class="md:flex mx-auto md:w-3/4 justify-center gap-20 px-5 space-y-6 md:space-y-0">
                <div class="w-full text-justify text-base flex flex-col gap-5 bg-transparent">
                    <div class="text-xl">ABAS <br><b>ARCHITECT</b> <i>(AAR)</i></div>
                    <p>
                        {{ __('home.about.p1') }}
                    </p>
                    <p>
                        {{ __('home.about.p2') }}
                    </p>
                </div>
                <div class="w-full flex flex-col gap-2 justify-center">
                    <b class="text-xl" style="color: #003F83">Mopotuwawu Kalibi, Kauli, Wawu Pi’ili*</b>
                    <i>Uniting Hearts, Words, And Deeds</i>
                    <i>Menyatukan Hati, Perkataan, dan Perbuatan</i>
                    <span class="text-xs text-gray-500">{{ __('home.about.p3') }}</span>
                </div>
            </div>
        </section>
    </div>



    <div class="bg-fixed  bg-center bg-cover bg-no-repeat flip-horizontal w-full" >
        {{-- style="background-image: url('{{asset('asset_landing/1.jpg')}}');" --}}

        <section class="py-24" style="background-color: rgba(255, 255, 255, 0.95);">
            <div class="text-center pb-12">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-heading text-gray-600 " style="font-family: 'Montserrat'; font-weight: 400;">
                    {{__('home.value.judul.1')}} <span style="color: #003F83; font-weight: 600;">{{__('home.value.judul.2')}}</span>
                </h1>
            </div>
            <div class="md:flex mx-auto md:w-3/4 justify-center gap-20 px-5 space-y-6 md:space-y-0">
                @foreach ([
                    ['judul'=>__('home.value.p1.1'),'text'=>__('home.value.p1.2'),'src'=>'asset_landing/value/1.svg'],
                    ['judul'=>__('home.value.p2.1'),'text'=>__('home.value.p2.2'),'src'=>'asset_landing/value/2.svg'],
                    ['judul'=>__('home.value.p3.1'),'text'=>__('home.value.p3.2'),'src'=>'asset_landing/value/3.svg'],
                ] as $item)
                    <div>
                        <div class="flex flex-col items-center">
                            <img class="w-32 pb-5" src="{{ asset($item['src']) }}">
                            <b class="font-bold" style="color: #003F83">{{$item['judul']}}</b>
                            <p class="text-justify">{{$item['text']}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
        
        <section class="py-24" style="background-color: rgba(255, 255, 255, 0.9);">
            <div class=" max-w-4xl mx-auto px-4 sm:px-6 lg:px-4">
                <div class="text-center pb-12">
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-heading text-gray-600 " style="font-family: 'Montserrat'; font-weight: 400;">
                        {{__('home.team.judul.1')}} <span style="color: #003F83; font-weight: 600;">{{__('home.team.judul.2')}}</span>
                    </h1>
                </div>
    
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-6">
    
                    @foreach ([
                        ['src' => 'asset_landing/our-team/t1.webp', 'nama' => 'M.NASHRULLAH ABAS S.T','role'=>'FOUNDER & CEO, PRINCIPAL DESIGNER'],
                        ['src' => 'asset_landing/our-team/t2.webp', 'nama' => 'AR. MUH.RIZAL MAHANGGI ST.,MT., IAI.','role'=>'PRINCIPAL ARSITEKTUR'],
                        ['src' => 'asset_landing/our-team/t3-2.webp', 'nama' => 'ZAINULFIKAR MISTAM S.DS','role'=>'SENIOR DESIGNER, HIGH REPRESENTATIVE'],
                        ['src' => 'asset_landing/our-team/t3.webp', 'nama' => 'ZULKIFLI PAKAYA S.T','role'=>'SUPERVISOR & DESIGN DIRECTOR'],
                        ['src' => 'asset_landing/our-team/t4.webp', 'nama' => 'SULAEMAN','role'=>'JUNIOR ARCHITECT'],
                        ['src' => 'asset_landing/our-team/t5.webp', 'nama' => 'MUH. SAIFUL Z. LAMBAUSE','role'=>'JUNIOR ARCHITECT'],
                    ] as $idx=>$item)
                        <div class="w-full p-3 flex flex-col justify-start items-center __hover-pulse">
                            <div class="mb-8">
                                <img class="@if ($idx % 2 == 0) bg-sky-800 @else bg-gray-100 @endif object-center object-cover shadow-inner" src="{{ asset($item['src']) }}" alt="photo">
                            </div>
                            <div class="text-center">
                                <p class="text-xs text-gray-700 font-bold mb-2">{{$item['nama']}}</p>
                                <sup class="text-gray-400 font-normal">{{$item['role']}}</sup>
                            </div>
                        </div>
                    @endforeach
                </div>
    
            </div>
    
        </section>

        
    </div>


    <section class="bg-white border-t py-8">

        <div class="max-w-7xl  mx-auto px-4 sm:px-6 lg:px-4">

            <div class="text-center pb-12">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-heading text-gray-600 " style="font-family: 'Montserrat'; font-weight: 400;">
                    {{__('home.client.judul.1')}} <span style="color: #003F83; font-weight: 600;">{{__('home.client.judul.2')}}</span>
                </h1>
            </div>

            <!-- Cards -->
            <div class="md:max-w-2xl mx-auto px-12 pb-12">
                <div class="grid gap-4 grid-cols-2">
                    <!-- Card -->
                    @foreach ([
                        ['icon'=>'fas fa-users','title'=>__('home.client.icon.1'),'counter'=>354,'warna'=>'blue'],
                        ['icon'=>'fas fa-shoe-prints','title'=>__('home.client.icon.2'),'counter'=>$port_count,'warna'=>'orange'],
                    ] as $item)
                    <div class="flex items-center p-2 rounded-lg justify-center">
                        <div class="p-3 mr-4 text-{{$item['warna']}}-500 bg-{{$item['warna']}}-100 rounded-full dark:text-{{$item['warna']}}-100 dark:bg-{{$item['warna']}}-500 h-14 w-14 flex items-center justify-center">
                            <i class="{{$item['icon']}}"></i>
                        </div>
                        <div>
                            <p class="mb-2 if @if ($item['title']=='Non Penerima Aktif') text-xs @else text-sm @endif font-medium text-gray-600 dark:text-gray-400">
                                {{$item['title']}}
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200 value" akhi='{{$item['counter']}}'  wire:ignore>
                                0
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach ([
                    ['src' => 'asset_landing/clients/1.jpg', 'nama' => 'Al-Ishlah Gorontalo'],
                    ['src' => 'asset_landing/clients/2.jpg', 'nama' => 'Al-Kautsar Gorontalo'],
                    ['src' => 'asset_landing/clients/3.jpg', 'nama' => 'Badan Pemeriksa Keuangan (BPK)'],
                    ['src' => 'asset_landing/clients/4.jpg', 'nama' => 'Insan Kamil'],
                    ['src' => 'asset_landing/clients/5.jpg', 'nama' => 'OMART'],
                    ['src' => 'asset_landing/clients/6.jpg', 'nama' => 'PT Jayakarta Mulia Sejantera'],
                    ['src' => 'asset_landing/clients/7.jpg', 'nama' => 'RS Multazam'],
                ] as $item)
                    <div class="w-full flex flex-col items-center __hover-pulse">
                        <div class="mb-5">
                            <img class="bg-white object-center object-cover shadow-inner h-28 w-80 border border-gray-4" src="{{$item['src']}}" alt="photo">
                        </div>
                        <div>
                            <sup class="text-gray-400 text-center">{{$item['nama']}}</sup>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- <section class="bg-gray-100 shadow pb-20">

    </section> --}}

    {{-- <section class="bg-gray-100 shadow pb-20">
        <!-- This is an example component -->
        <div class="px-4 md:px-0">
            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative shadow-lg h-96">
                    @foreach ([
                        ['src'=>'asset_landing/works/1.jpg'],
                        ['src'=>'asset_landing/works/2.jpg'],
                        ['src'=>'asset_landing/works/3.jpg'],
                        ['src'=>'asset_landing/works/4.jpg'],
                        ['src'=>'asset_landing/works/5.jpg'],
                        ['src'=>'asset_landing/works/6.jpg'],
                    ] as $item)
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($item['src']) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        </div>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section> --}}







    <section class="mb-8 bg-slate-50 shadow px-3 md:px-16 py-8 pb-20"> 

        <div class="text-center pb-12">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-heading text-gray-600 " style="font-family: 'Montserrat'; font-weight: 400;">
                {{__('home.contact.judul.1')}} <span style="color: #003F83; font-weight: 600;">{{__('home.contact.judul.2')}}</span>
            </h1>
        </div>

        <div class="md:flex gap-6 justify-center">
            <div class="md:w-2/3 bg-gray-100 border"  style="filter: grayscale(100%);">
                <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=0.5627919230069516, 123.03860747116389&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>

            <div class="md:w-1/3 md:flex flex-col gap-6">
                <div class="bg-gray-100 border p-3 flex flex-col md:gap-5 gap-2 mt-5 md:mt-0">
                    <div class="uppercase" style="font-family: 'Montserrat';">
                        {{__('home.contact.judul.alamat')}}
                    </div>
                    <div class="text-gray-500">
                        <a class="hover:text-blue-900"  href="https://goo.gl/maps/GCEehebJ9v3Td4tB6" target="_blank">
                            <img class="w-32 " src="{{ asset('asset_landing/logo-1.png') }}" style="filter: grayscale(100%);">
                            <span >CV. ABAS TEHNIK KONSULTAN</span>
                        </a>
                        <p >
                            {{__('home.contact.alamat')}}
                        </p>
                    </div>
                </div>
    
                <div class="bg-gray-100 border p-3 flex flex-col md:gap-5 gap-2 mt-5 md:mt-0">
                    <div class="uppercase" style="font-family: 'Montserrat';">
                        {{__('home.contact.judul.kontak')}}
                    </div>
                    <div class="text-sm flex flex-col gap-2">
                        <a class="hover:text-blue-800" href="tel:+6281356685616">
                            <i class="fas fa-phone-alt"></i> +62 813 5668 5616
                        </a>
                        <a class="hover:text-blue-800" href="mailto:abasarsitek01@gmail.com">
                            <i class="fas fa-envelope"></i> abasarsitek01@gmail.com
                        </a>
                        <a class="hover:text-blue-800" href="http://abasarchitects.com/">
                            <i class="fas fa-globe"></i> www.abasarchitects.com
                        </a>
                        <a class="hover:text-blue-800" href="https://www.instagram.com/abas.architect/" target="_blank">
                            <i class="fab fa-instagram"></i> @abas.architect
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
