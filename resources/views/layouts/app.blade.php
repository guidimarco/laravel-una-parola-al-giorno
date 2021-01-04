<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Una parola al giorno')</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="https://unaparolaalgiorno.it/favicon.ico">

        <!-- responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">

        <!-- css -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="root">
            @include('partials.header')

            @yield('main')

            @include('partials.footer')
        </div>

        <!-- js -->
        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
