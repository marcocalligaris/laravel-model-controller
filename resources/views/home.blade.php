<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Home</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }} " type="text/css">
</head>
<body class="bg-info">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <section>
        <div class="container">
            <h1 class="py-4">Lista dei film</h1>
            <div class="row g-5 d-flex ">
                @foreach($movies as $movie)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header fw-bold"> Titolo: {{ $movie->title }}</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Titolo originale: {{ $movie->original_title }}</li>
                            <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Data di uscita: {{ $movie->date }}</li>
                            <li class="list-group-item">Voto: {{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>