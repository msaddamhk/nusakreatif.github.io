@extends('layout.maindetail')
@section('body')
    <!-- card baru -->
    <div class="jumbotron jmb2 jumbotron-fluid">

        <div class="container garis_vertikal containergb" style="  margin-top: 145px;">
            <div class="bungkus-ukuran-font">
                <h1 data-aos="fade-in" class="ukuran-font" data-aos-delay="100">
                    <b>Kategori {{ $kategori->nama }}</b>
                </h1>
                <style>
                    hr {
                        border-top: 1px solid #6C5ECF;
                    }
                </style>
                <p data-aos="fade-in" data-aos-delay="180" style="color: #000000;">
                    Kepuasan Anda Adalah Prioritas <b>Kami</b>
                </p>
                <hr data-aos="fade-in" data-aos-delay="180" width="8%" align="left" style="border-width: 3px;">
            </div>
            <!-- ak dvcntainer -->
        </div>
    </div>
    <section id="produk" class="produk p-3 ">
        <div class="container">
            <div class="row">
                @php $kategoriaos = 0 @endphp
                @foreach ($kategori->barangs as $barang)
                    <div class="col-6 col-md-4 col-lg-3 " data-aos="fade-in" data-aos-delay="{{ $kategoriaos += 200 }}">
                        <a href="/detail/{{ $barang->id }}" class="komponen-produk d-block">
                            <div class="produk">
                                <div class="foto-produk"
                                    style="background-image: url('{{ asset('storage/produk/' . $barang->gambar) }}');">
                                </div>
                            </div>
                            <div class="text-produk">
                                {{-- {{ $barang->kategori->nama }} --}}
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
            </div>
        </div>
    </section>
    <!-- akhir card baru -->
@endsection
