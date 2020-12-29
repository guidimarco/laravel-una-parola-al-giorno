<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Una parola al giorno')</title>

        <!-- css -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('partials.header')

        welcome

        @include('partials.footer')
    </body>
</html>
