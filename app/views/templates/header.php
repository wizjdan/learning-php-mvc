<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data["halaman"]; ?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">Lerning PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
            </div>
            </div>
        </div>
    </nav>
     <!-- Navbar End -->