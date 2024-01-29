<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <nav>
            <h1 class="px-4 py-2 text-uppercase">Boolflix</h1>
        </nav>

    </header>
    <div class="container py-5">
        <main>
            <div class="d-flex justify-content-center">
                <h2 class="mb-3">Movies</h1>
            </div>

            <div class="d-flex gap-2 justify-content-center flex-wrap">
                @foreach ($movies as $movie)
                <div class="card col-4 p-3">
                    <h3>{{$movie['original_title']}}</h2>
                        <p>Nation: {{$movie['nationality']}}</p>
                        <p>Release date:{{$movie['date']}}</p>
                        <p>Vote:{{$movie['vote']}}</p>

                </div>
                @endforeach
            </div>
        </main>
    </div>

</body>

</html>