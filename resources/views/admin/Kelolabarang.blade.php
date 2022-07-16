@extends('layout.admin.mainutama2')

@section('body')
    <!-- navbar -->


    <div class="keranjang d-block d-sm-none">
        <div class="">

            <h1 class="m-0" style="font-size: 40px;color:#242231"> <i class="fas fa-exclamation-triangle"></i></h1>
            <h6 class="m-0 mt-2"> <b>Mohon maaf layanan ini tidak tersedia</b> </h6>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn1 mt-3  border-0 my-2 my-sm-0" type="submit">
                    <i class="fas fa-sign-out-alt p-1"></i> Keluar
                </button>
            </form>
        </div>
        <style>
            .keranjang {
                text-align: center;
                margin-top: 75%;
            }

            .btn1 {
                background-color: #6C5ECF;
                color: rgb(255, 255, 255)
            }
        </style>
    </div>














    <div class="mb-5 d-none d-sm-block">
        <h5 style="font-size: 28px; color: #242231; font-weight: 700;">Kelola Produk</h5>
        <hr>
        <div class="row">
            <form>
                <a href="{{ url('/admin/create') }}" type="button" class="btn text-white mt-2 mb-4 "
                    style="background-color: #6C5ECF;">
                    + Tambahkan Produk
                </a>
            </form>

            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col border">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($barangs as $barang)
                        <tr>
                            <th scope="row"> {{ $i }}</th>
                            <td>{{ $barang->judul }}</td>
                            <td>
                                <a href="{{ route('barangs.edit', $barang->id) }}"
                                    class="text-produk btn btn-info text-white d-inline m-2 ">
                                    Update
                                </a>
                                <a href="hapus/{{ $barang->id }}" onclick="clicked(event)"
                                    class="text-produk1 text-white  btn btn-danger d-inline">
                                    Hapus
                                </a>
                                <a href="{{ route('showbarang', $barang->id) }}"
                                    class="text-produk1 text-white m-2 btn btn-warning d-inline">
                                    Detail
                                </a>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>



            {{-- @foreach ($barangs as $barang)
                <div class="col-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="/pesan/{{ $barang->id }}" class="komponen-produk d-block">
                        <div class="produk">
                            <div class="foto-produk"
                                style="background-image: url('{{ asset('storage/produk/' . $barang->gambar) }}');">
                            </div>
                        </div>

                        <a href="{{ route('barangs.edit', $barang->id) }}"
                            class="text-produk btn btn-info text-white d-inline m-2 ">
                            Update data
                        </a>
                        <a href="hapus/{{ $barang->id }}" class="text-produk1 text-white btn btn-danger d-inline">
                            Hapus Data
                        </a>
                    </a>
                </div>
            @endforeach --}}


            <div class="container">
                <div class="" data-aos="fade-up"> {{ $barangs->links() }}</div>
            </div>

            <style>
                .komponen-produk {
                    margin-bottom: 20px;
                }

                .foto-produk {
                    width: 100%;
                    height: 150px;
                    border-radius: 8px;
                    background-size: cover;
                }

                .text-produk {
                    font-size: 14px;
                    margin-top: 12px;
                    color: black;
                }

                .text-produk1 {
                    font-weight: 600;
                    font-size: 14px;
                    color: #275062;
                }

                .komponen-produk:hover {
                    text-decoration: none;
                }

                trix-toolbar [data-trix-button-group="file-tools"] {
                    display: none;
                }
            </style>
        </div>
        <script>
            function clicked(e) {
                if (!confirm('Apakah Anda Ingin Menghapus Data?')) {
                    e.preventDefault();
                }
            }
        </script>
    </div>
@endsection
