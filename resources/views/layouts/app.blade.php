<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')

    <style>

    </style>
</head>
<body>
@include('includes.sidebar')
    <header>
        @include('includes.header')
    </header>
    <div class="container">
    @yield('content')

</div>
    @include('includes.footer')
    

    @yield('js')
</body>
</html>