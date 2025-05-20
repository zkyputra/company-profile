@extends('layout.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    .banner{
        color: #cccccc;
        background: url({{ asset('front/banner.jpg') }})no-repeat center center;
        background-size: cover;
        padding-top: 20%;
        padding-bottom: 20%;
    }

    .lingkaran {
        display: inline-block;
        border-radius: 50%;
        width: 150px;
        margin: auto;
        height: 150px;
        color: #fff;
        background-color: #131111;
    }

    .lingkaran i {
    position: relative;
    top: 30px;
    }

    .kontak {
    color: #272727;
    background: url({{ asset('front/bg-kontak.jpg') }}) no-repeat center center;
    background-size: cover;
    padding-bottom: 20%;
    padding-top: 20%;
    }

    .tim img {
    width: 250px;
    border: 10px solid #cccccc;
    }


    </style>
</head>
<body>
    <div class="container-fluid banner">
        <div class="container text-center">
        <h4 class="display-6">Selamat Datang di Website Kami</h4>
        <h3 class="display-1">Halo!</h3>
        <a href="#layanan">
            <button type="button" class="btn btn-danger btn-lg">
            Cek Layanan
            </button>
        </a>
        </div>
    </div>

    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
        <h2 class="display-3" id="layanan"><b>Layanan</b></h2>
        <p>
            Kami melayani
        </p>
        <div class="row pt-4">
            <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-code fa-5x"></i></span>
            <h3 class="mt-3">Programming</h3>
            </div>
            <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
            <h3 class="mt-3">Design</h3>
            </div>
            <div class="col-md-4">
            <span class="lingkaran"
                ><i class="fas fa-network-wired fa-5x"></i
            ></span>
            <h3 class="mt-3">Networking</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5">
        <div class="container">
        <h2 class="display-3 text-center" id="tentang"><b>Tentang</b></h2>
        <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, ex!
        </p>
        <div class="clearfix pt-5">
            <img
            src="{{ asset('front/about.jpg') }}"
            class="col-md-6 float-md-end mb-3 crop-img"
            width="300"
            height="300"
            />
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
            </p>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
            </p>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
            </p>
            <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Dignissimos laboriosam excepturi exercitationem qui expedita, ex
            temporibus natus necessitatibus accusamus voluptatibus.
            </p>
        </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container">
            <h2 class="display-3 text-center" id="kontak"><b>Kontak Kami</b></h2>
        <form action="{{ route('kontak.store') }}" method="POST">
            @csrf
            <div class="row pb-3">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama"/>
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Email"/>
                    <input class="form-control form-control-lg" type="text" placeholder="No. Phone"/>
                </div>
            <div class="col-md-6">
                <textarea class="form-control form-control-lg" rows="5"></textarea>
            </div>
            </div>
        <div class="col-md-3 mx-auto text-center">
            <button type="button" class="btn btn-danger btn-lg">
            Kirim Pesan
            </button>
        </div>
        </form>
        </div>
    </div>
    <div class="container text-center pt-5 pb-5">
    </div>


</body>
</html>


@endsection
