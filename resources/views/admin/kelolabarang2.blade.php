@section('body')
    <!-- navbar -->

    <div class="container mb-5" style="margin-top:130px">
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
