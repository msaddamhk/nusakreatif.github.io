@extends('layout.maininvoicemobile')

@section('body')
    <div class="container p-4 d-block d-sm-none d-none d-sm-block d-md-none" style="margin-top:-30px ; margin-bottom:40px">
        @foreach ($datatransaksi as $item)
            <div class="card p-4 mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <p class="responpesanan mb-1 mt-2">Nama Penerima : {{ $item->nama_penerima }}</p>
                        <p class="responpesanan mb-1">No Telepon : {{ $item->notlp }}</p>
                    </div>
                    {{-- <div class="col-md-4 font-weight-bold ">
                        <p class="responpesanan">Kode Pesanan : {{ $item->kodepesanan }}</p>
                    </div> --}}
                    <div class="col-md-4">
                        <p class="responpesanan">Kode Pesanan : {{ $item->kodepesanan }}</p>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="" class="border-0 responpesanan">
                                <div class="text-uppercase">No</div>
                            </th>
                            <th scope="" class="border-0 responpesanan">
                                <div class="text-uppercase">Nama Barang</div>
                            </th>
                            <th scope=" " class="border-0 responpesanan">
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
                                <th scope="row" class="responpesanan">{{ $i }}</th>
                                <td scope="row" class="responpesanan">{{ $barang->barang->judul }}</td>
                                <td class="responpesanan">{{ $barang->jumlah }}</td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-md-3 responpesanan">
                        <h6 class="responpesanan" style="color: #242231; font-weight:800">Alamat</h6>
                        <p class="responpesanan"> {{ $item->alamat }} </p>
                    </div>
                    <div class="col-md-4 ">
                        <h6 class="responpesanan" style="color: #242231; font-weight:800">Pengiriman</h6>
                        <h6 class="responpesanan" style="">Kurir : {{ $item->kurir }}</h6>
                        <h6 class="responpesanan" style="">Opsi Pengiriman : {{ $item->opsipengiriman }}</h6>
                        <h6 class="responpesanan" style="">Estimasi Pengiriman : {{ $item->etd }} Hari</h6>
                        <hr class="d-block d-sm-none d-none d-sm-block d-md-none">
                        <h6 class="responpesanan" style="color: #242231; font-weight:800">Resi</h6>
                        <p class="responpesanan">{{ $item->resi }}</p>
                    </div>
                    <div class="col-md-5">

                        <h6 class="responpesanan" style="color: #242231; font-weight:800">Status Pesanan</h6>
                        @if ($item->transaction_status == 'PENDING')
                            <p class="responpesanan btn btn-danger p-1">PENDING</p>
                        @else
                            <p class="responpesanan btn btn-success p-1">{{ $item->statuspesanan }}</p>
                        @endif

                        <h6 class="responpesanan">Status Pembayaran : <b>{{ $barang->pesanan->transaction_status }}</b>
                        </h6>
                        <h6 class="responpesanan" style="">Total Ongkir :
                            Rp.{{ number_format($item->total_ongkir) }} </h6>
                        <h6 class="responpesanan" style=""> Harga Barang :
                            Rp.{{ number_format($item->total_harga) }}</h6>
                        <h6 class="responpesanan" style="color: #242231; font-weight:800">Total Harga Rp.
                            {{ number_format($item->total_ongkir + $item->total_harga) }}</h6>
                        <hr class="d-block d-sm-none d-none d-sm-block d-md-none">
                    </div>
                </div>

                {{-- <p class="mt-2 responpesanan">Silahkan Cek Detail Pembayaran di Email anda : {{ $user->email }}
                </p> --}}
                <p class="mt-2 responpesanan">Silahkan Cek Detail Pembayaran di Email anda

                <div class="row p-3">
                    {{-- <form action="{{ route('hapuspesanan', $pesanans) }}" method="POST" class="">
                @csrf
                @method('DELETE') --}}
                    {{-- <a class="btn text-white ml-auto" style="background-color: #008f2b; font-size:12px"
                        href=" https://api.whatsapp.com/send?phone=6285760557702&text= Hai Admin  Saya Ingin Menanyakan Informasi barang saya dengan data : %0AKode Pesanan : {{ $item->kodepesanan }}%0ANama : {{ $item->nama_penerima }} ">
                        <i class="fa-brands fa-whatsapp mr-1"></i>Hubungi
                        Admin
                    </a> --}}
                    {{-- <button class="btn btn-danger " type="submit">Hapus</button> --}}
                    </form>
                </div>


            </div>
        @endforeach

        <style>
            .responpesanan {
                font-size: 13px;
            }
        </style>

    </div>

    @if ($datatransaksi->count() == 0)
        <div class="pes d-block d-sm-none border-0 card">
            <div class="card-body text-center">
                <p style="font-size: 17px">Belum ada data Transaksi</p>
                <a href="/produk" class="btn text-white mt-0" style="font-size: 11px;background-color: #6C5ECF;">Silahkan
                    Belanja</a>
            </div>
            <style>
                .pes {
                    margin-top: 65%;
                    /* bottom: 50%; */
                    padding: 50px;
                }
            </style>
        </div>
    @endif
@endsection
