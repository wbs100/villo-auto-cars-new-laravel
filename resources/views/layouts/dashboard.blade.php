@include('dashboard.header.head')

<body class="bg-gray-100">
    @include('dashboard.header.header')

    <!-- Main Content Area with Sidebar -->
    <div class="flex mt-16">

        @include('dashboard.header.sidebar')

        <!--main-->
        <div id="mainContent" class="flex-1 md:ml-64 p-3 md:p-6 pb-20 md:pb-20 overflow-x-auto sidebar-transition relative min-h-[calc(100vh-64px)]">
            @yield('content')

            @include('dashboard.footer.footer')
        </div>

        @include('dashboard.modals.modals')

    </div>

    {{-- replaced invalid script path with `@stack` to allow view-specific scripts --}}
    @stack('scripts')
</body>

</html>
