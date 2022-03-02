<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}vendors.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}colors.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}components.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}themes/bordered-layout.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}themes/semi-dark-layout.min.css">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}forms/form-validation.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}authentication.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('css')}}style.css">
        <!-- END: Custom CSS-->

        <!-- Scripts -->
        <script src="{{ asset('js/app-origin.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
