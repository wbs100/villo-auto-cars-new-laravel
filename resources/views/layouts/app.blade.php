@include('public-site.header.head')

<body>

    @hasSection('custom-header')
        @yield('custom-header')
    @else
        @include('public-site.header.header')
    @endif

    @yield('content')

    @include('public-site.footer.footer')

    @include('public-site.footer.js')

    @stack('page-ajax')
</body>

</html>
