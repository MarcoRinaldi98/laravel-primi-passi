<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link di collegamento al cdn di bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Titolo della pagina -->
    <title> Appello </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('appello') }}">APPELLO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-sm py-5">
            @if (count($alunni_presenti) == 0)
                <div class="alert alert-danger text-center fw-semibold" role="alert">
                    Oggi, {{ $data_odierna }}, tutti gli alunni sono assenti!
                </div>
            @elseif (count($alunni_presenti) > count($alunni))
                <div class="alert alert-warning text-center fw-semibold" role="alert">
                    Errore di battitura negli alunni presenti!
                </div>
            @else
                <ul class="list-group">
                    <li class="list-group-item active">Oggi è il {{ $data_odierna }} e ci sono
                        {{ count($alunni_presenti) }} alunni presenti:</li>
                    @foreach ($alunni_presenti as $alunno_presente)
                        <li class="list-group-item">{{ $alunno_presente }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </main>
</body>

</html>
