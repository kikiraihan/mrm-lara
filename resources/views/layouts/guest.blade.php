<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Abas Architects</title>
        <meta name="author" content="CV Abas Architects" />
        <meta name="description" content="Merupakan studio Perancangan Arsitektur berbasis di Gorontalo, Indonesia. Berdiri sejak 2019. AAR hadir untuk menjadi partner/sahabat dalam mewujudkan asa-mu. Dengan perspektif desain yang segar, edukasi dan berkarakter dengan semangat kolaborasi antara Arsitek muda berbakat di Indonesia, stakeholders dan owner."/>
        <meta name="keywords" content="Arsitektur, Interior, Religion Project, Engineering" />
        <link rel="shortcut icon" href="{{ asset('asset_landing/logo-2.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
