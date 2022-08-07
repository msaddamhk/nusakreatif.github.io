@extends('layout.maindetailandroid')
@section('body')
    {{-- mobile --}}
    <div class="container p-4 d-block d-sm-none d-none d-sm-block d-md-none" style="margin-top: 17px;margin-bottom: -50px">
        {{-- <h3 style="color: #242231; font-weight: 700; font-size: 20px ;">
            Detail Pesanan
        </h3>
        <hr> --}}
        <div class="card p-4 mb-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="" class="border-0 text">Nama Barang</th>
                        <th scope="" class="border-0 text">Harga</th>
                        {{-- <th scope="" class=" border-0 text">Jumlah</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php $totalharga = 0 @endphp
                    @foreach ($keranjang as $keranjangs)
                        <tr>
                            <td scope="" class="text1">{{ $keranjangs->barang->judul }}</td>
                            <td class="text1">
                                Rp. {{ number_format($keranjangs->getTotalHarga()) }} x {{ $keranjangs->jumblah }}</td>
                            {{-- <td class=" ">{{ $keranjangs->jumblah }}</td> --}}
                        </tr>
                        @php $totalharga +=  $keranjangs->getTotalHarga()  @endphp
                    @endforeach
                </tbody>

            </table>
            <h6 class="text">Total Harga Barang : <b>Rp. {{ number_format($totalharga) }} </b>
            </h6>
            {{-- <p style="font-size: 13px" class="text-black">catatan : Total Harga Belum Termasuk Biaya Jasa Pengiriman
            </p> --}}
        </div>
    </div>


    @if (request('token'))
        <script type="text/javascript">
            // var payButton = document.getElementById('bayar-button');
            // payButton.addEventListener('click', function() {
            // });
            // window.addEventListener('load', function() {
            //     window.snap.pay("{{ request('token') }}");
            // });
            setTimeout(() => {
                window.snap.pay("{{ request('token') }}");
            }, 1000);
        </script>
    @endif

    <style>
        .text {
            font-size: 13px;
        }

        .text1 {
            font-size: 12px;
        }
    </style>
    {{-- akhir mobile --}}



    <div class="container  p-4 d-none d-md-block d-lg-nonex" style="margin-top: 120px">
        <h3 style="color: #242231; font-weight: 700; font-size: 20px;  ;">
            Detail Pesanan
        </h3>
        <hr>
        <div class="card p-5 mb-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="border-0">Nama Barang</th>
                        <th scope="col" class="border-0 ">Harga</th>
                        <th scope="col" class=" border-0">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalharga = 0 @endphp
                    @foreach ($keranjang as $keranjangs)
                        <tr>
                            <th scope="row" class=" ">{{ $keranjangs->barang->judul }}</th>
                            <td class=" ">
                                Rp. {{ number_format($keranjangs->getTotalHarga()) }}</td>
                            <td class=" ">{{ $keranjangs->jumblah }}</td>
                        </tr>
                        @php $totalharga +=  $keranjangs->getTotalHarga()  @endphp
                    @endforeach
                </tbody>

            </table>
            <h6>Total Harga Barang : <b>Rp. {{ number_format($totalharga) }} </b>
            </h6>
            <p style="font-size: 13px" class="text-black">catatan : Total Harga Belum Termasuk Biaya Jasa Pengiriman
            </p>

        </div>
    </div>

    <!-- detail -->
    <div class="container p-4 mb-3">
        {{-- <h3 style="color: #242231; font-weight: 700; font-size: 20px;  ;">
            Data
        </h3> --}}
        <hr>

        <form action="{{ route('pesananandroid1', ['user_id' => $user->id]) }}" method="post">
            @csrf

            <input type="hidden" class="form-control" name="harga" id="harga" value="{{ $totalharga }}">

            <div class="form-group">
                <label for="alamat" class="text">Nama</label>
                <input type="text" value="{{ $user->name }}" class="mb-2 form-control" name="nama" id="nama"
                    aria-describedby="emailHelp" required placeholder="Silahkan Masukkan Nama">
                {{-- <small style="font-size: 13px" for="alamat">Silahkan ubah Nama jika Nama penerima berbeda</small> --}}
            </div>
            <div class="form-group">
                <label for="alamat" class="text">Detail Alamat</label>
                <input type="text" value="{{ $user->alamat }}" class="form-control" name="alamat" id="alamat"
                    aria-describedby="emailHelp" required placeholder="Silahkan Masukkan Alamat">
            </div>

            <div class="form-group">
                <label for="notelepon" class="text">No Telepon</label>
                <input type="number" class="form-control" name="notelepon" id="notelepon" aria-describedby="emailHelp"
                    required placeholder="Silahkan Masukkan No HP">
            </div>

            <div class="row">
                <div class="form-group col-6 col-md-6 col-lg-6">
                    <label for="provinsi" class="text">Provinsi</label>
                    <select class="mb-2 form-control select" id="provinsi" name="provinsi" required>
                        <option value="" holder>Pilih Provinsi</option>
                        @foreach ($provinsi as $item)
                            <option value="{{ $item->id }},{{ $item->province }}" placeholder="Pilih Kota">
                                {{ $item->province }}
                            </option>
                        @endforeach
                    </select>
                    {{-- <small style="font-size: 13px" for="alamat">Silahkan isi data Provinsi dan Kabupaten untuk menghitung
                        biaya pengiriman</small> --}}
                </div>

                <div class="form-group col-6 col-md-6 col-lg-6">
                    <label for="destination" class="text">Kabupaten/Kota</label>
                    <select class="mb-2 form-control select" id="destination" name="destination" required>
                        <option value="" holder>Pilih Kota/Kabupaten</option>
                    </select>
                </div>


            </div>

            <div class="form-group">
                <label for="" class="text">Kurir</label>
                <select class="mb-2 form-control select" id="courier" name="courier" required>
                    <option value="" holder>Silahkan Pilih Kurir</option>
                    <option value="jne" holder>JNE</option>
                    <option value="tiki" holder>TIKI</option>
                    <option value="pos" holder>POS Indonesia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="opsi_pengiriman" class="text">Opsi Pengiriman</label>
                <select class="mb-2 form-control select" id="opsi_pengiriman" name="opsi_pengiriman" required>
                </select>
                {{-- <p style="font-size: 13px" class="text-black">Total Biaya Pengiriman akan ditambah secara otomatis
                    dengan total harga Barang </p> --}}
            </div>


            <style>
                .select {
                    opacity: .9;
                    font-size: 13px;
                }

                input::placeholder {
                    /* font-weight: bold; */
                    opacity: .4;
                    font-size: 13px;
                }
            </style>





            <script>
                // new AutoNumeric('#opsi_pengiriman', {
                //     decimalPlaces: '0',
                //     decimalCharacter: ',',
                //     diigitGroupSeparator: '.'
                // })

                // const rupiah = (number) => {
                //     return new Intl.NumberFormat("id-ID", {
                //         style: "currency",
                //         currency: "IDR"
                //     }).format(number);
                // }
                function formatNumber(num) {
                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                }

                let tujuan = document.getElementById('destination');
                let courier = document.getElementById('courier');
                courier.addEventListener('change', (e) => {
                    let destination = tujuan.value;
                    let courier = e.target.value;
                    let weight = "{{ $berat }}";
                    $.ajax({
                        url: '/api/cekOngkir',
                        type: 'get',
                        dataType: 'json',
                        data: {
                            destination,
                            courier,
                            weight
                        },
                        success: function(result) {
                            const opsi_pengiriman = document.getElementById('opsi_pengiriman');
                            opsi_pengiriman.innerHTML = '';
                            result.costs.forEach(element => {
                                let option = document.createElement('option');
                                option.value =
                                    `${element.service},${element.cost[0].etd},${element.cost[0].value}`;
                                option.text =
                                    `${element.service} | Etd : ${element.cost[0].etd} Hari | Harga : Rp. ${formatNumber(element.cost[0].value )}`;
                                opsi_pengiriman.append(option)
                            });
                        }
                    });
                })
            </script>

            <button class="btn  my-2 my-sm-0 text-white" id="pay-button" style="background-color: #6C5ECF; font-size:14px"
                type="submit">Bayar
                Sekarang</button>
            {{-- <script type="text/javascript">
                For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function() {
                    Trigger snap popup.@TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                    window.snap.pay('{{ $paymentUrl }}');
                    customer will be redirected after completing payment pop - up
                });
            </script> --}}
        </form>


    </div>
@endsection


@section('javascript')
    {{-- script --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="provinsi"]').on('change', function() {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="destination"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="destination"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="destination"]').empty();
                }
            });
        });
    </script>
@endsection
