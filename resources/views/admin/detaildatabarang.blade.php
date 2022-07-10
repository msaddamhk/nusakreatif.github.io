@extends('layout.admin.main')

@section('body')
    <div class="container p-3" style="margin-top: 120px;">

        <div class="row" data-aos="fade-up">

            <div class="col-md-6 mb-3 ">
                <a href="{{ asset('storage/produk/' . $barang->gambar) }}">
                    <img src="{{ asset('storage/produk/' . $barang->gambar) }}" class="img-fluid " alt="Responsive image"
                        style="width: 600px; height:350px; border-radius:10px">
                </a>
            </div>

            <div class="col-md-5  ">
                <h1 style="font-size: 27px">
                    {{ $barang->judul }}
                </h1>
                <h4 style="font-size: 17px; color:#acacac">
                    Harga : Rp.{{ number_format($barang->harga) }}
                </h4>
                <h4 style="font-size: 17px">
                    Stock : {{ $barang->stock }}
                </h4>
                {{-- <h4 style="font-size: 17px">
                    Stock : {{ $barang->deskripsi }}
                </h4> --}}
                <hr>
                {{-- row --}}

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
<!-- akcard -->
