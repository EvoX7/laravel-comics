<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head_links')

    <title>Laravel Comics</title>
</head>

<body>
    @include('includes.header')

<main>@yield('main_content')

</main>
@include('includes.footer')
</body>

   @yield('final_scripts')

</html>