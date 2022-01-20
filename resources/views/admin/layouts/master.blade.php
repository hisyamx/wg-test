<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}" type="svg">
    <title>Admin @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/intellow/x-selectpicker/dist/x-selectpicker.js" defer></script>
    @yield('page-css')
    @livewireStyles
</head>
<body>
        @include('admin.layouts.header')
            @yield('content')
        </div>
    </div>
    @livewireScripts
    @yield('page-js')
    <script>
        const button = document.getElementById('menuToggle');
        const menu = document.getElementById('menu');
        const body = document.getElementsByTagName('body')
        button.onclick = function (event) {
            event.preventDefault();
            menu.classList.toggle('hidden')
            body[0].classList.toggle('overflow-hidden')
        }
    </script>
</body>

</html>
