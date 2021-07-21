<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Document</title>
    </head>
    <body>
        <section>
            <ul>
                <li><p>{{ $comic['description'] }}</p></li>
                <li><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></li>
                <li><small>{{ $comic['price'] }}</small></li>
                <li><small>{{ $comic['series'] }}</small></li>
                <li><small>{{ $comic['sale_date'] }}</small></li>
                <li><small>{{ $comic['type'] }}</small></li>
            </ul>
        </section>
    </body>
</html>