<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">

    <style>
        .active{
            color: green;
            font-weight: bold;
        }
    </style>

</head>
<body>
    
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

</body>
</html>