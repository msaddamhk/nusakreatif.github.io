@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-5">
        <div class=" card container">
            <form action="{{ url('/kategori') }}" method="POST" class="p-4" enctype="multipart/form-data">
                @csrf
                <h4 style="color: #242231">
                    Tambah Kategori
                </h4>
                <hr>
                <div class="form-group ">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp"
                        placeholder="Masukkan nama Kategori" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>

                <div class="form-group">
                    <label for="gambar">Tambahkan Foto</label>
                    <input type="file" name="gambar" class="form-control-file mb-2" id="gambar" required>
                    <p for="gambar">Masukkan Foto dengan format JPG, PNG, JPEG | Max ukuran foto 4 MB</p>
                </div>

                <div class="">
                    <button class="btn " style="background-color: #6C5ECF; color: rgb(255, 255, 255);"
                        type="submit">Tambah
                        Data Kategori</button>
                </div>
        </div>

        </form>
    </div>
    </div>
@endsection
