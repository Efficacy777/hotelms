<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'HotelMS') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md mx-auto text-center">
            <h1 class="text-4xl font-bold text-brand-600 mb-4">{{ config('app.name') }}</h1>
            <p class="text-gray-600 mb-6">Hotel Management Platform</p>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-sm text-gray-500">Welcome to your hotel management system.</p>
            </div>
        </div>
    </div>
</body>
</html>