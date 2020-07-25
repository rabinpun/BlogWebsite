<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 @include('include.navbar') 
</head>
<body>
        <div class="container">
                @include('include.message')
                @yield('content')</div>
                <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'article-ckeditor' );
                </script>
    
</body>
</html>