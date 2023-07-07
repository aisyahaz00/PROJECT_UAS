<!DOCTYPE html>
<html lang="en">
<head>
    @include('auth.includes.head')
</head>
<body>
        
    @yield('content')

    <footer>
    @include('auth.includes.footer')
    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script>
    @include('auth.includes.script')
    </script>

</body>
</html>

