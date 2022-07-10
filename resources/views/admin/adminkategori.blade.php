@extends('layout.admin.mainutama2')

@section('body')
    <!-- navbar -->
    <section class="kategori-produk ">
        <div class="">
            <div data-aos="fade-up">
                <h5 style="font-size: 28px; color:#242231; font-weight: 700;">Kelola Kategori</h5>
                <hr>
            </div>
            <a href="{{ url('/kategori/create') }}" type="button" class="btn text-white " style="background-color: #6C5ECF;">
                + Tambahkan Kategori
            </a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($kategoris as $kategori)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td> {{ $kategori->nama }}</td>
                            <td>
                                <a href="{{ route('kategori.edit', $kategori->id) }}"
                                    class="text-produk1 btn btn-info text-white mr-2 btn-sm">
                                    Update data
                                </a>
                                <a href="hapuskategori/{{ $kategori->id }}" onclick="clicked(event)"
                                    class="text-produk1 text-white btn btn-danger btn-sm">
                                    Hapus Data
                                </a>

                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="row  mt-4 ">


                @foreach ($kategoris as $kategori)
                    <div class="col-6 col-md-4 col-lg-3 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <a href="" class="komponen-produk d-block">
                            <div class="produk">
                                <div class="foto-produk"
                                    style="background-image: url('{{ asset('storage/produk/kategori/' . $kategori->gambar) }}');">
                                    <div class="text-produk2 text-danger">
                                        {{ $kategori->nama }}
                                    </div>
                                </div>

                            </div>
                            <a href="{{ route('kategori.edit', $kategori->id) }}"
                                class="text-produk1 btn btn-info text-white mr-2 btn-sm">
                                Update data
                            </a>
                            <a href="hapuskategori/{{ $kategori->id }}"
                                class="text-produk1 text-white btn btn-danger btn-sm">
                                Hapus Data
                            </a>

                        </a>
                    </div>
                @endforeach
                <style>
                    .text-produk2 {

                        padding: 10px;
                        left: 0;
                        bottom: 0;
                        width: 100%;
                        color: white;
                    }
                </style>
                 end row 
            </div> --}}
            <div class="container">
                <div class="" data-aos="fade-up"> {{ $kategoris->links() }}</div>
            </div>
            <script>
                function clicked(e) {
                    if (!confirm('Apakah Anda Ingin Menghapus Data?')) {
                        e.preventDefault();
                    }
                }
            </script>

            {{-- <img src="foto/ft16.png" alt=""> --}}
        </div>
    </section>
    <!-- ak kategori -->
@endsection
