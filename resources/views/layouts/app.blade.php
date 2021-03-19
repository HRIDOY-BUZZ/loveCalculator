<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('components.css')

</head>

<body id="bg">
    <div class="page-wraper">

        <!-- header -->
        @include('components.header')
        <!-- header END -->
        <!-- Content -->
        @yield('content')
        <!-- Content END-->
        <!-- Footer -->
        @include('components.footer')
        <!-- Footer END-->
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    @include('components.scripts')

</body>

</html>
