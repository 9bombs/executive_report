<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{Html::style('./css/app.css')}}
    @if(Auth::check()) 
        @include('layouts.header')
    @endif
    </head>

    @yield('content')

    @include('layouts.footer')
</body>
</html>
