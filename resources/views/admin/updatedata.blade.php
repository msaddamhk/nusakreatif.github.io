@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-5">
        <div class=" card container p-4">
            <form action="{{ url('/update/' . $barangs->id) }}" method="POST" class="p-4" enctype="multipart/form-data">
                @csrf

                <h4 style="color: #242231">
                    <b>Update Produk</b>
                </h4>
                <hr>

                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group ">
                    <label for="judul">Nama barang</label>
                    <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp"
                        placeholder="" value="{{ $barangs->judul }}">

                </div>
                <label>Kategori</label>
                <select name="kategori_id" class="form-control" id="kategori_id">
                    @foreach ($kategori as $item)
                        @if (old('kategori_id', $barangs->kategori_id) == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->nama }} </option>
                        @else
                            <option value="{{ $item->id }} ">{{ $item->nama }} </option>
                        @endif
                        {{-- <option value="{{ $item->id }} ">{{ $item->nama }} </option> --}}
                    @endforeach
                </select>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input value="{{ $barangs->harga }}" type=" number" name="harga" class="form-control" id="harga"
                        placeholder="">
                </div>

                <div class="form-group">
                    <label for="berat">berat</label>
                    <input type="number" name="berat" value="{{ $barangs->berat }}" class="form-control" id="berat"
                        placeholder="">
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" value="{{ $barangs->stock }}" name="stock" class="form-control" id="stock"
                        placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <input value="{{ $barangs->deskripsi }}" id="x" type="hidden" name="deskripsi">
                    <trix-editor input="x"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="gambar">Tambahkan Foto</label>
                    <input type="file" value="{{ $barangs->gambar }}" name="gambar" class="form-control-file"
                        id="gambar">
                    {{-- <input type="file" value="{{ $barangs->gambar }}" name="gambar" class="form-control-file "
                        id="gambar" required> --}}
                    <label for="gambar">Masukkan Foto dengan format JPG, PNG, JPEG | Max ukuran foto 4 MB</label>
                </div>

                <div class="">
                    <button class="btn " style="background-color: #6C5ECF; color: rgb(255, 255, 255);"
                        type="submit">Update
                        Data</button>
                </div>

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


        </form>
    </div>
    </div>
@endsection
