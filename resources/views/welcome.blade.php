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
            <div class="text-center mt-4">
                <img src="images/logo.svg" class="w-1/2 mx-auto" />
                <h1 class="text-gray-900 font-light tracking-wider text-lg mb-6">Laravel | Vue | Tailwind - Development, Consulting & Training</h1>
                <p class="text-gray-600 font-light leading-loose text-sm lg:text-lg my-10 lg:my-32">SYG Interactive is now DCYPHR Digital. Our new website is coming soon <br />but in the meanwhile, <a href="http://www.syginteractive.com">visit www.syginteractive.com</a> or email <a href="mailto:hello@dcyphrdigital.com.au">hello@dcyphrdigital.com.au</a></p>
            </div>
            <div class="text-center lg:text-left">
                <h2 class="text-gray-900 tracking-wider text-xl mb-6">Our Work</h1>
                <div class="lg:flex lg:items-center lg:justify-between">
                    <a href="https://www.brooksrunning.com.au"><img src="images/client-logos/brooks.svg" class="w-1/3 mx-auto lg:w-32 mb-6" /></a>
                    <a href="https://au.diesel.com"><img src="images/client-logos/diesel.png" class="w-1/3 mx-auto lg:w-32 mb-6" /></a>
                    <a href="https://www.gmcricket.com.au"><img src="images/client-logos/gm.png" class="w-1/3 mx-auto lg:w-32 mb-6" /></a>
                    <a href="https://www.jansport.com.au"><img src="images/client-logos/jansport.png" class="w-1/3 mx-auto lg:w-32 mb-6" /></a>
                    <a href="https://www.rhsports.com.au"><img src="images/client-logos/rhsports.jpg" class="w-1/3 mx-auto lg:w-32 mb-6" /></a>
                    <a href="https://www.skatersnetwork.com.au"><img src="images/client-logos/skaters.png" class="w-1/3 mx-auto lg:w-32 mb-6" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
