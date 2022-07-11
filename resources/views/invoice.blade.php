@extends('layout.layoutkeranjang')

@section('body')
    <div class="container " style="margin-top: 140px">
        <h5 style="font-weight: 600 ; font-size:25px; color:#242231">Data Pesanan</h5>
        <hr>
        @foreach ($datatransaksi as $item)
            <div class="card p-5 mt-4">

                <div class="row">

                    <div class="col-md-8">
                        <p>Nama Penerima : {{ $item->nama_penerima }}</p>
                        <p>No Telepon : {{ $item->notlp }}</p>
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
                    </div>
                    <div class="col-md-5">
                        <h6>Status Pembayaran : <b>{{ $barang->pesanan->transaction_status }}</b></h6>
                        <h6 style="">Total Ongkir :
                            Rp.{{ number_format($item->total_ongkir) }} | Harga Barang :
                            Rp.{{ number_format($item->total_harga) }}</h6>
                        <h6 style="color: #242231; font-weight:800">Total Harga Rp.
                            {{ number_format($item->total_ongkir + $item->total_harga) }}</h6>
                    </div>

                </div>
                <p class="mt-2">Silahkan Cek Detail Pembayaran di Email anda : {{ auth('')->user()->email }}</p>


                <div class="row p-3">
                    {{-- <form action="{{ route('hapuspesanan', $pesanans) }}" method="POST" class="">
                        @csrf
                        @method('DELETE') --}}
                    <a class="btn text-white ml-auto" style="background-color: #008f2b;"
                        href=" https://api.whatsapp.com/send?phone=6285760557702&text= Hai Admin  Saya Ingin Menanyakan Informasi barang saya dengan data : %0AKode Pesanan : {{ $item->kodepesanan }}%0ANama : {{ $item->nama_penerima }} ">
                        <i class="fa-brands fa-whatsapp mr-1"></i>Hubungi
                        Admin
                    </a>
                    {{-- <button class="btn btn-danger " type="submit">Hapus</button> --}}
                    </form>
                </div>
            </div>
        @endforeach
    </div>
