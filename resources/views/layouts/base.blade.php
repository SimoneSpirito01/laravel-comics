<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials.header')
    <main>
        <div class="content">
            <div class="container">
                <div class="title">
                    <span>Current Series</span>
                </div>
                <div class="series">
                    @yield('content')
                </div>
                <div class="load">
                    <span>Load More</span>
                </div>
            </div>
        </div>
    </main>
    @include('partials.footer')

    <script src="js/app.js"></script>
</body>
</html>