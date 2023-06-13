<!DOCTYPE html>
<html lang="en">

@include('Layout.auth.head')

<body class="hold-transition @yield('body-class') light-mode">
    @yield('content')
    @include('Layout.default.script')
</body>

</html>
