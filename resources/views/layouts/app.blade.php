<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('scss/app.scss') }}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body class="bg-gray-100">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="#" class="p-3">Home</a>
                </li>
                <li>
                    <a href="#" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="p-3">Post</a>
                </li>
            </ul>
            <ul class="flex items-center">
                <li>
                    <a href="#" class="p-3">Do Duc Duy</a>
                </li>
                <li>
                    <a href="#" class="p-3">Logout</a>
                </li>
                <li>
                    <a href="#" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
