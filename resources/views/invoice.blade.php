@extends('layout.mainpesanan')

@section('body')
    {{-- mobile --}}


    <div class="container p-4 d-block d-sm-none d-none d-sm-block d-md-none" data-aos="fade-in"
        style="margin-top:46px ; margin-bottom:100px">
        @foreach ($datatransaksi as $item)
            <div class="card p-4 mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <p class="responpesanan">Nama Penerima : {{ $item->nama_penerima }}</p>
                        <p class="responpesanan">No Telepon : {{ $item->notlp }}</p>
                    </div>
                    <div class="col-md-4 font-weight-bold">
                        <p>Kode Pesanan : NUSAKREATIF-{{ $item->id }}</p>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="" class="border-0">
                                <div class="text-uppercase">No</div>
                            </th>
                            <th scope="" class="border-0">
                                <div class="text-uppercase">Nama Barang</div>
                            </th>
                            <th scope=" " class="border-0">
                                <div class="text-uppercase">jumlah</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($item->items as $barang)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td scope="row">{{ $barang->barang->judul }}</td>
                                <td>{{ $barang->jumlah }}</td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h6 style="color: #242231; font-weight:800">Alamat</h6>
                        <p> {{ $item->alamat }} </p>
                    </div>
                    <div class="col-md-4">
                        <h6 style="color: #242231; font-weight:800">Pengiriman</h6>
                        <h6 style="">Kurir : {{ $item->kurir }}</h6>
                        <h6 style="">Opsi Pengiriman : {{ $item->opsipengiriman }}</h6>
                        <h6 style="">Estimasi Pengiriman : {{ $item->etd }} Hari</h6>
                        <hr class="d-block d-sm-none d-none d-sm-block d-md-none">
                    </div>
                    <div class="col-md-5">
                        <h6>Status Pembayaran : <b>{{ $barang->pesanan->transaction_status }}</b></h6>
                        <h6 style="">Total Ongkir :
                            Rp.{{ number_format($item->total_ongkir) }} | Harga Barang :
                            Rp.{{ number_format($item->total_harga) }}</h6>
                        <h6 style="color: #242231; font-weight:800">Total Harga Rp.
                            {{ number_format($item->total_ongkir + $item->total_harga) }}</h6>
                        <hr class="d-block d-sm-none d-none d-sm-block d-md-none">
                    </div>
                </div>

                <p class="mt-2">Silahkan Cek Detail Pembayaran di Email anda : {{ auth('')->user()->email }}</p>

                <div class="row p-3">
                    {{-- <form action="{{ route('hapuspesanan', $pesanans) }}" method="POST" class="">
                        @csrf
                        @method('DELETE') --}}
                    <a class="btn text-white ml-auto" style="background-color: #008f2b; font-size:12px"
                        href=" https://api.whatsapp.com/send?phone=6285760557702&text= Hai Admin  Saya Ingin Menanyakan Informasi barang saya dengan data : %0AKode Pesanan : NUSAKREATIF-{{ $item->id }}%0ANama : {{ $item->nama_penerima }} ">
                        <i class="fa-brands fa-whatsapp mr-1"></i>Hubungi
                        Admin
                    </a>
                    {{-- <button class="btn btn-danger " type="submit">Hapus</button> --}}
                    </form>
                </div>


            </div>
        @endforeach
    </div>
    {{-- ak code --}}



    {{-- @if ($datatransaksi->count() == 0)
        <div class="keranjang d-block d-sm-none" data-aos="fade-in">
            <div class="text-center">
                <p>Belum ada daftar pesanan</p>
            </div>

            <style>
                .keranjang {
                    margin-top: 83%;
                }
            </style>
        </div>
    @endif --}}

    @if ($datatransaksi->count() == 0)
        <div class="pes d-block d-sm-none border-0 card" data-aos="fade-in">
            <div class="card-body text-center">
                <p style="font-size: 17px">Belum ada data Transaksi</p>
                <a href="/produk" class="btn text-white mt-0" style="font-size: 11px;background-color: #6C5ECF;">Silahkan
                    Belanja</a>
            </div>
            <style>
                .pes {
                    margin-top: 50%;
                    padding: 50px;
                }
            </style>
        </div>
    @endif
    {{-- akhir Mobile --}}



    <div class="container d-none d-sm-block d-lg-nonex" data-aos="fade-in" style="margin-top:150px;">
        @foreach ($datatransaksi as $item)
            <div class="card p-5 mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <p class="responpesanan">Nama Penerima : {{ $item->nama_penerima }}</p>
                        <p class="responpesanan">No Telepon : {{ $item->notlp }}</p>
                    </div>
                    <div class="col-md-4 font-weight-bold">
                        <p>Kode Pesanan : NUSAKREATIF-{{ $item->id }}</p>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="" class="border-0">
                                <div class="text-uppercase">No</div>
                            </th>
                            <th scope="" class="border-0">
                                <div class="text-uppercase">Nama Barang</div>
                            </th>
                            <th scope=" " class="border-0">
                                <div class="text-uppercase">jumlah</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($item->items as $barang)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td scope="row">{{ $barang->barang->judul }}</td>
                                <td>{{ $barang->jumlah }}</td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h6 style="color: #242231; font-weight:800">Alamat</h6>
                        <p> {{ $item->alamat }} </p>
                    </div>
                    <div class="col-md-4">
                        <h6 style="color: #242231; font-weight:800">Pengiriman</h6>
                        <h6 style="">Kurir : {{ $item->kurir }}</h6>
                        <h6 style="">Opsi Pengiriman : {{ $item->opsipengiriman }}</h6>
                        <h6 style="">Estimasi Pengiriman : {{ $item->etd }} Hari</h6>
                        <hr class="d-block d-sm-none d-none d-sm-block d-md-none">
                    </div>
                    <div class="col-md-5">
                        <h6>Status Pembayaran : <b>{{ $barang->pesanan->transaction_status }}</b></h6>
                        <h6 style="">Total Ongkir :
                            Rp.{{ number_format($item->total_ongkir) }} | Harga Barang :
                            Rp.{{ number_format($item->total_harga) }}</h6>
                        <h6 style="color: #242231; font-weight:800">Total Harga Rp.
                            {{ number_format($item->total_ongkir + $item->total_harga) }}</h6>
                        <hr class="d-block d-sm-none d-none d-sm-block d-md-none">
                    </div>
                </div>

                <p class="mt-2">Silahkan Cek Detail Pembayaran di Email anda : {{ auth('')->user()->email }}
                </p>

                <div class="row p-3">
                    {{-- <form action="{{ route('hapuspesanan', $pesanans) }}" method="POST" class="">
                        @csrf
                        @method('DELETE') --}}
                    {{-- <a class="btn text-white ml-auto" style="background-color: #008f2b;"
                        href=" https://api.whatsapp.com/send?phone=6285760557702&text= Hai Admin  Saya Ingin Menanyakan Informasi barang saya dengan data : %0AKode Pesanan : NUSAKREATIF-{{ $item->id }}%0ANama : {{ $item->nama_penerima }} ">
                        <i class="fa-brands fa-whatsapp mr-1"></i>Hubungi
                        Admin
                    </a> --}}
                    {{-- <button class="btn btn-danger " type="submit">Hapus</button> --}}
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    @if ($datatransaksi->count() == 0)
        <div class="ker  d-none d-sm-block container border-0 card" data-aos="fade-in">
            <div class=" p-5 card-body text-center">
                <h5>Belum ada data Transaksi</h5>
                <a href="/produk" class="btn btn-danger mt-2" style="font-size: 12px">Silahkan Belanja</a>
            </div>
            <style>
                .ker {
                    padding: 40px
                }
            </style>
        </div>
    @endif
@endsection
