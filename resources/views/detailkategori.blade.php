@extends('layout.maindetail')
@section('body')
    <!-- hero -->
    <div class="jumbotron jmb2 jumbotron-fluid">
        <div class="container containergb" style="  margin-top: 145px;">
            <h1 data-aos="fade-up" data-aos-delay="100" style="color: #242231; font-size: 45px; font-weight: semi-bold ;">
                <b>Produk Kategori</b>
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
    <!-- Akhir Hero -->
    <section id="kategori" class="kategori-produk p-3">
        <div class="container">
            <div class="row">
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
        </div>
    </section>
    <!-- ak kategori -->
@endsection
