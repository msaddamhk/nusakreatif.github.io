@extends('layout.main')

@section('body')
    <div class="container  p-4" style="margin-top: 120px;">

        <div class="row">

            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ asset('storage/produk/' . $barang->gambar) }}">
                    <img src="{{ asset('storage/produk/' . $barang->gambar) }}" class="img-fluid " alt="Responsive image"
                        style="width: 600px; height:350px; border-radius:10px">
                </a>
            </div>

            <div class="col-md-5 my-auto" data-aos="fade-up" data-aos-delay="250">
                <h1 style="font-size: 20px">
                    {{ $barang->judul }}
                </h1>
                <h4 style="font-size: 17px; color:#000000">
                    <b>Harga : Rp.{{ number_format($barang->harga) }}</b>
                </h4>
                <h4 style="font-size: 17px">
                    Stock : {{ $barang->stock }}
                </h4>
                {{-- <h4 style="font-size: 17px">
                    Kategori : {{ $barang->kategori->nama }}
                </h4> --}}
                <hr>

                <form action="{{ url('/pesanan', $barang->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="jumlahpesanan">Jumlah Pesanan</label>
                        <input type="number" max="{{ $barang->stock }}" name="jumlahpesanan" class="form-control"
                            id="jumlahpesanan" placeholder="" required>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-6 mb-2">
                            <button class="btn  my-1 my-sm-0 text-white btn-block"
                                style="background-color: #6C5ECF;font-size:13px;" type="submit">Tambahkan
                                Kekeranjang</button>
                        </div>

                        <div class="col-6 col-md-4 col-lg-6">
                            <a href="https://api.whatsapp.com/send?phone=6285760557702&text=Hai Admin Saya Ingin   Membeli {{ $barang->judul }}  , dengan Jumlah Pesanan     "
                                class="btn  my-1 my-sm-0 text-white btn-block "
                                style="background-color: #009940; font-size:13px;" type="submit">Beli Sekarang
                                Melaui wa</a>
                        </div>
                    </div>
                </form>

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

    <div class="container  p-4  text-justify" data-aos="fade-up" data-aos-delay="400">
        <h3 style="color: #242231; font-weight: 700; font-size: 23px;  ;">
            Deskripsi
            <hr>
        </h3>
        {!! $barang->deskripsi !!}
    </div>
    <!-- card baru -->
    <section id="produk" class="produk ">
        <div class="container p-4">
            <h5 data-aos="fade-up" class="mt-4" style="font-size: 22px; color: #242231; font-weight: 700;"> Produk
                Lainnya</h5>

            <hr data-aos="fade-up">
            <div class="row mt-4">

                @php $kategoriaos = 0 @endphp
                @foreach ($barangs as $barang)
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
            {{-- <a href="/produk" data-aos="fade-up" class="btn text-white mb-4"
                style="background-color: #275062; font-size: 13px"><i class="fas fa-fw fa-arrow-right"></i> Lihat
                Selengkapnya</a> --}}
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
