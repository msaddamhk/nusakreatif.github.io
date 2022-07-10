@extends('layout.main')

@section('body')
    <!-- hero -->
    <div class="jumbotron jmb1 jumbotron-fluid" style="background-image: url(foto/ft3.jpg)">
        <div class="container  containergb" style="  margin-top: 170px;">
            <h1 class="judul" data-aos="fade-up" data-aos-delay="100">
                Selamat Datang <br> di Website Resmi Nusa Kreatif
            </h1>
            <p class="judul2" data-aos="fade-up" data-aos-delay="140">
                Kepuasan Anda adalah <b>Prioritas Kami</b>
            </p>
            {{-- <a href="#produk" class="btn my-2 my-sm-0 mb-5 btn-link" type="submit">Belanja Sekarang</a> --}}

            <div class="center mt-2 " data-aos="fade-up" data-aos-delay="140">
                <a class="btn btn-primari
                text-white" href="#produk" role="button">Belanja sekarang</a>
                {{-- <i class="fa fa-arrow-down ml-2" aria-hidden="true"></i> --}}
            </div>
            <!-- ak dvcntainer -->
        </div>
    </div>
    <!-- Akhir Hero -->


    <!-- info1 -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 info1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body align-items-center">
                                <!--end of col-->
                                <form action="{{ route('tampilproduk') }}" method="GET">
                                    <div id="custom-search-input" class="col-md-12">
                                        <div class="input-group ">
                                            <i class="fas fa-search my-auto"></i>
                                            <input class="form-control-borderless col input-lg p-2"
                                                placeholder="Silahkan cari Produk yang ingin Anda beli" name="search"
                                                type="search" value="{{ request('search') }}" />

                                            <span class="input-group-btn">
                                                <div class="col-auto">
                                                    <button class="btn btn-lg text-white melayang"
                                                        style="background-color: #6C5ECF;" type="submit">Cari
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <!--end of col-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhrinfo1 -->
    <!-- kategori -->
    <section id="kategori" class="kategori-produk mt-5 p-3">
        <div class="container">
            <h5 class="" data-aos="fade-up" style="font-size: 22px; color: #242231; font-weight: 700;">
                Produk Kategori</h5>
            <hr data-aos="fade-up">

            <div class="row  mt-4 ">
                <!-- start row -->

                @php $kategoriaos = 0 @endphp
                @foreach ($kategoris as $item)
                    {{-- @if ($item->barangs->count() != 0) --}}
                    <div data-aos="fade-up" data-aos-delay="{{ $kategoriaos += 200 }}"
                        class="col-6 col-md-4 col-lg-3 mb-3 " data-aos-delay="100">
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
            <a href="/detailkategori" data-aos="fade-up" class="btn text-white mt-3 melayang"
                style="background-color: #6C5ECF; font-size: 13px"><i class="fas fa-fw fa-arrow-right"></i> Lihat
                Selengkapnya</a>
        </div>
    </section>
    <!-- ak kategori -->

    <!-- card baru -->
    <section id="produk" class="produk mt-5 p-3" style="background-color: #f8f8f8;">
        <div class="container">
            <h5 data-aos="fade-up" class="mt-4" style="font-size: 22px; color: #242231; font-weight: 700;"> Produk
                Unggulan</h5>

            <hr data-aos="fade-up">
            <div class="row mt-4">

                @php $kategoriaos = 0 @endphp
                @foreach ($bar as $barang)
                    <div class="col-6 col-md-4 col-lg-3 mb-2" data-aos="fade-up"
                        data-aos-delay="{{ $kategoriaos += 150 }}">
                        <a href="/detail/{{ $barang->id }}" class="komponen-produk d-block">
                            <div class="produk">
                                <div class="foto-produk"
                                    style="background-image: url('{{ asset('storage/produk/' . $barang->gambar) }}');">
                                </div>
                            </div>
                            {{-- <div class="text-produk">
                                {{ $barang->kategori->nama }}
                            </div> --}}
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
            <a href="/produk" data-aos="fade-up" class="btn text-white mb-4 melayang"
                style="background-color: #6C5ECF; font-size: 13px"><i class="fas fa-fw fa-arrow-right"></i> Lihat
                Selengkapnya</a>
        </div>
    </section>
    <!-- akhir card baru -->

    <!-- yt -->
    <div id="vidio" class="container mt-4 p-3">
        <h3 style="color: #242231; font-weight: 700; font-size: 22px;" data-aos="fade-up">
            Tentang Kami
        </h3>
        <hr data-aos="fade-up">
        <div class="row mt-4">
            <div class="col-md-6">
                <p style="" class="mb-4" data-aos="fade-up" data-aos-delay="150">
                    Gampong Nusa adalah sebuah Gampong wisata yang terletak di Kecamatan Lhoknga, Kabupaten Aceh Besar.
                    Nusa merupakan satu diantara gampong di Aceh yang terus bergerak mengembangkan Desa wisata berbasis
                    masyarakat. Potensi lokal yang dimiliki terus diramu menjadi berbagai atraksi wisata dengan tujuan utama
                    adalah meningkatkan ekonomi masyarakat dan menjaga keberlanjutan lingkungan.
                    Salah satu yang terkenal dari Gampong ini adalah pengelolaan sampahnya, dari hasil pengelolaan sampah
                    tersebut akan di daur ulang menjadi barang yang bermanfaat, seperti tas, tempat tisu, dan berbagai macam
                    lainya.
                </p>
            </div>
            <div class="col-md-6 mb-3">
                <div class="embed-responsive embed-responsive-21by9 " data-aos="fade-up">
                    {{-- <iframe class="embed-responsive-item yt" src=" https://www.youtube.com/embed/185FHRdxiTc"></iframe>
                    https://www.youtube.com/watch?v=185FHRdxiTc --}}

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
