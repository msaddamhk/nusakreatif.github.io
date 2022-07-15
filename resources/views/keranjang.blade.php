@extends('layout.mainpesanan')

@section('body')
    {{-- mobile --}}
    <div class="p-4 d-block d-sm-none d-none d-sm-block d-md-none" data-aos="fade-in" style="margin-top: 90px">
        @foreach ($keranjang as $keranjangs)
            <div class="container  mb-4 card p-3 ">
                <div class="media">
                    <img src="{{ asset('storage/produk/' . $keranjangs->barang->gambar) }}" alt="" height="90"
                        width="120" class="img-flui rounded shadow-sm">
                    <div class="media-body ml-3 ">
                        <p class="" style="margin: 0px; font-size:15px">{{ $keranjangs->barang->judul }}</p>
                        <p class="" style="margin: 0px; ; font-size:15px">jumlah : {{ $keranjangs->jumblah }}</p>
                        <p class="mb-1" style="margin: 0px; ; font-size:15px">Total Harga : Rp.
                            {{ number_format($keranjangs->getTotalHarga()) }}</p>
                        <form action="{{ route('hapuskeranjang', $keranjangs) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="clicked(event)" class="text-white p-2"
                                style="font-size: 9px;border-radius:4px ; background-color:#6C5ECF;  border:none ">Hapus
                                Data</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach


        @if ($keranjang->count() != 0)
            <hr>
            <a href="{{ route('pesan') }}" class="btn my-2 my-sm-0 text-white" id="ongkir"
                style="background-color: #6C5ECF;" type="submit">Beli Sekarang
            </a>
        @else
            <div class="keranjang">
                <div class="row bg-dange justify-content-center align-content-center ">

                    <p>Keranjang Anda masi Kosong</p>

                    {{-- <div class="">
                        <a href="" class="btn btn-danger"></a>
                    </div> --}}
                </div>

                <style>
                    .keranjang {
                        margin-top: 88%;
                    }
                </style>
            </div>
        @endif
    </div>
    {{-- akhir mobile --}}



    <div class="container d-none d-md-block d-lg-nonex" data-aos="fade-in" style="margin-top: 100px;min-height:50vh">
        <!-- Shopping cart table -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="border-0">
                            <div class="p-2 text-uppercase">Barang</div>
                        </th>
                        <th scope="col" class="border-0">
                            <div class="py-2 text-uppercase">Jumlah</div>
                        </th>
                        <th scope="col" class="border-0">
                            <div class="py-2 text-uppercase">Harga</div>
                        </th>
                        <th scope="col" class="border-0">
                            <div class="py-2 text-uppercase">Sub Total</div>
                        </th>
                        <th scope="col" class="border-0">
                            <div class="py-2 text-uppercase">Hapus</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($keranjang->count() == 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Keranjang Anda Masi Kosong, silahkan belanja <br>
                            <a href="/" class="btn btn-danger mt-2" style="font-size: 12px"> Kembali</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @else
                        @php $totalharga = 0 @endphp
                        @foreach ($keranjang as $keranjangs)
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <img src="{{ asset('storage/produk/' . $keranjangs->barang->gambar) }}"
                                            alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="/detail/{{ $keranjangs->barang->id }}"
                                                    class="text-dark d-inline-block align-middle">{{ $keranjangs->barang->judul }}</a>
                                            </h5>
                                            <span
                                                class="text-muted font-weight-normal font-italic d-block">{{ $keranjangs->barang->kategori->nama }}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>{{ $keranjangs->jumblah }}</strong></td>
                                <td class="border-0 align-middle"><strong>
                                        Rp. {{ number_format($keranjangs->barang->harga) }}</strong></td>
                                <td class="border-0 align-middle"><strong>Rp.
                                        {{ number_format($keranjangs->getTotalHarga()) }}</strong></td>


                                {{-- akhir --}}


                                <td class="border-0 align-middle">
                                    <form action="{{ route('hapuskeranjang', $keranjangs) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="clicked(event)" class="text-white p-2"
                                            style="font-size: 12px;border-radius:4px ; background-color:#6C5ECF;  border:none ">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @php $totalharga += $keranjangs->getTotalHarga() @endphp
                        @endforeach
                        {{-- @endif --}}
                    @endif
                </tbody>
            </table>
        </div>
        <!-- End -->
        <hr>
        @if ($keranjang->count() != 0)
            <a href="{{ route('pesan') }}" class="btn  my-2 my-sm-0 text-white" id="ongkir"
                style="background-color: #6C5ECF;" type="submit">Beli Sekarang
            </a>
        @endif
    </div>

    <script>
        function clicked(e) {
            if (!confirm('Apakah Anda Ingin Menghapus Data?')) {
                e.preventDefault();
            }
        }
    </script>
@endsection






{{-- <hr class=" mt-4">
        <h3 style="color: #275062; font-weight: 700; font-size: 17px;  ;">
            Detail Pembayaran
        </h3>
        <p style="color: #8f8f8f">
            Total Harga : <b style="color: #29A867">Rp.
                {{ number_format($totalharga ?? 0) }}</b>
        </p>
        @if ($keranjang->count() > 0)
            <a href="https://api.whatsapp.com/send?phone=6285760557702&text=Hai Admin Saya Ingin Membeli {{ $keranjangs->barang->judul }},dengan jumlah {{ $keranjangs->jumblah }} , Total Harga {{ number_format($keranjangs->getTotalHarga()) }}, Alamat "
                class="btn  my-2 my-sm-0 text-white" style="background-color: #275062;" type="submit">Beli Sekarang</a>
        @endif
        <style>
            .form-control {
                background-color: #F3F3F3;
            }
        </style> --}}
