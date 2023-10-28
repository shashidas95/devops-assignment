<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon-png') }}" />
    <link rel="stylesheet" href="{{ asset('https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css') }}" />
    <script src="{{ asset('https://cdn.tailwindcss.com') }}"></script>
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Landing | Tailwind Starter Kit by Creative Tim</title>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body class="text-gray-800 antialiased">


    @include('components.navbar')

    @yield('content')
    @include('components.footer')


</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>
