<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet"> 

    <title>Laravel Comics</title>
</head>

<body>
    @include('includes.header')
    @include('includes.hero')

<main>
    @yield('gallery')

</main>
@include('includes.footer')
</body>

   
   <script src="{{asset('js/app.js')}}"></script>

</html>