<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>PT. Berkah Perkasa | {{ $title }}</title>
</head>
<body>
  @include('partials.navbar')
  <div class="container">
    @yield('container')
  </div>
  <footer class="d-flex flex-wrap justify-content-center py-3 my-5 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">&copy; 2021 Aziz Nurulloh</span>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/aziznurulloh8/"><i class="bi bi-instagram"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://github.com/aziznurulloh8910/simple-transaction-laravel"><i class="bi bi-github"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.linkedin.com/in/aziz-nurulloh-796a00197/"><i class="bi bi-linkedin"></i></a></li>
    </ul>
  </footer>
</body>
</html>
