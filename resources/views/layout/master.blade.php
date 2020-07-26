<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">  

 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 @include('include.navbar') 
</head>
<body>
        <div class="container">
                @include('include.message')
                @yield('content')</div>
                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                <script>
                CKEDITOR.replace( 'summary-ckeditor' );
                </script>
    
</body>
</html>