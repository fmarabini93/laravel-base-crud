<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.css' integrity='sha512-9LMt8yHSTC2NNj7wxs1u0wfc8JsHPz2IO3hPj5ZOVhM60uMHDhWxEzO+Yz9wBCJRoMa4UHItzgdwW4ZxVG2O4g==' crossorigin='anonymous'/>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css' integrity='sha512-vZWT27aGmde93huNyIV/K7YsydxaafHLynlJa/4aPy28/R1a/IxewUH4MWo7As5I33hpQ7JS24kwqy/ciIFgvg==' crossorigin='anonymous'/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{ $title }}</title>
    </head>
    <body>
        @include('partials.header')
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Show</th>
                    <th scope="col">Modify</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic['title'] }}</th>
                            <td><a href="{{ route('comics.show', $comic->id) }}"><button><i class="fas fa-search"></i></button></a></td>
                            <td><button><i class="fas fa-exchange-alt"></i></button></td>
                            <td><button><i class="fas fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </body>
</html>