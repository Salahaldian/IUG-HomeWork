<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body>
        <!-- Navigation-->
        @include('includes.navbar')
        <!-- Page Header-->
        @yield('header')
        <!-- Main Content-->
        @yield('mainContent')
        <!-- Footer -->
        @include('includes.footer')
    </body>
</html>
