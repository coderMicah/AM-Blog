<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
</head>

<body class="px-8 max-w-7xl mx-auto bg-body text-white font-nunito-sans">
    <x-header />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
