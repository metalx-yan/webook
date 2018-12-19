<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
<body class="bg-light">
    @include('partials._navbar')

    @yield('content')

    @include('partials._footer')
    @include('partials._javascript')
</body>
</html>