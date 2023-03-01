<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- font-awesome-cdn --}}
    <script src="https://kit.fontawesome.com/f7eb148fe6.js" crossorigin="anonymous"></script>
    {{-- google-fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
</head>

<body class="bg-gray-100">

    <x-cursor />
    @include('partials._header')


    {{ $slot }}


    @include('partials._footer')
</body>

</html>
