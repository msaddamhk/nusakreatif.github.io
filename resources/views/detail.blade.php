@extends('layout.maindetail')

@section('body')
    {{-- mobile --}}
    <div class="">
        <div class="d-block d-sm-none">
            <img class="img2" src="{{ asset('storage/produk/' . $barang->gambar) }}" class="card-img-top" alt="...">
            <style>
                .img2 {
                    margin-top: 75px;
                    width: 100%;
                    background-size: cover;
                    height: 300px
                }
            </style>
        </div>

        <div class="container p-4 d-block d-sm-none" style="margin-bottom: 16px">
            <div class="row">
                <h1 class="col-8" style="font-size: 18px" data-aos="fade-in">
                    <b> {{ $barang->judul }} </b>
                </h1>
                <h4 class="col-4" style="font-size: 17px" data-aos="fade-in">
                    Stock : {{ $barang->stock }}
                </h4>
            </div>
            <h6 class="mt-1" style="font-size: 17px; color:#000000" data-aos="fade-in">
                Harga : Rp.{{ number_format($barang->harga) }}
            </h6>


            <div class="mt-4 mb-3 d-block d-sm-none " data-aos="fade-in">
                <h3 style="color: #000000; font-weight: 600; font-size: 17px;  ;">
                    Deskripsi
                    <hr>
                </h3>
                {!! $barang->deskripsi !!}
                <hr>
            </div>

            <div class="control" data-aos="fade-in">
                <form action="{{ url('/pesanan', $barang->id) }}" method="POST">
                    @csrf
                    <b class="">Jumlah</b>

                    <div class="form-group mt-2 ">
                        <input type="number" max="{{ $barang->stock }}" name="jumlahpesanan" class="form-control fr"
                            id="jumlahpesanan" placeholder="Masukkan jumlah" required>
                    </div>

                    <div class="">
                        <button class="btn d-block fr btn-block text-white btn-block"
                            style="background-color: #6C5ECF;font-size:15px;" type="submit">
                            Beli Sekarang
                        </button>
                    </div>

                </form>
            </div>


            {{-- opsional <div class="control p-3 fixed-bottom">
                <form action="{{ url('/pesanan', $barang->id) }}" method="POST">
                    @csrf
                    <p class="text-white mt-1">Jumlah</p>

                    <div class="row">
                        <div class="form-group col-7">
                            <input type="number" max="{{ $barang->stock }}" name="jumlahpesanan" class="form-control fr"
                                id="jumlahpesanan" placeholder="Masukkan jumlah" required>
                        </div>

                        <div class="col-5">
                            <button class="btn d-block fr btn-block text-white btn-block"
                                style="background-color: #6C5ECF;font-size:15px;" type="submit">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </form>
            </div> --}}


            {{-- <style>
                .control {
                    background-color: #242231;
                    border-top-right-radius: 15px;
                    border-top-left-radius: 15px;
                }

                .fr {
                    border-radius: 7px;
                }
            </style> --}}

        </div>
    </div>
    {{-- Akhir mobile --}}


    {{-- teb --}}
    <div class="container p-4 d-none d-sm-block d-md-none" style="margin-top: 100px">
        <div class="jumbotron4 jumbotron"
            style="background-image: url('{{ asset('storage/produk/' . $barang->gambar) }}');">
        </div>
        <style>
            .jumbotron4 {
                background-image: url('storage/produk/'. $barang->gambar);
                background-size: cover;
                position: relative;
                border-radius: 10px;
                height: 260px;
            }
        </style>
        <div>
            <h1 class="" style="font-size: 18px" data-aos="fade-in" data-aos-delay="300">
                {{ $barang->judul }}

            </h1>
            <h4 class="ml-auto" style="font-size: 17px; color:#000000" data-aos="fade-in" data-aos-delay="400">
                <b>Harga : Rp.{{ number_format($barang->harga) }}</b>
            </h4>
        </div>

        <h4 style="font-size: 17px" data-aos="fade-in" data-aos-delay="500">
            Stock : {{ $barang->stock }}
        </h4>
        <form action="{{ url('/pesanan', $barang->id) }}" method="POST">
            @csrf
            <div class="form-group mb-4" data-aos="fade-in" data-aos-delay="600">
                <label for="jumlahpesanan">Jumlah Pesanan</label>
                <input type="number" max="{{ $barang->stock }}" name="jumlahpesanan" class="form-control"
                    id="jumlahpesanan" placeholder="Masukkan jumlah Pesanan Anda" required>
            </div>

            <hr data-aos="fade-in" data-aos-delay="800">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-6 mb-2" data-aos="fade-in" data-aos-delay="900">
                    <button class="btn  my-1 my-sm-0 text-white btn-block" style="background-color: #6C5ECF;font-size:13px;"
                        type="submit">Beli Sekarang</i></button>
                </div>
            </div>
        </form>
    </div>
    {{-- ak Teb --}}


    {{-- desktop --}}
    <div class="container p-4 d-none d-md-block d-lg-nonex" style="margin-top: 110px;">
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-in" data-aos-delay="200">
                <a href="{{ asset('storage/produk/' . $barang->gambar) }}">
                    <img src="{{ asset('storage/produk/' . $barang->gambar) }}" class="img-fluid " alt="Responsive image"
                        style="width: 600px; height:350px; border-radius:6px">
                </a>
            </div>
            <div class="col-md-5 my-auto">

                <h1 style="font-size: 20px" data-aos="fade-in" data-aos-delay="300">
                    {{ $barang->judul }}
                </h1>
                <h4 style="font-size: 17px; color:#000000" data-aos="fade-in" data-aos-delay="400">
                    <b>Harga : Rp.{{ number_format($barang->harga) }}</b>
                </h4>
                <h4 style="font-size: 17px" data-aos="fade-in" data-aos-delay="500">
                    Stock : {{ $barang->stock }}
                </h4>
                <hr data-aos="fade-in" data-aos-delay="500">


                <form action="{{ url('/pesanan', $barang->id) }}" method="POST">
                    @csrf
                    <div class="form-group mb-4" data-aos="fade-in" data-aos-delay="600">
                        <label for="jumlahpesanan">Jumlah Pesanan</label>
                        <input type="number" max="{{ $barang->stock }}" name="jumlahpesanan" class="form-control"
                            id="jumlahpesanan" placeholder="Masukkan jumlah Pesanan Anda" required>
                    </div>

                    <hr data-aos="fade-in" data-aos-delay="800">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 mb-2" data-aos="fade-in" data-aos-delay="900">
                            <button class="btn my-1 my-sm-0 text-white btn-block"
                                style="background-color: #6C5ECF;font-size:13px;" type="submit">Beli
                                Sekarang</button>
                        </div>

                        {{-- <div class="col-12 col-md-6 col-lg-6" data-aos="fade-in" data-aos-delay="1000">
                            <a href="https://api.whatsapp.com/send?phone=6285760557702&text=Hai Admin Saya Ingin   Membeli {{ $barang->judul }}  , dengan Jumlah Pesanan     "
                                class="btn  my-1 my-sm-0 text-white btn-block "
                                style="background-color: #009940; font-size:13px;" type="submit">Beli Sekarang
                                Melaui wa</a>
                        </div> --}}
                    </div>
                </form>

            </div>
        </div>
    </div>
    <style>
        .img3 {
            height: 300px;
            border-radius: 5px;
            width: 600px;
            background-size: cover;
        }

        .keungulan {
            font-size: 15px;
        }
    </style>
    </div>



    <div class="container p-4 d-none d-sm-block   text-justify" data-aos="fade-in" data-aos-delay="400">
        <h3 style="color: #242231; font-weight: 700; font-size: 23px;  ;">
            Deskripsi
            <hr>
        </h3>
        {!! $barang->deskripsi !!}
    </div>


    <!-- card baru -->
    <section id="produk" class="produk  d-none d-sm-block ">
        <div class="container p-4">
            <h5 data-aos="fade-in" class="mt-4" style="font-size: 22px; color: #242231; font-weight: 700;"> Produk
                Lainnya</h5>
            <hr data-aos="fade-in">
            <div class="row mt-4">
                @php $kategoriaos = 0 @endphp
                @foreach ($barangs as $barang)
                    <div class="col-6 col-md-4 col-lg-3 mb-2" data-aos="fade-in"
                        data-aos-delay="{{ $kategoriaos += 150 }}">
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
        </div>
    </section>
    <!-- akhir card baru -->
    <style>
        .img {
            border-radius: 3px;
            width: 255px;
            height: 140px;
            margin-bottom: 9px;
            background-size: cover;
        }
    </style>
@endsection
