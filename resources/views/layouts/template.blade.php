<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') DC</title>
</head>
<body>

    {{-- header comp --}}
    @include('partials.header')

    {{-- jumbo --}}
    <div class="jumbo">@yield('jumbo-screen')</div>

    <main>@yield('main-content')</main>

    {{-- footer comp --}}
    @include("footer")
</body>
</html>