@extends('layout.main')

@section('body')
    {{-- aplikasi --}}
    {{-- <div class="p-3"> --}}
    {{-- form --}}
    <div style="margin-top: 9px;" class="bg-dange d-block d-sm-none p-1" data-aos="fade-in">
        <div class="m-4 card"style="border-radius:11px">
            <div class="card-bod p-3">
                <form action="{{ route('tampilproduk') }}" method="GET">
                    <div id="custom-search-input" class="col-md-12">
                        <div class="input-group ">
                            <i class="fas fa-search my-auto"></i>
                            <input class="form-control-borderless col input-lg p-2" placeholder="Silahkan cari Produk "
                                name="search" type="search" value="{{ request('search') }}" />
                            <div class="ml-auto">
                                <button class="btn text-white melayang" style="background-color: #6C5ECF;"
                                    type="submit">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ak form --}}
    {{-- versi android --}}

    <section class="m-1" data-aos="fade-in">
        <div class="d-block d-sm-none  " style="margin-top: -17px;">
            <div class="jumbotron m-4  containerbaru jumbotron4">
                <div class="bungkus p-3" data-aos="fade-in">
                    <p class="judul7">
                        Selamat Datang <br> di Toko Online Nusa Kreatif
                    </p>
                    <p class="judul8">
                        Kepuasan Anda adalah <b>Prioritas Kami</b>
                    </p>
                    <div class=" mt-2 ">
                        <a class="btn bg1 text-white" href="#produk" role="button">Belanja sekarang</a>
                    </div>
                </div>
            </div>
            {{-- <div class="jumbotron  containerbaru jumbotron4">
                <div class="bungkus p-3" data-aos="fade-in">
                    <p class="judul7">
                        Selamat Datang <br> di Toko Online Nusa Kreatif
                    </p>
                    <p class="judul8">
                        Kepuasan Anda adalah <b>Prioritas Kami</b>
                    </p>
                    <div class=" mt-2 ">
                        <a class="btn bg1 text-white" href="#produk" role="button">Belanja sekarang</a>
                    </div>
                </div>
            </div>

            <div class="jumbotron  containerbaru jumbotron4">
                <div class="bungkus p-3" data-aos="fade-in">
                    <p class="judul7">
                        Selamat Datang <br> di Toko Online Nusa Kreatif
                    </p>
                    <p class="judul8">
                        Kepuasan Anda adalah <b>Prioritas Kami</b>
                    </p>
                    <div class=" mt-2 ">
                        <a class="btn bg1 text-white" href="#produk" role="button">Belanja sekarang</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <style>
        .jumbotron4 {
            background-image: url(../foto/ft19.jpg);
            background-size: cover;
            position: relative;
            border-radius: 10px;
            height: 260px;

        }

        .jumbotron4::before {
            content: "";
            display: block;
            width: 100%;
            top: 0;
            right: 0;
            left: 0;
            border-radius: 10px;
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), #f1f1f1);
            position: absolute;
            bottom: 0;
        }

        .containerbaru {
            position: relative;
            z-index: 100;
        }

        .judul7 {
            font-weight: 500;
            font-size: 19px;
            margin-top: 31px;

        }

        .judul8 {
            font-size: 10px;
            margin-top: -11px
        }

        .bg1 {
            background-color: #6C5ECF;
            font-size: 7px
        }
    </style>
    </div>
    {{-- akhir android --}}


    {{-- versi tablet --}}
    {{-- form --}}
    <div style="margin-top: 40px;" class="container d-none d-sm-block d-md-none">
        <div class="container card"style="border-radius:7px">
            <div class="card-bod p-3">
                <form action="{{ route('tampilproduk') }}" method="GET">
                    <div id="custom-search-input" class="col-md-12">
                        <div class="input-group ">
                            <i class="fas fa-search my-auto"></i>
                            <input class="form-control-borderless col input-lg p-2" placeholder="Silahkan cari Produk "
                                name="search" type="search" value="{{ request('search') }}" />
                            <div class="ml-auto">
                                <button class="btn text-white melayang" style="background-color: #6C5ECF;"
                                    type="submit">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ak form --}}
    <div class="container d-none d-sm-block d-md-none" style="margin-top: 40px">
        <div class="jumbotron containerbaru jumbotron3">
            <div class="bungkus my-auto">
                <h1 class="judul5 " data-aos="fade-in" data-aos-delay="100">
                    Selamat Datang <br> di Website Nusa Kreatif
                </h1>
                <p class="judul6" data-aos="fade-in" data-aos-delay="140">
                    Kepuasan Anda adalah <b>Prioritas Kami</b>
                </p>
                <div class=" mt-2 " data-aos="fade-in" data-aos-delay="140">
                    <a class="btn bg
                text-white" href="#produk" role="button">Belanja
                        sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .jumbotron3 {
            background-image: url(../foto/ft19.jpg);
            background-size: cover;
            position: relative;
            height: 250px;
            border-radius: 7px;
        }

        .jumbotron3::before {
            content: "";
            display: block;
            width: 100%;
            top: 0;
            right: 0;
            left: 0;
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), #f1f1f1);
            position: absolute;
            bottom: 0;
            border-radius: 7px;
        }

        .containerbaru {
            position: relative;
            z-index: 100;
        }

        .judul5 {
            font-weight: 500;
            font-size: 28px;
            margin-top: 11px
        }

        .judul6 {
            font-weight: 500;
            font-size: 12px
        }

        .bg {
            background-color: #6C5ECF;
            font-size: 12px
        }
    </style>
    {{-- akhir vs tablet --}}


    {{-- awal website --}}

    {{-- hero --}}
    <div class="jumbotron jmb1 d-none d-md-block jumbotron-fluid">
        <div class="container containergb" style="  margin-top: 170px;">
            <h1 class="judul" data-aos="fade-in" data-aos-delay="100">
                Selamat Datang <br> di Website Resmi Nusa Kreatif
            </h1>
            <p class="judul2" data-aos="fade-in" data-aos-delay="140">
                Kepuasan Anda adalah <b>Prioritas Kami</b>
            </p>
            <div class="center mt-2 " data-aos="fade-in" data-aos-delay="140">
                <a class="btn btn-primari
                text-white" href="#produk" role="button">Belanja
                    sekarang</a>
            </div>

        </div>
    </div>
    <!-- Akhir Hero -->

    <!-- info1 -->
    <div class="container-fluid d-none d-md-block mb-5">
        <div class="row justify-content-center">
            <div class="col-10 info1">
                <div class="row p-1">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-bod p-3 align-items-center">
                                <form action="{{ route('tampilproduk') }}" method="GET">
                                    <div id="custom-search-input" class="col-md-12">
                                        <div class="input-group ">
                                            <i class="fas fa-search my-auto"></i>
                                            <input class="form-control-borderless col input-lg p-2"
                                                placeholder="Silahkan cari Produk yang ingin Anda beli" name="search"
                                                type="search" value="{{ request('search') }}" />

                                            <span class="input-group-btn">
                                                <div class="col-auto">
                                                    <button class="btn  text-white melayang"
                                                        style="background-color: #6C5ECF;" type="submit">Cari</button>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhrinfo1 -->

    {{-- Kategori mobile --}}
    <section id="kategori" class="kategori-produk d-block d-sm-none p-3">
        <div class="container">
            <h5 class="judul10" data-aos="fade-in">
                Produk Kategori</h5>
            <hr data-aos="fade-in">
            <div class="row mt-4 ">
                <!-- start row -->
                @php $kategoriaos = 0 @endphp
                @foreach ($kategoris as $item)
                    @if ($item->barangs->count() != 3)
                        <div data-aos="fade-in" data-aos-delay="{{ $kategoriaos += 200 }}" class="col-4 "
                            data-aos-delay="100">
                            <a href="{{ route('kategori.tampil', $item->slug) }}">
                                <div class="product mb-3"
                                    style="background-image: url('{{ asset('storage/produk/kategori/' . $item->gambar) }}');">
                                    <div class="product-content ">{{ $item->nama }}</div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
                <!-- end row -->
            </div>
            @if ($kategoris->count() == 4)
                <a href="/detailkategori" data-aos="fade-in" class="btn text-white mt-2 melayang"
                    style="background-color: #6C5ECF; font-size: 12px"> Lihat
                    Selengkapnya <i class="fas fa-fw fa-arrow-right"></i></a>
            @endif
        </div>
    </section>


    <!-- kategori -->
    <section id="kategori" class="kategori-produk d-none d-sm-block mt-1 p-3">
        <div class="container">
            <h5 class="judul10" data-aos="fade-in">
                Produk Kategori</h5>
            <hr data-aos="fade-in">
            <div class="row  mt-4 ">
                <!-- start row -->
                @php $kategoriaos = 0 @endphp
                @foreach ($kategoris as $item)
                    {{-- @if ($item->barangs->count() != 0) --}}
                    <div data-aos="fade-in" data-aos-delay="{{ $kategoriaos += 200 }}"
                        class="col-6 col-md-4 col-lg-3 mb-3 ">
                        <a href="{{ route('kategori.tampil', $item->slug) }}">
                            <div class="product"
                                style="background-image: url('{{ asset('storage/produk/kategori/' . $item->gambar) }}');">
                                <div class="product-content ">{{ $item->nama }}</div>
                            </div>
                        </a>
                    </div>
                    {{-- @endif --}}
                @endforeach
                <!-- end row -->
            </div>
            <a href="/detailkategori" data-aos-delay="250" data-aos="fade-in" class="btn text-white mt-3 melayang"
                style="background-color: #6C5ECF; font-size: 12px"> Lihat
                Selengkapnya <i class="fas fa-fw fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- ak kategori -->

    <!-- card baru -->
    <section id="produk" class="produk mt-4 p-3 " style="background-color: #f8f8f8; ">
        <div class="container" style="">
            <h5 data-aos="fade-in" class="mt-4 judul10">
                Produk
                Unggulan</h5>
            <hr data-aos="fade-in">
            <div class="row mt-4">
                @php $kategoriaos = 0 @endphp
                @foreach ($bar as $barang)
                    <div class="col-6 col-md-4 col-lg-3 mb-2" data-aos="fade-in"
                        data-aos-delay="{{ $kategoriaos += 350 }}">
                        <a href="/detail/{{ $barang->id }}" class="komponen-produk d-block">
                            <div class="produk">
                                <div class="foto-produk"
                                    style="background-image: url('{{ asset('storage/produk/' . $barang->gambar) }}');">
                                </div>
                            </div>
                            <div class="text-produk">
                                {{ $barang->judul }}
                            </div>
                            <div class="text-produk1">
                                Rp. {{ number_format($barang->harga) }}
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- row -->
            </div>
            <div class="d-none d-sm-block">
                <a href="/produk" data-aos="fade-in" class=" btn text-white mb-4 melayang"
                    style="background-color: #6C5ECF; font-size: 12px ">Lihat
                    Selengkapnya <i class="fas fa-fw fa-arrow-right"></i></a>
            </div>
            {{-- buton mobile --}}
            @if ($bar->count() == 8)
                <div class="d-block d-sm-none ">
                    <a href="/produk" data-aos="fade-in" class="btn text-white mb-4 melayang"
                        style="background-color: #6C5ECF; font-size: 12px ">Lihat
                        Selengkapnya <i class="fas fa-fw fa-arrow-right"></i></a>
                </div>
            @endif
        </div>
    </section>
    <!-- akhir card baru -->

    <!-- yt -->
    <div id="vidio" class="container d-md-block mt-4 p-4" style="margin-bottom: 50px">
        <h3 class="judul10" data-aos="fade-in" data-aos-delay="150">
            Tentang Kami
        </h3>
        <hr data-aos="fade-in">
        <div class="row mt-4">
            <div class="col-md-6">
                <p style="font-size :13px" class="mb-4" data-aos="fade-in" data-aos-delay="160">
                    Gampong Nusa merupakan satu diantara gampong di Aceh yang terus bergerak mengembangkan Desa wisata
                    berbasis
                    masyarakat. Potensi lokal yang dimiliki terus diramu menjadi berbagai atraksi wisata dengan
                    tujuan
                    utama
                    adalah meningkatkan ekonomi masyarakat dan menjaga keberlanjutan lingkungan.
                    Salah satu yang terkenal dari Gampong ini adalah pengelolaan sampahnya, dari hasil pengelolaan
                    sampah
                    tersebut akan di daur ulang menjadi barang yang bermanfaat, seperti tas, tempat tisu, dan
                    berbagai
                    macam
                    lainya.
                </p>
            </div>
            <div class="col-md-6 mb-5">
                <div class="embed-responsive embed-responsive-21by9 " data-aos="fade-in" data-aos-delay="162">

                    <iframe class="yt" width="560" height="315" src="https://www.youtube.com/embed/185FHRdxiTc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <style>
                    .yt {
                        border-radius: 6px;
                    }

                    .melayang:hover {
                        box-shadow: 0 8px 16px 0 rgba(24, 29, 48, 0.3);
                    }

                    ;
                </style>
            </div>
        </div>
    </div>
    </div>
    <!-- akhir yt -->
@endsection
