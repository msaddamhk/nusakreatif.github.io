@extends('layout.maindetail')
@section('body')
    <!-- hero -->
    <div class="jumbotron jmb2 jumbotron-fluid">
        <div class="container containergb gb1" style="  margin-top: 145px;">
            <div class="bungkus-ukuran-font">
                <h1 data-aos="fade-in" class="ukuran-font" data-aos-delay="100" style="">
                    <b>Produk Kategori</b>
                </h1>
                <style>
                    hr {
                        border-top: 1px solid #6C5ECF;
                    }
                </style>
                <p data-aos="fade-in" class="ukuran-font2" data-aos-delay="180" style="color: #000000;">
                    Kepuasan Anda Adalah Prioritas <b>Kami</b>
                </p>
                <hr data-aos="fade-in" data-aos-delay="180" width="8%" align="left" style="border-width: 3px;">
            </div>
        </div>
    </div>
    <!-- Akhir Hero -->


    <section id="kategori" class="kategori-produk p-3">
        <div class="container">
            <div class="row">
                @php $kategoriaos = 0 @endphp
                @foreach ($kategoris as $item)
                    {{-- @if ($item->barangs->count() != 0) --}}
                    <div data-aos="fade-in" data-aos-delay="{{ $kategoriaos += 200 }}"
                        class="col-6 col-md-4 col-lg-3 mb-4 " data-aos-delay="100">
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
        </div>
    </section>
@endsection
