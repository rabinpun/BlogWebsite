<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 @include('include/navbar') 
</head>
<body>
        <div class="container">@yield('content')</div>
    
</body>
</html>