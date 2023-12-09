<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    {{-- SEO --}}
    <title>Jasa Arsitek Indonesia Gorontalo - Abas Architects</title>
    <meta name="author" content="CV Abas Architects" />
    <meta name="description" content="Studio perancangan yang menyediakan jasa arsitek, berbasis di Gorontalo. Menawarkan desain yang fresh, minimalis, dan fungsional, hasil kolaborasi antara Arsitek berbakat di Indonesia."/>
    <meta name="keywords" content="Jasa, Arsitektur, Arsitek, Gorontalo, Interior, Desain Masjid" />
    <link rel="shortcut icon" href="{{ asset('asset_landing/logo-2.png') }}" type="image/x-icon">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VLR8RCP3X0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-VLR8RCP3X0');
    </script>
    {{-- ENDSEO --}}
    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com/3.2.6"></script>
    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" /> --}}
    <!--Replace with your tailwind.css once created-->
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    {{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}


    {{-- PWA MANIFEST --}}
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="assets_kiki/icon_app/icon-192x192.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="white" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Hello World">
    <meta name="msapplication-TileImage" content="assets_kiki/icon_app/icon-192x192.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    {{-- PWA end --}}

	<style>
		@import url("https://rsms.me/inter/inter.css");
		html {
		  font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
			Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
			"Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
			"Noto Color Emoji";
		}
	  </style>

    {{$stylehalaman}}

</head>


<body class="font-sans leading-normal tracking-normal">

    {{$header}}

    {{-- <div class="container w-full md:max-w-4xl mx-auto pt-20">
    </div> --}}
    <!--Container-->
    {{$slot}}
    <!--/container-->

    {{$footer}}

    {{-- alpine --}}
    {{-- <script src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script> --}}
    {{-- font awesome --}}
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    {{-- sweetalert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        /* Progress bar */
        //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
        var h = document.documentElement,
            b = document.body,
            st = 'scrollTop',
            sh = 'scrollHeight',
            progress = document.querySelector('#progress'),
            scroll;
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");


        //Javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function () {
            document.getElementById("nav-content").classList.toggle("hidden");
        }

    </script>


    <script>
        let pressedKeys = [];
        document.addEventListener('keydown', function(event) {
            pressedKeys.push(event.key);
            if (pressedKeys.includes('`') && pressedKeys.includes('1') ) {
                window.location.href = '{{ route('login') }}';
            }
        });
        document.addEventListener('keyup', function(event) {
            let keyIndex = pressedKeys.indexOf(event.key);
            if (keyIndex > -1) {
                pressedKeys.splice(keyIndex, 1);
            }
        });
    </script>

    {{$scripthalaman}}

</body>

</html>
