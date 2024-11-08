<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@100..700&display=swap" rel="stylesheet">
        <title>Главная</title>
        @vite('resources/css/app.css')
    </head>
    <body >
        @include('components/header')
        @include('components/main_img')
        @include('components/news')
        @include('components/reviews')
        @include('components/footer')

    </body>
</html>