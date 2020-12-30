<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Una parola al giorno')</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="https://unaparolaalgiorno.it/favicon.ico">

        <!-- css -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('partials.header')

        welcome

        @include('partials.footer')
    </body>
</html>
