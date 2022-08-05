@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-5">
        <div class=" card container">
            <form action="{{ url('updatetransaksi/' . $transaksi->id) }}" method="POST" class="p-4"
                enctype="multipart/form-data">
                @csrf
                <h5 class="mt-3" style="color: #242231">
                    Update Data Transaksi
                </h5>
                <hr class="mb-4">
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group ">
                    {{-- <label for="nama">Nama barang</label> --}}

                    {{-- <select class="mb-2 form-control" name="transaksi" id="transaksi" required>
                        <option value="{{ $transaksi->transaction_status }}">{{ $transaksi->transaction_status }}
                        </option>
                        <option value="">-------------------------------------------------</option>
                        <option value="PENDING">PENDING</option>
                        <option>PEMBAYARAN BERHASIL | BARANG SEDANG DIKEMAS</option>
                    </select> --}}

                    <input type="text" name="resi" class="form-control" id="nama" placeholder="Masukkan Resi"
                        value="" required>
                </div>
                <div class="pt-1 mb-4">
                    <button class="btn " style="background-color: #6C5ECF; color: rgb(255, 255, 255);"
                        type="submit">Update Data</button>
                </div>
            </form>



        </div>


    </div>
@endsection
