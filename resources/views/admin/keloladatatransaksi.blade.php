@extends('layout.admin.mainutama2')

@section('body')
    <!-- navbar -->

    <div class="mb-5">

        <div class="row">
            <div class="col-md-6">
                <h5 style="font-size: 24px; color: #242231; font-weight: 700;">Kelola Data Transaksi</h5>
            </div>

            <form action="{{ route('kelolapesanan') }}" method="GET" class="col-md-6">
                <div class="row">
                    <div class="col-md-9">
                        <input type="search" value="{{ request('cari') }}" name="cari" id="cari"
                            class="form-control" placeholder="Silahkan cari data pesanan">
                        {{-- <input class="form-control-borderless col input-lg p-2"
                            placeholder="Silahkan cari Produk yang ingin Anda beli" name="search" type="search"
                            value="{{ request('search') }}" /> --}}
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary">Cari Data</button>
                    </div>
                </div>
            </form>

        </div>
        <hr>
        <div class="row">
            <form>
                {{-- <a href="{{ url('/kelolaadmin/create ') }}" type="button" class="btn btn-primary mt-2 mb-4 "
                    style="background-color: #275062;">
                    + Tambahkan Admin
                </a> --}}
            </form>

            <table class="table p-3 ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        {{-- <th scope="col">Alamat</th>
                        <th scope="col">No Telepon</th> --}}
                        <th scope="col">Kode Pesanan</th>
                        <th scope="col">Tanggal Pesanan</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($transaksi as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->nama_penerima }}</td>
                            {{-- <td>{{ $item->alamat }}</td>
                            <td>{{ $item->notlp }}</td> --}}
                            <td>NUSAKREATIF-{{ $item->id }}</td>
                            <td>{{ $item->created_at->diffForhumans() }}</td>
                            <td value="">{{ $item->transaction_status }}</td>
                            <td>

                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Aksi
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{ route('showpesanan', $item->id) }}">Detail</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Konfirmasi</a></li>
                                        <li><a class="dropdown-item" href="{{ route('updatepesanan', $item->id) }}">Update
                                                Status Pembayaran</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach


                </tbody>
            </table>

            {{-- <div class="" data-aos="fade-up"> {{ $users->links() }}</div> --}}

        </div>
    </div>
@endsection
