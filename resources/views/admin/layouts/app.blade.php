<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>administration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>

<div class="alert alert-primary container" role="alert">
  <center><h1>Bienvenue sur la console Administration</h1></center>
  <a href="/admin">Home</a>
  <a href="/admin/create_voyage">Création</a>
</div>
    @yield('index')
    @yield('create_voyage')
    @yield('update_voyage')
    @yield('info_voyage')
    @yield('search')
  </body>
</html>
