@include('public-site.header.head')

<body>

    @include('public-site.header.header')

    @yield('content')

    @include('public-site.footer.footer')

    @include('public-site.footer.js')

    @stack('page-ajax')
</body>

</html>