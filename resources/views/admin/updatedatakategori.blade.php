@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-5">
        <div class=" card container">
            <form action="{{ url('updatekategori/' . $model->id) }}" method="POST" class="p-4"
                enctype="multipart/form-data">
                <h4 style="color: #242231">
                    <b>Update Kategori</b>
                </h4>
                <hr>
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group ">
                    <label for="nama">Nama barang</label>
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp"
                        placeholder="" value="{{ $model->nama }}" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="gambar">Tambahkan Foto</label>
                    <input type="file" name="gambar" class="form-control-file mb-2" id="gambar" required>
                    <p for="gambar">Masukkan Foto dengan format JPG, PNG, JPEG | Max ukuran foto 4 MB</p>
                </div>

                <div class="pt-1 mb-4">
                    <button class="btn " style="background-color: #6C5ECF; color: rgb(255, 255, 255);"
                        type="submit">Kirim
                        data</button>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
