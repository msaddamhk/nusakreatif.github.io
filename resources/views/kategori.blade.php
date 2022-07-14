@extends('layout.maindetail')
@section('body')
    <!-- card baru -->

    <div class="jumbotron jmb2 jumbotron-fluid">
        <div class="container containergb" style="  margin-top: 145px;">
            <h1 data-aos="fade-up" data-aos-delay="100" style="color: #242231; font-size: 45px; font-weight: semi-bold ;">
                <b>Kategori {{ $kategori->nama }}</b>
                {{-- <hr width="8%" align="left" style="border-width: 3px;"> --}}
            </h1>

            <style>
                hr {
                    border-top: 1px solid #6C5ECF;
                }
            </style>
            <p data-aos="fade-up" data-aos-delay="180" style="color: #000000;">
                Kepuasan Anda Adalah Prioritas <b>Kami</b>
            </p>
            <hr data-aos="fade-up" data-aos-delay="180" width="8%" align="left" style="border-width: 3px;">
            <!-- ak dvcntainer -->
        </div>
    </div>
    <section id="produk" class="produk ">
        <div class="container" style="margin-top: 60px">
            {{-- <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5 style="font-size: 22px; color: #242231; font-weight: 700;">Kategori {{ $kategori->nama }}
                    </h5>
                </div>
            </div> --}}

            <div class="row">

                @php $kategoriaos = 0 @endphp
                @foreach ($kategori->barangs as $barang)
                    <div class="col-6 col-md-4 col-lg-3 " data-aos="fade-up" data-aos-delay="{{ $kategoriaos += 200 }}">
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
                {{-- <a href="/produk" class="btn"><i class="fas fa-fw fa-arrow-right"></i> Lihat Selengkapnya</a> --}}

                <!-- row -->
            </div>
        </div>
    </section>
    <!-- akhir card baru -->
@endsection
