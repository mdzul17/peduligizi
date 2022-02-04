<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

    <title>@yield('title')</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link text-center active" aria-current="page" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#features">Fitur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#calculator">Kalkulator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{route('rekomendasi')}}">Rekomendasi Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{route('article')}}">Artikel</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    @yield('content')
    
    <div class="container" id="footer">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2021 PeduliGizi</p>
        <ul class="nav col-md-6 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Beranda</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Tentang Kamis</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Fitur</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Kalkulator</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Rekomendasi Menu</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Artikel</a></li>
        </ul>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
