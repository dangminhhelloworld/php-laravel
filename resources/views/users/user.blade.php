<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

    <header><H1>Đây là header</H1></header>
    <main>
        <div class="content">
        @yield('content')
            <p>Tìm kiếm </p>

        
        </div>
    </main>
    <footer>
        <h1>Đây là footer</h1>
    </footer>

</body>
</html>