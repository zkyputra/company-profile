<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"
    />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak Kami</a>
            </li>
            <?php $cek = Auth::user(); ?>
            @if (!empty($cek))
            <li><a href="{{ route('pegawai.index') }}" class="nav-link">Pegawai</a></li>
            <a class="btn btn-outline-light me-2" href="{{ route('logout') }}" role="button">{{ __('Logout') }}</a>
            @else
            <a class="btn btn-outline-light me-2" href="{{ route('login') }}" role="button">{{ __('Login') }}</a>
            @endif
        </ul>
        </div>
    </div>
    </nav>

    @yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
