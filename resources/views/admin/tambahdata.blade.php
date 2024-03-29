@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-5">
        <div class=" card container p-4">
            <form action="{{ url('/admin') }}" method="POST" class="p-4" enctype="multipart/form-data">
                @csrf

                <h4 style="color: #242231;">
                    <b>Tambah Produk</b>
                </h4>
                <hr>

                <div class="form-group ">
                    <label for="judul">Nama barang</label>
                    <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp"
                        placeholder="Masukkan nama barang" required>
                    {{-- <div class="valid-feedback">Example invalid feedback text</div> --}}
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>

                <label>Kategori</label>
                <select class="mb-2 form-control select" name="kategori_id" id="kategori_id" required>
                    <option value="" selected disabled> Masukkan nama kategori </option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }} </option>
                    @endforeach
                </select>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga"
                        placeholder="Masukkan harga barang" required>
                </div>

                <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="number" name="berat" class="form-control" id="berat"
                        placeholder="Masukkan berat barang dalam besaran Gram" required>
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" class="form-control" id="stock"
                        placeholder="Masukkan stok barang" required>
                </div>

                {{-- <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <input id="x" type="hidden" name="deskripsi">
                    <trix-editor input="x" placeholder="Masukkan deskripsi barang" required></trix-editor>
                </div> --}}


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Masukkan deskripsi barang"></textarea>
                </div>

                {{-- <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="">
              </div> --}}

                <div class="form-group">
                    <label for="gambar">Tambahkan Foto</label>
                    <input type="file" name="gambar" class="form-control-file" id="gambar" required>
                </div>
                <label for="gambar">Masukkan Foto dengan format JPG, PNG, JPEG | Max ukuran foto 4 MB</label>

                <div class="pt-1 mb-4">
                    <button class="btn " style="background-color: #6C5ECF; color: rgb(255, 255, 255);"
                        type="submit">Tambahkan
                        Data</button>
                </div>
                {{-- </div> --}}

                <style>
                    trix-editor:empty:not(:focus)::before {
                        /* opacity: .4; */
                        font-size: 13px;
                    }


                    .select {
                        opacity: .8;
                        font-size: 13px;
                    }

                    input::placeholder {
                        /* font-weight: bold; */
                        opacity: .4;
                        font-size: 13px;
                    }
                </style>

        </div>
    </div>
@endsection
