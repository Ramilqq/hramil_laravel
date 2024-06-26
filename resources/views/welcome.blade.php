<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>
        <meta name="description" content="Site {{ env('APP_NAME') }}">

        <meta property="og:title" content="{{ env('APP_NAME') }}">
        <meta property="og:description" content="{{ env('APP_NAME') }}">
        <meta property="og:image" content="{{ env('APP_NAME') }}">
        <meta property="twitter:card" content="{{ env('APP_NAME') }}">

        <!-- Styles -->
        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div id="app"></div>
    </body>
</html>
