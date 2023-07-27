<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row my-5">
                @forelse($comics as $comic)
                <div class="card mb-3 mx-2" style="max-width: 600px;">
                    <div class="row g-0">
                      <div class="col-md-4 ps-0">
                        <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->cover_image}}">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-between">
                          <h5 class="card-title">{{$comic->title}}</h5>
                          <p class="card-text" id="description">{{$comic->description}}</p>
                          <p class="card-text"><small class="text-body-secondary">{{$comic->sale_date}}</small></p>
                          <p class="card-text"><strong>{{$comic->price}}</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                    <div class="col-12">
                        Not found! (COMICS)
                    </div>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>