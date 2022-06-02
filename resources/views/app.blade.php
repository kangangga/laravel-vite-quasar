<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    <meta name="description" content="Your app description">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="alternate icon" href="/favicon.ico" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" sizes="180x180">
    <link rel="mask-icon" href="/favicon.svg" color="#FFFFFF">
    <meta name="theme-color" content="#1976d2">

    @vite
</head>

<body class="antialiased">
    @inertia
</body>

</html>
