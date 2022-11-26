<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | MonTrip</title>
</head>
<body>
    <main>
        <h1>@yield('title')</h1>
        @yield('main')
    </main>
    <footer>
        MonTrip &copy; 2022
    </footer>
</body>
</html>