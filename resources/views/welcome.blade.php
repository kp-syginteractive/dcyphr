<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen antialiased leading-none">
<div class="flex flex-col px-2">
    <div class="min-h-screen flex justify-center">
        <div class="flex flex-col justify-center h-full">
            <div class="text-center mt-4 text-sm lg:text-base">
                <img src="images/logo.svg" class="w-1/3 mx-auto mb-4" />
                <h1 class="text-black font-light tracking-wider my-2">Laravel | Vue | Tailwind - Development, Consulting & Training</h1>
                <p class="text-gray-600 font-light leading-loose my-6 lg:my-12">Our new website is coming soon <br />but in the meanwhile, email <a href="mailto:hello@dcyphrdigital.com.au">hello@dcyphrdigital.com.au</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
