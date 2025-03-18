<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">

    <style>
        .active {
            color: white;
            font-weight: bold;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        main {
            flex-grow: 1;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    @include('layouts.partials.header')

    <main class="flex-grow">
        <div class="w-full bg-white">
            @yield('content')
        </div>
    </main>

    @include('layouts.partials.footer')
</body>

</html>
